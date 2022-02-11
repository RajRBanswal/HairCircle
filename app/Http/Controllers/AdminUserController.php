<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers;
use App\Models\Registration;

use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\Image_Upload;
use App\Models\Withdraw_request;
use App\Models\Bank;
use App\Models\Transaction;
use App\Models\CalculateData;
use App\Models\SlideImages;
use App\Models\Commision;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;
use App\Models\Amount;
use App\Models\Question;
use App\Models\Sms;
use App\Models\PRegisterModel;
use App\Models\VRegisterModel;
use App\Models\ERegisterModel;
use App\Http\Middleware\AdminMiddleware;
use App\Models\PurchaseHistory;
use App\Models\SetScheduleModel;
use App\Models\ProductModel;
use App\Models\OrederModel;
use App\Models\TimeScheduleModel;
use App\Models\VendorRequestModel;
use App\Models\DisabledDateModel;
use App\Models\CCRModel;
use App\Models\CCSModel;
use App\Models\OfflineSoldModel;

class AdminUserController extends Controller
{
    public function __construct()
   {
       //$this->middleware('auth');
   }

   public function admin_register(Request $request)
   {
     $admin = new Admin();
     $admin->usertype = "admin";
     $admin->mobile = $request->input('mobile');
     $admin->email = $request->input('email');
     $admin->username = $request->input('user');
     $admin->password = $request->input('password');
     $admin->save();

     return redirect('/admin_panel')->with('message','Admin Register Successfully');

   }

   public function admin_frpass(Request $request)
   {
      $mobileoremail = $request->input('email_or_mo');
      $password = $request->input('password');
      $foradmin = Admin::where('mobile',$mobileoremail)->orWhere('email',$mobileoremail)->first();
      if($foradmin != null){
        $foradmin->password = $password;
        $foradmin->update();
        return redirect()->back()->with('message','Password Reset Successfully');
      }else{
        return redirect()->back()->with('message','Email Or Mobile Number Not Found?');
      }
   }
   

    
    
// login admin ----------------------------------------- @tilesh
public function admin_login(Request $request){
    $username = $request->user;
    $password = $request->pass;
    

    // $data = DB::table('admin_lowhere([[],[]get();
    $data = Admin::where([['username',$username],['password',$password]])->orWhere([['mobile',$username],['password',$password]])->first();
    // $user= $data->username;
    // $pass = $data->password;
    // if($user == $username AND $pass == $password)
    if($data)
    {
        $request->session()->put('admin',$data);
        // dd(session('user.usertype'));
        return redirect('/my_dashbord');
    } 
    else{
            return redirect()->back()->with('message',"Somthing went wrong please check...");
    }
     
    
    
}

public function All_Vndr_Cust(Request $request)
{
    $status = 0;
    $curTime = new \DateTime();
    $created_at = $curTime->format("Y-m-d");
    $all_data['request'] = VendorRequestModel::Where("created_at", "like", "%{$created_at}%")->where('status',NULL)->get();
    $all_data['vendors'] = VRegisterModel::orderBy('id', 'DESC')->get();
    $all_data['purchase_order'] = OrederModel::Where("created_at", "like", "%{$created_at}%")->where('status',NULL)->get();
    $all_data['customer'] = PRegisterModel::orderBy('id', 'DESC')->get();
    $all_data['product'] = ProductModel::all();
    $all_data['sold_offline'] = OfflineSoldModel::Where("created_at", "like", "%{$created_at}%")->get();
    $all_data['cash_claim'] = CCRModel::Where("created_at", "like", "%{$created_at}%")->get();
    $all_data['today'] = PRegisterModel::Where("created_at", "like", "%{$created_at}%")->get();
    return view('admin.dashbord',$all_data);
}

public function All_New_Customer(Request $request,$min,$max)
{   

    $curTime = new \DateTime();
    $new_cust = DB::table('set_schedule')->join('purchasepp','set_schedule.cust_id','=','purchasepp.user_id')->join('patient_register','set_schedule.cust_id','=','patient_register.id')->select('set_schedule.cust_id','set_schedule.fromtime','set_schedule.totime','set_schedule.date','purchasepp.kit','patient_register.name','patient_register.address','patient_register.mobile_no','set_schedule.status')->whereBetween('set_schedule.date',[$min,$max])->orderBy('set_schedule.created_at','DESC')->get();
    return response()->json($new_cust);
}
public function All_Questions(Request $request, $id)
{
    $ques = Question::where('user_id',$id)->get();
    return response()->json($ques);
}
public function All_User_Data(Request $request, $id)
{
    $setData = DB::table('set_schedule')->where('cust_id',$id)->get();
    return response()->json($setData);
}
protected function redirectTo()
    {
        if (session()->get('user.usertype') =='admin') {
            return 'dashboard';
        }else
        {
            return 'home';
        }
    }

