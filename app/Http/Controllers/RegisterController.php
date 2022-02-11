<?php

namespace App\Http\Controllers;
use Hash;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\PRegisterModel;
use App\Models\VRegisterModel;
use App\Models\ERegisterModel;
use App\Models\QuestionAnswer;
use App\Models\UserTblModel;
use App\Models\EnquiryModel;
use App\Models\PurchaseHistory;
use App\Models\OrederModel;
use App\Models\DiagnosisModel;
use App\Models\ProductModel;
use App\Models\CustomerImageModel;
use App\Models\VendorRequestModel;
use App\Models\CCRModel;
use Session;
use Mail;
use Image;
use App\Helpers\Helper;
use App\SendCode;
// use Illuminate\Auth\Events\Registered;
use Nexmo\Laravel\Facade\Nexmo;
// use Haruncpi\LaravelIdGenerator\IdGenerator;
use Validator;
use Redirect;
use DB;


class RegisterController extends Controller
{
    public function e_login(Request $request)
    {
       
       $user = $request->input('user');
       $pass = $request->input('password');

       
    }
//     public function register(Request $request)
// {
//     $this->validator($request->all())->validate();
//     event(new Registered($register = $this->create($request->all())));
//     return $this->registered($request,$register) ?: redirect('/verify?mobile_no='.$request->mobile_no);
// }

    public function store(Request $request)
    {
        $date = Carbon::now()->format("d-m-Y");  
        $temp = 0;
        $patient_id = Helper::IDGenerator(new PRegisterModel,'patients_id',5,'PATIENT',$request->input('name'));
            $mobile_number = $request->input('mobile_no');
            $mobile_no11 = PRegisterModel::where('mobile_no',$mobile_number)->first();
            if($mobile_no11 == null){
            $register = new PRegisterModel();
            
            $register->patients_id = $patient_id;
            $name = $request->input('name');
            if ($name != "") {$temp = $temp+10;}
            $date_of_birth = $request->input('dob');
            if ($date_of_birth != "") {$temp = $temp+5;}
            $age = $request->input('age');
            $gender = $request->input('gender');
            if ($gender != "") {$temp = $temp+5;}
            $marital_status = $request->input('marital_status');
            if ($marital_status != "") {$temp = $temp+5;}
            $religion = $request->input('religion');
            if ($religion != "") {$temp = $temp+5;}
            $medicin_pref = $request->input('medi_pref');
            if ($medicin_pref != "") {$temp = $temp+5;}
            $profession = $request->input('prof');
            if ($profession != "") {$temp = $temp+5;}
            $reference1 = $request->input('reference');
            if($reference1!= null){
                $reference = implode(',',$request->input('reference'));
                $register->reference = $reference;
            }else{
                 $register->reference = $request->input('reference');
            }
            $weight_in_kg = $request->input('wik');
            if ($weight_in_kg != "") {$temp = $temp+5;}
            $height_in_cm = $request->input('hic');
            if ($height_in_cm != "") {$temp = $temp+5;}
            $address = $request->input('address');
            if ($address != "") {$temp = $temp+10;}
            $state = $request->input('state'); 
            if ($state != "") {$temp = $temp+5;}
            $city = $request->input('city');
            if ($city != "") {$temp = $temp+5;}
            $pincode = $request->input('pin'); 
            
            $email = $request->input('email');
            if ($email != "") {$temp = $temp+5;}
            $password = $request->input('password');
            if ($password != "") {$temp = $temp+10;}
            if ($mobile_number  != "") {$temp = $temp+10;}
            $image = $request->input('image');
            if ($image != "") {$temp = $temp+5;}

            // $check_me = $request->input('point');

            $register->name = $name;
            $register->date_of_birth = $date_of_birth;
            $register->age = $age;
            $register->gender = $gender;
            $register->marital_status = $marital_status;
            $register->religion = $religion;
            $register->medicin_pref = $medicin_pref;
            $register->profession = $profession;
            $register->weight_in_kg = $weight_in_kg;
            $register->height_in_cm = $height_in_cm;
            $register->address = $address;
            $register->city = $city;
            $register->pincode = $pincode;
            $register->state = $state;
            $register->mobile_no = $mobile_number;
            $register->email = $email;
            $register->password = $password;
            $register->check_me = $temp;
            $register->date = $date;
            $register->created_at = $date;
             if($request->hasfile('image'))
            {
                $file1 = $request->file('image');
                $image1 = $file1->getClientOriginalName();
                $file1->move(public_path()."/docs/", $image1);
                $register->image = $image1;
            }
    
         $otp = mt_rand(1000,9999);
         $register->code = $otp; 
            // Set up connection to second server…
          $url = 'http://103.10.234.154/vendorsms/pushsms.aspx';

          // Data to be passed to the secondary server…
          $fields = array(
          'user' => 'boyshostel',
          'password' => '2ANE753L',
          'msisdn' => $mobile_number,
          'sid' => 'SDHSTL',
          'msg' => 'This is your Verification Code (otp)'.$otp,
          'fl' => '0',
          'gwid' => '2',
          );

          // Build the urlencoded data
          $postvars = http_build_query($fields);

          // Open connection
          $ch = curl_init();

          // Set the url, number of POST vars, POST data
          curl_setopt($ch, CURLOPT_URL, $url);
          curl_setopt($ch, CURLOPT_FAILONERROR, true);
          curl_setopt($ch, CURLOPT_POST, count($fields));
          curl_setopt($ch, CURLOPT_POSTFIELDS, $postvars);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
          curl_setopt($ch, CURLOPT_FAILONERROR,true);

          // Execute post
          $result = curl_exec($ch);
          if ($result) {
            
            $register->save();
            return redirect('/verify');
          }else{
            $error = curl_error($ch);
            return redirect()->back();
          }
          
          curl_close($ch);
            // $register->save();
        
            // return view('/login')->with('message','Customer Register Successfully');
      
            }else{
                return redirect()->back()->with('alert','Mobile Number Allready Exists');
            }
    }
    
