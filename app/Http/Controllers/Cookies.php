<?php

namespace App\Http\Controllers;

use App\Models\accepted_cookie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Cookies extends Controller
{
    public function check_ip_exist(Request $request)
    {
        $ip_client = $request->client_ip;
        
        $response_ip = minify_clientIp($ip_client);

        if($response_ip === false)
            return (json_encode(['success' => false, 'sign' => false, 'message' => 'Invalid IP address!'])); 
        
        $client_data = $this->check_ip($response_ip);

        if(!$client_data['already']) { 
            $this->save_data($response_ip); 
            return (json_encode(['success' => true, 'sign' => $client_data['sign'], 'message' => 'You have not signed our terms and policies']));
        }
        
        return (json_encode(['success' => true, 'sign' => $client_data['sign'], 'message' => '']));
    }

    public function check_ip_sign(Request $request)
    {
        $ip_client = $request->client_ip;
        
        $response_ip = minify_clientIp($ip_client);

        if($response_ip === false)
            return (json_encode(['success' => false, 'sign' => false, 'message' => 'Invalid IP address!']));

        $client_data = $this->check_ip($response_ip, $sign = true);

        return (json_encode(['success' => true, 'sign' => $client_data, 'message' => '']));
    }

    private function save_data($client_ip)
    {
        $client_ips = new accepted_cookie();
        $client_ips->ip_client = encrypt_data($client_ip);
        $client_ips->save();
    }

    private function check_ip($ip, $sign = false)
    {
        $ip_client = $ip;
        $info_client = array(
            'already' => false,
            'sign' => false
        );

        $client_ips = new accepted_cookie();
        $client_ips_list = $client_ips->all();

        for ($i=0; $i < sizeof($client_ips_list) ; $i++) 
        { 
            $data = decrypt_data($client_ips_list[$i]['ip_client']);
            
            if($data == $ip_client) 
            {
                if($sign == true) 
                {
                    $update_sign = DB::table('accepted_cookies')->where('ip_client', $client_ips_list[$i]['ip_client'])->update(['sign_client' => true]);
                    return $update_sign;
                } else 
                {
                    $info_client = array(
                        'already' => true,
                        'sign' => $client_ips_list[$i]['sign_client']
                    );
                }

                break;
            }
        }

        return $info_client;
    }
}