    public function adminLogout(Request $request)
    {
        Session::flush();
        
        Auth::logout();

        return redirect('/admin_panel');
    }

//  Admin  change password ---------------------------------------------------@tilesh

public function change_pass_show(){
    return view('admin.change_password');

}

public function change_pass(Request $request){
    $number = $request->number;
    
    $create_otp = mt_rand(1000,9999);
    $otp['number'] = $create_otp;
    
        $message = "Your OTP is ".$create_otp." for www.haircircleindia.com ";
        $sms = new Sms;
        $sms->sendMessage($number,$message);
        if($sms->is_sent) {
            Session::flash('message','Send OTP Sucessfull');
        } else {
            Session::flash('message','Generate OTP Sucessfull but you will not recieve message');
        }
    
    return view('/otp_verify', $otp);
    
}

public function verify(Request $request, $id){
    $inputotp = $request->otp;
    $recived = $id;
    if($inputotp == $recived)
    {
        return view('/finally_change');    
    }
    else{
        return view('/change_password')->with('message', 'Password dont match');
    }
}

public function pass_update(Request $request){
    $new_pass = $request->new_pass;
    $com_pass = $request->com_pass;
    if($new_pass == $com_pass){
        $data = Admin::find(1);
        $data->password = $new_pass;
        $data->save();
        return redirect('change_password')->with('message', 'Password changed successfully');
    }
    else{
        return redirect('opt_verify')->with('message', 'Password dont match');
    }
    
}

    


// On Click Open Button ------------------------------------------------@tilesh
   public function open($id){
    // $data['open'] = User::find($id);
    // $data['kyc'] = Bank::find($id);
    // $data['transaction'] = Transaction::where("user_id", "=", "$id")->get();
    
    $producth = PurchaseHistory::where('user_id',$id)->first();
    if ($producth) {
      $producth = PurchaseHistory::where('user_id',$id)->get();
      foreach ($producth as $value) {
       $vendor = $value->vendor;
      }
      $product = ProductModel::all(); 
      $schedule = SetScheduleModel::where('cust_id',$id)->get();
      $datas = Question::where('user_id',$id)->get();
      $vendors = VRegisterModel::where('id',$vendor)->get();
      return view('admin.open',compact('datas','producth','vendors','schedule','product'));
    }else {
      $schedule = SetScheduleModel::where('cust_id',$id)->get();
      $vendors = '';
      $product = ProductModel::all(); 
      $producth = PurchaseHistory::where('user_id',$id)->get();
      $datas = Question::where('user_id',$id)->get();
      return view('admin.open',compact('datas','producth','vendors','schedule','product'));
    }
    
   }
   
  //Status change -------------------------------------- @tilesh
  
    public function change_status(request $request,$id){
    $data = User::find($id);
    $data->status = 'active';
    $data->save();
    $user['users'] = User::all();
    return view('/active', $user);
  }
   
    public function change_status_de(request $request,$id){
    $open = User::find($id);
    $open->status = 'deactive';
    $open->save();
    $user['users'] = User::all();
    return view('/deactive', $user);
  }

// On Click Task Button ------------------------------------------------@tilesh
public function gettask(request $request,$id){
    $data = new Task;
    $task = $data::all()->where('user_id', '=', $id);
    // dd($open);
    return view('admin_task')->with('open',$task);
}
   
   public function open_img(request $request,$id){
    $data = new Task;
    $task = $data::all()->where('id', '=', $id);
    // dd($open);
    return view('open_img')->with('open',$task);
   }
   
   // On Click Genealogy Button ------------------------------------------------@tilesh
    public function genealogy_view(request $request,$id){
      
        $data['users'] = User::all();
        //$tid['user'] = User::all()->where('id','=', $id);
        //$tid = $id;
        // return view('genealogy')->with('users', $data)->with('user_id', $id);
        $data['root_user_id'] = $id;
            return view('genealogy', $data);
    }


//    on Click edit Button ------------------------------------------------@tilesh
   public function edit($id){
       $edit = User::find($id);
       return view('edit')->with('edit',$edit);
   }
// Update Data ----------------------------------@tilesh
   public function update(Request $request,$id)
   {
        $user = User::find($id);
        $user->sponserid = $request->input('sponserid');
        $user->name = $request->input('name');
        $user->mobile = $request->input('mobile');
        $user->email = $request->input('email');
        if($user->update())
        {
            return redirect()->back()->with('msg','Data updated successfully'); 
        }
        else{
             return redirect()->back()->with('msg','Some Thing went Wrong');
        }
   }

// On Click Deleted Button ------------------------------@tilesh
   public function delete(Request $request,$id)
   {
    $user = User::find($id)->where('id', '=', $id)->delete();
    if($user){
        return redirect()->back()->with('msg','Member Deleted successfully');
    }
    else{
        return redirect()->back()->with('msg','Somthing went Wrong');
    }
   }

//    public function loadUser()
//    {
//        $data['registrations'] = Registration :: all();
       
//        return view('new_user',$data);
//    }

// Geting All Users Show on members page -------------------------------------------@tilesh
   public function getUser()
   {
        // $customer = PRegisterModel::all();


   
        $curTime = new \DateTime();
        $created_at = $curTime->format("Y-m-d");
    
       $customer['customer'] = PRegisterModel :: paginate(8);
       $customer['total'] = PRegisterModel :: all();
       $customer['total1'] = User :: all();
       $customer['today'] = PRegisterModel :: Where("created_at", "like", "%{$created_at}%")->get();

        $users = User::all();
         return view('admin.members',$customer,compact('users'));
         
  

       // return view('members',$data);
       
   }
   public function Get_Members_List(Request $request, $min,$max)
   {
      $user = PRegisterModel::orderBy('id','DESC')->whereBetween('created_at',[$min,$max])->get();
    return response()->json($user);
   }
// Geting All Active Users Show on active page -------------------------------------------@tilesh

