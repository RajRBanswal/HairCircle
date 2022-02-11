<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuestionAnswer;
use App\Models\PRegisterModel;
use Validator;
use Redirect;

class QuestionAnswerController extends Controller
{
    public function fquestion_store(Request $request)
    {
     
           
        $ques = new QuestionAnswer;
        if(session('user.id')){
            $user_id = session('user.id');
            $ques->user_id = $user_id;
            $ques->name = $request->input('name');
            $mobile = $request->input('mobile');
            $ques->mobile_no = $mobile;
            $quest = QuestionAnswer::where('user_id',$user_ids)->first();
            if($quest != null){
                return redirect()->back()->with('message','You have all Taken This Question');   
            }else{
                if ($request->input('answer1')!=null) {
                        $ques->fquestions1 = $request->input('faqHeading-1');
                        $ques->fanswers1 = $request->input('answer1');
                        $ques->save();
                } 
                if ($request->input('answer2')!=null) {
                        
                        $ques->fquestions2 = $request->input('faqHeading-2');
                        $ques->fanswers2 = $request->input('answer2');
                        $ques->save();
                }
                 
                if ($request->input('answer3')!=null) {
                        $ques->fquestions3 = $request->input('faqHeading-3');
                        $ques->fanswers3 = $request->input('answer3');
                        $ques->save();
                }
                if ($request->input('answer4')!=null) {
                        $ques->fquestions4 = $request->input('faqHeading-4');
                        $ques->fanswers4 = $request->input('answer4');
                        $ques->save();
                }
                 if ($request->input('answer5')!=null) {        
                        $ques->fquestions5 = $request->input('faqHeading-5');
                        $ques->fanswers5 = $request->input('answer5');
                        $ques->save();
                }
                 if ($request->input('answer6')!=null) {
                        $ques->fquestions6 = $request->input('faqHeading-6');
                        $ques->fanswers6 = $request->input('answer6');
                        $ques->save();
                }
                 if ($request->input('answer7')!=null) {
                        $ques->fquestions7 = $request->input('faqHeading-7');
                        $ques->fanswers7 = $request->input('answer7');
                        $ques->save();
                }
                 if ($request->input('answer8')!=null) {
                        $ques->fquestions8 = $request->input('faqHeading-8');
                        $ques->fanswers8 = $request->input('answer8');
                        $ques->save();
                }
                 if ($request->input('answer9')!=null) {
                        $ques->fquestions9 = $request->input('faqHeading-9');
                        $ques->fanswers9 = $request->input('answer9');
                        $ques->save();
                }
                if ($request->input('answer10')!=null) {
                        $ques->fquestions10 = $request->input('faqHeading-10');
                        $ques->fanswers10 = $request->input('answer10');
                        $ques->save();
                } 
                return redirect('/details_after');  
            }
        }else{
            $user_id = session('user.id');
            $ques->name = $request->input('name');
            $mobile = $request->input('mobile');
            $ques->mobile_no = $mobile;

            $quest = QuestionAnswer::where('mobile_no',$mobile)->first();
            if($quest != null){
                return redirect()->back()->with('message','You have all Taken This Question');   
            }else{
                
                if ($request->input('answer1')!=null) {
                        $ques->fquestions1 = $request->input('faqHeading-1');
                        $ques->fanswers1 = $request->input('answer1');
                        $ques->save();
                } 
                if ($request->input('answer2')!=null) {
                        
                        $ques->fquestions2 = $request->input('faqHeading-2');
                        $ques->fanswers2 = $request->input('answer2');
                        $ques->save();
                }
                 
                if ($request->input('answer3')!=null) {
                        $ques->fquestions3 = $request->input('faqHeading-3');
                        $ques->fanswers3 = $request->input('answer3');
                        $ques->save();
                }
                if ($request->input('answer4')!=null) {
                        $ques->fquestions4 = $request->input('faqHeading-4');
                        $ques->fanswers4 = $request->input('answer4');
                        $ques->save();
                }
                 if ($request->input('answer5')!=null) {        
                        $ques->fquestions5 = $request->input('faqHeading-5');
                        $ques->fanswers5 = $request->input('answer5');
                        $ques->save();
                }
                 if ($request->input('answer6')!=null) {
                        $ques->fquestions6 = $request->input('faqHeading-6');
                        $ques->fanswers6 = $request->input('answer6');
                        $ques->save();
                }
                 if ($request->input('answer7')!=null) {
                        $ques->fquestions7 = $request->input('faqHeading-7');
                        $ques->fanswers7 = $request->input('answer7');
                        $ques->save();
                }
                 if ($request->input('answer8')!=null) {
                        $ques->fquestions8 = $request->input('faqHeading-8');
                        $ques->fanswers8 = $request->input('answer8');
                        $ques->save();
                }
                 if ($request->input('answer9')!=null) {
                        $ques->fquestions9 = $request->input('faqHeading-9');
                        $ques->fanswers9 = $request->input('answer9');
                        $ques->save();
                }
                if ($request->input('answer10')!=null) {
                        $ques->fquestions10 = $request->input('faqHeading-10');
                        $ques->fanswers10 = $request->input('answer10');
                        $ques->save();
                }
                return view('/login');  
                // return redirect()->back();
            }
        }
        

            
        
    }
    public function Get_freeQuestion()
    {
        $user_id = session('user.id');
        $quest = QuestionAnswer::where('user_id',$user_id)->first();
        if($quest != null){
            $ques = QuestionAnswer::where('user_id',$user_id)->get();
            return view('free_question',compact('ques'));
        }else{
            $questi = PRegisterModel::where('id',$user_id)->get();
            foreach($questi as $q){
                $mobl = $q->mobile_no;
            }
            $ques = QuestionAnswer::where('mobile_no',$mobl)->get();
             return view('free_question',compact('ques'));
        }
        
        
    }
}


