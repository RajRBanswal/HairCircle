<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\ImageModel;
use App\Models\PRegisterModel;
use App\Models\VRegisterModel;
use App\Models\PurchaseHistory;
use App\Models\DiagnosisModel;
use App\Models\ProductModel;
use App\Models\SetScheduleModel;
use App\Models\CustomerImageModel;
use image;
use session;
use DB;
use Validator;
use Redirect;
use Carbon\Carbon;

class QuestionsController extends Controller
{
    public function question_Answer(Request $request)
    {     
        $date = Carbon::now()->format("Y-m-d"); 
            $queo1= new Question;
            $queo2= new Question;
            $queo3= new Question;
            $queo4= new Question;
            $queo5= new Question;
            $queo6= new Question;
            $queo7= new Question;
            $queo8= new Question;
            $queo9= new Question;
            $queo10= new Question;
            $queo11= new Question;
            $queo12= new Question;
            $queo13= new Question;

            $qued1= new Question;
            $qued2= new Question;
            $qued3= new Question;
            $qued4= new Question;
            $qued5= new Question;
            $qued6= new Question;
            $qued7= new Question;
            $qued8= new Question;
            $qued9= new Question;
            $qued10= new Question;
            $qued11= new Question;
            $qued12= new Question;
            $qued13= new Question;
            $qued14= new Question;
            $qued15= new Question;

            $quet1 = new Question;
            $quet2 = new Question;
            $quet3 = new Question;
            $quet4 = new Question;
            $quet5 = new Question;
            $quet6 = new Question;
            $quet7 = new Question;
            $quet8 = new Question;
            $quet9 = new Question;
            $quet10 = new Question;
            $quet11 = new Question;
            $quet12 = new Question;
            $quet13 = new Question;
            $quet14 = new Question;
            $quet15 = new Question;
            $quet16 = new Question;
            $quet17 = new Question;
            $quet18 = new Question;
            $quet19 = new Question;
            $quet20 = new Question;
            $quet21 = new Question;
            $quet22 = new Question;
            $quet23 = new Question;
            $quet24 = new Question;
            $quet25 = new Question;
            $quet26 = new Question;
            $quet27 = new Question;
            $quet28 = new Question;
            $quet29 = new Question;
            $quet30 = new Question;
            $quet31 = new Question;
            $quet32 = new Question;

            $question = new Question;
            $question1 = new Question;
            $question2 = new Question;
            $question3 = new Question;
            $question4 = new Question;
            $question5 = new Question;
            $question6 = new Question;
            $question7 = new Question;
            $question8 = new Question;
            $question9 = new Question;
            $question10 = new Question;
            $question11 = new Question;
            $question12 = new Question;
            $question13 = new Question;
            $question14 = new Question;


            if ($request->input('answer1')!=null) {
                $queo1->user_id = session('user.id');
                $queo1->questions = $request->input('question1');
                $queo1->answers = $request->input('answer1');
                $queo1->created_at = $date;
                $queo1->save();
             
            } 
            if ($request->input('answer2')!=null) {
                $queo2->user_id = session('user.id');
                $queo2->questions = $request->input('question2');
                $queo2->answers = $request->input('answer2');
                $queo2->created_at = $date;
                $queo2->save();    
            } 
            if ($request->input('answer3')!=null) {
                $queo3->user_id = session('user.id');
                $queo3->questions = $request->input('question3');
                $queo3->answers = $request->input('answer3');
                $queo3->created_at = $date;
                $queo3->save();
            }
            if ($request->input('answer4')!=null) {
                $queo4->user_id = session('user.id');
                $queo4->questions = $request->input('question4');
                $queo4->answers = $request->input('answer4');
                $queo4->created_at = $date;
                $queo4->save();
            }
            if ($request->input('answer5')!=null) {
                $queo5->user_id = session('user.id');
                $queo5->questions = $request->input('question5');
                $queo5->answers = $request->input('answer5');
                $queo5->created_at = $date;
                $queo5->save();
            }
            if ($request->input('answer6')!=null) {
                $queo6->user_id = session('user.id');
                $queo6->questions = $request->input('question6');
                $queo6->answers = $request->input('answer6');
                $queo6->created_at = $date;
                $queo6->save();
            }
            if ($request->input('answer7')!=null){  
                $queo7->user_id = session('user.id');  
                $queo7->questions = $request->input('question7');
                $queo7->answers = $request->input('answer7');
                $queo7->created_at = $date;
                $queo7->save();
            }
            if ($request->input('answer8')!=null){
                $queo8->user_id = session('user.id');
                $queo8->questions = $request->input('question8');
                $queo8->answers = $request->input('answer8');
                $queo8->created_at = $date;
                $queo8->save();
            }
            if ($request->input('answer9')!=null){
                $queo9->user_id = session('user.id');
                $queo9->questions = $request->input('question9');
                $queo9->answers = $request->input('answer9');
                $queo9->created_at = $date;
                $queo9->save();
            }
            if ($request->input('answer10')!=null){
                $queo10->user_id = session('user.id');
                $queo10->questions = $request->input('question10');
                $queo10->answers = $request->input('answer10');
                $queo10->created_at = $date;
                $queo10->save();
            }
            if ($request->input('answer11')!=null){
                $queo11->user_id = session('user.id');
                $queo11->questions = $request->input('question11');
                $queo11->answers = $request->input('answer11');
                $queo11->created_at = $date;
                $queo11->save();
            }
            if ($request->input('answer12')!=null){
                $queo12->user_id = session('user.id');
                $queo12->questions = $request->input('question12');
                $queo12->answers = $request->input('answer12');
                $queo12->created_at = $date;
                $queo12->save();
            }
            if ($request->input('answer13')!=null){
                $queo13->user_id = session('user.id');
                $queo13->questions = $request->input('question13');
                $queo13->answers = $request->input('answer13');
                $queo13->created_at = $date;
                $queo13->save();
            }

            if ($request->input('answer14')!=null) {
                $qued1->user_id = session('user.id');
                $qued1->questions = $request->input('question14');
                $qued1->answers = $request->input('answer14');
                $qued1->created_at = $date;
                $qued1->save();
             
            } 
            if ($request->input('answer15')!=null) {
                $qued2->user_id = session('user.id');
                $qued2->questions = $request->input('question15');
                $qued2->answers = $request->input('answer15');
                $qued2->created_at = $date;
                $qued2->save();    
            } 
            if ($request->input('answer16')!=null) {
                $qued3->user_id = session('user.id');
                $qued3->questions = $request->input('question16');
                $qued3->answers = $request->input('answer16');
                $qued3->created_at = $date;
                $qued3->save();
            }
            if ($request->input('answer17')!=null) {
                $qued4->user_id = session('user.id');
                $qued4->questions = $request->input('question17');
                $qued4->answers = $request->input('answer17');
                $qued4->created_at = $date;
                $qued4->save();
            }
            if ($request->input('answer18')!=null) {
                $qued5->user_id = session('user.id');
                $qued5->questions = $request->input('question18');
                $qued5->answers = $request->input('answer18');
                $qued5->created_at = $date;
                $qued5->save();
            }
            
            if ($request->input('answer19')!=null){
                $qued6->user_id = session('user.id');
                $qued6->questions = $request->input('question19');
                $qued6->answers = $request->input('answer19');
                $qued6->created_at = $date;
                
                if ($request->input('answer19')=='Yes') {
                    $treattype = implode(',',$request->input('treattype'));
                    $qued6->type = $treattype;
                    $result = implode(',',$request->input('result'));
                    $qued6->freq_res_qua = $result;
                    $qued6->reas_dura = $request->input('reason');
                    $qued6->save();
                }
                
                $qued6->save();
            }
             if ($request->input('answer20')!=null){  
                $qued7->user_id = session('user.id');  
                $qued7->questions = $request->input('question20');
                $qued7->answers = $request->input('answer20');
                $qued7->created_at = $date;
                
                if ($request->input('answer20')!=null) {
                    $qued7->type = $request->input('historytype');
                    $illness = implode(',',$request->input('takingtreat'));
                    $qued7->freq_res_qua = $illness;
                    $qued7->reas_dura = $request->input('reason');
                    $qued7->save();
                }

                $qued7->save();
            }
            if ($request->input('answer21')!=null){
                $qued8->user_id = session('user.id');
                $qued8->questions = $request->input('question21');
                $qued8->answers = $request->input('answer21');
                $qued8->created_at = $date;
               
                if ($request->input('answer21')=='Yes') {
                    $qued8->type = $request->input('surgerytype');
                    $qued8->freq_res_qua = $request->input('sdonetreat');
                    $qued8->reas_dura = $request->input('sreason');
                    $qued8->save();
                }

                $qued8->save();
            }
            if ($request->input('answer22')!=null){
                $qued9->user_id = session('user.id');
                $qued9->questions = $request->input('question22');
                $qued9->answers = $request->input('answer22');
                $qued9->created_at = $date;
               
                if ($request->input('answer22')=='Yes') {
                    
                    $qued9->type = $request->input('predoctype');
                    $qued9->freq_res_qua = $request->input('predoctreat');
                    $predoc = implode(',',$request->input('predocreason'));
                    $qued9->reas_dura = $predoc;
                    $qued9->save();
                }

                $qued9->save();
            }
            
           
            if ($request->input('answer23')!=null){
                $qued10->user_id = session('user.id');
                $qued10->questions = $request->input('question23');
                $qued10->answers = $request->input('answer23');
                $qued10->created_at = $date;
               
                if ($request->input('answer23')=='Yes') {
                     $exercisetype = implode(',',$request->input('exercisetype'));
                     // dd($exercisetype);
                    $qued10->type = $exercisetype;
                    $qued10->freq_res_qua = $request->input('exFrequency');
                    $qued10->reas_dura = $request->input('month');
                    $qued10->save();
                }

                $qued10->save();
            }
            if ($request->input('answer24')!=null){
                $qued11->user_id = session('user.id');
                $qued11->questions = $request->input('question24');
                $qued11->answers = $request->input('answer24');
                $qued11->created_at = $date;
                $qued11->save();
            }

            if ($request->input('answer25')!=null){
                $qued12->user_id = session('user.id');
                $qued12->questions = $request->input('question25');
                $qued12->answers = $request->input('answer25');
                $qued12->created_at = $date;
                $qued12->save();
            }


            if ($request->input('answer26')!=null){
                $qued13->user_id = session('user.id');
                $qued13->questions = $request->input('question26');
                $qued13->answers = $request->input('answer26');
                $qued13->created_at = $date;
                
                if ($request->input('answer26')=='Yes') {
                    $smoke = implode(',',$request->input('smoketype'));
                    $qued13->type = $smoke;
                    $qued13->freq_res_qua = $request->input('quantity');
                    $qued13->reas_dura = $request->input('duratioyear');
                    $qued13->save();
                }

                $qued13->save();
            }
            if ($request->input('answer27')!=null){
                $qued14->user_id = session('user.id');
                $qued14->questions = $request->input('question27');
                $qued14->answers = $request->input('answer27');
                $qued14->created_at = $date;
               
                if ($request->input('answer27')=='Yes') {
                    $tabbaco1 = implode(',',$request->input('tbktype'));
                    $qued14->type = $tabbaco1;
                    $qued14->freq_res_qua = $request->input('quantity');
                    $qued14->reas_dura = $request->input('duratioyear');
                    $qued14->save();
                }

                $qued14->save();
            }
           
            if ($request->input('answer28')!=null){

                $qued15->user_id = session('user.id');
                $qued15->questions = $request->input('question28');
                $qued15->answers = $request->input('answer28');
                $qued15->created_at = $date;
               
                if ($request->input('answer28')=='Yes') {
                    $alco = implode(',', $request->input('alctype'));
                    $qued15->type = $alco;
                    $qued15->freq_res_qua = $request->input('quantity');
                    $qued15->reas_dura = $request->input('duratioyear');
                    $qued15->save();
                }
                $qued15->save();
            }
            if ($request->input('answer29')!=null) {
                $quet1->user_id = session('user.id');
                $quet1->questions = $request->input('question29');
                $quet1->answers = $request->input('answer29');
                $quet1->created_at = $date;
                $quet1->save();
             
            } 
            if ($request->input('answer30')!=null) {
                $quet2->user_id = session('user.id');
                $quet2->questions = $request->input('question30');
                $quet2->answers = $request->input('answer30');
                $quet2->created_at = $date;

                if ($request->input('answer30')==1) {
                    $quet2->type = $request->input('prosource');
                    $quet2->freq_res_qua = $request->input('proquantity');
                    $quet2->save();
                }
                $quet2->save();    
            } 
            if ($request->input('answer31')!=null) {
                $quet3->user_id = session('user.id');
                $quet3->questions = $request->input('question31');
                $quet3->answers = $request->input('answer31');
                $quet3->created_at = $date;

                if ($request->input('answer31')==1) {
                    $quet3->type = $request->input('efasource');
                    $quet3->freq_res_qua = $request->input('efaquantity');
                    $quet3->save();
                }
                $quet3->save();
            }
            if ($request->input('answer32')!=null) {
                $quet4->user_id = session('user.id');
                $quet4->questions = $request->input('question32');
                $quet4->answers = $request->input('answer32');
                $quet4->created_at = $date;

                if ($request->input('answer32')==1) {
                    $quet4->type = $request->input('frusource');
                    $quet4->freq_res_qua = $request->input('fruquantity');
                    $quet4->save();
                }
                $quet4->save();
            }
            if ($request->input('answer33')!=null) {
                $quet5->user_id = session('user.id');
                $quet5->questions = $request->input('question33');
                $quet5->answers = $request->input('answer33');
                $quet5->created_at = $date;

                if ($request->input('answer33')==1) {
                    $quet5->type = $request->input('foodtype');
                    $quet5->freq_res_qua = $request->input('foodfrequency');
                    $quet5->reas_dura = $request->input('foodquantity');
                    $quet5->save();
                }
                $quet5->save();
            }
            
            if ($request->input('answer34')!=null){
                $quet6->user_id = session('user.id');
                $quet6->questions = $request->input('question34');
                $quet6->answers = $request->input('answer34');
                $quet6->created_at = $date;

                
                if ($request->input('answer34')==1) {
                    $quet6->type = $request->input('milktype');
                    $quet6->freq_res_qua = $request->input('milkfrequency');
                    $quet6->reas_dura = $request->input('milkquantity');
                    $quet6->save();
                }
                
                $quet6->save();
            }
             if ($request->input('answer35')!=null){  
                $quet7->user_id = session('user.id');  
                $quet7->questions = $request->input('question35');
                $quet7->answers = $request->input('answer35');
                $quet7->created_at = $date;

                
                if ($request->input('answer35')!=null) {
                    $quet7->type = $request->input('juitype');
                    $quet7->freq_res_qua = $request->input('juifrequency');
                    $quet7->reas_dura = $request->input('juiquantity');
                    $quet7->save();
                }

                $quet7->save();
            }
            if ($request->input('answer36')!=null){
                $quet8->user_id = session('user.id');
                $quet8->questions = $request->input('question36');
                $quet8->answers = $request->input('answer36');
                $quet8->created_at = $date;

               
                if ($request->input('answer36')==1) {
                    $quet8->type = $request->input('lostwho');
                    $quet8->freq_res_qua = $request->input('lostquantity');
                    $quet8->reas_dura = $request->input('lostduration');
                    $quet8->save();
                }

                $quet8->save();
            }
            if ($request->input('answer37')!=null){
                $quet9->user_id = session('user.id');
                $quet9->questions = $request->input('question37');
                $quet9->answers = $request->input('answer37');
                $quet9->created_at = $date;

               
                if ($request->input('answer37')==1) {
                    $quet9->type = $request->input('gainwho');
                    $quet9->freq_res_qua = $request->input('gainquantity');
                    $quet9->reas_dura = $request->input('gainduration');
                    $quet9->save();
                }

                $quet9->save();
            }
            
           
            if ($request->input('answer39')!=null){
                $quet10->user_id = session('user.id');
                $quet10->questions = $request->input('question39');
                $quet10->answers = $request->input('answer39');
                $quet10->created_at = $date;

                $quet10->save();
            }
            if ($request->input('answer40')!=null){
                $quet11->user_id = session('user.id');
                $quet11->questions = $request->input('question40');
                $quet11->answers = $request->input('answer40');
                $quet11->created_at = $date;

                $quet11->save();
            }

            if ($request->input('answer41')!=null){
                $quet12->user_id = session('user.id');
                $quet12->questions = $request->input('question41');
                $quet12->answers = $request->input('answer41');
                $quet12->created_at = $date;

                $quet12->save();
            }


            if ($request->input('answer42')!=null){
                $quet13->user_id = session('user.id');
                $quet13->questions = $request->input('question42');
                $quet13->answers = $request->input('answer42');
                $quet13->created_at = $date;

                $quet13->save();
            }
            if ($request->input('answer43')!=null){
                $quet14->user_id = session('user.id');
                $quet14->questions = $request->input('question43');
                $quet14->answers = $request->input('answer43');
                $quet14->created_at = $date;

                $quet14->save();
            }
           
            if ($request->input('answer44')!=null){

                $quet15->user_id = session('user.id');
                $quet15->questions = $request->input('question44');
                $quet15->answers = $request->input('answer44');
                $quet15->created_at = $date;

                $quet15->save();
            }
            
            if ($request->input('answer45')!=null) {
                $quet16->user_id = session('user.id');
                $quet16->questions = $request->input('question45');
                $quet16->answers = $request->input('answer45');
                $quet16->created_at = $date;

                $quet16->save();
             
            } 
            if ($request->input('answer46')!=null) {
                $quet17->user_id = session('user.id');
                $quet17->questions = $request->input('question46');
                $quet17->answers = $request->input('answer46');
                $quet17->created_at = $date;

                $quet17->save();    
            } 
            if ($request->input('answer47')!=null) {
                $quet18->user_id = session('user.id');
                $quet18->questions = $request->input('question47');
                $quet18->answers = $request->input('answer47');
                $quet18->created_at = $date;

                $quet18->save();
            }
            if ($request->input('answer48')!=null) {
                $quet19->user_id = session('user.id');
                $quet19->questions = $request->input('question48');
                $quet19->answers = $request->input('answer48');
                $quet19->created_at = $date;

                $quet19->save();
            }
            if ($request->input('answer49')!=null) {
                $quet20->user_id = session('user.id');
                $quet20->questions = $request->input('question49');
                $quet20->answers = $request->input('answer49');
                $quet20->created_at = $date;

                $quet20->save();
            }
            if ($request->input('answer50')!=null){
                $quet21->user_id = session('user.id');
                $quet21->questions = $request->input('question50');
                $quet21->answers = $request->input('answer50');
                $quet21->created_at = $date;

                $quet21->save();
            }
            if ($request->input('answer51')!=null){
                $quet22->user_id = session('user.id');
                $quet22->questions = $request->input('question51');
                $quet22->answers = $request->input('answer51');
                $quet22->created_at = $date;

                $quet22->save();
            }
            if ($request->input('answer52')!=null){
                $quet23->user_id = session('user.id');
                $quet23->questions = $request->input('question52');
                $quet23->answers = $request->input('answer52');
                $quet23->created_at = $date;

                $quet23->save();
            }
            if ($request->input('answer53')!=null){
                $quet24->user_id = session('user.id');
                $quet24->questions = $request->input('question53');
                $quet24->answers = $request->input('answer53');
                $quet24->created_at = $date;

                $quet24->save();
            }
            if ($request->input('answer54')!=null){
                $quet25->user_id = session('user.id');
                $quet25->questions = $request->input('question54');
                $quet25->answers = $request->input('answer54');
                $quet25->created_at = $date;

                $quet25->save();
            }
            if ($request->input('answer55')!=null){
                $quet26->user_id = session('user.id');
                $quet26->questions = $request->input('question55');
                $quet26->answers = $request->input('answer55');
                $quet26->created_at = $date;

                $quet26->save();
            }
            if ($request->input('answer56')!=null){
                $quet27->user_id = session('user.id');
                $quet27->questions = $request->input('question56');
                $quet27->answers = $request->input('answer56');
                $quet27->created_at = $date;

                $quet27->save();
            }
            if ($request->input('answer57')!=null){
                $quet28->user_id = session('user.id');
                $quet28->questions = $request->input('question57');
                $quet28->answers = $request->input('answer57');
                $quet28->created_at = $date;

                $quet28->save();
            }
            if ($request->input('answer58')!=null){

                $quet29->user_id = session('user.id');
                $quet29->questions = $request->input('question58');
                $quet29->answers = $request->input('answer58');
                $quet29->created_at = $date;

                $quet29->save();
            }
            if ($request->input('answer59')!=null){

                $quet30->user_id = session('user.id');
                $quet30->questions = $request->input('question59');
                $quet30->answers = $request->input('answer59');
                $quet30->created_at = $date;

                $quet30->save();
            }
            if ($request->input('answer60')!=null){

                $quet31->user_id = session('user.id');
                $quet31->questions = $request->input('question60');
                $quet31->answers = $request->input('answer60');
                $quet31->created_at = $date;

                $quet31->save();
            }
            if ($request->input('answer61')!=null){

                $quet32->user_id = session('user.id');
                $quet32->questions = $request->input('question61');
                $quet32->answers = $request->input('answer61');
                $quet32->created_at = $date;

                $quet32->save();
            }
            if ($request->input('answer62')!=null){

                $question->user_id = session('user.id');
                $question->questions = $request->input('question62');
                $question->answers = $request->input('answer62');
                $question->created_at = $date;

                $question->save();
            }
            if ($request->input('answer63')!=null){

                $question1->user_id = session('user.id');
                $question1->questions = $request->input('question63');
                $question1->answers = $request->input('answer63');
                $question1->created_at = $date;
                $question1->save();
            }
            if ($request->input('answer64')!=null){

                $question2->user_id = session('user.id');
                $question2->questions = $request->input('question64');
                $question2->answers = $request->input('answer64');
                $question2->created_at = $date;
                $question2->save();
            }
            if ($request->input('answer65')!=null){

                $question3->user_id = session('user.id');
                $question3->questions = $request->input('question65');
                $question3->answers = $request->input('answer65');
                $question3->created_at = $date;
                $question3->save();
            }
            if ($request->input('answer66')!=null){

                $question4->user_id = session('user.id');
                $question4->questions = $request->input('question66');
                $question4->answers = $request->input('answer66');
                $question4->created_at = $date;
                $question4->save();
            }
            if ($request->input('answer67')!=null){

                $question5->user_id = session('user.id');
                $question5->questions = $request->input('question67');
                $question5->answers = $request->input('answer67');
                $question5->created_at = $date;
                $question5->save();
            }
            if ($request->input('answer68')!=null){

                $question6->user_id = session('user.id');
                $question6->questions = $request->input('question68');
                $question6->answers = $request->input('answer68');
                $question6->created_at = $date;
                $question6->save();
            }
            if ($request->input('answer69')!=null){

                $question7->user_id = session('user.id');
                $question7->questions = $request->input('question69');
                $question7->answers = $request->input('answer69');
                $question7->created_at = $date;
                $question7->save();
            }
            if ($request->input('answer70')!=null){

                $question8->user_id = session('user.id');
                $question8->questions = $request->input('question70');
                $question8->answers = $request->input('answer70');
                $question8->created_at = $date;
                $question8->save();
            }
            if ($request->input('answer71')!=null){

                $question9->user_id = session('user.id');
                $question9->questions = $request->input('question71');
                $question9->answers = $request->input('answer71');
                $question9->created_at = $date;
                $question9->save();
            }
            if ($request->input('answer72')!=null){

                $question10->user_id = session('user.id');
                $question10->questions = $request->input('question72');
                $question10->answers = $request->input('answer72');
                $question10->created_at = $date;
                $question10->save();
            }
            if ($request->input('answer73')!=null){

                $question11->user_id = session('user.id');
                $question11->questions = $request->input('question73');
                $question11->answers = $request->input('answer73');
                $question11->created_at = $date;
                $question11->save();
            }
            if ($request->input('answer74')!=null){

                $question12->user_id = session('user.id');
                $question12->questions = $request->input('question74');
                $question12->answers = $request->input('answer74');
                $question12->created_at = $date;
                $question12->save();
            }
             if ($request->input('answer75')!=null){

                $question13->user_id = session('user.id');
                $question13->questions = $request->input('question75');
                $question13->answers = $request->input('answer75');
                $question13->created_at = $date;
                $question13->save();
            }
             if ($request->input('answer76')!=null){

                $question14->user_id = session('user.id');
                $question14->questions = $request->input('question76');
                $question14->answers = $request->input('answer76');
                $question14->created_at = $date;
                $question14->save();
            }


         $image1 = new ImageModel;
       if ($request->input('customRadioInline76')=='image11'){
            $image1->user_id = session('user.id');
            $image1->image = $request->input('image11');
            $image1->created_at = $date; 
            $types = $request->input('hair');
            $dia = DiagnosisModel::where('type',$types)->first();
            if($dia !=null){
                $diagno = DiagnosisModel::where('type',$types)->get();
                foreach ($diagno as $value) {
                   $data = $value->diagnosis;
                   $prod_name = $value->product_name;
                   $price = $value->price;
                }
                $image1->suggestion = $data;
                $image1->product_name = $prod_name;
                $image1->price = $price;
                 $image1->save();    
            }else{
                return redirect()->back()->with('message','Kit Not Available? Please try Some Time');
            }
            
            // $image1->save(); 
            
        }
        if ($request->input('customRadioInline76')=='image1'){
            $image1->user_id = session('user.id');
            $image1->image = $request->input('image1');
            $image1->created_at = $date; 
            $types = $request->input('hair1');
            $dia = DiagnosisModel::where('type',$types)->first();
             if($dia !=null){
                $diagno = DiagnosisModel::where('type',$types)->get();
                foreach ($diagno as $value) {
                   $data = $value->diagnosis;
                   $prod_name = $value->product_name;
                   $price = $value->price;
                }
                $image1->suggestion = $data;
                $image1->product_name = $prod_name;
                $image1->price = $price;
                 $image1->save();    
            }else{
                return redirect()->back()->with('message','Kit Not Available? Please try Some Time');
            } 
            // $image1->suggestion = $request->input('hair1');
            // $image1->save(); 
            
        }
        if ($request->input('customRadioInline76')=='image2'){
            $image1->user_id = session('user.id');
            $image1->image = $request->input('image2'); 
            $image1->created_at = $date; 
            // $image1->suggestion = $request->input('hair2');
            $types = $request->input('hair2');
            $dia = DiagnosisModel::where('type',$types)->first();
             if($dia !=null){
                $diagno = DiagnosisModel::where('type',$types)->get();
                foreach ($diagno as $value) {
                   $data = $value->diagnosis;
                   $prod_name = $value->product_name;
                   $price = $value->price;
                }
                $image1->suggestion = $data;
                $image1->product_name = $prod_name;
                $image1->price = $price;
                 $image1->save();    
            }else{
                return redirect()->back()->with('message','Kit Not Available? Please try Some Time');
            } 
            // $image1->save(); 
            
        }
        if ($request->input('customRadioInline76')=='image3'){
            $image1->user_id = session('user.id');
            $image1->image = $request->input('image3'); 
            $image1->created_at = $date; 
            // $image1->suggestion = $request->input('hair3');
            $types = $request->input('hair3');
            $dia = DiagnosisModel::where('type',$types)->first();
             if($dia !=null){
                $diagno = DiagnosisModel::where('type',$types)->get();
                foreach ($diagno as $value) {
                   $data = $value->diagnosis;
                   $prod_name = $value->product_name;
                   $price = $value->price;
                }
                $image1->suggestion = $data;
                $image1->product_name = $prod_name;
                $image1->price = $price;
                 $image1->save();    
            }else{
                return redirect()->back()->with('message','Kit Not Available? Please try Some Time');
            } 
            // $image1->save(); 
            
        }
        if ($request->input('customRadioInline76')=='image4'){
            $image1->user_id = session('user.id');
            $image1->image = $request->input('image4');
            $image1->created_at = $date;  
            // $image1->suggestion = $request->input('hair4');
            $types = $request->input('hair4');
            $dia = DiagnosisModel::where('type',$types)->first();
             if($dia !=null){
                $diagno = DiagnosisModel::where('type',$types)->get();
                foreach ($diagno as $value) {
                   $data = $value->diagnosis;
                   $prod_name = $value->product_name;
                   $price = $value->price;
                }
                $image1->suggestion = $data;
                $image1->product_name = $prod_name;
                $image1->price = $price;
                 $image1->save();    
            }else{
                return redirect()->back()->with('message','Kit Not Available? Please try Some Time');
            } 
            // $image1->save(); 
            
        }
        if ($request->input('customRadioInline76')=='image5'){
            $image1->user_id = session('user.id');
            $image1->image = $request->input('image5');
            $image1->created_at = $date;  
            // $image1->suggestion = $request->input('hair5');
            $types = $request->input('hair5');
            $dia = DiagnosisModel::where('type',$types)->first();
            if($dia !=null){
                $diagno = DiagnosisModel::where('type',$types)->get();
                foreach ($diagno as $value) {
                   $data = $value->diagnosis;
                   $prod_name = $value->product_name;
                   $price = $value->price;
                }
                $image1->suggestion = $data;
                $image1->product_name = $prod_name;
                $image1->price = $price;
                 $image1->save();    
            }else{
                return redirect()->back()->with('message','Kit Not Available? Please try Some Time');
            } 
            // $image1->save(); 
            
        }
        if ($request->input('customRadioInline82')=='ca1'){
            $image1->user_id = session('user.id');
            $image1->image = $request->input('ca1');
            $image1->created_at = $date;  
            // $image1->suggestion = $request->input('ca1_s');
            $types = $request->input('ca1_s');
            $dia = DiagnosisModel::where('type',$types)->first();
            if($dia !=null){
                $diagno = DiagnosisModel::where('type',$types)->get();
                foreach ($diagno as $value) {
                   $data = $value->diagnosis;
                   $prod_name = $value->product_name;
                   $price = $value->price;
                }
                $image1->suggestion = $data;
                $image1->product_name = $prod_name;
                $image1->price = $price;
                 $image1->save();    
            }else{
                return redirect()->back()->with('message','Kit Not Available? Please try Some Time');
            } 
            // $image1->save(); 
            
        }
        if ($request->input('customRadioInline82')=='ca2'){
            $image1->user_id = session('user.id');
            $image1->image = $request->input('ca2');
            $image1->created_at = $date;  
            // $image1->suggestion = $request->input('ca2_s');
            $types = $request->input('ca2_s');
            $dia = DiagnosisModel::where('type',$types)->first();
            if($dia !=null){
                $diagno = DiagnosisModel::where('type',$types)->get();
                foreach ($diagno as $value) {
                   $data = $value->diagnosis;
                   $prod_name = $value->product_name;
                   $price = $value->price;
                }
                $image1->suggestion = $data;
                $image1->product_name = $prod_name;
                $image1->price = $price;
                 $image1->save();    
            }else{
                return redirect()->back()->with('message','Kit Not Available? Please try Some Time');
            } 

            // $image1->save(); 
            
        }
         if ($request->input('customRadioInline84')=='ttm1'){
            $image1->user_id = session('user.id');
            $image1->image = $request->input('ttm1');
            $image1->created_at = $date;  
            // $image1->suggestion = $request->input('ttm1_s');
            $types = $request->input('ttm1_s');
            $dia = DiagnosisModel::where('type',$types)->first();
            if($dia !=null){
                $diagno = DiagnosisModel::where('type',$types)->get();
                foreach ($diagno as $value) {
                   $data = $value->diagnosis;
                   $prod_name = $value->product_name;
                   $price = $value->price;
                }
                $image1->suggestion = $data;
                $image1->product_name = $prod_name;
                $image1->price = $price;
                 $image1->save();    
            }else{
                return redirect()->back()->with('message','Kit Not Available? Please try Some Time');
            }
            // $image1->save(); 
            
        }
        if ($request->input('customRadioInline84')=='ttm2'){
            $image1->user_id = session('user.id');
            $image1->image = $request->input('ttm2'); 
            $image1->created_at = $date; 
            // $image1->suggestion = $request->input('ttm2_s');
            $types = $request->input('ttm2_s');
            $dia = DiagnosisModel::where('type',$types)->first();
            if($dia !=null){
                $diagno = DiagnosisModel::where('type',$types)->get();
                foreach ($diagno as $value) {
                   $data = $value->diagnosis;
                   $prod_name = $value->product_name;
                   $price = $value->price;
                }
                $image1->suggestion = $data;
                $image1->product_name = $prod_name;
                $image1->price = $price;
                 $image1->save();    
            }else{
                return redirect()->back()->with('message','Kit Not Available? Please try Some Time');
            }
           
            
        }
        if ($request->input('customRadioInline84')=='ttm3'){
            $image1->user_id = session('user.id');
            $image1->image = $request->input('ttm3'); 
            $image1->created_at = $date; 
            // $image1->suggestion = $request->input('ttm3_s');
            $types = $request->input('ttm3_s');
            $dia = DiagnosisModel::where('type',$types)->first();
            if($dia !=null){
                $diagno = DiagnosisModel::where('type',$types)->get();
                foreach ($diagno as $value) {
                   $data = $value->diagnosis;
                   $prod_name = $value->product_name;
                   $price = $value->price;
                }
                $image1->suggestion = $data;
                $image1->product_name = $prod_name;
                $image1->price = $price;
                 $image1->save();    
            }else{
                return redirect()->back()->with('message','Kit Not Available? Please try Some Time');
            }
        }

        // $date = Carbon::now(); 
        $fromtime = $request->input('fromtime');
        $totime = $request->input('totime');
        $user_id = session('user.id');
        $set_schedule = new SetScheduleModel();
        $set_schedule->shift = $request->input('shift');
        $set_schedule->date = $request->input('date');
        $set_schedule->fromtime = $fromtime;
        $set_schedule->totime = $totime;
        $customer = PRegisterModel::where('id',$user_id)->first();
        if($customer != null){
           $cust = PRegisterModel::where('id',$user_id)->get(); 
           foreach ($cust as $value) {
               $customer = $value->name;
               $mobile = $value->mobile_no;
           }
        }
        $set_schedule->cust_id = $user_id;
        $set_schedule->customer_name = $customer;
        $set_schedule->mobile = $mobile;
        $set_schedule->created_at = $date;
        $images = ImageModel::where('user_id',$user_id)->first();
        if($images != null){
           $image = ImageModel::where('user_id',$user_id)->get(); 
           foreach ($image as $value) {
               $image = $value->image;
           }
        }
        $set_schedule->image = $image;
        $set_schedule->save();
        if ($request->input('image') != null || $request->input('image2') != null || $request->input('image3') != null || $request->input('image4') != null) {
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
         }
        return redirect('/user_dashboard')->with('alert','Data Saved & Appointment Schedule Set Successfully');


        // return redirect('/user_dashboard')->with('alert','Our Hair Specialist(Trichologist) will Call You, Please Choose Time Slot to Share your Insights');
    }

