<?php

namespace App\Http\Controllers;
// use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;
// use App\Models\ProductModel;
use App\Models\VRegisterModel;
use App\Models\PRegisterModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use App\Models\OrederModel;
use App\Models\ReturnProductModel;
use App\Models\PurchaseHistory;
use App\Models\VendorRequestModel;
use App\Models\DisabledDateModel;
use App\Models\OfflineSoldModel;
use App\Models\Admin;
use Exception;
use App\Helpers\Helper;
use App\SendCode;
use Nexmo\Laravel\Facade\Nexmo;
use Redirect;
use DB;

class OrderController extends Controller
{
   public function getOrder(Request $request)
   {    
       $status = 1;
        $user_id = session('user.id');
        $getvndr = VRegisterModel::where([['id',$user_id],['status',$status]])->first();
        if($getvndr){
            $product = ProductModel::all();
            $getvendor = VRegisterModel::where('id',$user_id)->first();
            return view('place_order',compact('getvendor','product'));
        }else{
            return redirect()->back()->with('alert','Your Account is Not Active');
        }
        
        
   }
   public function product_store(Request $request)
   {
       $ex_date = $request->input('exp');
       $date = date('Y-m-d');
       $expiry = Carbon::createFromFormat('Y-m-d', $ex_date)->format('d-m-Y');
      $newDate = Carbon::createFromFormat('Y-m-d', $date)->format('d-m-Y');
      // dd($newDate);
      $product = new ProductModel();
      $product->product_name = $request->input('product');
      $product->batch_no = $request->input('batch');
      $product->hsn = $request->input('hsn');
      $product->expiry_date = $expiry;
      $product->mrp = $request->input('price');
      $product->rate = $request->input('rate');
      $product->quantity = $request->input('quantity');
      $product->total_amount = $request->input('total_price');
      $product->GST = $request->input('gst');
      $product->taxable_amount = $request->input('total_taxable_amount');
      $product->v_purchase_rate = $request->input('ven_p_price');
      $product->discount = $request->input('discount');
      $product->ad_amount = $request->input('ad_amount');
      $product->s_name = $request->input('s_name');
      $product->s_address = $request->input('s_address');
      $product->s_mobile = $request->input('s_mobile');
      $product->s_gstin = $request->input('s_gstin');
      $product->created_at = $newDate;
      $product->date = $newDate;
      
      if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $image = $file->getClientOriginalName();
            $file->move(public_path()."/product/", $image);
            $product->image = $image;
         }
      $product->save();
     return redirect('/products_list')->with('alert','Product Added Successfully');
   }
   public function Sold_Stock(Request $request)
   {
        $curTime = new \DateTime();
        $created_at = $curTime->format("Y-m-d");
        $status = 'done';
         $stock = OrederModel::where('status',$status)->first();
        if ($stock != null) {
            $sold_stock['today'] = OrederModel::Where([["updated_at", "like", "%{$created_at}%"],['status',$status]])->get();
            $sold_stock['total'] = OrederModel::where('status',$status)->get();
            $sold_stock['sold'] = OrederModel::where('status',$status)->get();
            return view('admin.sold_stock',$sold_stock);
        }else{
            return redirect()->back()->with('alert','Data not Available');
        }
       
   }
    public function Get_Sold_Product_List(Request $request,$min,$max)
    {
        $status = 'done';
        $sold = DB::table('order')->where('status',$status)->whereBetween('created_at',[$min,$max])->get();
         return response()->json($sold);
    }
    public function All_Offline_Sold(Request $request,$min,$max)
    {
        $user_id = session('user.id');
        $sold_offline = OfflineSoldModel::where('vendor_id',$user_id)->whereBetween('created_at',[$min,$max])->get();
         return response()->json($sold_offline);
    }
    
   public function Vendor_Request(Request $request)
   {
       $request = VendorRequestModel::orderBy('id','DESC')->get();
       return view('admin.vendor_request',compact('request'));
   }
   public function Get_All_Request(Request $request,$min,$max)
   {
       $status = null;
       $request = VendorRequestModel::where('status',$status)->whereBetween('created_at',[$min,$max])->get();
       return response()->json($request);
   }
   public function view_finance(Request $request)
   {
        $total_amount = DB::table('order')
                ->select(DB::raw('SUM(total_amount) as tamount'))
                ->get();
        $income = OrederModel::all();
        return view('admin.finance',compact('income','total_amount'));
   }
   public function get_F_Data(Request $request,$min,$max)
   {
       $status = 'done';
       $total_data = DB::table('order')->where('status',$status)
                ->select('name','total_amount','withGSTAmount','pay_mode','pay_status','date','created_at')->whereBetween('created_at',[$min,$max])
                ->get();
        return response()->json($total_data);
   }
   public function VendorToCompany(Request $request,$min,$max)
   {
        $user_id = session('user.id');
        $status = 'done';
        $total_data = DB::table('order')
                ->select('product_name','rate','quantity','total_amount','withGSTAmount','status','approved_by','billing_date','created_at')->where([['vendor_id',$user_id],['status',$status]])->whereBetween('created_at',[$min,$max])
                ->get();
        return response()->json($total_data);
   }
   public function VendorToCompanyTotal(Request $request,$min,$max)
   {
        $user_id = session('user.id');
        $status = 'done';
        $total_d = DB::table('order')
                ->select(DB::raw('SUM(order.total_amount) as tamount'))->where([['vendor_id',$user_id],['status',$status]])->distinct()->whereBetween('created_at',[$min,$max])
                ->get();
        return response()->json($total_d);
   }
   public function All_C_Transaction(Request $request)
   {
        $user_id = session('user.id');
        $status = 1;
        $C_total = DB::table('purchasepp')
                ->select(DB::raw('SUM(buying_price) as tamount'))->where([['vendor',$user_id],['status',$status]])
                ->get();
         $cust_a = DB::table('purchasepp')->where([['vendor',$user_id],['status',$status]])->first();
        if($cust_a != null){
            $custo_all = DB::table('purchasepp')->where([['vendor',$user_id],['status',$status]])->get();
            foreach($custo_all as $value){
                $usr = $value->user_id;
                $cust_mer = PRegisterModel::where('id',$usr)->get();
                return view('all_customer_total',compact('C_total','custo_all','cust_mer'));
            }
        }else{
            return redirect()->back()->with('alert','Data Not Available');
        }
        
        
   }
   public function Get_C_Transaction(Request $request,$min,$max)
   {
        $user_id = session('user.id');
        $status = 1;
        $cust_a = DB::table('purchasepp')->join('patient_register','purchasepp.user_id','=','patient_register.id')->select('purchasepp.kit','purchasepp.created_at','purchasepp.sold_date','purchasepp.quantity','purchasepp.buying_price','purchasepp.status','patient_register.name','patient_register.address','patient_register.city')
       ->where([['purchasepp.vendor',$user_id],['purchasepp.status',$status]])->whereBetween('purchasepp.created_at',[$min,$max])->get();
       return response()->json($cust_a);
   }
   public function get_Total_Price(Request $request,$min,$max)
   {
       $user_id = session('user.id');
        $status = 1;
        $cust_ttl = DB::table('purchasepp')
                ->select(DB::raw('SUM(buying_price) as tamount'))->where([['vendor',$user_id],['status',$status]])->whereBetween('created_at',[$min,$max])->get();
        return response()->json($cust_ttl);
   }
   public function get_Total(Request $request,$min,$max)
   {
        $status = 'done';
       $totala = DB::table('order')->where('status',$status)
                ->select(DB::raw('SUM(order.total_amount) as tamount'),DB::raw('SUM(order.withGSTAmount) as wgamount'))->whereBetween('created_at',[$min,$max])
                ->get();
        return response()->json($totala);
   }
   public function get_price(Request $request, $id)
   {
    //   dd($name);
    //   $k_id = $request->name;
      $getprice = ProductModel::select('rate','v_purchase_rate','mrp','expiry_date','batch_no')->where('id',$id)->get();
      return response()->json($getprice);
   }
   public function All_Cstmr(Request $request,$min,$max)
   {
        $user_id = session('user.id');
        $cust_all = DB::table('purchasepp')->join('patient_register','purchasepp.user_id','=','patient_register.id')->select('purchasepp.id','purchasepp.user_id','purchasepp.kit','purchasepp.date','purchasepp.created_at','purchasepp.quantity','purchasepp.buying_price','purchasepp.status','purchasepp.pay_mode','patient_register.name','patient_register.address','patient_register.city')
       ->where('purchasepp.vendor',$user_id)->whereBetween('purchasepp.created_at',[$min,$max])->get();
       return response()->json($cust_all);
   }
   public function New_Purchase_Orders(Request $request)
   {
       $user_id = session('user.id');
        $new_p_orders = DB::table('purchasepp')->join('patient_register','purchasepp.user_id','=','patient_register.id')->select('purchasepp.id','purchasepp.user_id','purchasepp.kit','purchasepp.created_at','purchasepp.quantity','purchasepp.buying_price','purchasepp.status','purchasepp.pay_mode','patient_register.name','patient_register.address','patient_register.city')
       ->where('purchasepp.vendor',$user_id)->orderBy('id','DESC')->get();
       return view('all_new_orders',compact('new_p_orders'));
   }
   public function place_Order(Request $request)
   {
       $date = Carbon::now()->format("Y-m-d");
       $date1 = Carbon::now()->format("d-m-Y");
       $bill_no = Helper::IDGenerator(new OrederModel,'bill_no',5,'BILL',$request->input('name'));
      $order = new OrederModel();
      $user_id = session('user.id');
      $order->vendor_id = $user_id;
       $order->bill_no = $bill_no;
       $order->batch_no = $request->input('batchno');
      $prod = $request->input('product_name');
      $product_n = ProductModel::where('id',$prod)->get();
      foreach($product_n as $value){
          $name = $value->product_name;
      }
      $order->product_name = $name;
      // dd($request->price);
      $order->expiry_date = $request->input('ex_date');
      $order->price = $request->input('price');
      $order->rate = $request->input('rate');
      $order->quantity = $request->input('quantity');
      $order->total_amount = $request->input('amount');
      $order->name = $request->input('name');
      $order->remaining_q = $request->input('quantity');
      $order->shop_name = $request->input('shop_name');
      $order->vendor_id = $request->input('vendor_id');
      $order->address = $request->input('address');
      // dd($request->input('mobile_no'));
      $order->mobile_no = $request->input('mobile_no');
      $order->phone = $request->input('phone');
      $order->email = $request->input('email');
      $order->pay_mode = $request->input('payment_mode');
      $order->pay_amount = $request->input('amount');
      $order->date = $date1;
      $order->created_at = $date;
      $order->save();
      return redirect('/place_order')->with('alert','Order Placed Successfully');
   }
   public function get_all_order(Request $request)
   {
      // 
        $getorder = OrederModel::where('status',NULL)->get();
        return view('admin.all_order',compact('getorder'));
   }
   public function Get_All_Orders(Request $request,$min,$max)
   {
    //   $getorder = OrederModel::whereBetween('created_at',[$min,$max])->get();
        $getorder = DB::table('order')->join('producttbl','order.product_name','=','producttbl.product_name')->select('order.*',('producttbl.quantity as quant'))->whereBetween('order.created_at',[$min,$max])->get();
        return response()->json($getorder);
   }
    public function get_confirm_order(Request $request)
   {
      // 
         $getorder = OrederModel::where('status','done')->get();
      return view('admin.all_confirm_order',compact('getorder'));
   }
   public function get_all_confirm_order(Request $request,$min,$max)
   {
        $getorder = OrederModel::where('status','done')->whereBetween('created_at',[$min,$max])->get();
        return response()->json($getorder);
   }
   // public function sent_message(Request $request)
   // {
   //    $message = $request->input('message');
   //    $mobile = $request->input('mobile');
   //    $encodeMessage = urlencode($message);
   //    $authkey = '';
   //    $senderId = '';
   //    $route = 4;
   //    $postData = $request->all();
   //    $arr = str_split($mobile, '10');
   //    $mobiles = implode('', $arr);

   //    $data = array(
   //       'authkey' => $authkey,
   //       'mobiles' => $mobiles,
   //       'message' => $encodeMessage,
   //       'sender' => $senderId,
   //       'route' => $route,
   //     );
   //    $url = '';
   //    $ch = curl_init();
   //    curl_setopt_array($ch, array(
   //       CURLOPT_URL => $url,
   //       CURLOPT_RETURNTRANSFER => true,
   //       CURLOPT_POST => true,
   //       CURLOPT_POSTFIELDS => $postData,
   //    ));

   //    curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0);
   //    // curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0);

   //    $output = curl_exec($ch);
   //    dd($output);

   //    if(curl_errno($ch)){
   //       echo "error:".curl_error($ch);
   //    }
   //    curl_close($ch);
   //    return redirect('/all_order');
   // }
   
   public function Order_Edit(Request $request,$id)
    {
        $newid = $request->id;
        return redirect("/edit_order_admin/$newid");
    }
    public function sent_message(Request $request,$id)
    {
        $date1 = Carbon::now()->format("d-m-Y");
        $approevd_by = session('admin.username');
        $newid = $request->id;
        $qunt1 = $request->input('quantity');
        $v_id = $request->input('vendor_id');
        $prd = $request->input('product_name');
        $quantity  = $request->input('quantity');
        $amount  = $request->input('amount');
        $gst  = $request->input('gst');
        $gst_amount  = $request->input('gst_amount');
        $total_taxable_amount  = $request->input('total_taxable_amount');
        $percent  = $request->input('percent');
        $ad_amount  = $request->input('ad_amount');
        $name  = $request->input('name');
        $shop_name  = $request->input('shop_name');
        $mobile_no  = $request->input('mobile_no');
        $phone  = $request->input('phone');
        $address  = $request->input('address');
        $email  = $request->input('email');
        
        $abc = null;
        $paid = 'Paid';
        $status = "done";
        $p_id = $request->name;
        $get_product = ProductModel::where('product_name',$prd)->first();
        if($get_product){
          $get_product = ProductModel::where('product_name',$prd)->get();
          foreach($get_product as $keys){
              $quantity = $keys->quantity;
          }
          
        if($quantity>=$qunt1){
                $get_update = OrederModel::where([['product_name',$prd],['id',$newid],['status',$abc]])->first();
                $get_update->quantity = $qunt1;
                $get_update->total_amount = $amount;
                $get_update->gst = $gst;
                $get_update->total_gst = $gst_amount;
                $get_update->withGSTAmount = $total_taxable_amount;
                $get_update->discount = $percent;
                $get_update->disAmount = $ad_amount;
                $get_update->address = $address;
                $get_update->status = $status;
                $get_update->pay_status = $paid;
                $get_update->approved_by = $approevd_by;
                $get_update->billing_date = $date1;
                if($get_update->update()){
                    $get_p = ProductModel::where('product_name',$prd)->first();
                    $get_p->quantity = $quantity-$qunt1;
                    $get_p->update();
                    return redirect("/pdf/$newid");
                }else{
                    return redirect('/all_order')->with('alert','Order is Not Confirm');
                }
            }else{
                 return redirect('/all_order')->with('alert','Insufficient Product Quantity?'); 
            }
        }else{
            return redirect('/all_order')->with('alert','Products Not Available');  
        }
    }
    // public function sent_message(Request $request,$id)
    // {   
    //     $p_name = $request->input('product_name');
    //     $qunt1 = $request->input('quantity');
    //     $abc = null;
    //     $paid = 'Paid';
    //     $status = "done";
        
    //     $p_id = $request->name;
    //     $p_name = $request->input('product_name');
    //     $get_product = ProductModel::where('product_name',$p_name)->first();
    //     if($get_product){
    //       $get_product = ProductModel::where('product_name',$p_name)->get();
    //       foreach($get_product as $keys){
    //           $quantity = $keys->quantity;
    //       }
    //     if($quantity>=$qunt1){
    //             $get_update = OrederModel::where('status',$abc)->where('product_name',$p_name)->first();
    //             $get_update->status = $status;
    //             $get_update->pay_status = $paid;
    //             //  dd($get_update);
    //             if($get_update->update()){
    //                 $get_p = ProductModel::where('product_name',$p_name)->first();
    //                 $get_p->quantity = $quantity-$qunt1;
    //                 $get_p->update();
    //                 return redirect('/all_order')->with('alert','Order is Confirm');
    //             }else{
    //                 return redirect('/all_order')->with('alert','Order is Not Confirm');
    //             }
    //         //   }else{
    //         //     SendCode::sendMessage($request->input('mobile'),$request->input('message'));
        
    //         //     return redirect('/all_order');
    //         //   }
    //         }else{
    //              return redirect('/all_order')->with('alert','Product Not Available'); 
    //           }
    //     }else{
    //         return redirect('/all_order')->with('alert','Product Not Available');  
    //     }
    // }
    public function sent_message1(Request $request,$name)
    {
        $approevd_by = session('admin.username');
      $abc = null;
      $status = "done";
      $qunt1 = $request->input('quantity');
      $p_id = $request->name;
      $get_product = ProductModel::where('product_name',$p_id)->first();
      if($get_product){
          $get_product = ProductModel::where('product_name',$p_id)->get();
          foreach($get_product as $keys){
              $quantity = $keys->quantity;
          }
       if($quantity>=$qunt1){
                $get_update = OrederModel::where('status',$abc)->where('product_name',$p_id)->first();
                $get_update->status = $status;
                $get_update->approevd_by = $approevd_by;
                //  dd($get_update);
                if($get_update->update()){
                    $get_p = ProductModel::where('product_name',$p_id)->first();
                    $get_p->quantity = $quantity-$qunt1;
                    $get_p->update();
                    return redirect()->back()->with('alert','Order is Confirm');
                }else{
                    return redirect()->back()->with('alert','Order is Not Confirm');
                }
            //   }else{
            //     SendCode::sendMessage($request->input('mobile'),$request->input('message'));
        
            //     return redirect('/all_order');
            //   }
            }else{
                 return redirect()->back()->with('alert','Insufficient Product Quantity?'); 
              }
      }else{
         return redirect()->back()->with('alert','Products Not Available');  
      }
     
      
     } 
      
            
        // try {
  
            // $basic  = new \Nexmo\Client\Credentials\Basic(getenv("NEXMO_KEY"), getenv("NEXMO_SECRET"));
            // $nexmo=app('Nexmo\Client');
  
            // $receiverNumber = $request->input('mobile');
            // $message = $request->input('message');
  
            //     $nexmo->message()->send([

                // 'to' => $receiverNumber,
                // 'from' => '+919673060685',
                // 'text' => $message,
            
            // 'to'=>'+91'.(int) $receiverNumber,
            // 'from'=> '+919673060685',
            // 'text'=>$message
            // ]);
            // if($message){
            //    dd('SMS Sent Successfully.');   
            // }else{
            //    dd("hello");
            // }
            
              
        // } catch (Exception $e) {
        //     dd("Error: ". $e->getMessage());
        // }

    public function prod_list(Request $request)
    {
        $status = 'done';
        $rrb = 0;
        $user_id = session('user.id');
        $ordr_list = OrederModel::where([['vendor_id',$user_id],['status',$status],['remaining_q','>',$rrb]])->get();
         // $all_ordr = OrederModel::where('vendor_id',$user_id)->get();

        return view('product_list',compact('ordr_list'));
    }
    public function All_Prdct(Request $request,$min,$max)
    {
        $status = 'done';
        $rrb = 0;
        $user_id = session('user.id');
        $ordr_list = OrederModel::where([['vendor_id',$user_id],['status',$status],['remaining_q','>',$rrb]])->whereBetween('created_at',[$min,$max])->get();
        return response()->json($ordr_list);
    }
    public function orders_list(Request $request)
    {
        $user_id = session('user.id');
        $all_ordr = OrederModel::where('vendor_id',$user_id)->orderBy('id','DESC')->get();
        return view('all_Orders',compact('all_ordr'));
    }
    public function Orders_All(Request $request,$min,$max)
    {
        $user_id = session('user.id');
        $all_ordr = OrederModel::where('vendor_id',$user_id)->whereBetween('created_at',[$min,$max])->get();
         return response()->json($all_ordr);
    }
    public function All_Order_Amount(Request $request)
    {
        $status = 'done';
        $user_id = session('user.id');
        $total_amount = DB::table('order')
                ->select(DB::raw('SUM(total_amount) as tamount'))->where([['vendor_id',$user_id],['status',$status]])
                ->get();
        $income = OrederModel::where([['vendor_id',$user_id],['status',$status]])->get();
        return view('haircircle_company',compact('income','total_amount'));
    }
    public function get_update_prod(Request $request,$name)
    {
      $user_id = session('user.id');
      $getprice = ProductModel::select('remaining_q')->where('user_id',$user_id)->first();
      $getprice->remaining_q = $request->name;
      return response()->json($getprice);
    }
    
     public function Get_Product(Request $request)
    {
       $quantity = 1;
       $status = 1;
       $user_id = session('user.id');
       $getvdr = VRegisterModel::where([['id',$user_id],['status',$status]])->first();
       if($getvdr != null){
            $getvendor = VRegisterModel::where('id',$user_id)->get();
            $products = OrederModel::where([['vendor_id',$user_id],['remaining_q','>',$quantity]])->get();
            return view('return_product',compact('products','getvendor'));
       }else{
           return redirect()->back()->with('alert','You not return products because your account is not active');
       }
       
    }
    
    public function Return_Product(Request $request)
    {
      $prdct_id = $request->input('product_name');
      $order = new ReturnProductModel();
      
      $user_id = session('user.id');
      $order->vendor_id = $user_id;
      $order->bill_no = $request->input('bill_no');
      $order->product_name = $prdct_id;
      $order->expiry_date = $request->input('ex_date');
      $order->batch_no = $request->input('batchno');
      $order->price = $request->input('price');
      $order->rate = $request->input('rate');
      $order->quantity = $request->input('quantity');
      $order->total_amount = $request->input('amount');
      $order->name = $request->input('name');
      $order->bill_no = $request->input('bill_no');
      $order->name = $request->input('name');
      $order->shop_name = $request->input('shop_name');
      $order->address = $request->input('address');
      // dd($request->input('mobile_no'));
      $order->mobile_no = $request->input('mobile_no');
      $order->email = $request->input('email');
      $order->billing_date = $request->input('billcdate');
    //   dd($order);
      $order->save();
      return redirect('/get_product')->with('alert','Order Return Successfully');
    }
    
    public function All_Return_Order(Request $request)
    {
        $user_id = session('user.id'); 
        $getorder = ReturnProductModel::where('vendor_id',$user_id)->get();
        return view('admin.all_return_ordr',compact('getorder'));
    }
    
    public function get_allData(Request $request, $p_id){
        $getprice = OrederModel::where('product_name',$p_id)->select('rate','price','expiry_date','batch_no','remaining_q','bill_no')->selectRaw('DATE(created_at) as date')->get();
        return response()->json($getprice);
    }
     public function Get_Product_Details(Request $request,$id)
    {
        $product_details = OrederModel::where('id',$id)->get();
        return view('product_details',compact('product_details'));
    }
    public function Get_P_Detail(Request $request,$id)
    {
        $pro = ProductModel::where('id',$id)->get();
        return response()->json($pro);
    }
    
     public function Get_Rtrn_Prdct_Details(Request $request,$id)
    {
        $product_details = ReturnProductModel::where('id',$id)->get();
        return view('admin.return_product_details',compact('product_details'));
    }
    public function rtn_ordr_confirm(Request $request,$id)
    {
        $status = 1;
        $quantity = $request->input('quantity');
        $prod = $request->input('p_name');
        $orders = ReturnProductModel::where([['vendor_id',$id],['product_name',$prod]])->first();
        $orders->status = $status;
        $ord = OrederModel::where([['vendor_id',$id],['product_name',$prod],['status',$status]])->first();
        if($ord != null){
            $ordr = OrederModel::where([['vendor_id',$id],['product_name',$prod],['status',$status]])->get();
            foreach($ordr as $prods){
                $rem_q = $prods->remaining_q;
            }
                if($rem_q>=$prod)
                {
                    $ordrs = OrederModel::where([['vendor_id',$id],['product_name',$prod],['status',$status]])->first();
                    $ordrs->remaining_q = $rem_q-$prod;
                    $ordrs->update();
                    $orders->update();
                    return redirect('/all_order')->with('alert','Order Confirmed');
                }

        }else{
             return redirect()->back()->with('alert','Order Not Confirm');
        }
    }
    public function get_Dwise_Data(Request $request, $dates)
    {
        $user_id = session('user.id');
            // dd($user_id);

                $patient = PurchaseHistory::where('created_at','=',$dates)->get();
                // $pati = PurchaseHistory::where([['vendor',$user_id],['created_at',$dates]] )->get();
                // foreach ($pati as $value) {
                //     $us = $value->user_id;
                //     $vndr = $value->vendor;
                // }
                // $patient['patient1'] = PRegisterModel::all();
                // $patient['vndr'] = VRegisterModel::where('id',$vndr)->get();
                return response()->json($patient);
                // return view('all_customers',$patient);
            // }
    } 
    public function Vendor_Sold_Stock(Request $request)
    {
        $status = 1;
        $user_id = session('user.id');
        $solds = PurchaseHistory::where([['vendor',$user_id],['status',$status]])->first();
        if($solds != null){      
           $sold = PurchaseHistory::where([['vendor',$user_id],['status',$status]])->get(); 
           foreach($sold as $value){
                $cust = $value->user_id;
                $custmer = PRegisterModel::where('id','=',$cust)->get();    
                return view('sold_stock',compact('sold','custmer'));
            } 
        }else{
            return redirect()->back()->with('alert','Data not Available');
        }

       
    }
 
    public function Sold_Stock_Cust(Request $request,$min,$max)
    {
        $status = 1;
        $user_id = session('user.id');
        $solds = DB::table('purchasepp')->join('patient_register','purchasepp.user_id','=','patient_register.id')->select('purchasepp.id','purchasepp.kit','purchasepp.buying_price','purchasepp.sold_date','purchasepp.status','purchasepp.created_at','patient_register.name','patient_register.address','patient_register.city')->where([['purchasepp.vendor',$user_id],['purchasepp.status',$status]])->whereBetween('purchasepp.created_at',[$min,$max])->get();
        return response()->json($solds);    
    }
    public function Get_City(Request $request,$city)
    {
        $status = 1;
        $vendor =VRegisterModel::where([['city',$city],['status',$status]])->get();
        return response()->json($vendor);
    }
      public function Get_Vendor_Data(Request $request,$id)
    {
        $vendor =VRegisterModel::where('id',$id)->get();
        return response()->json($vendor);
    }
    
    
    public function Get_PDF(Request $request, $newid)
    {
        $approevd_by = session('admin.username');
        $get_prd = OrederModel::where('id',$newid)->get();
        foreach($get_prd as $prdct){
            $v_id = $prdct->vendor_id;
            $vendor = VRegisterModel::where('id',$v_id)->get();
        }
        $admin = Admin::where('username', $approevd_by)->get();
        return view('admin.invoice_bill',compact('vendor','get_prd','admin'));
        
    }
    public function Edit_Order_Admin(Request $request, $newid)
    {
        $approevd_by = session('admin.username');
        $get_prd = OrederModel::where('id',$newid)->get();
        foreach($get_prd as $prdct){
            $v_id = $prdct->vendor_id;
            $product = $prdct->product_name;
            $vendor = VRegisterModel::where('id',$v_id)->get();
            $prd = ProductModel::where('product_name',$product)->get();
        }
        $admin = Admin::where('username', $approevd_by)->get();
        return view('admin.edit_order',compact('vendor','get_prd','admin','prd'));
        
    }
    
    public function Store_Dates(Request $request)
    {
        $time = new DisabledDateModel();
        $dates = implode(',',$request->input('selected_dates'));
        $time->dates = $dates;
        $time->save();
        return redirect()->back();

    }
    public function Time_Set(Request $request)
    {
        $time = DisabledDateModel::all();
        return view('admin.Time_Set',compact('time'));
    }
      public function Sold_Offline(Request $request,$id)
    {
        $status = 'done';
        $rrb = 0;
        $q = 0;
        $prd = $request->input('product_name');
        $quant = $request->input('quantity');
        $sold_p = new OfflineSoldModel();
        $sold_p->vendor_id = $id;
        $sold_p->product_name = $prd;
        $sold_p->quantity = $quant;
        $sold_p->date = $request->input('dates');
        $sold_p->c_mobile = $request->input('mobile');
        
        $ordr_list1 = OrederModel::where([['vendor_id',$id],['product_name',$prd],['status',$status],['remaining_q','>',$rrb]])->first();
        if($ordr_list1 != NULL){
            $ordr_list = OrederModel::where([['vendor_id',$id],['product_name',$prd],['status',$status],['remaining_q','>',$rrb]])->get();
            foreach($ordr_list as $ac){
                $q = $ac->remaining_q;
                $price = $ac->price;
            }
            
            if($q>=$quant){
                $ordr_list1 = OrederModel::where([['vendor_id',$id],['product_name',$prd],['status',$status],['remaining_q','>',$rrb]])->first();
                $ordr_list1->remaining_q = $q-$quant;
                $sold_p->p_price = $price*$quant;
                $sold_p->save();
                $ordr_list1->update();
                 
                 return redirect()->back()->with('alert','Product Saved and Product List Updated');
            }else{
                return redirect()->back()->with('alert','Insufficient Product Quantity?');
            }
            
        }else{
            return redirect()->back()->with('alert','Products Not Available');
        }
        

        
    }
    
    
    
}