// $answer1=$request->input('answer1');
        //      dd($answer1);
       // $ques = new QuestionAnswer();
       // $validator = Validator::make($request->all(), [
       //      'answer1' => 'required', 'answer2' => 'required',
       //      'answer3' => 'required', 'answer4' => 'required', 
       //      'answer5' => 'required', 'answer6'=> 'required',
       //      'answer7' => 'required', 'answer8'=> 'required',
       //      'answer9' => 'required', 'answer10'=> 'required'

       //  ]);
       //  if($validator->fails())
       //  {
       //      return Redirect::back()->withErrors($validator);
       //  }
       //  else{
            
        // $ques->answer1 = $request->input('answer1');
        // $ques->answer2 = $request->input('answer2');
        // $ques->answer3 = $request->input('answer3');
        // $ques->answer4 = $request->input('answer4');
        // $ques->answer5 = $request->input('answer5');
        // $ques->answer6 = $request->input('answer6');
        // $ques->answer7 = $request->input('answer7');
        // $ques->answer8 = $request->input('answer8');
        // $ques->answer9 = $request->input('answer9');
        // $ques->answer10 = $request->input('answer10');
        // $ques->save();

// $select[] = QuestionAnswer::select('*')->where('id',2)->get(); 
        // // dd($select);
        // $count = sizeof($select);

        // dd($count);
        // for ($i=0; $i < $count; $i++) { 
        //     if ($select==='always') {
        //     $count++;

        // }

        // }

        // if ($count>=3) {
        //     return view('/login')->with('Data saved');
        // }
        

//              $ques{[$request->input('answer1')],
// [$request->input('answer2')],
// [$request->input('answer3')],
// [$request->input('answer4')],
// [$request->input('answer5')],
// [$request->input('answer6')],
// [$request->input('answer7')],
// [$request->input('answer8')],
// [$request->input('answer9')],
// [$request->input('answer10'] };
//         $a[] = array($ques);

        // // $ques = $ques->duplicates();
        // dd($ques);

        
        
        // for ($i=0; $i < $a; $i++) { 
        //     for ($j=0; $j < $a; $j++) { 
        //         if ($a[$i] != $a[$j] || $a[$i]===$a[$j]) {
        //             dd($a[$j]);
        //         }
        //     }
        // }
        // if ($count>=3) {
        //     return view('/login');
        // }
       // $ques->save();
        // $ques = array();
        // foreach ($array as $val) {
        // if (++$dupe_array[$val] > 1) {
        // return true;
        // }
        // }
        // return false;
    
        // $count=0;
        // foreach ($ques as $question) {
        
        //        if ('always' === $ques) {
        //          $count++;
        //     }
        //     else{dd('your are safe');}
                       
        // }
        
//         if ($$question>=3) {
//             return view('/login');
// }
        // for ($i=0; $i < 10; $i++) { 
            
        // }
        // dd($question);
        
        // if ('always' == $request->input('answer1')) {  
        //     if ('always' == $request->input('answer2')){
        //         if ('always' == $request->input('answer3')){
        //             return view('/login');
        //         }else{ $ques->answer = $request->input('answer3');}
        //     }else{$ques->answer2 = $request->input('answer2')}
        //  }elseif ('always' == $request->input('answer2')){
        //             if (condition) {
        //                 // code...
        //             }$ques->answer = $request->input('answer1');
        //     }