     public function p_details_after(Request $request)
    {
        $user_id = session('user.id');
        $image = ImageModel::where('user_id',$user_id)->get();
        $datas = PRegisterModel::all()->where('id',$user_id);
        $q_data = Question::where('user_id',$user_id)->get();
        $vendors = VRegisterModel::all();
        $order = PurchaseHistory::where('user_id',$user_id)->first();
        
        if($order != null){ 
        $orders = PurchaseHistory::where('user_id',$user_id)->get(); 
            foreach ($orders as $value) {
                $v = $value->vendor;
            }
            $medi_store = VRegisterModel::where('id',$v)->get();
            return view('p_details_after',compact('datas','q_data','image','vendors','orders','medi_store'));
        }else{

            $orders = PurchaseHistory::where('user_id',$user_id)->get();
            return view('p_details_after',compact('datas','q_data','image','vendors','orders'));
        }
        // $orders = PurchaseHistory::where('user_id',$user_id)->get();
        // foreach ($orders as $value) {
        //     $mstore = $value->vendor;
        // }
        // $medi_store = VRegisterModel::where('id',$mstore)->get();
        // return view('p_details_after',compact('datas','q_data','image','vendors','orders','medi_store'));

    }
    
    public function Get_hair(Request $request)
    {
        $user_id = session('user.id');
        $image = ImageModel::where('user_id',$user_id)->get();
        $advice = SetScheduleModel::where('cust_id',$user_id)->get();
        $q_data = Question::where('user_id',$user_id)->selectRaw('DATE(created_at) as date')->distinct()->get();
        // $q_data = Question::where('user_id',$user_id)->get();
         return view('hairhealth',compact('q_data','image','advice'));
    }