    public function Edit_Customer1(Request $request)
    {
        $user_id = session('user.id');
        $customer = PRegisterModel::where('id',$user_id)->get();
        return view('edit_customer',compact('customer'));
    }
   
    
    public function Update_Customer(Request $request,$id)
    {
        $temp = 0;
            $register = PRegisterModel::where('id',$id)->first();
            $mobile_number = $request->input('mobile_no');
            $name = $request->input('name');
            if ($name != "") {$temp = $temp+10;}
            $date_of_birth = $request->input('dob');
            if ($date_of_birth != "") {$temp = $temp+5;}
            $age = $request->input('age');
            $gender = $request->input('gender');
            if ($gender != "") {$temp = $temp+5;}
            $marital_status = $request->input('marital_status');
            if ($marital_status != "") {$temp = $temp+5;}
            $religion = $request->input('religion');
            if ($religion != "") {$temp = $temp+5;}
            $medicin_pref = $request->input('medi_pref');
            if ($medicin_pref != "") {$temp = $temp+5;}
            $profession = $request->input('prof');
            if ($profession != "") {$temp = $temp+5;}
            $weight_in_kg = $request->input('wik');
            if ($weight_in_kg != "") {$temp = $temp+5;}
            $height_in_cm = $request->input('hic');
            if ($height_in_cm != "") {$temp = $temp+5;}
            $address = $request->input('address');
            if ($address != "") {$temp = $temp+10;}
            $city = $request->input('city');
            if ($city != "") {$temp = $temp+5;}
            $state = $request->input('state'); 
            if ($state != "") {$temp = $temp+5;}
            $pincode = $request->input('pin'); 
            $email = $request->input('email');
            if ($email != "") {$temp = $temp+5;}
            $password = $request->input('password');
            if ($password != "") {$temp = $temp+10;}
            if ($mobile_number  != "") {$temp = $temp+10;}
            $image = $request->input('image');
            $image1 = $request->input('image1');
            if ($image != "" || $image1 != "") {$temp = $temp+5;}

            // $check_me = $request->input('point');

            $register->name = $name;
            $register->date_of_birth = $date_of_birth;
            $register->age = $age;
            $register->gender = $gender;
            $register->marital_status = $marital_status;
            $register->religion = $religion;
            $register->medicin_pref = $medicin_pref;
            $register->profession = $profession;
            $register->reference = $request->input('reference');
            $register->weight_in_kg = $weight_in_kg;
            $register->height_in_cm = $height_in_cm;
            $register->address = $address;
            $register->city = $city;
            $register->pincode = $pincode;
            $register->state = $state;
            $register->mobile_no = $mobile_number;
            $register->email = $email;
            $register->password = $password;
 
            // $register->mobile_no = $mobile_number;

            if($request->file('image')){
             if($request->hasfile('image'))
                {
                    $file1 = $request->file('image');
                    $image1 = $file1->getClientOriginalName();
                    $file1->move(public_path()."/docs/", $image1);
                    $register->image = $image1;
                }
            }else{
               $register->image = $request->input('image1'); 
            }
            $register->check_me = $temp;
            $register->update();
        
            return redirect('/user_dashboard')->with('alert','Profile Updated');
      
    }
    
    public function index(Request $request)
    {
        return view('v_register');
    }
    public function demo1(Request $request)
    {
        $email = $request->input('user');
        $pusr_update = VRegisterModel::where('email',$email)->orWhere('mobile_no',$email)->first();
        $usr_update = PRegisterModel::where('email',$email)->orWhere('mobile_no',$email)->first();
         
        if($usr_update != null){
            $register = PRegisterModel::where('email',$email)->orWhere('mobile_no',$email)->first();
            $otp = mt_rand(1000,9999);
            $register->code = $otp; 
           
            // Set up connection to second server…
            $url = 'http://103.10.234.154/vendorsms/pushsms.aspx';

              // Data to be passed to the secondary server…
              $fields = array(
              'user' => 'boyshostel',
              'password' => '2ANE753L',
              'msisdn' => $email,
              'sid' => 'SDHSTL',
              'msg' => $otp,
              'fl' => '0',
              'gwid' => '2',
              );

              // Build the urlencoded data
              $postvars = http_build_query($fields);
    
              // Open connection
              $ch = curl_init();
    
              // Set the url, number of POST vars, POST data
              curl_setopt($ch, CURLOPT_URL, $url);
              curl_setopt($ch, CURLOPT_FAILONERROR, true);
              curl_setopt($ch, CURLOPT_POST, count($fields));
              curl_setopt($ch, CURLOPT_POSTFIELDS, $postvars);
              curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
              curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
              curl_setopt($ch, CURLOPT_FAILONERROR,true);
    
              // Execute post
              $password = PRegisterModel::where('email',$email)->orWhere('mobile_no',$email)->get();
              $result = curl_exec($ch);
              if ($result) {
                
                $register->update();
                return view('verify_pass',compact('password'));
              }else{
                $error = curl_error($ch);
                return redirect()->back();
              }
              
              curl_close($ch);
            // $register->save();
             
        }elseif($pusr_update != null){
            $v_pass = VRegisterModel::where('email',$email)->orWhere('mobile_no',$email)->first();
            $otp = mt_rand(1000,9999);
            $v_pass->code = $otp; 
           
            // Set up connection to second server…
            $url = 'http://103.10.234.154/vendorsms/pushsms.aspx';

              // Data to be passed to the secondary server…
              $fields = array(
              'user' => 'boyshostel',
              'password' => '2ANE753L',
              'msisdn' => $email,
              'sid' => 'SDHSTL',
              'msg' => $otp,
              'fl' => '0',
              'gwid' => '2',
              );

              // Build the urlencoded data
              $postvars = http_build_query($fields);
    
              // Open connection
              $ch = curl_init();
    
              // Set the url, number of POST vars, POST data
              curl_setopt($ch, CURLOPT_URL, $url);
              curl_setopt($ch, CURLOPT_FAILONERROR, true);
              curl_setopt($ch, CURLOPT_POST, count($fields));
              curl_setopt($ch, CURLOPT_POSTFIELDS, $postvars);
              curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
              curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
              curl_setopt($ch, CURLOPT_FAILONERROR,true);
    
              // Execute post
              $password = VRegisterModel::where('email',$email)->orWhere('mobile_no',$email)->get();
              $result = curl_exec($ch);
              if ($result) {
                
                $v_pass->update();
                return view('verify_pass',compact('password'));
              }else{
                $error = curl_error($ch);
                return redirect()->back();
              }
              
              curl_close($ch);
            
        }else{
            return redirect('/login')->with('alert','Email Or Mobile Not Found');
        }
        
    }
    public function Confirm_User_Password(Request $request)
    {
        $email = $request->input('user');
        $password = $request->input('password');
        $cpassword = $request->input('cpassword');
        // dd($email,$password);
        $pusr_update = VRegisterModel::where('email',$email)->orWhere('mobile_no',$email)->first();
        $usr_update = PRegisterModel::where('email',$email)->orWhere('mobile_no',$email)->first();
        if($usr_update != null){
            $usrupdate = PRegisterModel::where('email',$email)->orWhere('mobile_no',$email)->first();
            $usrupdate->password = $password;
            $usrupdate->update(); 
            return redirect('/login')->with('alert', 'Your password has been changed!'); 
        }elseif($pusr_update != null){
            $pusrupdate = VRegisterModel::where('email',$email)->orWhere('mobile_no',$email)->first();
            $pusrupdate->password = $password;
            $pusrupdate->update(); 
            return redirect('/login')->with('alert', 'Your password has been changed!');
        }else{
            return redirect('/login')->with('alert','Email Or Mobile Not Found');
        }
        
      
    }

