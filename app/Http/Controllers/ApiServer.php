<?php

namespace App\Http\Controllers;

use App\Mail\emailVerify;
use App\Models\game_account;
use App\Models\latest_login;
use App\Models\user_account;
use App\Models\verify_email_token;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Elliptic\EC;
use Illuminate\Support\Facades\Mail;
use kornrunner\Keccak;

define('MESSAGE_TO_SIGN', implode("\n", ["I accept that I have carefully read the terms of use and policies (https://whitepaper.getschiffy.com/faqs/terms-of-use) of this application.","Sign!"]));

class ApiServer extends Controller
{
	public function connect_wallet(Request $request)
	{
		$newAccount_created = false;

		try 
		{
			$addressWallet = preg_replace('/\s+/', '',strval($request->address));
			$signature = preg_replace('/\s+/', '',strval($request->signed));
			$ipUser = minify_clientIp($request->ipUser);
	
			if(!$this->verifySignature(MESSAGE_TO_SIGN, $signature, $addressWallet) || !$ipUser) {
				return json_encode(['message' => 'The server could not validate your account. Try again.', 'error' => true]);
			}
		} catch (\Throwable $th) 
		{
			$date = date('Y_m_d');
			
			error_log("An error has occurred in the connect wallet validations.\nError:\n{$th}", 0, "connect_wallet_{$date}_error");

			return json_encode(['message' => 'An unexpected error has occurred while connecting to the server. Try again later.', 'error' => true]);
		}

		if(!$this->userExists($addressWallet)) 
		{
			if(!$this->createUser($addressWallet, $signature, $ipUser))
				return json_encode(['message' => 'There was an error creating your account, try again later', 'error' => true]);
			
			$newAccount_created = true;
		}

		return ($this->loginUser($addressWallet, $signature, $ipUser, $newAccount_created));
	}

	public function connect_game(Request $request)
	{
		$gameState = $this-> userConnected($request->address, $request->signed, $request->ipUser);

		if($gameState['error']) {
			return json_encode($gameState);
		}

		$gameLogin = $this->createOrlogin_GameAccount($gameState['user_id']);

		if($gameLogin['error']) {
			return json_encode($gameLogin);
		}

		return $gameLogin;
	}

	public function add_game_email(Request $request)
	{
		$gameState = $this-> userConnected($request->address, $request->signed, $request->ipUser);

		if($gameState['error']) {
			return json_encode($gameState);
		}

		$accountId = $gameState['user_id'];
		$game_email = $request->newEmail;
		$game_email = preg_replace('/\s+/', '', $game_email);

		if(!verify_email($game_email)['approved']) {
			return json_encode(['message' => 'Invalid email', 'error' => true]);
		}

		$emailExists = game_account::where('game_email', '=', $game_email)->first();

		if($emailExists != null) {
			return json_encode(['message' => 'The email account is in use.', 'error' => true]);
		}

		$updateGame_account = game_account::where('user_id', '=', $accountId)->update(['game_email' => $game_email, 'game_verified' => 0]);

		if($updateGame_account == null) {
			return json_encode(['message' => 'An error occurred while updating the email.', 'error' => true]);
		}

		verify_email_token::where('verify_email', '=', $game_email)->delete();

		$tokenToSend = $this->createToken($game_email);

		if($tokenToSend) {
			$sendMail = $this->sendEmail($game_email, $tokenToSend);

			if(!$sendMail['sent']) {
				$date = date('Y_m_d');

				error_log("There was an error sending the verification email.\nError:\n{$sendMail['error']}", 0, "sendEmail_{$date}_error");
			}
		}

		return ['message' => 'We have sent a verification code to your email', 'error' => false, 'email_updated' => $game_email];
	}