    public function Purchase_History(Request $request)
    {
        $user_id = session('user.id');
        $status = '1';
        // $image = ImageModel::where('user_id',$user_id)->get();
        // //$datas = PRegisterModel::all()->where('id',$user_id);
        // //$q_data = Question::where('user_id',$user_id)->get();
        // $vendors = VRegisterModel::where('status',$status)->get();
        // $order = PurchaseHistory::where('user_id',$user_id)->first();
        
        // if($order != null){ 
        $dates = PurchaseHistory::where('user_id',$user_id)->selectRaw('DATE(created_at) as date')->distinct()->get(); 
        //     foreach ($orders as $value) {
        //         $v = $value->vendor;
        //       $kit = $value->kit;
        //     }
        //     $p_img = ProductModel::where('product_name',$kit)->get();
        //     $medi_store = VRegisterModel::where('id',$v)->get();
            return view('purchase_history',compact('dates'));
        // }else{

        //     $orders = PurchaseHistory::where('user_id',$user_id)->get();
            // return view('purchase_history',compact('image','vendors','orders'));
        // }
    }
    public function get_Purchase_data(Request $request,$name)
    {
        $user_id = session('user.id');
        $status = '1';
        // ->join('image','purchasepp.user_id','=','image.user_id')->join('producttbl','purchasepp.kit','=','producttbl.product_name')
        // $purchase_data['image'] = ImageModel::where('user_id',$user_id)->get();
        // //$datas = PRegisterModel::all()->where('id',$user_id);
        // //$q_data = Question::where('user_id',$user_id)->get();
        // $purchase_data['vendors'] = VRegisterModel::where('status',$status)->get();
        // $order = PurchaseHistory::where('user_id',$user_id)->first();
        $purchase_data = DB::table('purchasepp')->join('vendor','purchasepp.vendor','=','vendor.id')->select('purchasepp.kit','purchasepp.buying_price','purchasepp.pay_mode','purchasepp.updated_at','purchasepp.status','vendor.name','vendor.shop_name','vendor.address','vendor.city')->where([['purchasepp.user_id',$user_id],['purchasepp.created_at',$name]])->get();
        // if($order != null){ 
        // $purchase_data['dates'] = PurchaseHistory::where([['user_id',$user_id],['created_at',$name]])->get();
            // $orders= PurchaseHistory::where([['user_id',$user_id],['created_at',$name]])->get();
            // foreach ($orders as $value) {
                // $v = $value->vendor;
              // $kit = $value->kit;
            // }
            // $purchase_data['p_img'] = ProductModel::where('product_name',$kit)->get();
            // $purchase_data['medi_store'] = VRegisterModel::where('id',$v)->get();
            // return view('purchase_history',compact('dates'));
            return response()->json($purchase_data);
        // }else{

        //     $orders = PurchaseHistory::where('user_id',$user_id)->get();
            // return view('purchase_history',compact('image','vendors','orders'));
        // }
    }