    public function reset_password(Request $request)
    {
        $username = $request->input('user');
        // dd($username);
        // $user = VRegisterModel::where('id',1)->get();
         $abcdf = VRegisterModel::where('id',1)->get();

        dd($abcdf);
          if ($refCategory != null) {
            // $refCategory->password = $request->input('password');
            // $refCategory->c_password = $request->input('cpassword');
            // $refCategory->update();
           // dd($request->input('password'),$request->input('cpassword'));
           // $v_user = VRegisterModel::where('email', $username)->get();
           // dd($v_user);
            VRegisterModel::where('email',$username)->update([
                [$refCategory->password = $request->input('password')],
               [$refCategory->c_password  = $request->input('cpassword')]
            ]);
            return redirect('/login')->with('alert', 'Your password has been changed!');
            }else{
                dd('hiiii');
                return redirect('/login')->with('alert', 'Data not Match'); 
            }     
        
    }
    // public function otpLogin(Request $request)
    // {
    //     $mobile_no = $request->input('mobile_no');
    //     $mobile_no1 = PRegisterModel::where('mobile_no',$mobile_no)->get();
       
    //    if ($mobile_no1==true) {
    //       $otp = mt_rand(1000,9999);
    //       Nexmo::message()->send([
    //         'to' => '91'.$mobile_no,
    //         'from' => '919112060685',
    //         'text' => 'Your OTP is '.$otp. 'For Verification'
    //     ]);
    //         $request->session()->put('user',$p_data);
    //         $user_id = session('user.id');
    //         $freeques = QuestionAnswer::where('id',$user_id)->get();
    //         return view('p_details',compact('p_data','freeques'));
    //    }
        


    // }

