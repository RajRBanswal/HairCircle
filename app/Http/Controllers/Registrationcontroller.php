<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AdminUserController;
use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\Bank;
use App\Models\Image_Upload;
use App\Models\User;
use App\Models\Amount;
use App\Models\Task;
use App\Models\Sms;
use App\Models\Commision;
use App\Models\CalculateData;
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

class Registrationcontroller extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }
    


    public function viewProfile(){
        $data = Registration::all();

        
        return view('/welcome');   
    }

    public function createProfile(Request $request){
       session_start();
       //ob_start();    
       $id=session()->get('id');
       $layer_api = new Payment_layer();
       $data = $layer_api->getPaymentData(950.00,$request->name,$request->email,$request->mobile);
        //ob_start();
        
        // Check Sponsor Id in to database ------------------------@tilesh
        $sid = $request->sponserid;
        $result = User::find($sid);
        if($result != null)
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
                $data['sponserid'] = $id;
                $data['mobile'] = $request->mobile;
                $data['email'] = $request->email;
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
                    
                    return view("payment_getway_after_login",$data);
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
    
    
    public function view_activation(Request $request){
       session_start();
       //ob_start();    
       $id=session()->get('id');
       $logged_user = User::find($id);
       
       $pass_amount = 950.00;
       $amount = Amount::find($id);
       if( $amount->total_amount <= 950.00 ) {
       $pass_amount = 950.00 - $amount->total_amount;
       } else {
           $pass_amount = 0;
       }
                    
       if($pass_amount == 0) {
            
           $logged_user->status = "active";
           $logged_user->save();
                            
           $amount = Amount::find($id);
           $pass_amount = $amount->total_amount - 950.00;
           $amount->total_withdraw_amount = $amount->total_withdraw_amount + 950.00;
           $amount->total_amount = $pass_amount;
           $amount->save();
                                
           return Redirect::to('/index');
       } else {
       
           $layer_api = new Payment_layer();
           $data = $layer_api->getPaymentData($pass_amount,$logged_user->name,$logged_user->email,$logged_user->mobile);
           $data['sponserid'] = $logged_user->sponserid;
           $data['password'] = $logged_user->password;
           $data['password1'] = $logged_user->password1;
           $data['pimg'] = $logged_user->pimg;
           
           //dd($data);
           return view("payment_getway_after_login_to_activate",$data);
	    }
    }
    
    
    public function payment_after_login(Request $request) {
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
            return Redirect::to('/registration')->with('error',$data['error']);
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
                    
                    return Redirect::to('/registration');
        }
   }
   
    public function payment_after_login_to_activate(Request $request) {
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
            return Redirect::to('/home')->with('error',$data['error']);
        }
        else {
            $id = $id=session()->get('id');
            
            $logged_user = User::find($id);
            $logged_user->status = "active";
            $logged_user->save();
            
            $amount = Amount::find($id);
            $amount->total_withdraw_amount = $amount->total_withdraw_amount + 950.00;
            $amount->total_amount = 0;
            $amount->save();
                    
            return Redirect::to('/home');
        }
   }

    public function showProfile()
    {
        $profileData1 = Auth::user()->id;
       // $profileData = Auth::user()->find($profileData1);
       // $user1=DB::table('users')->find($profileData);
       // return $profileData['data']['mobile'];
       // $profileData1 = Registration::all();
       $results = DB::select( DB::raw("SELECT * FROM users WHERE id = :id"), array(
        'id' => $profileData1,
      ));
     
     
       return view('/profile',['data'=>$results]);
      
        
    }


    // public function updateProfile($id)
    // {
    //     $data1 = Registration::all();       
    //     return view('/profile',['profileUpdate'=>$data1]);               
    // }
   
    public function insertUpdate(Request $request)
    {
       $validatedData=Validator::make($request->all(),[
        "name"=>"required",
       // "mobile"=>"required|unique:users|max:10|min:10"

       ]);
       if($validatedData->fails())
       {
           return Redirect::back()->withErrors($validatedData);
       }
       else{
            $data = User::find($request->id);
            $data->name = $request->name;
          //  $data->mobile = $request->mobileno;
            $data->save();
            return Redirect::back()->with("success","Data Updated");
       }
    
    }

    public function my_direct()
    {
        $id=session()->get('id');
        $data = array();
        
        
        if($id > 12620 ) {
            $data = CalculateData::calculateUserData($id);
        } else {
            $data = CalculateData::calculateFirstSixtyUserData($id);
        }
        
        //dd($data);
     
        return view('cards',$data);
    }
    
    public function registration()
    {
        return view("registration");
    }


    public function uploadkyc()
    {
        $id=session()->get('id');
        $data['user']=DB::select(DB::raw('SELECT name from users where id=:id'),array(
            'id'=>$id,
            
        ));
        $data['result']= Bank::find($id);
        
       // return $data;   
       return view('uploadkyc',$data);
    }

    public function upload_kyc_store(Request $request)
    {
        // dd($request);
        $validatedData=Validator::make($request->all(),[
            'account_type'=>'required',
            'account_no'=>'required',
            'bank'=>'required',
            'branch_name'=>'required',
            'ifsc'=>'required',
            // 'pan'=>'required',
            'panno'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'passbook' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($validatedData->fails())
        {
            $request->flash();
            return Redirect::back()->withErrors($validatedData);
        }
        else{
            
            
        
            $id=session()->get('id');
            $acc_type=$request->account_type;
            $acc_no=$request->account_no;
            $bank=$request->bank;
            $branch_name=$request->branch_name;
            $ifsc=$request->ifsc;
            // $pan=$request->pan;
            $panno=$request->panno;
            
            
            // add Image input ------------------------------@tilesh
            
           $file_name = "";
           $file_name1 = "";
           
           $upload = new Image_Upload();
            
            if($files = $request->file('image') ) {
                
                $file_name = $upload->uploadImage($files,'bank');
                
            }
            
            if($files1 = $request->file('passbook')){
                
                 $file_name1 = $upload->uploadImage($files1,'bank/passbook');
            
            }
             
            //  $file_name = "pan/".$pimg;
            //  $pb_name = "passbook".$pb_name;
             
             
             
                // dd($file_name1);
                  
            // $imageName = time().'.'.$request->image->extension();  
   
            // $request->image->move(public_path('images'), $imageName);
            
        //     dd($imageName);
           
            $user_id=DB::select(DB::raw('SELECT id from banks where id=:id'),array(
                'id'=>$id,
            ));
            if($user_id)
            {
                $users=Bank::find($id);
                $users->account_type=$acc_type;
                $users->account_no=$acc_no;
                $users->bank=$bank;
                $users->branch_name=$branch_name;
                $users->ifsc=$ifsc;
                // $users->pan=$pan;
                $users->panno=$panno;
                $users->image= $file_name;
                $users->pass_book = $file_name1;
                $users->status = 'request';
                $users->save();
               
            }
            else{
                DB::table('banks')->insert([
                    'id' => $id,
                    'account_type' => $acc_type,
                    'account_no'=>$acc_no,
                    'bank'=>$bank,
                    'branch_name'=>$branch_name,
                    'ifsc'=>$ifsc,
                    // 'pan'=>$pan,
                    'panno'=>$panno,
                    'image'=> $file_name,
                    'pass_book'=>$file_name1,
                
                 
    
                ]);
            }
        
            return Redirect::back()->with('message','Your kyc details are sucessfully uploaded');
            
        }
        
    }
    
    public function againkyc()
    {
         $id=session()->get('id');
         $users=Bank::find($id);
            $users->delete();
         return Redirect::back();
    }


    public function mywalllet_list()
    {
       
       $id=session()->get('id');
       $data['amount']=Amount::find($id);
     
       return view('wallet',$data);
   
    }



   public function my_direct_report()
    {
        $id=session()->get('id');
        /*$user_id=DB::select(DB::raw('SELECT t1.id as lev1, t2.id as lev2, t3.id as lev3,t4.id as lev4,t5.id as
        lev5,t6.id as lev6,t7.id as lev7, t8.id as lev8 from users as t1 left join users as t2 on (t2.sponserid=t1.id) left join users as t3 on(t3.sponserid=t2.id) 
        left join users as t4 on(t4.sponserid=t3.id) left join users as t5 on(t5.sponserid=t4.id) left join users as t6 on(t6.sponserid=t5.id) left join users as t7
         on(t7.sponserid=t6.id) left join users as t8 on(t8.sponserid=t7.id) where t1.id=:id'),array(
            'id'=>$id,
        ));
     
      // return $user_id;
       $lev1=$lev2=$lev3=$lev4=$lev5=$lev6=$lev7=$lev8=array();
       $c=0;
       foreach($user_id as $x=>$y)
       {
          // $lev1[$c++]=explode(" ",$y->lev1); 
           array_push($lev1,$y->lev1);
           array_push($lev2,$y->lev2);
           array_push($lev3,$y->lev3);
           array_push($lev4,$y->lev4);
           array_push($lev5,$y->lev5);
           array_push($lev6,$y->lev6);
           array_push($lev7,$y->lev7);
           array_push($lev8,$y->lev8);
         
       }
    

       $users_data['count_level21']=array_filter(array_unique($lev2));
       $users_data['count_level31']=array_filter(array_unique($lev3));
       $users_data['count_level41']=array_filter(array_unique($lev4));
       $users_data['count_level51']=array_filter(array_unique($lev5));
       $users_data['count_level61']=array_filter(array_unique($lev6));
       $users_data['count_level71']=array_filter(array_unique($lev7));
       $users_data['count_level81']=array_filter(array_unique($lev8));
       $list_count=(array_merge($users_data['count_level21'],$users_data['count_level31'],$users_data['count_level41'],$users_data['count_level51'],$users_data['count_level61'],$users_data['count_level71'],$users_data['count_level81']));
      

      $list_users_count='';
      $level2_active_users_count=count(DB::table('users')  //second level active user count
                   ->whereIn('id', $users_data['count_level21'])
                   ->where('status','active')
                   ->select('id')
                  ->get());

     $level3_active_users_count=count(DB::table('users')  //3 level active user count
                     ->whereIn('id', $users_data['count_level31'])
                     ->where('status','active')
                     ->select('id')
                    ->get());

     $level4_active_users_count=count(DB::table('users')  //4 level active user count
                     ->whereIn('id', $users_data['count_level41'])
                     ->where('status','active')
                     ->select('id')
                    ->get());

      $level5_active_users_count=count(DB::table('users')  //5 level active user count
                     ->whereIn('id', $users_data['count_level51'])
                     ->where('status','active')
                     ->select('id')
                    ->get());
    
      $level6_active_users_count=count(DB::table('users')  //6 level active user count
                     ->whereIn('id', $users_data['count_level61'])
                     ->where('status','active')
                     ->select('id')
                    ->get());
      
      $level7_active_users_count=count(DB::table('users')  //7 level active user count
                     ->whereIn('id', $users_data['count_level71'])
                     ->where('status','active')
                     ->select('id')
                    ->get());*/
                    
        if($id > 12620 ) {
            $data = CalculateData::calculateUserDataDirectReport($id);
        } else {
            $data = CalculateData::calculateFirstSixtyUserDataDirectReport($id);
        }                
     
       //dd($data);
       $users_data = $data['users_data']; 
       
       //dd($users_data);
      
       return view('direct_report',$users_data);
    }

    public function submit_task(Request $request)
    {
        $id = Auth::user()->id;
        //echo "UserId : ". $id;
        $validatedData=Validator::make($request->all(),[
            'task'=>'mimes:jpeg,jpg,png,gif|required|max:10000'
        ]);
        if($validatedData->fails())
        {
            return Redirect::back()->withErrors($validatedData);
        }
        else{
           // $pimg= $request->pimg->getClientOriginalName();
           //$file_name=$request->file('task')->store('task','public');
            //Swapna image upload logic
            $file_name = "";
            if($files = $request->file('task')) {
                $upload = new Image_Upload();
                $file_name = $upload->uploadImage($files,'task');
            }
            if($file_name == "Error") {
                return Redirect::back()->with("message","Error image uploading");
            }
           if($file_name)
           {
               $file_name = "task/".$file_name;
               $user_id=$id;
               $data=new Task;
               $data->user_id=$user_id;
               $data->task_img=$file_name;
               $data->status="pending";
               $data->save();
               return Redirect::back()->with("message","Your task sucessfully uploaded.");
               
           }
           else{
            return Redirect::back()->with("message","Data uploadation fail");
           }

        }
        //return $request->all();

    }
    
    public function save_slideshow_image(Request $request){
        $validatedData=Validator::make($request->all(),[
            'slideshow'=>'mimes:jpeg,jpg,png,gif|required|max:10000'
        ]);
        if($validatedData->fails())
        {
            return Redirect::back()->withErrors($validatedData);
        }
        else{
          
            $file_name = "";
            if($files = $request->file('slideshow')) {
                $upload = new Image_Upload();
                $file_name = $upload->uploadImage($files,'slideshow');
            }
            if($file_name == "Error") {
                return Redirect::back()->with("message","Error image uploading");
            }
           if($file_name)
           {
               $file_name = "slideshow/".$file_name;
               $user_id=$id;
               $data=new Slide_images;
               $data->image=$file_name;
               $data->created_at=Carbon::now();
               $data->updated_at=Carbon::now();
               $data->save();
               return Redirect::back()->with("message","Slideshow image Uploaded");
               
           }
           else{
            return Redirect::back()->with("message","Data uploadation fail");
           }
 
    }
    
    }    

}?>