    public function Buy_Product(Request $request,$id)
    {
        $status_zero = '0';
        $status = '1';
        $user_id = session('user.id');
        $order = ImageModel::where([['user_id',$user_id],['id',$id]])->first(); 
        if ($order !=null) {
            $orders = ImageModel::where([['user_id',$user_id],['id',$id]])->get(); 
            foreach ($orders as $value) {
                $kit = $value->product_name;
            }
        $products = ProductModel::where('product_name',$kit)->distinct('product_name')->get();
        $vendors = VRegisterModel::where('status',$status)->get();
        // $image = ImageModel::where([['id',$id],['user_id',$user_id],['status',$status_zero]])->get();
        $image = ImageModel::where([['id',$id],['user_id',$user_id]])->get();
        return view('buy_product',compact('image','vendors','products'));
        }
    }
    public function Delete_Product(Request $request,$id)
    {
       $user_id = session('user.id');
       $image = ImageModel::where([['id',$id],['user_id',$user_id]])->delete();
       return redirect()->back()->with('alert','Selected Product Deleted');
    }
    public function get_Questions(Request $request,$name)
    {
        $user_id = session('user.id');
        $questions = Question::where([['user_id',$user_id],['created_at',$name]])->get();
        return response()->json($questions);
    }
    public function get_Image(Request $request,$name)
    {
        $user_id = session('user.id');
        $images = ImageModel::where([['user_id',$user_id],['created_at',$name]])->get();
        return response()->json($images);
    }
    public function get_Treatments(Request $request,$name)
    {
        $user_id = session('user.id');
        $treatment = SetScheduleModel::where([['cust_id',$user_id],['created_at',$name]])->get();
        return response()->json($treatment);
    }
    public function Set_Schedule(Request $request)
    {
        $date = Carbon::now()->format("Y-m-d");
        $user_id = session('user.id');
        $set_schedule = new SetScheduleModel();
        $set_schedule->shift = $request->input('shift');
        $set_schedule->date = $request->input('date');
        $set_schedule->time = $request->input('time');
        $customer = PRegisterModel::where('id',$user_id)->first();
        if($customer != null){
           $cust = PRegisterModel::where('id',$user_id)->get(); 
           foreach ($cust as $value) {
               $customer = $value->name;
               $mobile = $value->mobile_no;
           }
        }
        $set_schedule->cust_id = $user_id;
        $set_schedule->customer_name = $customer;
        $set_schedule->mobile = $mobile;
        $set_schedule->created_at = $date;
        $images = ImageModel::where('user_id',$user_id)->first();
        if($images != null){
           $image = ImageModel::where('user_id',$user_id)->get(); 
           foreach ($image as $value) {
               $image = $value->image;
           }
        }
        $set_schedule->image = $image;
        $set_schedule->save();
        return redirect('/user_dashboard')->with('alert','Appointment Schedule Set Successfully');
    }
    public function Get_Cust_Image(Request $request)
    {
        $user_id = session('user.id');
        $get_images = CustomerImageModel::where('user_id',$user_id)->get();
        return view('get_images',compact('get_images'));
    }
   
   
    // public function pquestion2(Request $request)
    // {     
        