    public function v_store(Request $request)
    {
        $temp=0;
        $date = date('Y-m-d');
        $newDate = Carbon::createFromFormat('Y-m-d', $date)->format('d-m-Y');
        $vens_id = Helper::IDGenerator(new VRegisterModel,'vens_id',5,'VENDOR',$request->input('name'));
        $vreg = new VRegisterModel();
        $vreg->vens_id = $vens_id;
        $name = $request->input('name');
        if ($name != "") {$temp = $temp+10;}
        $gender = $request->input('gender');
        if ($gender != "") {$temp = $temp+5;}
        $shop_name = $request->input('shop_name');
        if ($shop_name != "") {$temp = $temp+5;}
        $s_license = $request->input('s_license');
        if ($s_license != "") {$temp = $temp+5;}

        $address = $request->input('address');
        if ($address != "") {$temp = $temp+5;} 
        $state = $request->input('state');
        if ($state != "") {$temp = $temp+5;} 
        $city = $request->input('city');
        if ($city != "") {$temp = $temp+5;} 
        $mobile_no = $request->input('mobile_no'); 
        if ($mobile_no != "") {$temp = $temp+10;} 
        $email = $request->input('email');
        if ($email != "") {$temp = $temp+5;} 
        $password = $request->input('password');
        if ($password != "") {$temp = $temp+10;} 
        if($request->hasfile('shoplogo'))
        {
            $file_s = $request->file('shoplogo');
            $image_s = $file_s->getClientOriginalName();
            $file_s->move(public_path()."/docs/", $image_s);
            $temp = $temp+5;
            $vreg->shop_logo = $image_s;
         }
        // $vreg->p_points = $request->input('point');

        // $vreg->vens_id = $vens_id;
        // $vreg->name = $request->input('name'); 
        // $vreg->gender = $request->input('gender'); 
        // $vreg->shop_name = $request->input('shop_name'); 
        // $vreg->shop_license = $request->input('s_license');
        // if($request->hasfile('shoplogo'))
        // {
        //     $file_s = $request->file('shoplogo');
        //     $image_s = $file_s->getClientOriginalName();
        //     $file_s->move(public_path()."/docs/", $image_s);
        //     $vreg->shop_logo = $image_s;
        //  }
        // $vreg->address = $request->input('address'); 
        // $vreg->state = $request->input('state'); 
        // $vreg->city = $request->input('city'); 
        // $vreg->pincode = $request->input('pin'); 
        // $vreg->mobile_no = $request->input('mobile_no'); 
        // $vreg->email = $request->input('email'); 
        // $vreg->password = $request->input('password');
        // $vreg->p_points = $request->input('point');
        
        $vreg->created_at = $newDate;
        $vreg->date = $newDate;
        $vreg->name = $name;
        $vreg->gender = $gender;
        $vreg->shop_name = $shop_name; 
        $vreg->shop_license = $s_license;
        $vreg->address = $address;
        $vreg->state = $state; 
        $vreg->city = $city; 
        $vreg->pincode = $request->input('pin');;
        $vreg->mobile_no = $mobile_no;
        $vreg->email = $email; 
        $vreg->password = $password;

        if($request->hasfile('profile'))
        {
            $files = $request->file('profile');
            $images = $files->getClientOriginalName();
            $files->move(public_path()."/docs/", $images);
            $temp = $temp+5;
            $vreg->p_image = $images;
        }
        if($request->hasfile('adhar'))
        {
            $file1 = $request->file('adhar');
            $image1 = $file1->getClientOriginalName();
            $file1->move(public_path()."/docs/", $image1);
            $temp = $temp+5; 
            $vreg->adhar = $image1;
        }
           if($request->hasfile('pan'))
        {
            $file2 = $request->file('pan');
            $image2 = $file2->getClientOriginalName();
            $file2->move(public_path()."/docs/", $image2);
            $temp = $temp+5; 
            $vreg->pan = $image2;
        }
           if($request->hasfile('lice'))
        {
            $file3 = $request->file('lice');
            $image3 = $file3->getClientOriginalName();
            $file3->move(public_path()."/docs/",$image3);
            $temp = $temp+5;
            $vreg->license = $image3;
        }
            if($request->hasfile('fssai'))
        {
            $file4 = $request->file('fssai');
            $image4 = $file4->getClientOriginalName();
            $file4->move(public_path()."/docs/",$image4);
            $temp = $temp+5;
            $vreg->fssai = $image4;
        }
        $vreg->p_points = $temp;
        $vreg->save();
        return redirect('/login')->with('alert','Register Successfully!');


    }
     public function Edit_Vendor1(Request $request)
    {
        $user_id = session('user.id');
        $vendor = VRegisterModel::where('id',$user_id)->get();
        return view('edit_vendor',compact('vendor'));
    }
    
