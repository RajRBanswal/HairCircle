<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

/*
*@Created by Swapna
*
*sends sms to given mobile number
*/

class Sms extends Model
{
    public $mobile_number;
    public $message;
    public $is_sent;
    public $message_sent_str;
    //public $authKey = '36094Afg0EjulvK2Z5f200b71P30';
    //public $senderId = 'evrgol';
    //public $route = 6;
    //public $url = "http://sms.fastsmsindia.com/api/sendhttp.php";
    
    public $authKey = 'lYaxkVUKvgOTs7Mq8dnWJG65iZ1tmHfpR0oeAzFLNubSCPXjw46GStJuT5IRY4h8vmqVsxyHi0lr9AkW';
    public $senderId = 'TXTIND';
    
     public function sendMessage($mobile_number,$message){
        $this->mobile_number = $mobile_number; 
        $this->message = $message;
        
         curl_setopt_array($curl, array(
          CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2?authorization=".$this->authKey."&sender_id=TXTIND&message=".urlencode($this->message)."&route=v3&numbers=".urlencode($this->mobile_number),
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_SSL_VERIFYHOST => 0,
          CURLOPT_SSL_VERIFYPEER => 0,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "cache-control: no-cache"
          ),
        ));

        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
        
        if ($err) {
           $this->message_sent_str =  'error :'. $err;
           $this->is_sent = false;
        } else {
          $this->message_sent_str =  'success :'. 'Message sent Successfully!';
          $this->is_sent = true;
        }
    }

}
?>