    //         $qued1= new Question;
    //         $qued2= new Question;
    //         $qued3= new Question;
    //         $qued4= new Question;
    //         $qued5= new Question;
    //         $qued6= new Question;
    //         $qued7= new Question;
    //         $qued8= new Question;
    //         $qued9= new Question;
    //         $qued10= new Question;
    //         $qued11= new Question;
    //         $qued12= new Question;
    //         $qued13= new Question;
    //         $qued14= new Question;
    //         $qued15= new Question;

    //         if ($request->input('answer14')!=null) {
    //             $qued1->user_id = session('user.id');
    //             $qued1->questions = $request->input('question-1');
    //             $qued1->answers = $request->input('answer14');
    //             $qued1->save();
             
    //         } 
    //         if ($request->input('answer15')!=null) {
    //             $qued2->user_id = session('user.id');
    //             $qued2->questions = $request->input('question-2');
    //             $qued2->answers = $request->input('answer15');
    //             $qued2->save();    
    //         } 
    //         if ($request->input('answer16')!=null) {
    //             $qued3->user_id = session('user.id');
    //             $qued3->questions = $request->input('question-3');
    //             $qued3->answers = $request->input('answer16');
    //             $qued3->save();
    //         }
    //         if ($request->input('answer17')!=null) {
    //             $qued4->user_id = session('user.id');
    //             $qued4->questions = $request->input('question-4');
    //             $qued4->answers = $request->input('answer17');
    //             $qued4->save();
    //         }
    //         if ($request->input('answer18')!=null) {
    //             $qued5->user_id = session('user.id');
    //             $qued5->questions = $request->input('question-5');
    //             $qued5->answers = $request->input('answer18');
    //             $qued5->save();
    //         }
            
