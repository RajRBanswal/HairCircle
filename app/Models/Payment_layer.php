<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

/*
 *@Created by Swapna
 *
 * Class File: Open Payment Gateway Class
 * Version: 1.1
 * Author: Openers
 * Author URI: https://open.money/
*/
Class Payment_layer extends Model{
	const BASE_URL_SANDBOX = "https://sandbox-icp-api.bankopen.co/api";
    const BASE_URL_UAT = "https://icp-api.bankopen.co/api";
    
    public $access_key = '3a76da70-afe8-11eb-8e03-2b92c758bbfc';
    public $secret_key = '5f11f506e0f79ae1ad4f9b0a7709a78fc8239c75';
    
    //Changing environment to live requires remote_script also to be used for live and change accesskey,secretkey too
    public $env = 'test';
    
    //for production
    //$remote_script = "https://payments.open.money/layer";

    public function create_payment_token($data){

        try {
            $pay_token_request_data = array(
                'amount'   			=> (!empty($data['amount']))? $data['amount'] : NULL,
                'currency' 			=> (!empty($data['currency']))? $data['currency'] : NULL,
                'name'     			=> (!empty($data['name']))? $data['name'] : NULL,
                'email_id' 			=> (!empty($data['email_id']))? $data['email_id'] : NULL,
                'contact_number' 	=> (!empty($data['contact_number']))?  $data['contact_number'] : NULL,
                'mtx'    			=> (!empty($data['mtx']))? $data['mtx'] : NULL,
                'udf'    			=> (!empty($data['udf']))? $data['udf'] : NULL,
            );

            $pay_token_data = $this->http_post($pay_token_request_data,"payment_token");

            return $pay_token_data;
        } catch (Exception $e){			
            return [
                'error' => $e->getMessage()
            ];

        } catch (Throwable $e){
			
			return [
                'error' => $e->getMessage()
            ];
        }
    }

    public function get_payment_token($payment_token_id){

        if(empty($payment_token_id)){

            throw new Exception("payment_token_id cannot be empty.");
        }

        try {

            return $this->http_get("payment_token/".$payment_token_id);

        } catch (Exception $e){

            return [
                'error' => $e->getMessage()
            ];

        } catch (Throwable $e){

            return [
                'error' => $e->getMessage()
            ];
        }

    }

    public function get_payment_details($payment_id){

        if(empty($payment_id)){

            return [
                'error' => "payment_id cannot be empty"
            ];
            //throw new Exception("payment_id cannot be empty.");
        }

        try {

            return $this->http_get("payment/".$payment_id);

        } catch (Exception $e){
			
            return [
                'error' => $e->getMessage()
            ];

        } catch (Throwable $e){

            return [
                'error' => $e->getMessage()
            ];
        }

    }


    function build_auth(){

        return array(            
            'Content-Type: application/json',                      
            'Authorization: Bearer '.$this->access_key.':'.$this->secret_key            
        );

    }


    function http_post($data,$route){

        foreach (@$data as $key=>$value){

            if(empty($data[$key])){

                unset($data[$key]);
            }
        }

        if($this->env == 'live'){

            $url = self::BASE_URL_UAT."/".$route;

        } else {

            $url = self::BASE_URL_SANDBOX."/".$route;
        }


        $header = $this->build_auth();
        
        try
        {
            $curl = curl_init();
		    curl_setopt($curl, CURLOPT_URL, $url);
		    curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
		    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
		    curl_setopt($curl, CURLOPT_SSLVERSION, 6);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_MAXREDIRS,10);
		    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
		    curl_setopt($curl, CURLOPT_ENCODING, '');		
		    curl_setopt($curl, CURLOPT_TIMEOUT, 60);
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
            curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data, JSON_HEX_APOS|JSON_HEX_QUOT ));
            
		    $response = curl_exec($curl);
            $curlerr = curl_error($curl);
            
            if($curlerr != '')
            {
                return [
                "error" => "Http Post failed.",
                "error_data" => $curlerr,
                ];
            }
            return json_decode($response,true);
        }
        catch(Exception $e)
        {
            return [
                 "error" => "Http Post failed.",
                 "error_data" => $e->getMessage(),
            ];
        }           
        
    }

    function http_get($route){

        if($this->env == 'live'){

            $url = self::BASE_URL_UAT."/".$route;

        } else {

            $url = self::BASE_URL_SANDBOX."/".$route;
        }


        $header = $this->build_auth();

        try
        {
           
            $curl = curl_init();
		    curl_setopt($curl, CURLOPT_URL, $url);
		    curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
		    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
		    curl_setopt($curl, CURLOPT_SSLVERSION, 6);
		    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
		    curl_setopt($curl, CURLOPT_ENCODING, '');		
		    curl_setopt($curl, CURLOPT_TIMEOUT, 60);		   
            $response = curl_exec($curl);
            $curlerr = curl_error($curl);
            if($curlerr != '')
            {
                return [
      "error" => "Http Get failed.",
      "error_data" => $curlerr,
                ];
            }
            return json_decode($response,true);
        }
        catch(Exception $e)
        {
            return [
                "error" => "Http Get failed.",
                "error_data" => $e->getMessage(),
            ];
        }
    }
    
    //Hash functions requried in both request and response
    public function create_hash($data){
        ksort($data);
        $hash_string = $this->access_key;
        foreach ($data as $key=>$value){
            $hash_string .= '|'.$value;
        }
        return hash_hmac("sha256",$hash_string,$this->secret_key);
    }
    
    public function verify_hash($data,$rec_hash){
        $gen_hash = $this->create_hash($data);
        if($gen_hash === $rec_hash){
            return true;
        }
        return false;
    }
    
    public function getPaymentData($amount,$name,$email,$mobile) {
      ob_start();    
      $data['name'] = $name;
      $data['mobile'] = $mobile;
      
      if($email != null || $email != "") {
         $data['email'] = $email;
      } else {
         $data['email'] = "info@evergoalindia.com";
      }
      
        //main logic
      $data['error'] = '';
    
      $tranid = "TRANS".date("ymd").'-'.rand(1,999);
    
      $sample_data = [
          'amount' => $amount,
          'currency' => 'INR',
          'name'  => $data['name'],
          'email_id' => $data['email'],
          'contact_number' => $data['mobile'],
          'mtx' => $tranid
      ];
    
      //$this = new Payment_layer();
      $layer_payment_token_data = $this->create_payment_token($sample_data);
    
      //dd($layer_payment_token_data);
         
      if(empty($data['error']) && isset($layer_payment_token_data['error'])){
      	$data['error'] = 'E55 Payment error. ' . ucfirst($layer_payment_token_data['error']);  
      	if(isset($layer_payment_token_data['error_data']))
      	{
      		foreach($layer_payment_token_data['error_data'] as $d)
      			$data['error'] .= " ".ucfirst($d[0]);
      	}
      }
    
      if(empty($data['error']) && (!isset($layer_payment_token_data["id"]) || empty($layer_payment_token_data["id"]))){				
          $data['error'] = 'Payment error. ' . 'Layer token ID cannot be empty.';        
      }   
    
      if(!empty($layer_payment_token_data["id"]))
          $payment_token_data = $this->get_payment_token($layer_payment_token_data["id"]);
          
      if(empty($data['error']) && !empty($payment_token_data)){
          if(isset($layer_payment_token_data['error'])){
              $data['error'] = 'E56 Payment error. ' . $payment_token_data['error'];            
          }
    
          if(empty($data['error']) && $payment_token_data['status'] == "paid"){
              $data['error'] = "Layer: this order has already been paid.";            
          }
    
          if(empty($data['error']) && $payment_token_data['amount'] != $sample_data['amount']){
              $data['error'] = "Layer: an amount mismatch occurred.";
          }
    
          $jsdata['payment_token_id'] = html_entity_decode((string) $payment_token_data['id'],ENT_QUOTES,'UTF-8');
          $jsdata['accesskey']  = html_entity_decode((string) $this->access_key,ENT_QUOTES,'UTF-8');
              
      	$hash = $this->create_hash(array(
              'layer_pay_token_id'    => $payment_token_data['id'],
              'layer_order_amount'    => $payment_token_data['amount'],
              'tranid'    => $tranid,
          ));
          
          $data['tranid'] = $tranid;
          $data['payment_token_data'] = $payment_token_data;
          $data['hash'] = $hash;
        
          $html = "<script>";
          $html .= "var layer_params = " . json_encode( $jsdata ) . ';'; 
          
          $html .="</script>";
          $html .= '<script src="./public/js/layer_checkout.js"></script>';
          
          $data['html'] = $html;
      }
      
      ob_end_flush();
      
      return $data;
    }
    
    public function checkPaymentDetails(Request $request) {
       ob_start();    
       $layer_payment_id = $request->layer_payment_id;
       $layer_pay_token_id = $request->layer_pay_token_id;
       $layer_order_amount = $request->layer_order_amount;
       $tranid = $request->tranid;
       $hash = $request->hash;
       
        $data['error'] = "";
        $status = "";
        
        //$layer_api = new Payment_layer();
        
        if(!isset($layer_payment_id) || empty($layer_payment_id)){
        	$data['error'] = "Invalid response.";    
        }
        try {
            $data = array(
                'layer_pay_token_id'    => $layer_pay_token_id,
                'layer_order_amount'    => $layer_order_amount,
                'tranid'     			=> $tranid,
            );
        
            if(empty($data['error']) && $this->verify_hash($data,$hash) && !empty($data['tranid'])){
                $payment_data = $this->get_payment_details($layer_payment_id);
        
        
                if(isset($payment_data['error'])){
                    $data['error'] = "Layer: an error occurred E14".$payment_data['error'];
                }
        
                if(empty($data['error']) && isset($payment_data['id']) && !empty($payment_data)){
                    if($payment_data['payment_token']['id'] != $data['layer_pay_token_id']){
                        $data['error'] = "Layer: received layer_pay_token_id and collected layer_pay_token_id doesnt match";
                    }
                    elseif($data['layer_order_amount'] != $payment_data['amount']){
                        $data['error'] = "Layer: received amount and collected amount doesnt match";
                    }
                    else {
                        switch ($payment_data['status']){
                            case 'authorized':
                            case 'captured':
                                $status = "Payment captured: Payment ID ". $payment_data['id'];
                                break;
                            case 'failed':								    
                            case 'cancelled':
                                $status = "Payment cancelled/failed: Payment ID ". $payment_data['id'];                        
                                break;
                            default:
                                $status = "Payment pending: Payment ID ". $payment_data['id'];
                                exit;
                            break;
                        }
                    }
                } else {
                    $data['error'] = "invalid payment data received E98";
                }
            } else {
                $data['error'] = "hash validation failed";
            }
        
        } catch (Throwable $exception){
        
           $data['error'] =  "Layer: an error occurred " . $exception->getMessage();
            
        }
        
        ob_end_flush();

        return $data;
    }
}