    public function Update_Vendor1(Request $request,$id)
    {
        $temp = 0;
        $vreg = VRegisterModel::where('id',$id)->first();
            // $vreg->name = $request->input('name'); 
            // $vreg->gender = $request->input('gender'); 
            // $vreg->shop_name = $request->input('shop_name'); 
            // $vreg->shop_license = $request->input('s_license');
            $mobile_no = $request->input('mobile_no');
        $name = $request->input('name');
        if ($name != "") {$temp = $temp+10;}
        $gender = $request->input('gender');
        if ($gender != "") {$temp = $temp+5;}
        $shop_name = $request->input('shop_name');
        if ($shop_name != "") {$temp = $temp+5;}
        $s_license = $request->input('s_license');
        if ($s_license != "") {$temp = $temp+5;}
        $address = $request->input('address');
        if ($address != "") {$temp = $temp+5;} 
        $state = $request->input('state');
        if ($state != "") {$temp = $temp+5;} 
        $city = $request->input('city');
        if ($city != "") {$temp = $temp+5;} 
        $mobile_no = $request->input('mobile_no'); 
        if ($mobile_no != "") {$temp = $temp+10;} 
        $email = $request->input('email');
        if ($email != "") {$temp = $temp+5;} 
        $password = $request->input('password');
        if ($password != "") {$temp = $temp+10;}
            if($request->file('shoplogo'))
            {
                if($request->hasfile('shoplogo'))
                {
                    $file_s = $request->file('shoplogo');
                    $image_s = $file_s->getClientOriginalName();
                    $file_s->move(public_path()."/docs/", $image_s);
                    $temp = $temp+5;
                    $vreg->shop_logo = $image_s;
                 }
            }else{
                $vreg->shop_logo = $request->input('shoplogo1');
                $temp = $temp+5;
            }
            // $vreg->address = $request->input('address'); 
            // $vreg->state = $request->input('state'); 
            // $vreg->city = $request->input('city'); 
            // $vreg->pincode = $request->input('pin'); 
            // $vreg->mobile_no = $request->input('mobile_no'); 
            // $vreg->email = $request->input('email'); 
            // $vreg->p_points = $request->input('point'); 
            $pin = $request->input('pin');
            $vreg->name = $name;
            $vreg->gender = $gender;
            $vreg->shop_name = $shop_name; 
            $vreg->shop_license = $s_license;
            $vreg->phone = $request->input('phone');;
            $vreg->address = $address;
            $vreg->state = $state; 
            $vreg->city = $city; 
            $vreg->pincode = $pin;
            $vreg->mobile_no = $mobile_no;
            $vreg->email = $email; 
            $vreg->password = $password;
            if($request->file('profile'))
            {
                if($request->hasfile('profile'))
                {
                    $files = $request->file('profile');
                    $images = $files->getClientOriginalName();
                    $files->move(public_path()."/docs/", $images);
                    $temp = $temp+5;
                    $vreg->p_image = $images;
                 }
            }else{
                $vreg->p_image = $request->input('profile1');
                $temp = $temp+5;
            }

            if($request->file('adhar'))
            {
                if($request->hasfile('adhar'))
                {
                    $file1 = $request->file('adhar');
                    $image1 = $file1->getClientOriginalName();
                    $file1->move(public_path()."/docs/", $image1);
                    $temp = $temp+5;
                    $vreg->adhar = $image1;
                }
            }else{
                $vreg->adhar = $request->input('adhar1');
                $temp = $temp+5;
            }

            if($request->file('pan'))
            {
                if($request->hasfile('pan'))
                {
                    $file2 = $request->file('pan');
                    $image2 = $file2->getClientOriginalName();
                    $file2->move(public_path()."/docs/", $image2);
                    $temp = $temp+5;
                    $vreg->pan = $image2;
                }
            }else{
                $vreg->pan = $request->input('pan1');
                $temp = $temp+5;
            }

            if($request->file('fssai'))
            {
                if($request->hasfile('fssai'))
                {
                    $file4 = $request->file('fssai');
                    $image4 = $file4->getClientOriginalName();
                    $file4->move(public_path()."/docs/", $image4);
                    $temp = $temp+5;
                    $vreg->fssai = $image4;
                }
            }else{
                $vreg->fssai = $request->input('fssai1');
                $temp = $temp+5;
            }

            if($request->file('lice'))
            {
                if($request->hasfile('lice'))
                {
                    $file3 = $request->file('lice');
                    $image3 = $file3->getClientOriginalName();
                    $file3->move(public_path()."/docs/",$image3);
                    $temp = $temp+5;
                    $vreg->license = $image3;
                }
            }else{
                $vreg->license = $request->input('lice1');
                $temp = $temp+5;
            }
            $vreg->update();
            
            // $vreg = VRegisterModel::where('id',$id)->first();
            // $vreg->name = $request->input('name'); 
            // $vreg->gender = $request->input('gender'); 
            // $vreg->shop_name = $request->input('shop_name'); 
            // $vreg->shop_license = $request->input('s_license');
            // if($request->file('shoplogo'))
            // {
            //     if($request->hasfile('shoplogo'))
            //     {
            //         $file_s = $request->file('shoplogo');
            //         $image_s = $file_s->getClientOriginalName();
            //         $file_s->move(public_path()."/docs/", $image_s);
            //         $vreg->shop_logo = $image_s;
            //      }
            // }else{
            //     $vreg->shop_logo = $request->input('shoplogo1');
            // }
            // $vreg->address = $request->input('address'); 
            // $vreg->state = $request->input('state'); 
            // $vreg->city = $request->input('city'); 
            // $vreg->pincode = $request->input('pin'); 
            // $vreg->mobile_no = $request->input('mobile_no'); 
            // $vreg->email = $request->input('email'); 
            // $vreg->p_points = $request->input('point'); 
            // if($request->file('profile'))
            // {
            //     if($request->hasfile('profile'))
            //     {
            //         $files = $request->file('profile');
            //         $images = $files->getClientOriginalName();
            //         $files->move(public_path()."/docs/", $images);
            //         $vreg->p_image = $images;
            //      }
            // }else{
            //     $vreg->p_image = $request->input('profile1');
            // }
            // if($request->file('adhar'))
            // {
            //     if($request->hasfile('adhar'))
            //     {
            //         $file1 = $request->file('adhar');
            //         $image1 = $file1->getClientOriginalName();
            //         $file1->move(public_path()."/docs/", $image1);
            //         $vreg->adhar = $image1;
            //     }
            // }else{
            //     $vreg->adhar = $request->input('adhar1');
            // }
            // if($request->file('pan'))
            // {
            //     if($request->hasfile('pan'))
            //     {
            //         $file2 = $request->file('pan');
            //         $image2 = $file2->getClientOriginalName();
            //         $file2->move(public_path()."/docs/", $image2);
            //         $vreg->pan = $image2;
            //     }
            // }else{
            //     $vreg->pan = $request->input('pan1');
            // }
            // if($request->file('fssai'))
            // {
            //     if($request->hasfile('fssai'))
            //     {
            //         $file4 = $request->file('fssai');
            //         $image4 = $file4->getClientOriginalName();
            //         $file4->move(public_path()."/docs/", $image4);
            //         $vreg->fssai = $image4;
            //     }
            // }else{
            //     $vreg->fssai = $request->input('fssai1');
            // }
            // if($request->file('lice'))
            // {
            //     if($request->hasfile('lice'))
            //     {
            //         $file3 = $request->file('lice');
            //         $image3 = $file3->getClientOriginalName();
            //         $file3->move(public_path()."/docs/",$image3);
            //         $vreg->license = $image3;
            //     }
            // }else{
            //     $vreg->license = $request->input('lice1');
            // }
            $fssai_no = $request->input('fssai_no');
            if($fssai_no != ""){
                $temp = $temp+5;
            }
            $vreg->fssai_no = $fssai_no;
            $vreg->p_points = $temp;
            $vreg->update();
            return redirect('/my_dashboard')->with('alert','Profile Update Successfully!');

 
    }
    public function Upload_Docs(Request $request,$id)
    {
        $temp = 0;
        dd($request->input('profile'));
        $vreg = VRegisterModel::where('id',$id)->first();
        $vr = VRegisterModel::where('id',$id)->get();
        if($vr != null){
            foreach($vr as $value){
                $point = $value->p_points;
            }
            $temp = $point;
            if($request->hasfile('profile'))
            {
                $files = $request->file('profile');
                $images = $files->getClientOriginalName();
                $files->move(public_path()."/docs/", $images);
                $vreg->p_image = $images;
                $vreg->p_points = $temp+5;
                $vreg->update();
             }
            if($request->hasfile('adhar'))
            {
                $file1 = $request->file('adhar');
                $image1 = $file1->getClientOriginalName();
                $file1->move(public_path()."/docs/", $image1);
                $vreg->adhar = $image1;
                 $vreg->p_points = $temp+5;
                $vreg->update();
            }
            if($request->hasfile('pan'))
            {
                $file2 = $request->file('pan');
                $image2 = $file2->getClientOriginalName();
                $file2->move(public_path()."/docs/", $image2);
                $vreg->pan = $image2;
                 $vreg->p_points = $temp+5;
                $vreg->update();
            }
            if($request->input('fssai_no')!= ''){
                $vreg->fssai_no = $request->input('fssai_no');
                $vreg->update();
            }
            if($request->hasfile('fssai'))
            {
                $file4 = $request->file('fssai');
                $image4 = $file4->getClientOriginalName();
                $file4->move(public_path()."/docs/", $image4);
                $vreg->fssai = $image4;
                $vreg->p_points = $temp+5;
                $vreg->update();
            }
            if($request->hasfile('lice'))
            {
                $file3 = $request->file('lice');
                $image3 = $file3->getClientOriginalName();
                $file3->move(public_path()."/docs/",$image3);
                $vreg->license = $image3;
                 $vreg->p_points = $temp+5;
                $vreg->update();
            }
         return redirect()->back()->with('alert','Documents Uploaded Successfully');  
        }
            // $vreg->fssai_no = $request-input('fssai_no');
            // $vreg->update();
            // return redirect('/my_profile')->with('alert','Documents Uploads Successfully!');
    }
    
    
    