    //         if ($request->input('answer19')!=null){
    //             $qued6->user_id = session('user.id');
    //             $qued6->questions = $request->input('question-6');
    //             $qued6->answers = $request->input('answer19');
                
    //             if ($request->input('answer19')=='Yes') {
    //                 $treattype = implode(',',$request->input('treattype'));
    //                 $qued6->type = $treattype;
    //                 $result = implode(',',$request->input('result'));
    //                 $qued6->freq_res_qua = $result;
    //                 $qued6->reas_dura = $request->input('reason');
    //                 $qued6->save();
    //             }
                
    //             $qued6->save();
    //         }
    //          if ($request->input('answer20')!=null){  
    //             $qued7->user_id = session('user.id');  
    //             $qued7->questions = $request->input('question-7');
    //             $qued7->answers = $request->input('answer20');
                
    //             if ($request->input('answer20')!=null) {
    //                 $qued7->type = $request->input('historytype');
    //                 $illness = implode(',',$request->input('takingtreat'));
    //                 $qued7->freq_res_qua = $illness;
    //                 $qued7->reas_dura = $request->input('reason');
    //                 $qued7->save();
    //             }

    //             $qued7->save();
    //         }
    //         if ($request->input('answer21')!=null){
    //             $qued8->user_id = session('user.id');
    //             $qued8->questions = $request->input('question-8');
    //             $qued8->answers = $request->input('answer21');
               
    //             if ($request->input('answer21')=='Yes') {
    //                 $qued8->type = $request->input('surgerytype');
    //                 $qued8->freq_res_qua = $request->input('sdonetreat');
    //                 $qued8->reas_dura = $request->input('sreason');
    //                 $qued8->save();
    //             }

    //             $qued8->save();
    //         }
    //         if ($request->input('answer22')!=null){
    //             $qued9->user_id = session('user.id');
    //             $qued9->questions = $request->input('question-9');
    //             $qued9->answers = $request->input('answer22');
               
    //             if ($request->input('answer22')=='Yes') {
                    
    //                 $qued9->type = $request->input('predoctype');
    //                 $qued9->freq_res_qua = $request->input('predoctreat');
    //                 $predoc = implode(',',$request->input('predocreason'));
    //                 $qued9->reas_dura = $predoc;
    //                 $qued9->save();
    //             }

    //             $qued9->save();
    //         }
            
           
    //         if ($request->input('answer23')!=null){
    //             $qued10->user_id = session('user.id');
    //             $qued10->questions = $request->input('question-10');
    //             $qued10->answers = $request->input('answer23');
               
    //             if ($request->input('answer23')=='Yes') {
    //                  $exercisetype = implode(',',$request->input('exercisetype'));
    //                  // dd($exercisetype);
    //                 $qued10->type = $exercisetype;
    //                 $qued10->freq_res_qua = $request->input('exFrequency');
    //                 $qued10->reas_dura = $request->input('month');
    //                 $qued10->save();
    //             }

    //             $qued10->save();
    //         }
    //         if ($request->input('answer24')!=null){
    //             $qued11->user_id = session('user.id');
    //             $qued11->questions = $request->input('question-11');
    //             $qued11->answers = $request->input('answer24');
    //             $qued11->save();
    //         }

    //         if ($request->input('answer25')!=null){
    //             $qued12->user_id = session('user.id');
    //             $qued12->questions = $request->input('question-12');
    //             $qued12->answers = $request->input('answer25');
    //             $qued12->save();
    //         }


    //         if ($request->input('answer26')!=null){
    //             $qued13->user_id = session('user.id');
    //             $qued13->questions = $request->input('question-13');
    //             $qued13->answers = $request->input('answer26');
                
    //             if ($request->input('answer26')=='Yes') {
    //                 $smoke = implode(',',$request->input('smoketype'));
    //                 $qued13->type = $smoke;
    //                 $qued13->freq_res_qua = $request->input('quantity');
    //                 $qued13->reas_dura = $request->input('duratioyear');
    //                 $qued13->save();
    //             }

    //             $qued13->save();
    //         }
    //         if ($request->input('answer27')!=null){
    //             $qued14->user_id = session('user.id');
    //             $qued14->questions = $request->input('question-01');
    //             $qued14->answers = $request->input('answer27');
               
    //             if ($request->input('answer27')=='Yes') {
    //                 $tabbaco1 = implode(',',$request->input('tbktype'));
    //                 $qued14->type = $tabbaco1;
    //                 $qued14->freq_res_qua = $request->input('quantity');
    //                 $qued14->reas_dura = $request->input('duratioyear');
    //                 $qued14->save();
    //             }

    //             $qued14->save();
    //         }
           
    //         if ($request->input('answer28')!=null){

    //             $qued15->user_id = session('user.id');
    //             $qued15->questions = $request->input('question-02');
    //             $qued15->answers = $request->input('answer28');
               
    //             if ($request->input('answer28')=='Yes') {
    //                 $alco = implode(',', $request->input('alctype'));
    //                 $qued15->type = $alco;
    //                 $qued15->freq_res_qua = $request->input('quantity');
    //                 $qued15->reas_dura = $request->input('duratioyear');
    //                 $qued15->save();
    //             }
    //             $qued15->save();
    //         }
    //     return redirect('/pquestion3');
    // }
    // public function pquestion3(Request $request)
    // {     
        
    //      $quet1 = new Question;
    //      $quet2 = new Question;
    //      $quet3 = new Question;
    //      $quet4 = new Question;
    //      $quet5 = new Question;
    //      $quet6 = new Question;
    //      $quet7 = new Question;
    //      $quet8 = new Question;
    //      $quet9 = new Question;
    //      $quet10 = new Question;
    //      $quet11 = new Question;
    //      $quet12 = new Question;
    //      $quet13 = new Question;
    //      $quet14 = new Question;
    //      $quet15 = new Question;
    //      $quet16 = new Question;

    //         if ($request->input('answer29')!=null) {
    //             $quet1->user_id = session('user.id');
    //             $quet1->questions = $request->input('question-1');
    //             $quet1->answers = $request->input('answer29');
    //             $quet1->save();
             
    //         } 
    //         if ($request->input('answer30')!=null) {
    //             $quet2->user_id = session('user.id');
    //             $quet2->questions = $request->input('question-2');
    //             $quet2->answers = $request->input('answer30');
    //             if ($request->input('answer30')==1) {
    //                 $quet2->type = $request->input('prosource');
    //                 $quet2->freq_res_qua = $request->input('proquantity');
    //                 $quet2->save();
    //             }
    //             $quet2->save();    
    //         } 
    //         if ($request->input('answer31')!=null) {
    //             $quet3->user_id = session('user.id');
    //             $quet3->questions = $request->input('question-3');
    //             $quet3->answers = $request->input('answer31');
    //             if ($request->input('answer31')==1) {
    //                 $quet3->type = $request->input('efasource');
    //                 $quet3->freq_res_qua = $request->input('efaquantity');
    //                 $quet3->save();
    //             }
    //             $quet3->save();
    //         }
    //         if ($request->input('answer32')!=null) {
    //             $quet4->user_id = session('user.id');
    //             $quet4->questions = $request->input('question-4');
    //             $quet4->answers = $request->input('answer32');
    //             if ($request->input('answer32')==1) {
    //                 $quet4->type = $request->input('frusource');
    //                 $quet4->freq_res_qua = $request->input('fruquantity');
    //                 $quet4->save();
    //             }
    //             $quet4->save();
    //         }
    //         if ($request->input('answer33')!=null) {
    //             $quet5->user_id = session('user.id');
    //             $quet5->questions = $request->input('question-5');
    //             $quet5->answers = $request->input('answer33');
    //             if ($request->input('answer33')==1) {
    //                 $quet5->type = $request->input('foodtype');
    //                 $quet5->freq_res_qua = $request->input('foodfrequency');
    //                 $quet5->reas_dura = $request->input('foodquantity');
    //                 $quet5->save();
    //             }
    //             $quet5->save();
    //         }
            