	public function sendAgain_verifyEmail(Request $request)
	{
		$gameState = $this-> userConnected($request->address, $request->signed, $request->ipUser);

		if($gameState['error']) {
			return json_encode($gameState);
		}

		$accountId = $gameState['user_id'];
		$emailToVerify = game_account::select('game_email')->where('user_id', '=', $accountId)->where('game_verified', '=', 0)->first();

		if($emailToVerify == null) {
			return json_encode(['message' => "You don't have any pending emails to verify", 'error' => true]);
		}

		$currentToken = verify_email_token::select('verify_id','created_at')->where('verify_email', '=', $emailToVerify['game_email'])->where('verify_game_login', '=', 0)->first();

		if($currentToken != null) 
		{
			$remaing_date = 3;
			$currentDate = strtotime(date('Y-m-d H:i:s', time()));
			$oldDate = (strtotime($currentToken['created_at'])+($remaing_date*60));

			if($currentDate < $oldDate) {
				$calcualte_date = round((($oldDate - $currentDate) / 60), 0);
				$calcualte_date = ($calcualte_date < 0 ? 0:$calcualte_date);

				return ['message' => "You can request email verification in {$calcualte_date} minutes.", 'error' => true];
			}

			verify_email_token::where('verify_id', '=', $currentToken['verify_id'])->where('verify_game_login', '=', 0)->delete();
		}

		$tokenToSend = $this->createToken($emailToVerify['game_email']);

		if($tokenToSend) 
		{
			$sendMail = $this->sendEmail($emailToVerify['game_email'], $tokenToSend);

			if(!$sendMail['sent']) {
				$date = date('Y_m_d');

				error_log("There was an error sending the verification email.\nError:\n{$sendMail['error']}", 0, "sendEmail_{$date}_error");
			}
		}

		return ['message' => 'We have sent a verification code to your email', 'error' => false, 'email_sent' => $emailToVerify['game_email']];
	}

	// SubFunctions
	protected function sendEmail($emailUpdated, $newToken) {
		try {
			Mail::to($emailUpdated)->send(new emailVerify('Verify game account email', $newToken));
			return ['error'=> '', 'sent' => true];
		} catch (\Throwable $th) {
			return ['error'=> $th, 'sent' => false];
		}
	}

	protected function createToken($emailToken)
	{
		do {
			$token = random_int(100000, 999999);
		} while (verify_email_token::where('verify_token', '=', $token)->first());

		$createToken = verify_email_token::create(['verify_token' => $token, 'verify_email' => $emailToken]);

		return ($createToken ? $token:false);
	}

	protected function userConnected($address, $signed, $ip_user)
	{
		try 
		{
			$addressWallet = preg_replace('/\s+/', '',strval($address));
			$signature = preg_replace('/\s+/', '',strval($signed));
			$ipUser = minify_clientIp($ip_user);
	
			if(!$this->verifySignature(MESSAGE_TO_SIGN, $signature, $addressWallet) || !$ipUser) {
				return ['message' => 'The server could not validate your account. Try again.', 'error' => true];
			}
		} catch (\Throwable $th) 
		{
			$date = date('Y_m_d');
			
			error_log("An error has occurred in the connect game validations.\nError:\n{$th}", 0, "connect_game_{$date}_error");

			return ['message' => 'An unexpected error has occurred while connecting to the server. Try again later.', 'error' => true];
		}

		$userExists_info = $this->userExists($addressWallet, true);

		if(!$userExists_info) {
			return ['message' => 'We have an error checking your account. Please sign in again', 'error' => true];
		} 

		$selectRecord = latest_login::select('last_device', 'last_nonce')->where('last_id', '=', $userExists_info['last_login'])->first();

		if($selectRecord == null) {
			return ['message' => 'We have an error checking your account. Please sign in again', 'error' => true];
		}
		
		if($selectRecord['last_device'] != $ipUser || $selectRecord['last_nonce'] != $signature) {
			return ['message' => "Your session has expired. Sign in again.", 'error' => true];
		}

		return ['message' => '', 'error' => false, 'user_id' => $userExists_info['userId']];
	}