        // public function referral_count()
    // {
    //     $usr_id = session('user.id');

    //     $ref_count = UserTblModel::where('product_name','Shampoo')->first();

    //     if($ref_count){
    //         $refCategory = VRegisterModel::where('id',$usr_id)->first();

    //         VRegisterModel::where('id',$usr_id)->update([
    //             'reffered_by' => $refCategory->reffered_by + 1,
    //             'no_of_refs' => $refCategory->no_of_refs + 1,
    //         ]);
    //     }
    // }

    public function genealogy_view(Request $request)
    {
         // $data['users'] = User::all();
        //$tid['user'] = User::all()->where('id','=', $id);
        //$tid = $id;
        // return view('genealogy')->with('users', $data)->with('user_id', $id);
        
            // return view('genealogy', $data);
        $user = session('user.vens_id');

        $users = PRegisterModel::where('ref_id',$user)->get();
        return view('geneology',compact('users'));

    }
    public function genealogy_custmer(Request $request)
    {
        $user = session('user.id');
        $all_users = PRegisterModel::where('ref_id',$user)->get();
        $cust = PRegisterModel::where('id',$user)->get();
        return view('geneology1',compact('all_users','cust'));
    }

    
    public function e_store(Request $request)
    {

        $emps_id = Helper::IDGenerator(new ERegisterModel,'emps_id',5,'EMP',$request->input('name'));
        $ereg = new ERegisterModel();
        $ereg->emps_id = $emps_id;
        $ereg->name = $request->input('name'); 
        $ereg->gender = $request->input('gender'); 
        $ereg->mobile_no = $request->input('mobile_no'); 
        $ereg->email = $request->input('email');
        $ereg->address = $request->input('address'); 
        $ereg->city = $request->input('city'); 
        $ereg->pincode = $request->input('pin'); 
        $ereg->password = $request->input('password');  
        $ereg->aadhar_no = $request->input('uid');
        if($request->hasfile('profile_i'))
        {
            $filese = $request->file('profile_i');
            $imagese = $filese->getClientOriginalName();
            $filese->move(public_path()."/docs/", $imagese);
            $ereg->p_image = $imagese;
         }
        if($request->hasfile('aadhar'))
        {
            $file1 = $request->file('aadhar');
            $image1 = $file1->getClientOriginalName();
            $file1->move(public_path()."/docs/", $image1);
            $ereg->aadhar = $image1;
         }
           if($request->hasfile('pan'))
        {
            $file2 = $request->file('pan');
            $image2 = $file2->getClientOriginalName();
            $file2->move(public_path()."/docs/", $image2);
            $ereg->pan = $image2;
         }
           if($request->hasfile('passbook'))
        {
            $file3 = $request->file('passbook');
            $image3 = $file3->getClientOriginalName();
            $file3->move(public_path()."/docs/",$image3);
            $ereg->passbook = $image3;
         } 
        $ereg->save();
        return view('login');


    }
    public function send(Request $request,$id)
    {
        $data = ERegisterModel::find('id',$id)->get();
        return response()->json($data);
    }
    public function Contact_us(Request $request)
    {

       $enquiry = new EnquiryModel(); 
       $enquiry->name = $request->input('name');
       $enquiry->email = $request->input('email'); 
       $enquiry->mobile_no = $request->input('mobile');
       $enquiry->subject = $request->input('subject');
       $enquiry->message = $request->input('message');
       $enquiry->save();
       // Mail::send('email',['email'=>$request->input('email')],function ($mail) use($request){
       //      $mail->from('rajrbanswal@gmail.com');
       //      $mail->to($request->input('email'));
       //  });        


       return redirect('/')->with('alert','Enquiry send Successfully');
    }

    public function all_Enquiry(Request $request)
    {
        $enquiry = EnquiryModel::orderBy('id', 'DESC')->get();;
        return view('admin.all_enquiry',compact('enquiry'));
    }
    public function delete(Request $request,$id)
    {
        $enquiry = EnquiryModel::find($id)->where('id', $id)->delete();
        if($enquiry){
            return redirect()->back();
        }
        else{
            return redirect()->back();
        }
   }