    //         if ($request->input('answer34')!=null){
    //             $quet6->user_id = session('user.id');
    //             $quet6->questions = $request->input('question-6');
    //             $quet6->answers = $request->input('answer34');
                
    //             if ($request->input('answer34')==1) {
    //                 $quet6->type = $request->input('milktype');
    //                 $quet6->freq_res_qua = $request->input('milkfrequency');
    //                 $quet6->reas_dura = $request->input('milkquantity');
    //                 $quet6->save();
    //             }
                
    //             $quet6->save();
    //         }
    //          if ($request->input('answer35')!=null){  
    //             $quet7->user_id = session('user.id');  
    //             $quet7->questions = $request->input('question-7');
    //             $quet7->answers = $request->input('answer35');
                
    //             if ($request->input('answer35')!=null) {
    //                 $quet7->type = $request->input('juitype');
    //                 $quet7->freq_res_qua = $request->input('juifrequency');
    //                 $quet7->reas_dura = $request->input('juiquantity');
    //                 $quet7->save();
    //             }

    //             $quet7->save();
    //         }
    //         if ($request->input('answer37')!=null){
    //             $quet8->user_id = session('user.id');
    //             $quet8->questions = $request->input('question-8');
    //             $quet8->answers = $request->input('answer37');
               
    //             if ($request->input('answer37')==1) {
    //                 $quet8->type = $request->input('lostwho');
    //                 $quet8->freq_res_qua = $request->input('lostquantity');
    //                 $quet8->reas_dura = $request->input('lostduration');
    //                 $quet8->save();
    //             }

    //             $quet8->save();
    //         }
    //         if ($request->input('answer38')!=null){
    //             $quet9->user_id = session('user.id');
    //             $quet9->questions = $request->input('question-9');
    //             $quet9->answers = $request->input('answer38');
               
    //             if ($request->input('answer38')==1) {
    //                 $quet9->type = $request->input('gainwho');
    //                 $quet9->freq_res_qua = $request->input('gainquantity');
    //                 $quet9->reas_dura = $request->input('gainduration');
    //                 $quet9->save();
    //             }

    //             $quet9->save();
    //         }
            
           
    //         if ($request->input('answer39')!=null){
    //             $quet10->user_id = session('user.id');
    //             $quet10->questions = $request->input('question-10');
    //             $quet10->answers = $request->input('answer39');
    //             $quet10->save();
    //         }
    //         if ($request->input('answer40')!=null){
    //             $quet11->user_id = session('user.id');
    //             $quet11->questions = $request->input('question-11');
    //             $quet11->answers = $request->input('answer40');
    //             $quet11->save();
    //         }

    //         if ($request->input('answer41')!=null){
    //             $quet12->user_id = session('user.id');
    //             $quet12->questions = $request->input('question-12');
    //             $quet12->answers = $request->input('answer41');
    //             $quet12->save();
    //         }


    //         if ($request->input('answer42')!=null){
    //             $quet13->user_id = session('user.id');
    //             $quet13->questions = $request->input('question-13');
    //             $quet13->answers = $request->input('answer42');
    //             $quet13->save();
    //         }
    //         if ($request->input('answer43')!=null){
    //             $quet14->user_id = session('user.id');
    //             $quet14->questions = $request->input('question-14');
    //             $quet14->answers = $request->input('answer43');
    //             $quet14->save();
    //         }
           
    //         if ($request->input('answer44')!=null){

    //             $quet15->user_id = session('user.id');
    //             $quet15->questions = $request->input('question-15');
    //             $quet15->answers = $request->input('answer44');
    //             $quet15->save();
    //         }
    //         if ($request->input('answer28')!=null){

    //             $quet16->user_id = session('user.id');
    //             $quet16->questions = $request->input('question-02');
    //             $quet16->answers = $request->input('answer28');
    //             $quet16->save();
    //         }



    //     return redirect('/pquestion4');
    // }
    //  public function pquestion4(Request $request)
    // {     
        
    //      $quef1 = new Question;
    //      $quef2 = new Question;
    //      $quef3 = new Question;
    //      $quef4 = new Question;
    //      $quef5 = new Question;
    //      $quef6 = new Question;
    //      $quef7 = new Question;
    //      $quef8 = new Question;
    //      $quef9 = new Question;
    //      $quef10 = new Question;
    //      $quef11 = new Question;
    //      $quef12 = new Question;
    //      $quef13 = new Question;
    //      $quef14 = new Question;
    //      $quef15 = new Question;
    //      $quef16 = new Question;

    //         if ($request->input('answer45')!=null) {
    //             $quet1->user_id = session('user.id');
    //             $quet1->questions = $request->input('question-1');
    //             $quet1->answers = $request->input('answer45');
    //             $quet1->save();
             
    //         } 
    //         if ($request->input('answer30')!=null) {
    //             $quet2->user_id = session('user.id');
    //             $quet2->questions = $request->input('question-2');
    //             $quet2->answers = $request->input('answer30');
    //             if ($request->input('answer30')==1) {
    //                 $quet2->type = $request->input('prosource');
    //                 $quet2->freq_res_qua = $request->input('proquantity');
    //                 $quet2->save();
    //             }
    //             $quet2->save();    
    //         } 
    //         if ($request->input('answer31')!=null) {
    //             $quet3->user_id = session('user.id');
    //             $quet3->questions = $request->input('question-3');
    //             $quet3->answers = $request->input('answer31');
    //             if ($request->input('answer31')==1) {
    //                 $quet3->type = $request->input('efasource');
    //                 $quet3->freq_res_qua = $request->input('efaquantity');
    //                 $quet3->save();
    //             }
    //             $quet3->save();
    //         }
    //         if ($request->input('answer32')!=null) {
    //             $quet4->user_id = session('user.id');
    //             $quet4->questions = $request->input('question-4');
    //             $quet4->answers = $request->input('answer32');
    //             if ($request->input('answer32')==1) {
    //                 $quet4->type = $request->input('frusource');
    //                 $quet4->freq_res_qua = $request->input('fruquantity');
    //                 $quet4->save();
    //             }
    //             $quet4->save();
    //         }
    //         if ($request->input('answer33')!=null) {
    //             $quet5->user_id = session('user.id');
    //             $quet5->questions = $request->input('question-5');
    //             $quet5->answers = $request->input('answer33');
    //             if ($request->input('answer33')==1) {
    //                 $quet5->type = $request->input('foodtype');
    //                 $quet5->freq_res_qua = $request->input('foodfrequency');
    //                 $quet5->reas_dura = $request->input('foodquantity');
    //                 $quet5->save();
    //             }
    //             $quet5->save();
    //         }
            
    //         if ($request->input('answer34')!=null){
    //             $quet6->user_id = session('user.id');
    //             $quet6->questions = $request->input('question-6');
    //             $quet6->answers = $request->input('answer34');
                
    //             if ($request->input('answer34')==1) {
    //                 $quet6->type = $request->input('milktype');
    //                 $quet6->freq_res_qua = $request->input('milkfrequency');
    //                 $quet6->reas_dura = $request->input('milkquantity');
    //                 $quet6->save();
    //             }
                
    //             $quet6->save();
    //         }
    //          if ($request->input('answer35')!=null){  
    //             $quet7->user_id = session('user.id');  
    //             $quet7->questions = $request->input('question-7');
    //             $quet7->answers = $request->input('answer35');
                
    //             if ($request->input('answer35')!=null) {
    //                 $quet7->type = $request->input('juitype');
    //                 $quet7->freq_res_qua = $request->input('juifrequency');
    //                 $quet7->reas_dura = $request->input('juiquantity');
    //                 $quet7->save();
    //             }

    //             $quet7->save();
    //         }
    //         if ($request->input('answer37')!=null){
    //             $quet8->user_id = session('user.id');
    //             $quet8->questions = $request->input('question-8');
    //             $quet8->answers = $request->input('answer37');
               