   public function getactive()
   {
        $curTime = new \DateTime();
        $created_at = $curTime->format("Y-m-d");
    
       $vendors['vendors'] = VRegisterModel ::orderBy('id', 'DESC')->get();
       $vendors['total'] = VRegisterModel :: all();
       $vendors['today'] = VRegisterModel :: Where("created_at", "like", "%{$created_at}%")->get();
       // $data['users'] = User :: all();
       return view('admin.active',$vendors);
       // return view('admin.active',$vendors);
   }

   public function all_vendor(Request $request)
   {    
       $vendors = VRegisterModel::orderBy('id', 'DESC')->get();
       return response()->json($vendors);
   }
   public function all_order(Request $request)
   {
       $order = OrederModel::orderBy('id', 'DESC')->get();
       return response()->json($order);
   }

// Geting All deactive Users Show on deactive page -------------------------------------------@tilesh   
   public function getdeactive()
   {
        $curTime = new \DateTime();
        $created_at = $curTime->format("Y-m-d");
    
       $employees['employees'] = ERegisterModel :: orderBy('id', 'DESC')->get();
       $employees['total'] = ERegisterModel :: all();
       $employees['today'] = ERegisterModel :: Where("created_at", "like", "%{$created_at}%")->get();
       // $data['users'] = User :: all();
       return view('admin.deactive',$employees);
       // $data['users'] = User :: all();
       // return view('deactive',$data);
   }

// Search Function -------------------------------------------@tilesh   
   public function search(Request $request)
   {
       $input = trim($request->search_text);
       $search['search_data'] = User::where('name', 'like', "%{$input}%")->orWhere('mobile', 'like', "%{$input}%")->orderBy('created_at', 'desc')->get();
   
       return view('/search',$search);
   }
// Show new User page on click Add New User sidebar--------------------------------@tilesh
   public function display(){
       return view('admin.new_user');
   }

// New user Data Store in Database --------------------------------@tilesh
    // public function add_user(Request $request){
    //    //@Swapna
    //    //Please enter proper spellings of keys
    //    //changed spelling of sponsorid.
    //      $all_users = User::all();
    //      $all_user_count = count($all_users);
         
    //      $sid = $request->sponserid;
    //      $result = User::find($sid);
    //      if($result != null || $all_user_count <= 0)
    //      {
    //          $validatedData = Validator::make($request->all(), [
                 
    //              'name' => 'required',
    //              'mobile'=>'required',
    //             //  'email'=>'required|unique:users',
    //              'password'=>'required',
    //              'password1'=>'required'
    //          ]);
    //          if($validatedData->fails())
    //          {
                 
    //          // echo "validation fail";
    //              $request->flash();
    //              return Redirect::back()->withErrors($validatedData);
    //          }
    //          else{

    //              $name=$request->name;
    //              $sponserid=$request->sponserid;
    //              $mobile=$request->mobile;
    //              $email=$request->email;
    //              $password=$request->password;
    //              $password1=$request->password1;
    //              $pimg="";
                 
    //              //return $mg;
    //              if($password==$password1)
    //              {
    //                    //Image Uploading Code ---------------------------------------

    //                 if($files = $request->file('pimg')) {
    //                     $upload = new Image_Upload();
    //                     $pimg = $upload->uploadImage($files,'user');
    //                 }
    //                 if($pimg == "Error") {
    //                     Session::flash('message','Image Uploading Error');
    //                     return Redirect::back()->withErrors($validatedData);
    //                 }
                     
    //                  $token_number = uniqid();
                 
    //                  $pimg = 'public/image/'.$pimg;
                     
    //                  $commision = Commision::find(1);
                     
    //                  DB::table('users')->insert([
    //                      'email'=>$email,
    //                      'password'=>Hash::make($password),
    //                      'name'=>$name,
    //                      'mobile'=>$mobile,
    //                      'sponserid'=>$sponserid,
    //                      'pimg'=>$pimg,
    //                      'status' => 'active',
    //                      // 'days' => '1',
    //                      'user_type'=>'user',
    //                      'daily_commission'=>$commision->daily_commision,
    //                      'created_at'=>Carbon::now(),
    //                      'token_number'=>$token_number,
    //                  ]);
                     
