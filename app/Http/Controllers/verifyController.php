<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\PRegisterModel;
use App\Models\VRegisterModel;
use App\Models\ERegisterModel;
use App\Models\QuestionAnswer;
use App\Helpers\helper;
use Nexmo\Laravel\Facade\Nexmo;
// use Haruncpi\LaravelIdGenerator\IdGenerator;
use Validator;
use Redirect;
class verifyController extends Controller
{
    public function getVerify(){
        return view('verify');
    }
    public function postVerify(Request $request){
        if($register=PRegisterModel::where('code',$request->code)->first()){
            $register->active=1;
            $register->code=null;
            $register->save();
            return redirect('/login')->with('alert','Your account is active');
        }
        else{
            return back()->withMessage('verify code is not correct. Please try again');
        }
    }
    public function Change_Password(Request $request,$id)
    {
        if($register=PRegisterModel::where([['id',$id],['code',$request->code]])->first()){
            $register->code=null;
            $register->password= $request->input('password');
            $register->update();
            return redirect('/login')->with('alert','Password Change Successfully');
        }elseif($vendor=VRegisterModel::where([['id',$id],['code',$request->code]])->first()){
            $vendor->code=null;
            $vendor->password= $request->input('password');
            $vendor->update();
            return redirect('/login')->with('alert','Password Change Successfully');
        }else{
            return back()->withMessage('verify code is not correct. Please try again');
        }
    }
}