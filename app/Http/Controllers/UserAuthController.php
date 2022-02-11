<?php

namespace App\Http\Controllers;

use App\Models\ERegisterModel;
use App\Models\PRegisterModel;
use App\Models\VRegisterModel;
use App\Models\QuestionAnswer;
use App\Models\UserTblModel;
use App\Models\PurchaseHistory;
use App\Models\SetScheduleModel;
use App\Models\Question;
use App\Models\ImageModel;
use App\Models\CCRModel;
use App\Models\CCSModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use session;


class UserAuthController extends Controller
{
    public function userLogin(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $username = $request->input('user');
        $password = $request->input('password');

        // $user = UserTblModel::where([['email',$email],['password',$password]])->first();

        $check = ERegisterModel::where([['email',$email],['password',$password]])->orWhere([['mobile_no',$email],['password',$password]])->first();
        $v_data = VRegisterModel::where([['email',$email],['password',$password]])->orWhere([['mobile_no',$email],['password',$password]])->first();
        $p_data = PRegisterModel::where([['email',$email],['password',$password]])->orWhere([['mobile_no',$email],['password',$password]])->first();
        if($check==true){

            $request->session()->put('user',$check);

            return view('emp_details',compact('check'));

        }elseif ($v_data == true) {
            $request->session()->put('user',$v_data);
              return redirect('/my_dashboard');
            // return view('mainnav',compact('v_data'));

        }elseif ($p_data==true) {

            $request->session()->put('user',$p_data);
            return redirect('/user_dashboard')->with('alert','Login Successfully');
            // return redirect('/details_after')->with('message','Login Successfully');
        }else{
            return redirect('/login')->with('alert','Enter Valid Username or Password!');
        }
        
    }

    public function v_profile(Request $request )
    {
        $user_id = session('user.id');
        $v_datas = VRegisterModel::where('id',$user_id)->get();
        return view('v_details',compact('v_datas'));
    }

    public function details(Request $request)
    {
            $user_id = session('user.id');
            $pdata = PRegisterModel::where('id',$user_id)->first();
            if($pdata){
                $pdatas = PRegisterModel::where('id',$user_id)->get();
                foreach ($pdatas as $value) {
                    $mobile = $value->mobile_no;
                } 
                $freeq = QuestionAnswer::where('user_id',$user_id)->first();
                if($freeq){
                    $freeques = QuestionAnswer::where('user_id',$user_id)->get();
                    return view('p_details',compact('pdatas','freeques'));
                }else {
                    $freeques = QuestionAnswer::where('mobile_no',$mobile)->get();
                    return view('p_details',compact('pdatas','freeques'));
                }
            }else{
                $freeques = '';
                $pdatas = PRegisterModel::where('id',$user_id)->get();
                return view('p_details',compact('pdatas','freeques'));
            }       
    }
      public function user_dashboard(Request $request)
    {   
        $date = Carbon::now()->format('Y-m-d');
        $user_id = session('user.id');
        $datas = PRegisterModel::where('id',$user_id)->get();
        $schedule = SetScheduleModel::where([['cust_id',$user_id],['dueDate',$date]])->get();
        $ccdate = CCSModel::latest('created_at')->get();
        return view('user_dashboard',compact('datas','schedule','ccdate'));
    }
}