    //                  Session::flash('message','New User Added Successfully :)');
                     
    //                  //Add new user That time add one new-row in Amounts table same id--------------------------------------@tilesh
                     
    //                  $getdata = User::latest()->first();
    //                  $user = $getdata->id;  
    //                  $new_amount = new Amount;                        
    //                  $new_amount->id = $user;
    //                  $new_amount->total_amount = 25;
    //                  $new_amount->updated_amount_time = Carbon::now();
    //                  $new_amount->save();
                    
    //                 //$message = "Thank you for registering with us. Your Sponser Id is : ".$sponserid." and your token number is : ".$token_number." for www.evergoalindia.com ";
    //                 //$sms = new Sms;
    //                 //$sms->sendMessage($mobile,$message);
    //                 //if($sms->is_sent) {
    //                     Session::flash('message','Registration Sucessfull');
    //                 //} else {
    //                  //   Session::flash('message','Registration Sucessfull but you will not recieve message');
    //                // }
                   
    //                 $this->cronJobInsert();
                     
    //                  return Redirect::back()->withErrors($validatedData);
    //              }
    //              else{
    //                  Session::flash('message','Both Passwords does not match');
    //                  return Redirect::back()->withErrors($validatedData);
    //                  //echo "password is diff";
    //              }
                 
    //          }
 
    //      }
    //      else{
    //          Session::flash('message','Wrong Sponsor Id ');
    //                   return Redirect::back();
    //      }
        
    //  }
 
    
       
              

    //  Payments Details ----------------------------------------------------------------

   public function add_user(Request $request)
   {
      $sp_id = $request->input('sponserid');
      $name = $request->input('name');
      $mobile = $request->input('mobile');
      $email = $request->input('email');
      $password = $request->input('password');

      $user = new User();
      $user->sponser_id = $sp_id;
      $user->name = $name;
      $user->mobile = $mobile;
      $user->email = $email;
      $user->password = $password;
      if($request->hasfile('pimg'))
        {
            $file1 = $request->file('pimg');
            $image1 = $file1->getClientOriginalName();
            $file1->move(public_path()."/docs/", $image1);
            $user->image = $image1;
         }
      $user->save();

      return redirect('customer_list');
   }
    public function payment(){
        $data['withdraw_requests'] = Withdraw_request::all()->where('paid_status', '=', 'unpaid'); 
        return view('/payment', $data);
    }
    
    public function rejected(Request $request, $id){

        $payment = Withdraw_request::find($id);
        $payment->paid_status = 'Rejected';
        $name = $payment->name;
        if($payment->update())
        {
        return redirect()->back()->with('msg','Payment Rejected successfully');
         
        }
        else{
         return redirect()->back()->with('msg','Some Thing went Wrong');
        }

    }
    
    public function pay_allow_req(Request $request, $id){
        $payment['payment'] = Withdraw_request::find($id);
        
        return view('payment_allow',$payment);
    }
    
    public function pay_allow(Request $request, $id){
            
        $rfid = $request->rfid;
            
        //Fetch Withdraw req Data ----------------------------------
        $payment = Withdraw_request::find($id);
        $user_id = $payment->user_id;
        
        //Fetch Amount Data ----------------------------------
        $amount = Amount::find($user_id);
        $current_amount = $amount->total_amount;
        
        $req_amo = $payment->request_amount;
        $new_amount = $current_amount - $req_amo;
        
        $amount->total_amount = $new_amount; 
        $amount->total_withdraw_amount = $amount->total_withdraw_amount + $req_amo;
        $amount->withdraw_amount = $req_amo;
        $amount->withdraw_date = Carbon::now();
        
        $transaction = mt_rand(1000,9999);
        
        $date = Carbon::now()->format("Y-m-d");  
        $payment->paid_status = 'paid';
        
        if($payment->update() AND $amount->update())
        {
                        
                        DB::table('transactions')->insert([
                        'user_id'=>$user_id,
                        'payment_amount'=>$req_amo,
                        'payment_date'=>$date,
                        'transaction_id'=>'Trn'.$transaction,
                        'reference_id'=>$rfid,
                        
                    ]);
            
        return redirect()->back()->with('msg','Payment Confirm  successfully');
         
        }
        else{
         return redirect()->back()->with('msg','Some Thing went Wrong');
        }

    }


// KYC Page -----------------------------------------------------------
    public function getkyc(){
        $kyc['Bank'] = Bank::all()->where('status','=','request');

        return view('admin.kyc',$kyc);


    }
    public function kyc_open(Request $request, $id){
        $data['Bank'] = Bank::all()->where('id', '=', $id);
     
        return view('/kyc_info',$data);


    }
        public function kyc_update(Request $request, $id){
        $action = $request->opt_action;
        $update = Bank::find($id);
        $update->status = $request->opt_action;
        $update->text = $request->text;
        if($update->save())
        {
        return redirect()->back()->with('msg','Kyc ' .$action. ' successfully');
         
        }
        else{
         return redirect()->back()->with('msg','Some Thing went Wrong');
        }
    }

