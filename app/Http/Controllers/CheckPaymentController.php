<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\Bank;
use App\Models\User;
use App\Models\Sms;
use App\Models\Amount;
use App\Models\Task;
use App\Models\Image_Upload;
use App\Models\Commision;
use App\Models\Payment_layer;

use Illuminate\Support\Facades\DB;

use Sentinel;
use Validator;
use Auth;
use Redirect;
use Session;
use Storage;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use DateTime;

class CheckPaymentController extends Controller
{
    
    
     public function check_payment_details(Request $request) {
       session_start();
       ob_start();
       
       $name=$request->name;
       $sponserid=$request->sponsorid;
       $mobile=$request->mobile;
       $email=$request->email;
       $password=$request->password;
       $password1=$request->password1;
       $pimg=$request->pimg;
       $layer_payment_id = $request->layer_payment_id;
       $layer_pay_token_id = $request->layer_pay_token_id;
       $layer_order_amount = $request->layer_order_amount;
       $tranid = $request->tranid;
       $hash = $request->hash;
       
        $data['error'] = "";
        $status = "";
        
        $layer_api = new Payment_layer();
        
        if(!isset($layer_payment_id) || empty($layer_payment_id)){
        	$data['error'] = "Invalid response.";    
        }
        try {
            $data = array(
                'layer_pay_token_id'    => $layer_pay_token_id,
                'layer_order_amount'    => $layer_order_amount,
                'tranid'     			=> $tranid,
            );
        
            if(empty($data['error']) && $layer_api->verify_hash($data,$hash) && !empty($data['tranid'])){
                $payment_data = $layer_api->get_payment_details($layer_payment_id);
        
        
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
        
        if(!empty($data['error'])) {
            Session::flash('message',$data['error']);
            return Redirect::back()->withErrors($data['error']);
        }
        else {
                    $commision = Commision::find(1);
                            
                    $token_number = uniqid();
                    
                    $commisiondata = Commision::find(1);
                    $commition = $commisiondata->daily_commision;

                    DB::table('users')->insert([
                        'email'=>$email,
                         'password'=>Hash::make($password),
                         'name'=>$name,
                         'mobile'=>$mobile,
                         'sponserid'=>$sponserid,
                         'pimg'=>$pimg,
                         'status' => 'active',
                         'days' => '1',
                         'daily_commission' => $commition,
                         'user_type'=>'user',
                         'daily_commission'=>$commision->daily_commision,
                         'created_at'=>Carbon::now(),
                         'token_number'=>$token_number,
                    ]);
                    
                    $getdata = User::latest()->first();
                    $user = $getdata->id;  
                    $new_amount = new Amount;                        
                    $new_amount->id = $user;
                    $new_amount->total_amount = 25;
                    $new_amount->updated_amount_time = Carbon::now();
                    $new_amount->save();
                    
                    $message = "Thank you for registering with us. Your Sponser Id is : ".$sponserid." and your token number is : ".$token_number." for www.evergoalindia.com ";
                    $sms = new Sms;
                    $sms->sendMessage($mobile,$message);
                    if($sms->is_sent) {
                        Session::flash('message','Your Registration Sucessfully completed');
                    } else {
                        Session::flash('message','Your Registration Sucessfull but you will not recieve message due to some issues');
                    }
                    
                    return Redirect::to('/');
        }
   }
        
}
