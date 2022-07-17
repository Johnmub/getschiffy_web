<?php

namespace App\Http\Controllers;

use App\Models\Vip_address;
use Illuminate\Http\Request;

define('MIN_CHARACTER_ADDRESS', 8);
define('MIN_CHARACTER_NAME', 2);

class Vip_addresses extends Controller
{
    public function save_data(Request $request)
    {
        $vip_name = $request->name;

        // Remove spaces
        $vip_address = preg_replace('/\s+/', '', $request->address); 
        $vip_name_out = preg_replace('/\s+/', '', $vip_name); 

        if((strlen($vip_address) < MIN_CHARACTER_ADDRESS)) {
            return json_encode(['message' => 'Invalid wallet address']);
        } else if((strlen($vip_name_out) < MIN_CHARACTER_NAME)) {
            return json_encode(['message' => 'Invalid name']);
        }

        $addresses = new Vip_address();
        $already_address = $this->check_address($vip_address);

        if(!($already_address)) 
        {
            $addresses->vip_address = encrypt_data($vip_address);
            $addresses->vip_name = encrypt_data($vip_name);
            $addresses->save();

            return json_encode(array("message" => "You have joined our whitelist", "success" => true));
        } else
            return json_encode(array("message" => "You are already a member of our white list", "success" => false));
    }

    public function check_address_exist(Request $request)
    {
        $vip_address = preg_replace('/\s+/', '', $request->address);

        if((strlen($vip_address) < MIN_CHARACTER_ADDRESS))
            return json_encode(['message' => 'Invalid wallet address', 'found' => false]);

        $already = $this->check_address($vip_address);

        if($already)
            return json_encode(['message' => 'You are a member of our whitelist', 'found' => true]);
        else
            return json_encode(['message' => 'You are not yet a member of our whitelist', 'found' => false]);
    }

    private function check_address($address)
    {
        $vip_address = $address;

        $addresses = new Vip_address();
        $addresses_list = $addresses->all();
        $already_address = false;

        for ($i=0; $i < sizeof($addresses_list) ; $i++) 
        { 
            $data = decrypt_data($addresses_list[$i]['vip_address']);
            
            if($data == $vip_address) 
            {
                $already_address = true;
                break;
            }
        }

        return $already_address;
    }
}
