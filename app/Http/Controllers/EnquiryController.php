<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AdminUserController;
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

class EnquiryController extends Controller
{
    //
    
    public function load_payment(Request $request) {
        
        session_start();
        //ob_start();
        
        $layer_api = new Payment_layer();
        $data = $layer_api->getPaymentData(950.00,$request->name,$request->email,$request->mobile);
        
        // Check Sponsor Id in to data -------------------------------@tilesh
        $sid = $request->sponsorid;
        $all_user = User::find($sid);
        if($all_user != null)
        {
            
        $validatedData = Validator::make($request->all(), [
                
                'name' => 'required',
                'mobile'=>'required|unique:users|max:10|min:10',
                // 'email'=>'required|unique:users',
                'password'=>'required',
                'password1'=>'required'
            ]);
            if($validatedData->fails())
            {
               $request->flash();
               return Redirect::back()->withErrors($validatedData);
            }
            else{
                $data['name'] = $request->name;
                $data['sponserid'] = $request->sponsorid;
                $data['mobile'] = $request->mobile;
                $data['password'] = $request->password;
                $data['password1'] = $request->password1;
                $data['pimg'] = "";
                
                if($data['password']==$data['password1']) {
                    
                    //Swapna image upload logic
                    if($files = $request->file('pimg')) {
                        $upload = new Image_Upload();
                        $data['pimg'] = $upload->uploadImage($files,'user');
                    }
                    if($data['pimg'] == "Error") {
                        Session::flash('message','Image Uploading Error');
                        return Redirect::back()->withErrors($validatedData);
                    } else {
                        $data['pimg'] = 'user/'.$data['pimg'];
                    }
                    
                    //dd($data);
                    return view("payment_getway",$data);
                } else {
                    Session::flash('message','Both Passwords does not match');
                    return Redirect::back()->withErrors($validatedData);
                }
                
            }
        }
            else{
            Session::flash('message','Wrong Sponsor Id ');
                     return Redirect::back();
        }
    }
    
     public function check_payment_details(Request $request) {
       session_start();
       //ob_start();
       
       $name=$request->name;
       $sponserid=$request->sponsorid;
       $mobile=$request->mobile;
       $email=$request->email;
       $password=$request->password;
       $password1=$request->password1;
       $pimg=$request->pimg;
       
       $layer_api = new Payment_layer();
       $data = $layer_api->checkPaymentDetails($request);
        
        if(!empty($data['error'])) {
            Session::flash('message',$data['error']);
            return Redirect::to('/enquiry')->with('error',$data['error']);
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
                    AdminUserController::cronJobInsert();
                    return Redirect::to('/');
        }
   }
        

    public function enquiry(Request $request)
    {
      //  return $request->all();
        $validated = Validator::make($request->all(),[
            'name' => 'required',
            
            'mobile' => 'required|max:10|min:10'
        ]);
        if($validated->fails())
        {
            return Redirect::back()->withErrors($validated);
        }
        else{
            //echo "done";
            $name=$request->name;
            $mobile=$request->mobile;
            $email=$request->email;
            $details=[
                'title'=>'Enquiry',
                'subject'=>"Enquiry",
                'message'=>"hi",
                'name'=>$name,
                'mobile'=>$mobile,
                'email'=>$email,
             
               
                
            ];
            $send_mail=Mail::to('ajaytelangre11@gmail.com')->send(new TestMail($details));
         
            return Redirect::back()->with('message','Thank You. Your message send Succesfully');
           
            
        }
        
    }
    
    public function createProfile(Request $request){
       // dd($request->all());
       $id=session()->get('id');
       $user_count=DB::select(DB::raw("SELECT id FROM users WHERE sponserid = :id"),array(
           'id'=>$id,
       ));

       $counts=count($user_count);
       

    //    if($counts<=10)
    //    {

        
            $validatedData = Validator::make($request->all(), [
                
                'name' => 'required',
                'mobile'=>'required|unique:users|max:10|min:10',
                'email'=>'required|unique:users',
                'password'=>'required',
                'password1'=>'required'
            ]);
            if($validatedData->fails())
            {
                
            // echo "validation fail";
                $request->flash();
                return Redirect::back()->withErrors($validatedData);
            }
            else{
                $name=$request->name;
                $sponserid=$request->sponsorid;
                $mobile=$request->mobile;
                $email=$request->email;
                $password=$request->password;
                $password1=$request->password1;
                $pimg="";
                //return $pimg;
                if($password==$password1)
                {
                    //Swapna image upload logic
                    if($files = $request->file('pimg')) {
                        $upload = new Image_Upload();
                        $pimg = $upload->uploadImage($files,'user');
                    }
                    if($pimg == "Error") {
                        Session::flash('message','Image Uploading Error');
                        return Redirect::back()->withErrors($validatedData);
                    }
                    
                    $commision = Commision::find(1);
                    
                    $token_number = uniqid();
                    
                    $pimg = 'user/'.$pimg;
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
                    
                    //Session::flash('message','Registration Sucessfull');
                    
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
                        Session::flash('message','Registration Sucessfull');
                    } else {
                        Session::flash('message','Registration Sucessfull but you will not recieve message');
                    }
                    return Redirect::to('/')->withErrors($validatedData);
                }
                else{
                    Session::flash('message','Both Passwords does not match');
                    return Redirect::back()->withErrors($validatedData);
                    //echo "password is diff";
                }
                
            }

        // }
        // else{
        //     return "Your user limit is over";
        // }
       
    }
}