	protected function createOrlogin_GameAccount($user_id)
	{
		$selectGame = game_account::select('game_email', 'game_gold', 'game_verified', 'last_login_id')->where('user_id', '=', $user_id)->first();

		if($selectGame != null) {
			$selectRecord = latest_login::select('created_at as registered', 'updated_at as last_login', 'last_device')->where('last_id', '=', $selectGame['last_login_id'])->first();
		}

		if($selectGame != null && $selectRecord != null) {
			return ['error' => false, 'data_game' => $selectGame, 'record_game' => $selectRecord];
		}

		DB::beginTransaction();
		try 
		{
			// Create Record
			$loginRecord = new latest_login();
			$loginRecord->saveOrFail();

			// Create Game Account
			$newGame_account = new game_account();
			$newGame_account->user_id = $user_id;
			$newGame_account->last_login_id = $loginRecord->last_id;
			$newGame_account->saveOrFail();

			DB::commit();
		} catch (\Exception $e) {
			DB::rollback();
			$date = date('Y_m_d');

			error_log("There was an Exception creating the Game account.\Exception:\n{$e}", 0, "createOrLogin_GameAccount_{$date}_error");

			return ['message' => 'An error has occurred while checking your account. Try again later.', 'error' => true];
		}

		$dataGame = ['game_email' => $newGame_account->game_email, 'game_gold' => $newGame_account->game_gold, 'game_verified' => $newGame_account->game_verified];

		$recordGame = ['registered' => $loginRecord->created_at, 'last_login' => $loginRecord->updated_at, 'last_device' => $loginRecord->last_device];

		return ['error' => false, 'data_game' => $dataGame, 'record_game' => $recordGame];
	}
	
	protected function userExists($address, $returnUser = false)
	{
		$accountFound = false;
		$accountAddress = $address;

		$userAccounts = new user_account();
		$accounts_list = $userAccounts->all();

		for ($i=0; $i < sizeof($accounts_list) ; $i++) 
		{ 
			$addressDecrypt = decrypt_data($accounts_list[$i]['user_address']);
			
			if($addressDecrypt == $accountAddress) 
			{
				if($returnUser) {
					return ['userId' => $accounts_list[$i]['user_id'], 'last_login' => $accounts_list[$i]['last_login_id']];
				}

				$accountFound = true;
				break;
			}
		}

		return $accountFound;
	}

	protected function loginUser($address, $signature, $ip_user, $user_created)
	{
		$userInfo = $this->userExists($address, true);
		// $userID = $userInfo['userId'];
		$userLastID = $userInfo['last_login'];
		
		$selectRecord = latest_login::select('created_at as registered', 'updated_at as last_login', 'last_device')->where('last_id', '=', $userLastID)->first();
		$updateRecord = latest_login::where('last_id', '=', $userLastID)->update(['last_device' => $ip_user, 'last_nonce' => $signature]);

		if(!$updateRecord && !$user_created) {
			return json_encode(['message' => 'An error occurred while trying to login. Try again later.', 'error' => true]);
		}

		return json_encode(['message' => 'You have logged into your account.', 'login_success' => true, 'data_login' => $selectRecord, 'error' => false]); 
	}

	protected function createUser($address, $signature, $ip_user):bool
	{
		DB::beginTransaction();

		try 
		{
			// Create Record
			$loginRecord = new latest_login();
			$loginRecord->last_device = $ip_user;
			$loginRecord->last_nonce = $signature;
			$loginRecord->saveOrFail();

			// Create User
			$newUser = new user_account();
			$newUser->user_address = encrypt_data($address);
			$newUser->last_login_id = $loginRecord->last_id;
			$newUser->saveOrFail();

			DB::commit();
		} catch (\Exception $e) {
			DB::rollback();
			$date = date('Y_m_d');

			error_log("There was an Exception creating the account.\Exception:\n{$e}", 0, "createUser_{$date}_error");

			return false;
		}

		return true;
	}

	protected function verifySignature($message, $signature, $address):bool
	{
		$messageLength = strlen($message);
		
		$hash = Keccak::hash("\x19Ethereum Signed Message:\n{$messageLength}{$message}", 256);
		$sign = [
			"r" => substr($signature, 2, 64),
			"s" => substr($signature, 66, 64)
		];

		$recId  = ord(hex2bin(substr($signature, 130, 2))) - 27;

		if ($recId != ($recId & 1)) {
			return false;
		}

		$publicKey = (new EC('secp256k1'))->recoverPubKey($hash, $sign, $recId);

		return $this->pubKeyToAddress($publicKey) === Str::lower($address);
	}

	protected function pubKeyToAddress($publicKey): string {
		return "0x" . substr(Keccak::hash(substr(hex2bin($publicKey->encode("hex")), 1), 256), 24);
	}
}
