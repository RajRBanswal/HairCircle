<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\Bank;
use App\Models\Image_Upload;
use App\Models\User;
use App\Models\Amount;
use App\Models\Task;
use App\Models\Sms;
use App\Models\Commision;
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

/**
 * @created by Swapna
 * @date 11-05-2021
 */ 
class ForgotPasswordController extends Controller
{
    //

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    
    /**
     * @created by Tilesh
     * @date 11-05-2021
     * 
     * updates new password to databse
     */ 
     public function otp_generate(Request $request){
        $mob_number = $request->user_mobile; //get mobile number
        $count="";
         $row= DB::table('users')
        ->where("mobile",$mob_number)
        ->get();
        
        foreach($row as $c){
        $count++;    
        }

        //check Mobile No found or not        
         if($count >= 1){
                    
        $create_otp = mt_rand(1000,9999); //Generate OTP
        $otp['num'] = $create_otp;
        
        //sending OTP SMS code 
            $message = "Your OTP is  ".$create_otp."  for www.evergoalindia.com ";
            $sms = new Sms;
            $sms->sendMessage($mob_number,$message);
            if($sms->is_sent) {
                Session::flash('message','Send OTP Sucessfull');
            } else {
                Session::flash('message','OTP generate sucessfull but you will not recieve message');
            }
        
        
        $otp['mob'] = $mob_number; //store mobile No
        return view('/mob_otp_verify',$otp);
         }
         else
         {
          return redirect()->back()->with('msg','Mobile Number Not Found Please Check !'); 
        //  dd('bad');
         }
      }
     
    public function otp_verify(Request $request,$id){
        $input_otp = $request->get_otp_verify;
        $mobile['user'] = $request->hi_mobile;
        $received = $id;
       
        if($input_otp == $received)
         {
             return view('/user_forgot_password',$mobile);
         }
         else
         {
            
            return redirect('forgot_pass_mobile')->with('msg','Somthing Went Wrong ');
         }
        
     }

      
      
    public function update_password(Request $request) {
        
        $password = $request->password;
        $cpassword = $request->cpassword;
        $mobile = $request->hi_mobile;
        $id = "";
        // dd($password, $cpassword ,$mobile);
        if($password == $cpassword)
        {
        $data= DB::table('users')
        ->where("mobile",$mobile)
        ->get();
        //  dd($data);
        foreach($data as $user)
        {
        $change_id = $user->id;
           
            $new_data = User::find($change_id);
            //  dd($new_data);
        
             $new_data->password = Hash::make($password);
            
            if($new_data->update()){
              
                 return view('forgot_pass_mobile')->with('msg','Password Change Successfully ');
            }
            else{
                
                 return view('forgot_pass_mobile')->with('msg',' Somthing went Wrong ');
            }
        }
        }
        else{
            return view('user_forgot_password')->with('msg','Miss-Match Password');
        }
        
    } 
}
?>