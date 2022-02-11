<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\Bank;
use App\Models\User;
use App\Models\Sms;
use App\Models\Amount;
use App\Models\Task;
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

class MyDirectsController extends Controller
{
    
    public function view_my_token() {
        
       $id=session()->get('id');
        $data['token'] = DB::table('users')
        ->select('token_number')
        ->where('id', $id)
        ->get();
        return view('view_token',$data);
    }

  public function my_direct()
    {
        $id=session()->get('id');

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
           $list_users_count=$list_users_count+($level4_active_users_count*(int)$commision->level_3);  //level 2 rs count
       }
       if($direct_id_active_count>=4 and ($level5_active_users_count>0))  //for level 3
       {
           $list_users_count=$list_users_count+($level5_active_users_count*(int)$commision->level_3);   //level 3 rs count
       }
       if($direct_id_active_count>=5 and ($level6_active_users_count>0)) //for level 4
       {
           $list_users_count=$list_users_count+($level6_active_users_count*(int)$commision->level_4);    //level 4 rs count
       }
       if($direct_id_active_count>=6 and ($level7_active_users_count>0)) //for level 5
       {
           $list_users_count=$list_users_count+($level7_active_users_count*(int)$commision->level_5);   //level 5 rs count
       }
       if($direct_id_active_count>=7 and ($level8_active_users_count>0)) //for level 6
       {
           $list_users_count=$list_users_count+($level8_active_users_count*(int)$commision->level_6);   //level 6 rs count
       }
       if($direct_id_active_count>=10) //for level 7
       {
           $list_users_count=$list_users_count+($level8_active_users_count*(int)$commision->level_7);    //level 7 rs count
       }
       
       //return $list_users_count;


        $data['user']=DB::table('users')->where('id',$id)->get();
        $counts = DB::select( DB::raw("SELECT id FROM users WHERE sponserid = :id"), array(
            'id' => $id,
          ));
       
        // $active=DB::select( DB::raw("SELECT id FROM users WHERE sponserid = :id and status=:stat"), array(
        //     'id' => $id,
        //     'stat'=>'active'
        //   ));

        //   $deactive=DB::select( DB::raw("SELECT id FROM users WHERE sponserid = :id and status=:stat"), array(
        //     'id' => $id,
        //     'stat'=>'deactive'
        //   ));
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

       
          
        $data['direct_id_active_count']=$direct_id_active_count;
        $data['user_id']=$user_id;
        $data['commision']=$commision;
        $data['count_level2']=$count_level2;
        $data['count_level3']=$count_level3;
        $data['count_level4']=$count_level4;
        $data['count_level5']=$count_level5;
        $data['count_level6']=$count_level6;
        $data['count_level7']=$count_level7;
        $data['count_level8']=$count_level8;
        $data['level2_active_users_count']=$level2_active_users_count;
        $data['level3_active_users_count']=$level3_active_users_count;
        $data['level4_active_users_count']=$level4_active_users_count;
        $data['level5_active_users_count']=$level5_active_users_count;
        $data['level6_active_users_count']=$level6_active_users_count;
        $data['level7_active_users_count']=$level7_active_users_count;
        $data['level8_active_users_count']=$level8_active_users_count;
        $data['commision_level_7']=$commision->level_7;
        $data['commision_level_6']=$commision->level_6;
        $data['commision_level_5']=$commision->level_5;
        $data['commision_level_4']=$commision->level_4;
        $data['commision_level_3']=$commision->level_3;
        $data['commision_level_2']=$commision->level_2;
        $data['commision_level_1']=$commision->level_1;
        $data['counts']=count($counts);
        $data['list_users_count']=$list_users_count;
     
        return view('example_card',$data);
    }
}
?>