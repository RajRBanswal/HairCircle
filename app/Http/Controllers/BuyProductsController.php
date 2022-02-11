<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VRegisterModel;
use App\Models\UserTblModel;
use App\Models\PRegisterModel;
use App\Models\PurchaseHistory;
use App\Models\ProductModel;
use App\Models\DiagnosisModel;
use App\Models\ImageModel;
use App\Helpers\Helper;
use App\SendCode;
use Carbon\Carbon;
use Nexmo\Laravel\Facade\Nexmo;
use Session;
use Redirect;
use File;
use Image;
use DB;


class BuyProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$user_id,$vens_id)
    {   
        // dd($user_id,$vens_id);
        $sponser_id = VRegisterModel::where('vens_id',$vens_id)->first(); 
        $ps_id = PRegisterModel::where('patients_id',$vens_id)->first(); 
       // foreach ($sponser_id as $value) {
       //     $v_id = $value->vens_id;
           
       // }
            // dd($sponser_id);
        if($sponser_id != null){
            $sponser_id = VRegisterModel::where('vens_id',$vens_id)->get();
           return view('user_register',compact('sponser_id'));

        }elseif($ps_id != null){
            $sponser_id = PRegisterModel::where('patients_id',$vens_id)->get();
           return view('user_register',compact('sponser_id'));
        }else{
            // dd('hii');
            $sponser_id = UserTblModel::where([['id',$vens_id],['ref_id',$user_id]])->get();
        
            return view('user_register',compact('sponser_id'));
       }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       
        return redirect('/login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $patient_id = Helper::IDGenerator(new PRegisterModel,'patients_id',5,'PATIENT',$request->input('name'));
        $sponser_id = $request->input('vens_id');
        $ref_id = $request->input('ref_id');
        $id = $request->input('id');

        $user = new PRegisterModel();
        $user->patients_id = $patient_id;
        $user->name = $request->input('name');
        $user->gender = $request->input('sex');
         if ($sponser_id) {
           $user->ref_id = $sponser_id;
        }elseif($ref_id && $id){
            $user->ref_id = $ref_id;
            $user->ref_id1 = $id;
        }
        // $user->ref_id1 = $request->input('id');
        $user->date_of_birth = $request->input('dob');
        $user->marital_status = $request->input('marital_status');
        $user->religion = $request->input('religion'); 
        $user->weight_in_kg = $request->input('wik');
        $user->height_in_cm = $request->input('hic');
        $user->city = $request->input('city');
        $user->pincode = $request->input('pin'); 
        $user->state = $request->input('state');  
        $user->ref_id2 = $request->input('ref_id1');
        $user->ref_id3 = $request->input('ref_id2');
        $user->ref_id4 = $request->input('ref_id3');
        $user->ref_id5 = $request->input('ref_id4');
        $user->ref_name = $request->input('ref_name');
        $user->mobile_no = $request->input('mobile_no');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->address = $request->input('address');
        $user->save();

        return redirect('/login')->with('success','User Create Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user = session('user.id');
        $users = UserTblModel::where('id',$user)->get();

        $usr = UserTblModel::where('ref_id1',$user)->get();

        return view('user_profile',compact('users','usr'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function login(Request $request)
    {
        $username = $request->input('user');
        $password = $request->input('password');

        $user = UserTblModel::where([
            ['email','=',$username],
            ['password','=',$password]
        ])->first();

        

        if($user == true)
        {
          $request->session()->put('user',$user);
           return view('product_view',compact('user')); 
        }else{
            return redirect('/login')->with('alert','Enter Valid Username or Password!');
        }
    }

    public function buy_Product(Request $request)
    {
        $user = session('user.id');

        // $buyproduct = UserTblModel::where('id',$user)->first();

        // $product_name = $request->input('name');
        // $buyproduct->product_name = $product_name;
        // $buyproduct->amount = $request->input('price');
         

        $ref_id = session('user.ref_id');
        $id = session('user.id');
        $ref_id1 = session('user.ref_id1');
        // dd($ref_id,$id,$ref_id1);
        $abc = PurchaseHistory::where([['id','=', $id],['ref_id','=',$ref_id],['product_name','=',null],['ref_id1','!=',null]])->get();
          dd($abc);
        $xyz = PRegisterModel::where([['id','=', $id],['ref_id','=',$ref_id],['product_name','=',null],['ref_id1','=',null]])->first();
            // dd($abc);
        if($xyz != null)
        {
            $buyproduct->save();  
            $refCategory = VRegisterModel::where('vens_id',$ref_id)->first();
            VRegisterModel::where('vens_id',$ref_id)->update([
                'reffered_by' => $refCategory->reffered_by + 1,
                'no_of_refs' => $refCategory->no_of_refs + 1,
            ]);
        }elseif($abc != null){
            $buyproduct->save();
            $ref2 = PRegisterModel::where('id',$ref_id1)->first();
            $ref2->update([
                'reffered_by' => $ref2->reffered_by + 1,
                'no_of_refs' => $ref2->no_of_refs + 1,
            ]);
  
            $refCategory = ProductModel::where('vendor',$ref_id)->first();
            VRegisterModel::where('vens_id',$ref_id)->update([
                'reffered_by' => $refCategory->reffered_by + 1,
                'no_of_refs' => $refCategory->no_of_refs + 1,
            ]);
        }


        return redirect('/details_after');

    }



    public function offline(Request $request)
    {   
        $date = Carbon::now()->format('d-m-Y');
        $quantity = 1;
       $kit = $request->input('kit');
        $vendor = $request->input('vendor_list');
        // $vndr = VRegisterModel::where('id',$vendor)->get();
        //   foreach ($vndr as $value) {
        //     $vendors = $value->vens_id;
        //   }
        $buy_pp = new PurchaseHistory();
        $user = session('user.id');
        $buy_pp->user_id = $user;
        $buy_pp->kit = $kit;
        $buy_pp->quantity = $quantity;
        $buy_pp->buying_price = $request->input('price');
        $buy_pp->pay_mode = $request->input('payment_mode');
        $buy_pp->vendor = $vendor;
        // $buy_pp->vens_id = $vendors;
        $image = $request->input('image');
        $buy_pp->image = $image;
        $buy_pp->date = $date;
        $buy_pp->created_at = $date;
        $buy_pp->product_image = $request->input('pimage');
        if($buy_pp->save()){
            $image = ImageModel::where('product_name',$kit)->first();
            $image->status = '1';
            $image->update();
        }

        return redirect('/user_dashboard')->with('alert','Order Confirmed');
    }

    public function Products_list(Request $request)
    {
      $curTime = new \DateTime();
      $created_at = $curTime->format("Y-m-d");
      $produ['produ'] = ProductModel::orderBy('id', 'DESC')->get();
      $produ['total'] = ProductModel::all();
      $produ['today'] = ProductModel::Where("created_at", "like", "%{$created_at}%")->get();
      // $produ = ProductModel::all();
      return view('admin.all_product',$produ);
    }
    public function sales_list(Request $request)
    {
        $curTime = Carbon::now()->subDays(7);
        $created_at = $curTime;
        $produ['total'] = ProductModel::all();
        $produ['today'] = ProductModel::Where("created_at", "like", "%{$created_at}%")->get();
        return view('admin.sales',$produ);
    }
    public function Get_All_Product_List(Request $request,$min,$max)
    {
        $product = DB::table('producttbl')->whereBetween('created_at',[$min,$max])
                ->get();
        return response()->json($product);

    }
    public function Get_Sale_Product_List(Request $request,$min,$max)
    {
        $status = 'done';
        $products = DB::table('order')->where('status',$status)->whereBetween('created_at',[$min,$max])
                ->get();
        return response()->json($products);
    }
    public function delete_prod(Request $request,$id)
    {
      ProductModel::where('id',$id)->delete();
       return redirect('/products_list')->with('alert','Product Deleted');
    }
        public function edit_product(Request $request, $id)
    {
        $edit_p = ProductModel::where('id',$id)->get();
        return view('admin.edit_product',compact('edit_p'));

    }
    public function update_product(Request $request,$id)
    {
        $product = ProductModel::where('id',$id)->first();
        $product->product_name = $request->input('product');
        $product->batch_no = $request->input('batch');
        $product->expiry_date = $request->input('exp');
        $product->mrp = $request->input('price');
        $product->quantity = $request->input('quantity');
        $product->rate = $request->input('rate');
        $product->discount = $request->input('discount');
        $product->total_amount = $request->input('total_price');
        $product->GST = $request->input('gst');
        $product->ad_amount = $request->input('ad_amount');
      
      if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $image = $file->getClientOriginalName();
            $file->move(public_path()."/product/", $image);
            $product->image = $image;
         }
      $product->update();
      return redirect('/products_list')->with('alert','Product Updated Successfully');
    }
    
    public function Get_City_Vendor(Request $request,$id,$city)
    {
        $status = 1;
        $name1="Sillod";
        // dd($c_name);
       $vendor =VRegisterModel::where('city',$name1)->get();
       return response()->json($vendor);
    }

}
    