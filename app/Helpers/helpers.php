<?php

use Illuminate\Support\Facades\Crypt;

function encrypt_data($data) {
  return (Crypt::encryptString($data));
}

function decrypt_data($data) {
  return (Crypt::decryptString($data));
}

function verify_email($email_resquest) 
{
  define('MIN_CHARACTER_EMAIL', 8);

  $input_valid = array(
    'approved' => false,
    'message' => 'Invalid Email'
  );

  $email_output = preg_replace('/\s+/', '', $email_resquest); 

  if(empty($email_resquest) || strlen(strval($email_resquest)) < MIN_CHARACTER_EMAIL || gettype($email_resquest) != 'string') { 
    return $input_valid;
  }
  
  $email_output = filter_var($email_output, FILTER_SANITIZE_EMAIL); 

  if(!filter_var($email_output, FILTER_VALIDATE_EMAIL)) {
    return $input_valid;
  }

  return ($input_valid = array(
    'approved' => true,
    'message' => 'Valid Email'
  ));
}

function minify_clientIp($client_ip)
{
  define('MIN_CHARACTER_IP', 9);

  $clientIp_out = preg_replace('/\s+/', '', $client_ip);

  if(empty($clientIp_out) || strlen(strval($clientIp_out)) < MIN_CHARACTER_IP || gettype($clientIp_out) != 'string') { 
    return false;
  }

  $last_point = strrpos($clientIp_out, '.');
  $clientIp_out = substr($clientIp_out, 0, $last_point);

  return $clientIp_out;
}
