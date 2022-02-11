<?php
namespace App;
class SendCode
{
    public static function sendCode($mobile_no){
        $code=rand(1111,9999);
        $nexmo=app('Nexmo\Client');
        $nexmo->message()->send([
            'to'=>'+91'.(int) $mobile_no,
            'from'=> '+919673060685',
            'text'=>'Verify code: '.$code,
        ]);
        return $code;
    }

      public static function sendMessage($mobile_no,$message){
        // dd($mobile_no);
        $nexmo=app('Nexmo\Client');
        $nexmo->message()->send([
            'to'=> $mobile_no,
            'from'=> '+919112060685',
            'text'=> $message,
        ]);
        return $message;
        
    }

}