    //             if ($request->input('answer37')==1) {
    //                 $quet8->type = $request->input('lostwho');
    //                 $quet8->freq_res_qua = $request->input('lostquantity');
    //                 $quet8->reas_dura = $request->input('lostduration');
    //                 $quet8->save();
    //             }

    //             $quet8->save();
    //         }
    //         if ($request->input('answer38')!=null){
    //             $quet9->user_id = session('user.id');
    //             $quet9->questions = $request->input('question-9');
    //             $quet9->answers = $request->input('answer38');
               
    //             if ($request->input('answer38')==1) {
    //                 $quet9->type = $request->input('gainwho');
    //                 $quet9->freq_res_qua = $request->input('gainquantity');
    //                 $quet9->reas_dura = $request->input('gainduration');
    //                 $quet9->save();
    //             }

    //             $quet9->save();
    //         }
            
           
    //         if ($request->input('answer39')!=null){
    //             $quet10->user_id = session('user.id');
    //             $quet10->questions = $request->input('question-10');
    //             $quet10->answers = $request->input('answer39');
    //             $quet10->save();
    //         }
    //         if ($request->input('answer40')!=null){
    //             $quet11->user_id = session('user.id');
    //             $quet11->questions = $request->input('question-11');
    //             $quet11->answers = $request->input('answer40');
    //             $quet11->save();
    //         }

    //         if ($request->input('answer41')!=null){
    //             $quet12->user_id = session('user.id');
    //             $quet12->questions = $request->input('question-12');
    //             $quet12->answers = $request->input('answer41');
    //             $quet12->save();
    //         }


    //         if ($request->input('answer42')!=null){
    //             $quet13->user_id = session('user.id');
    //             $quet13->questions = $request->input('question-13');
    //             $quet13->answers = $request->input('answer42');
    //             $quet13->save();
    //         }
    //         if ($request->input('answer43')!=null){
    //             $quet14->user_id = session('user.id');
    //             $quet14->questions = $request->input('question-14');
    //             $quet14->answers = $request->input('answer43');
    //             $quet14->save();
    //         }
           
    //         if ($request->input('answer44')!=null){

    //             $quet15->user_id = session('user.id');
    //             $quet15->questions = $request->input('question-15');
    //             $quet15->answers = $request->input('answer44');
    //             $quet15->save();
    //         }
    //         if ($request->input('answer28')!=null){

    //             $quet16->user_id = session('user.id');
    //             $quet16->questions = $request->input('question-02');
    //             $quet16->answers = $request->input('answer28');
    //             $quet16->save();
    //         }



    //     return redirect('/pquestion4');
    // }
    // public function pquestion5(Request $request)
    // {
    //     $question = new Question;
    //     $question1 = new Question;
    //     $question2 = new Question;
    //     $question3 = new Question;
    //     $question4 =new Question;
    //     $question5 = new Question;
    //     $question6 = new Question;
    //     $question7 = new Question;
    //     $question8 = new Question;
    //     $question9 = new Question;
    //     $question10 = new Question;
    //     $question11 = new Question;
    //     $question12 = new Question;

    //     if ($request->input('answer62')!=null){

    //             $question->user_id = session('user.id');
    //             $question->questions = $request->input('question-15');
    //             $question->answers = $request->input('answer62');
    //             $question->save();
    //         }
    //         if ($request->input('answer63')!=null){

    //             $question1->user_id = session('user.id');
    //             $question1->questions = $request->input('question-02');
    //             $question1->answers = $request->input('answer63');
    //             $question1->save();
    //         }
    //         if ($request->input('answer64')!=null){

    //             $question2->user_id = session('user.id');
    //             $question2->questions = $request->input('question-15');
    //             $question2->answers = $request->input('answer64');
    //             $question2->save();
    //         }
    //         if ($request->input('answer65')!=null){

    //             $question3->user_id = session('user.id');
    //             $question3->questions = $request->input('question-02');
    //             $question3->answers = $request->input('answer65');
    //             $question3->save();
    //         }
    //         if ($request->input('answer66')!=null){

    //             $question4->user_id = session('user.id');
    //             $question4->questions = $request->input('question-15');
    //             $question4->answers = $request->input('answer66');
    //             $question4->save();
    //         }
    //         if ($request->input('answer67')!=null){

    //             $question5->user_id = session('user.id');
    //             $question5->questions = $request->input('question-02');
    //             $question5->answers = $request->input('answer67');
    //             $question5->save();
    //         }
    //         if ($request->input('answer68')!=null){

    //             $question6->user_id = session('user.id');
    //             $question6->questions = $request->input('question-15');
    //             $question6->answers = $request->input('answer68');
    //             $question6->save();
    //         }
    //         if ($request->input('answer69')!=null){

    //             $question7->user_id = session('user.id');
    //             $question7->questions = $request->input('question-02');
    //             $question7->answers = $request->input('answer69');
    //             $question7->save();
    //         }
    //         if ($request->input('answer70')!=null){

    //             $question8->user_id = session('user.id');
    //             $question8->questions = $request->input('question-15');
    //             $question8->answers = $request->input('answer70');
    //             $question8->save();
    //         }
    //         if ($request->input('answer71')!=null){

    //             $question9->user_id = session('user.id');
    //             $question9->questions = $request->input('question-02');
    //             $question9->answers = $request->input('answer71');
    //             $question9->save();
    //         }
    //         if ($request->input('answer72')!=null){

    //             $question10->user_id = session('user.id');
    //             $question10->questions = $request->input('question-15');
    //             $question10->answers = $request->input('answer72');
    //             $question10->save();
    //         }
    //         if ($request->input('answer73')!=null){

    //             $question11->user_id = session('user.id');
    //             $question11->questions = $request->input('question-02');
    //             $question11->answers = $request->input('answer73');
    //             $question11->save();
    //         }
    //         if ($request->input('answer74')!=null){

    //             $question12->user_id = session('user.id');
    //             $question12->questions = $request->input('question-02');
    //             $question12->answers = $request->input('answer74');
    //             $question12->save();
    //         }


    //      $image1 = new ImageModel;
    //    if ($request->input('answer76')!=null){
    //         $image1->user_id = session('user.id');
    //         $image1->image = $request->input('image11'); 
    //         $image1->suggestion = $request->input('hair');
    //         $image1->save(); 
            
    //     }
    //     if ($request->input('answer77')!=null){
    //         $image1->user_id = session('user.id');
    //         $image1->image = $request->input('image1'); 
    //         $image1->suggestion = $request->input('hair1');
    //         $image1->save(); 
            
    //     }
    //     if ($request->input('answer78')!=null){
    //         $image1->user_id = session('user.id');
    //         $image1->image = $request->input('image2'); 
    //         $image1->suggestion = $request->input('hair2');
    //         $image1->save(); 
            
    //     }
    //     if ($request->input('answer79')!=null){
    //         $image1->user_id = session('user.id');
    //         $image1->image = $request->input('image3'); 
    //         $image1->suggestion = $request->input('hair3');
    //         $image1->save(); 
            
    //     }
    //     if ($request->input('answer80')!=null){
    //         $image1->user_id = session('user.id');
    //         $image1->image = $request->input('image4'); 
    //         $image1->suggestion = $request->input('hair4');
    //         $image1->save(); 
            
    //     }
    //     if ($request->input('answer81')!=null){
    //         $image1->user_id = session('user.id');
    //         $image1->image = $request->input('image5'); 
    //         $image1->suggestion = $request->input('hair5');
    //         $image1->save(); 
            
    //     }
    //     if ($request->input('answer82')!=null){
    //         $image1->user_id = session('user.id');
    //         $image1->image = $request->input('ca1'); 
    //         $image1->suggestion = $request->input('ca1_s');
    //         $image1->save(); 
            
    //     }
    //     if ($request->input('answer83')!=null){
    //         $image1->user_id = session('user.id');
    //         $image1->image = $request->input('ca2'); 
    //         $image1->suggestion = $request->input('ca2_s');
    //         $image1->save(); 
            
    //     }
    //      if ($request->input('answer84')!=null){
    //         $image1->user_id = session('user.id');
    //         $image1->image = $request->input('ttm1'); 
    //         $image1->suggestion = $request->input('ttm1_s');
    //         $image1->save(); 
            
    //     }
    //     if ($request->input('answer85')!=null){
    //         $image1->user_id = session('user.id');
    //         $image1->image = $request->input('ttm2'); 
    //         $image1->suggestion = $request->input('ttm2_s');
    //         $image1->save(); 
            
    //     }
    //     if ($request->input('answer86')!=null){
    //         $image1->user_id = session('user.id');
    //         $image1->image = $request->input('ttm3'); 
    //         $image1->suggestion = $request->input('ttm3_s');
    //         $image1->save(); 
            
    //     }

       
    //      return redirect('/details_after');       
       
    // }
    
}