    // Geting Images SlideImages -------------------------------

    public function slideshow(){
        
        $data['Slideshow'] = SlideImages::all();
        return view('/images', $data);
    }
    
    public function slide_del(Request $request,$id){
        $data = SlideImages::find($id);
        $data->delete();
        return Redirect::back();
        //   $data['Slideshow'] = SlideImages::all();
        //     return view('/images',$data);
        

    }

    // store slideshow Images --------------------------------
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
                
        

            //  $files->resize(1320, 583);
                
                
                 $upload = new Image_Upload();
                  $file_name = $upload->uploadImage($files,'slideshow');
                  
               
            }
            if($file_name == "Error") {
                return Redirect::back()->with("message","Error image uploading");
            }
           if($file_name)
           {
               $file_name = "slideshow/".$file_name;
               
               $data=new SlideImages;
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
    
     public function cronJobInsert(){
            $open=User::all();
            if(count($open) > 1) {
                foreach($open as $user){
                  if($user->status == "active") {
                    $user_id = $user->id;
                    
                    $user_data = array();
                    
                    if($user_id > 12620 ) {
                        $user_data = CalculateData::calculateUserData($user_id);
                    } else {
                        $user_data = CalculateData::calculateFirstSixtyUserData($user_id);
                    }
                    
                    $data = User::find($user_id);
                    $level_benifit = $user_data['level_benifit'];
                    
                    $today_level_benifit = $level_benifit - $data->last_day_level_benifit;
                    $total_level_benifit = $data->level_benifit + $today_level_benifit; 
                    
                    $data->level_benifit = $total_level_benifit;
                    $data->last_day_level_benifit = $user_data['level_benifit'];
                    $total = $total_level_benifit + $data->daily_benifit;
                    $data->daily_commission = $total;
                    $data->save();
                    
                    $amounts = Amount::find($user_id);
                    $amounts->total_amount = $total - $amounts->total_withdraw_amount;
                    $amounts->save();
                }
            }    
         }
    }
    
    
    // Cron Job ----------------------------- @swapna
    public function cronJob(){
            $open=User::all();
            foreach($open as $user){
                $user_id = $user->id;
                $data = User::find($user_id);
                $current_day = $data->days;
                $days = $current_day + 1;
                
                $data->days = $days;
                
                if($user->status == "active") {    
                
                $user_data = array();
                
                if($user_id > 12620 ) {
                    $user_data = CalculateData::calculateUserData($user_id);
                } else {
                    $user_data = CalculateData::calculateFirstSixtyUserData($user_id);
                }
                
                if($user_id > 12620 && $days > 60) {
                    $data->status = "deactive";
                }
                
                $daily_benifit = $data->daily_benifit + $user_data['daily_commision'];
                $level_benifit = $data->level_benifit + $data->last_day_level_benifit;
                
                $total_income = $daily_benifit + $level_benifit;
                
                $data->daily_benifit = $daily_benifit;
                $data->level_benifit = $level_benifit;
                $data->daily_commission = $total_income;
                
                
                $amounts = Amount::find($user_id);
                $total_income = $total_income - $amounts->total_withdraw_amount;
                $amounts->total_amount = $total_income;
                $amounts->save();
              } 
              
                $data->save();
            }
    }

    public function get_Details(Request $request,$id)
    {
      
      $get_c = PurchaseHistory::where('vendor',$id)->first();
        if ($get_c) {
          $get_cust = PurchaseHistory::where('vendor',$id)->get();
          foreach ($get_cust as $value) {
          $cst_name = $value->user_id;
        }
          $get_vendor = VRegisterModel::where('id',$id)->get();
          $get_name = PRegisterModel::where('id',$cst_name)->get();
          return view('admin.vendor_details',compact('get_vendor','get_cust','get_name'));
        }else{
          $get_name = '';
          $get_cust = PurchaseHistory::where('vendor',$id)->get();
          $get_vendor = VRegisterModel::where('id',$id)->get();
          return view('admin.vendor_details',compact('get_vendor','get_cust','get_name'));
        }
      
    }
    
    public function Update_Advice(Request $request,$id)
    {
        $admin = session('admin.username');
        $status = 1;
        $date = Carbon::now();
        $dueDate = $request->dueDate;
        $a = (int)$dueDate;
        $newDateTime = $date->addDay($a)->format("Y-m-d");
        $advice = SetScheduleModel::where('id',$id)->first();
        $advice->doctor_name = $admin;
        $advice->notes = $request->input('notes');
        $advice->suggestion = $request->input('sugg');
        $advice->dueDate = $newDateTime;
        $advice->kit = $request->input('kit');
        $advice->status = $status;
        $advice->update_date = Carbon::now()->format("Y-m-d");
        $advice->updated_at = Carbon::now();
        $advice->update();
        return redirect()->back()->with('alert','Advice Save Successfully');
    }
    
   public function time_slot(Request $request)
    {
        $time = new TimeScheduleModel();
        $fromti = Carbon::parse($request->input('fromtime'))->format('h:i:A');
        $toti = Carbon::parse($request->input('totime'))->format('h:i:A');
        $time->date = $request->input('date');
        $time->time_slot = $request->input('time_slot');
        $time->fromtime = $fromti;
        $time->totime = $toti;
        $time->save();
        return redirect()->back()->with('alert','Data Saved');
    }
    public function PQuestions(Request $request)
    {
         $date = Carbon::now()->format("Y-m-d");
        $time_slot = TimeScheduleModel::where('date',$date)->get();
        $time = DisabledDateModel::all();
        return view('pquestions.pquestions',compact('time_slot','time'));
    }
    public function Get_Time_Slot(Request $request,$name,$date)
    {
        // $date = Carbon::now()->format("Y-m-d");
        $time = TimeScheduleModel::where([['date',$date],['time_slot',$name]])->get();
        return response()->json($time);
    }
    public function Select_Date(Request $request,$date)
    {
         $date = TimeScheduleModel::where('date',$date)->get();
        return response()->json($date);
    }
    
        public function Get_Cash_Claim(Request $request,$min,$max)
    {
        $cash = CCRModel::whereBetween('created_at',[$min,$max])->get();
        return response()->json($cash);
    }
    
     public function Cash_Claim_Settings(Request $request)
    {   
        $date = Carbon::now()->format("Y-m-d");
        $ccs = new CCSModel();
        $ds = $request->input('startdate'); 
        $dse = $request->input('enddate'); 
        $dates = Carbon::createFromFormat('Y-m-d',$ds)->format('d-m-Y');
        $datee = Carbon::createFromFormat('Y-m-d',$dse)->format('d-m-Y');
        $ccs->date = $dates;
        $ccs->enddate = $datee;
        $ccs->points = $request->input('points');
        $ccs->amount = $request->input('amount');
        $ccs->created_at = $date;
        $ccs->save();
        return redirect()->back()->with('alert','Date Save Successfully');
    }
    public function Get_CCDate(Request $request,$min,$max)
    {
         $ccd = CCSModel::whereBetween('created_at',[$min,$max])->get();
        return response()->json($ccd);
    }
    public function CCData_After(Request $request,$id){
         $ccda = CCSModel::where('user_id',$id)->get();
        return response()->json($ccda);
    }
    public function Send_Message_To(Request $request,$id)
    {

          $get_vendor = VRegisterModel::where('id',$id)->first();
          $get_vendor->message = $request->input('message');
          $get_vendor->update();
          return redirect()->back()->with('alert','Message Send Successfully');
      
    }
    
    public function Sold_Offline(Request $request)
    {
     $sold_offline = OfflineSoldModel::all();
     return view('admin.sold_offline_v',compact('sold_offline'));
    }
    public function All_Offline_Sold(Request $request,$min,$max)
    {
        $sold_offline = DB::table('offline_sold')->join('vendor','offline_sold.vendor_id','=','vendor.id')->select('offline_sold.*','vendor.*')->whereBetween('offline_sold.created_at',[$min,$max])->get();
         return response()->json($sold_offline);
    }
    public function getCash_date(Request $request,$id)
    {
        $ccs = CCSModel::where('id',$id)->get();
        return response()->json($ccs);
    }
      public function Update_CCS(Request $request, $id)
    {   
        $ccs = CCSModel::where('id',$id)->first();
        $dates = $request->input('startdate'); 
        $datee = $request->input('enddate'); 
        // $dates = Carbon::createFromFormat('Y-m-d',$ds)->format('d-m-Y');
        // $datee = Carbon::createFromFormat('Y-m-d',$dse)->format('d-m-Y');
        $ccs->date = $dates;
        $ccs->enddate = $datee;
        $ccs->points = $request->input('points');
        $ccs->amount = $request->input('amount');
        $ccs->update();
        return redirect()->back()->with('alert','Date Save Successfully');
    }
    
  /*  public function calculateLevelIncome($id) {
        $user_id=DB::select(DB::raw('SELECT t1.id as lev1, t2.id as lev2, t3.id as lev3,t4.id as lev4,t5.id as
        lev5,t6.id as lev6,t7.id as lev7, t8.id as lev8 from users as t1 left join users as t2 on (t2.sponserid=t1.id) left join users as t3 on(t3.sponserid=t2.id) 
        left join users as t4 on(t4.sponserid=t3.id) left join users as t5 on(t5.sponserid=t4.id) left join users as t6 on(t6.sponserid=t5.id) left join users as t7
         on(t7.sponserid=t6.id) left join users as t8 on(t8.sponserid=t7.id) where t1.id=:id'),array(
            'id'=>$id,
        ));


        $direct_id_active_count=count(DB::select(DB::raw('SELECT id from users where sponserid=:id and status=:status1'),array(
            'id'=>$id,
            'status1'=>'active',
        )));
     
   
       $lev1=$lev2=$lev3=$lev4=$lev5=$lev6=$lev7=$lev8=array();
       $c=0;
       $commision=Commision::find(1);
       foreach($user_id as $x=>$y)
       {
          
           array_push($lev1,$y->lev1);
           array_push($lev2,$y->lev2);
           array_push($lev3,$y->lev3);
           array_push($lev4,$y->lev4);
           array_push($lev5,$y->lev5);
           array_push($lev6,$y->lev6);
           array_push($lev7,$y->lev7);
           array_push($lev8,$y->lev8);
         
       }
       $count_level2=count(array_filter(array_unique($lev2)));
       $count_level3=count(array_filter(array_unique($lev3)));
       $count_level4=count(array_filter(array_unique($lev4)));
       $count_level5=count(array_filter(array_unique($lev5)));
       $count_level6=count(array_filter(array_unique($lev6)));
       $count_level7=count(array_filter(array_unique($lev7)));
       $count_level8=count(array_filter(array_unique($lev8)));
       $total_count=$count_level2+$count_level3+$count_level4+$count_level5+$count_level6+$count_level7+$count_level8;

       $data['total_count']=$total_count;



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
       //return $level2_active_users_count;
       
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
                    ->whereIn('id',$users_data['count_level51'])
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
                   ->get());

        $level8_active_users_count=count(DB::table('users')  //8 level active user count
                    ->whereIn('id', $users_data['count_level81'])
                    ->where('status','active')
                    ->select('id')
                   ->get());

       //return $level2_active_users_count;
       /*
       Calculation from this code gets wrong
       
       
       if($direct_id_active_count>=1)
       {
           $list_users_count=$level2_active_users_count*(int)$commision->level_1;
       }
       //return $list_users_count;
      
       if($direct_id_active_count>=3 and ($level4_active_users_count>0))      //for level 2
       {
           $list_users_count=$list_users_count+($level3_active_users_count*(int)$commision->level_2);  //level 2 rs count
       }
       if($direct_id_active_count>=4 and ($level5_active_users_count>0))  //for level 3
       {
           $list_users_count=$list_users_count+($level4_active_users_count*(int)$commision->level_3);   //level 3 rs count
       }
       if($direct_id_active_count>=5 and ($level6_active_users_count>0)) //for level 4
       {
           $list_users_count=$list_users_count+($level5_active_users_count*(int)$commision->level_4);    //level 4 rs count
       }
       if($direct_id_active_count>=6 and ($level7_active_users_count>0)) //for level 5
       {
           $list_users_count=$list_users_count+($level6_active_users_count*(int)$commision->level_5);   //level 5 rs count
       }
       if($direct_id_active_count>=7 and ($level8_active_users_count>0)) //for level 6
       {
           $list_users_count=$list_users_count+($level7_active_users_count*(int)$commision->level_6);   //level 6 rs count
       }
       if($direct_id_active_count>=10) //for level 7
       {
           $list_users_count=$list_users_count+($level8_active_users_count*(int)$commision->level_7);    //level 7 rs count
       }*/
       
       //return $list_users_count;
       
       /*
       * Swapna's Logic
       *
        if($direct_id_active_count>=1)
       {
           $list_users_count=$level2_active_users_count*(int)$commision->level_1;
       }
       //return $list_users_count;
      
       if($direct_id_active_count>=2 and ($level3_active_users_count>0))      //for level 2
       {
           $list_users_count=$list_users_count+($level3_active_users_count*(int)$commision->level_2);  //level 2 rs count
       }
       if($direct_id_active_count>=3 and ($level4_active_users_count>0))      //for level 2
       {
           $list_users_count=$list_users_count+($level4_active_users_count*(int)$commision->level_3);  //level 3 rs count
       }
       if($direct_id_active_count>=4 and ($level5_active_users_count>0))  //for level 3
       {
           $list_users_count=$list_users_count+($level5_active_users_count*(int)$commision->level_4);   //level 4 rs count
       }
       if($direct_id_active_count>=6 and ($level6_active_users_count>0)) //for level 4
       {
           $list_users_count=$list_users_count+($level6_active_users_count*(int)$commision->level_5);    //level 5 rs count
       }
       if($direct_id_active_count>=8 and ($level7_active_users_count>0)) //for level 5
       {
           $list_users_count=$list_users_count+($level7_active_users_count*(int)$commision->level_6);   //level 6 rs count
       }
       if($direct_id_active_count>=10 and ($level8_active_users_count>0)) //for level 6
       {
           $list_users_count=$list_users_count+($level8_active_users_count*(int)$commision->level_7);   //level 7 rs count
       }/*
       if($direct_id_active_count>=10) //for level 7
       {
           $list_users_count=$list_users_count+($level8_active_users_count*(int)$commision->level_7);    //level 7 rs count
       }


        
        return (int)$list_users_count;
    }
    
    /**
     * @created by Swapna
     * 
     * Calculates diffenece in two dates 
     * 
     * return days 
     * 
    public function calculateDailyCommission($id) {

        $user_id=DB::select(DB::raw('SELECT t1.id as lev1, t2.id as lev2, t3.id as lev3,t4.id as lev4,t5.id as
        lev5,t6.id as lev6,t7.id as lev7, t8.id as lev8 from users as t1 left join users as t2 on (t2.sponserid=t1.id) left join users as t3 on(t3.sponserid=t2.id) 
        left join users as t4 on(t4.sponserid=t3.id) left join users as t5 on(t5.sponserid=t4.id) left join users as t6 on(t6.sponserid=t5.id) left join users as t7
         on(t7.sponserid=t6.id) left join users as t8 on(t8.sponserid=t7.id) where t1.id=:id'),array(
            'id'=>$id,
        ));


        $direct_id_active_count=count(DB::select(DB::raw('SELECT id from users where sponserid=:id and status=:status1'),array(
            'id'=>$id,
            'status1'=>'active',
        )));
     
   
       $lev1=$lev2=$lev3=$lev4=$lev5=$lev6=$lev7=$lev8=array();
       $c=0;
       $commision=Commision::find(1);
       foreach($user_id as $x=>$y)
       {
          
           array_push($lev1,$y->lev1);
           array_push($lev2,$y->lev2);
           array_push($lev3,$y->lev3);
           array_push($lev4,$y->lev4);
           array_push($lev5,$y->lev5);
           array_push($lev6,$y->lev6);
           array_push($lev7,$y->lev7);
           array_push($lev8,$y->lev8);
         
       }
       $count_level2=count(array_filter(array_unique($lev2)));
       $count_level3=count(array_filter(array_unique($lev3)));
       $count_level4=count(array_filter(array_unique($lev4)));
       $count_level5=count(array_filter(array_unique($lev5)));
       $count_level6=count(array_filter(array_unique($lev6)));
       $count_level7=count(array_filter(array_unique($lev7)));
       $count_level8=count(array_filter(array_unique($lev8)));
       $total_count=$count_level2+$count_level3+$count_level4+$count_level5+$count_level6+$count_level7+$count_level8;

       $data['total_count']=$total_count;



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
       //return $level2_active_users_count;
       
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
                    ->whereIn('id',$users_data['count_level51'])
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
                   ->get());

        $level8_active_users_count=count(DB::table('users')  //8 level active user count
                    ->whereIn('id', $users_data['count_level81'])
                    ->where('status','active')
                    ->select('id')
                   ->get());
                   
         if($direct_id_active_count>=1)
       {
           $list_users_count=$level2_active_users_count*(int)$commision->level_1;
       }
       if($direct_id_active_count>=2 and ($level3_active_users_count>0))      //for level 2
       {
           $list_users_count=$list_users_count+($level3_active_users_count*(int)$commision->level_2);  //level 2 rs count
       }
       if($direct_id_active_count>=3 and ($level4_active_users_count>0))      //for level 2
       {
           $list_users_count=$list_users_count+($level4_active_users_count*(int)$commision->level_3);  //level 3 rs count
       }
       if($direct_id_active_count>=4 and ($level5_active_users_count>0))  //for level 3
       {
           $list_users_count=$list_users_count+($level5_active_users_count*(int)$commision->level_4);   //level 4 rs count
       }
       if($direct_id_active_count>=6 and ($level6_active_users_count>0)) //for level 4
       {
           $list_users_count=$list_users_count+($level6_active_users_count*(int)$commision->level_5);    //level 5 rs count
       }
       if($direct_id_active_count>=8 and ($level7_active_users_count>0)) //for level 5
       {
           $list_users_count=$list_users_count+($level7_active_users_count*(int)$commision->level_6);   //level 6 rs count
       }
       if($direct_id_active_count>=10 and ($level8_active_users_count>0)) //for level 6
       {
           $list_users_count=$list_users_count+($level8_active_users_count*(int)$commision->level_7);   //level 7 rs count
       }           

        $data['user']=DB::table('users')->where('id',$id)->get();
        $counts = DB::select( DB::raw("SELECT id FROM users WHERE sponserid = :id"), array(
            'id' => $id,
          ));
       
      
        $active = DB::table('users')
        ->select('id')
        ->whereIn('id', $list_count)
        ->Where('status','active')
        ->get();

        $deactive = DB::table('users')
        ->select('id')
        ->whereIn('id', $list_count)
        ->Where('status','deactive')
        ->get();
        
        return (int)$commision->daily_commision+(int)$list_users_count;
    }*/
    
    

}