   public function allCustomers(Request $request)
   {
        $curTime = new \DateTime();
        $created_at = $curTime->format("Y-m-d");
        $patient['today'] = PurchaseHistory :: Where("created_at", "like", "%{$created_at}%")->get();
            $user_id = session('user.id');
            // dd($user_id);
            $pat = PurchaseHistory::where('vendor',$user_id)->first();
            if($pat != null){
                $patient['patient'] = PurchaseHistory::where('vendor',$user_id)->orderBy('id', 'DESC')->get();
                $pati = PurchaseHistory::where('vendor',$user_id)->get();
                foreach ($pati as $value) {
                    $us = $value->user_id;
                    $vndr = $value->vendor;
               
                }
                $patient['patient1'] = PRegisterModel::all();
                $patient['vndr'] = VRegisterModel::where('id',$vndr)->get();
                return view('all_customers',$patient);
            }else{
                return redirect('/my_dashboard')->with('alert','Customer not Found');
            } 
   }
   public function Ucd(Request $request, $c_id)
   {
        $c_id = $request->c_id;
        $pati = PurchaseHistory::where('id',$c_id)->first();
        if ($pati != null) {
            $patient = PurchaseHistory::where('id',$c_id)->get();
            foreach ($patient as $value) {
           $us = $value->user_id;
           $ven = $value->vendor;
        }
        $patient1 = PRegisterModel::where('id',$us)->get();
        $vndr = VRegisterModel::where('id',$ven)->get();
        return view('customer_view',compact('patient','patient1','vndr'));
        }
        

   }
   public function Udc(Request $request, $c_id)
   {
       $date1 = Carbon::now()->format("d-m-Y");
    //   $c_id = $request->c_id;
        $rrb = 1;
        $srb = 0;
        $arb = 'done';
        $nor = 0;
        $user_id = session('user.vens_id');
        // dd($c_id);
       $patient = PurchaseHistory::where([['user_id',$c_id],['status',$srb]])->first();
       $patient->status = $rrb;
       $patient->sold_date = $date1;
       if($patient!=null){
            $phist = PurchaseHistory::where('user_id',$c_id)->get();
            foreach ($phist as $value) {
                $get_qunt = $value->quantity;
                $vendr = $value->vendor;
                $kit = $value->kit;
            }
            
            $get_remainingq = OrederModel::where([['product_name',$kit],['vendor_id',$vendr],['status',$arb]])->first();
            if( $get_remainingq != null){
                $get_remainingq = OrederModel::where([['product_name',$kit],['vendor_id',$vendr],['status',$arb]])->get();
                foreach ($get_remainingq as $key) {
                    $rem_quantity = $key->remaining_q;
                }
                if($rem_quantity>0){
                
                $ordrminus = OrederModel::where([['product_name',$kit],['vendor_id',$vendr],['status',$arb],['remaining_q','>',$srb]])->first();
                $ordrminus->remaining_q = $rem_quantity-$get_qunt;
                $ordrminus->update();
                if($patient->update()){
                    //  $abc = PurchaseHistory::where([['user_id','=',$c_id],['status','=',$rrb]])->first();
                    $get_ref = PRegisterModel::where('id',$c_id)->get();
                    foreach($get_ref as $value){
                        $rfr_id = $value->ref_id;
                    }
                    if($rfr_id != null){
                       $refCategory2 = PRegisterModel::where([['id',$c_id],['ref_id',$rfr_id]])->get();
                       foreach($refCategory2 as $value2)
                        {
                            $nor = $value2->no_of_refs;
                            $rfrto = $value2->reffered_by;
                        }
                         $refCategory4 = PRegisterModel::where([['id',$c_id],['ref_id',$rfr_id]])->first();
                         $refCategory4->reffered_by = $rfrto+1;
                         $refCategory2->no_of_refs = $nor+1;
                        $refCategory4->update();
                     
                        $refCategory = VRegisterModel::where('vens_id',$rfr_id)->first();
                        $refCategory->update([
                                'reffered_by' => $refCategory->reffered_by + 1,
                                'no_of_refs' => $refCategory->no_of_refs + 1,
                            ]);
                    }else{
                        $refCategory1 = PRegisterModel::where('id',$c_id)->get();
                        foreach($refCategory1 as $value1)
                        {
                            $nor = $value->no_of_refs;
                        }
                        $refCategory3 = PRegisterModel::where('id',$c_id)->first();
                        $refCategory3->no_of_refs = $nor+1;
                        $refCategory3->update();
                    }
                }
            
            return redirect('/all_customers')->with('alert','Customer Updated Successfully'); 
            }else{
                return redirect('/all_customers')->with('alert','Insufficient Product Quantity?'); 
            }
            }else{
                return redirect()->back()->with('alert','Product Not Available'); 
            }
            
       }else{
           return redirect('/all_customers')->with('alert','Customer Not Updated'); 
       }

       
   }
   public function v_details1(Request $request)
   {
        $user_id = session('user.id');
        $sts = 'done';
        $status = 1;
       // dd($user_id);
        $total_amount = DB::table('purchasepp')
                ->select(DB::raw('SUM(buying_price) as tamount'))->where([['vendor',$user_id],['status',$status]])
                ->get();
       $pat = PurchaseHistory::where('vendor',$user_id)->first();
       if($pat != null){
            $patient = PurchaseHistory::where('vendor',$user_id)->get();
            foreach ($patient as $value) {
               $us = $value->user_id;
               $vndr = $value->vendor;
           }
           $product = OrederModel::where([['vendor_id',$user_id],['status',$sts],['remaining_q','>',$status]])->get();
           $patient1 = PRegisterModel::where('id',$us)->get();
           $vndr = VRegisterModel::where('id',$vndr)->get();
           return view('v_details1',compact('patient','patient1','vndr','total_amount','product'));
       }else{
       $patient = '';
       $patient1 = ''; 
       $product = OrederModel::where([['vendor_id',$user_id],['status',$sts],['remaining_q','>',$status]])->get();
          $vndr = VRegisterModel::where('id',$user_id)->get(); 
          return view('v_details1',compact('patient','patient1','vndr','total_amount','product'));

       }
   }
   public function Send_Act_Request(Request $request)
   {
        $date = date('Y-m-d');
        $newDate = Carbon::createFromFormat('Y-m-d', $date)->format('d-m-Y');
       $requests = new VendorRequestModel();
        if($request->hasfile('my_file'))
            {
                $file1 = $request->file('my_file');
                $image1 = $file1->getClientOriginalName();
                $file1->move(public_path()."/docs/", $image1);
                $requests->images = $image1;
                // $requests->save();
            }
       $requests->name = $request->input('name');
       $requests->v_id = $request->input('v_id');
       $requests->mobile_no = $request->input('mobile');
       $requests->reason = $request->input('reason');
       $requests->document = $request->input('doc');
       $requests->date = $newDate;
       $requests->created_at = $newDate;
     

       $requests->save();
       return redirect()->back()->with('alert',"Request Send Successfully");

   }
   public function add_Diagnosis(Request $request)
   {
      $dia = DiagnosisModel::all();
      return view('admin.all_diagnosis',compact('dia'));
   }
   public function create_p(Request $request)
   {
      $product = ProductModel::all();
      return view('admin.add_diagnosis',compact('product'));
   }

