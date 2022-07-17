<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Newsletter extends Controller
{
  public function inside_newsletter(Request $request, $locate_sub = 'en')
  {
    $email_subs = $request->input('email_subs');
    $answer = verify_email($email_subs);

    if(!$answer['approved']) {
      return json_encode(array( 'message' => $answer['message'], 'status' => $answer['approved']));
    }

    $suscriber_table = new Subscriber;
    $suscriber_list = $suscriber_table->all();
    $already_suscriber = false;

    for ($i=0; $i < sizeof($suscriber_list) ; $i++) 
    { 
      $data = decrypt_data($suscriber_list[$i]['email_subscriber']);
      
      if($data == $email_subs) 
      {
        $already_suscriber = true;
        break;
      }
    }

    if(!$already_suscriber) 
    {
      $suscriber_table->email_subscriber = encrypt_data($email_subs);
      $suscriber_table->locale_subscriber = encrypt_data($locate_sub);
      $suscriber_table->save();

      return json_encode(array( 'message' => 'Welcome to our newsletter', 'status' => true));
    }

    return json_encode(array( 'message' => 'You are already a member of our newsletter', 'status' => true));
  }
}