   public function store_dia(Request $request)
   {
     $types = $request->input('diagnotype');
     $dia = DiagnosisModel::where('type',$types)->first();
      if($dia != null){
        return redirect()->back()->with('alert','Diagnosis Type Already Exist');
      }else{
        $diagno = new DiagnosisModel();
        $diagno->type = $request->input('diagnotype');
        $diagno->diagnosis = $request->input('diagno');
        $kit = $request->input('kit');
        $product = ProductModel::where('id',$kit)->get();
        foreach ($product as $value) {
          $product_name = $value->product_name;
          $price = $value->rate;
        }
        $diagno->product_name = $product_name;
        $diagno->price = $price;
        $diagno->suggetion = $request->input('sugge');
        $diagno->save();
        return redirect('all_diagnosis')->with('alert','Data Saved Successfully');
      }
   }
    public function vendor_kyc(Request $request,$v_id)
    {
        $admin = session('admin.username');
     $active = '1';
     $vendor_kyc = VRegisterModel::where('id',$v_id)->first();
     $vendor_kyc->status = $active;
     $vendor_kyc->kyc_confirm_by = $admin;
     $vendor_kyc->update();

     return redirect()->back()->with('alert','Vendor Activated');
    }
    public function vendor_active(Request $request,$v_id)
    {
        $admin = session('admin.username');
        $status = null;
         $active = '1';
         $vendor_kyc = VRegisterModel::where('id',$v_id)->first();
         $vendor_kyc->status = $active;
         $vendor_kyc->kyc_confirm_by = $admin;
         $vendor_active = VendorRequestModel::where([['v_id',$v_id],['status',$status]])->first();
         if($vendor_active != null){
             $vendor_active->status = $active;
             $vendor_active->request_confirm_by = $admin;
             $vendor_active->update();
        }
        $vendor_kyc->update();

        return redirect()->back()->with('alert','Vendor Activated');
    }
   
   public function vendor_deactive(Request $request,$v_id)
   {
     $deactive = 0;
     $vendor_kyc = VRegisterModel::where('id',$v_id)->first();
     $vendor_kyc->status = $deactive;
     $vendor_kyc->update();

     return redirect()->back()->with('alert','Vendor Deactivated');
   }
   public function Get_Vendor_List(Request $request,$min,$max)
   {
       $vlist = DB::table('vendor')->whereBetween('created_at',[$min,$max])
                ->get();
        return response()->json($vlist);
   }
   public function edit_diagnosis(Request $request,$id)
   {
       $product = ProductModel::all();
      $diagno = DiagnosisModel::where('id',$id)->get();
      return view('admin.edit_diagnosis',compact('diagno','product'));
   }
   public function update_diagnosis(Request $request, $id)
   {
        $dia = DiagnosisModel::where('id',$id)->first();
        $dia->type = $request->input('diagnotype');
        $dia->diagnosis = $request->input('diagno');
        $kit = $request->input('kit');
          if($kit!=null){
              $product = ProductModel::where('id',$kit)->get();
              foreach ($product as $value) {
                $product_name = $value->product_name;
                $price = $value->rate;
              } 
              $dia->product_name = $product_name;
              $dia->price = $price;
          }else{
              $dia->product_name = $request->input('kit1');
              $dia->price = $request->input('price1');
          }
        $dia->suggetion = $request->input('sugge');
        $dia->update();
        
        return redirect('all_diagnosis')->with('alert','Data Updated');
   }
    public function CustImage(Request $request)
    {
        $date = Carbon::now()->format("Y-m-d");
        $user_id = session('user.id');
        $cust_image = new CustomerImageModel();
        $cust_image->user_id = $user_id;
        if($request->hasfile('image'))
        {
            $filese = $request->file('image');
            $imagese = $filese->getClientOriginalName();
            $filese->move(public_path()."/custom_image/", $imagese);
            $cust_image->top_image = $imagese;
         }

        if($request->hasfile('image2'))
        {
            $file1 = $request->file('image2');
            $image1 = $file1->getClientOriginalName();
            $file1->move(public_path()."/custom_image/", $image1);
            $cust_image->right_image = $image1;
         }
           if($request->hasfile('image3'))
        {
            $file2 = $request->file('image3');
            $image2 = $file2->getClientOriginalName();
            $file2->move(public_path()."/custom_image/", $image2);
            $cust_image->left_image = $image2;
         }
           if($request->hasfile('image4'))
        {
            $file3 = $request->file('image4');
            $image3 = $file3->getClientOriginalName();
            $file3->move(public_path()."/custom_image/",$image3);
            $cust_image->back_image = $image3;
         } 
         $cust_image->date = $date;
         $cust_image->save();
         return redirect('/images')->with('alert','Image Uploaded');
    }
    public function Cash_Claim_Request(Request $request)
    {
        $date = Carbon::now()->format("Y-m-d"); 
        $cash_req = new CCRModel();
        $cash_req->u_name = $request->input('u_name');
        $cash_req->mobile = $request->input('mobile');
        $cash_req->user_id = $request->input('user_id');
        $cash_req->points = $request->input('points');
        $cash_req->subject = $request->input('subject');
        $cash_req->upi_acc = $request->input('upi_acc');
        $cash_req->created_at = $date;
        $cash_req->save();
        return redirect()->back()->with('alert','Request Send');
    }
}
