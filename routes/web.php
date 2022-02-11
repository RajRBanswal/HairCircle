    <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionAnswerController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\verifyController;

use App\Http\Controllers\Registrationcontroller;
use App\Http\Controllers\Subregistcontroller;
use App\Http\Controllers\ScheduleTaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\BuyProductsController;
use App\Http\Controllers\RazorpayPaymentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
    Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});



Route::get('/product', function () {
    return view('product');
});

Route::post('/register',[RegisterController::class, 'store']);

Route::post('/question',[QuestionAnswerController::class,'fquestion_store']);
Route::get('/serious_abt_hair',[QuestionAnswerController::class,'Get_freeQuestion']);


Route::get('/vendor-register',[RegisterController::class,'index']);

Route::post('/v_register',[RegisterController::class,'v_store']);

// Route::get('/my_dashboard',function(){
//     return view('v_details1');
// });
Route::get('/my_dashboard',[RegisterController::class,'v_details1']);
Route::get('/my_profile',[UserAuthController::class,'v_profile']);

Route::get('/user_dashboard',[UserAuthController::class,'user_dashboard']);
// Route::post('/login1',[UserController::class,'login']);

Route::get('/registration',function(){
    return view('registration');
});
Route::get('/e_reg',function(){
    return view('emp_register');
});

Route::post('/e_register',[RegisterController::class,'e_store']);

Route::get('/description', function () {
    return view('description');
});


Route::get('/viewcart', function () {
    return view('viewcart');
});

Route::get('/login', function () {
    return view('login');
});


Route::get('/index', function () {
    return view('index');
});
Route::get('/index2', function () {
    return view('index2');
});
// Route::get('/profile', function () {
//     return view('v_details');
// });


Route::get('/e_register',function(){
    return view('emp_register');
});

Route::post('/resetpassword',[RegisterController::class,'demo1']);

Route::get('/edit_customer',[RegisterController::class,'Edit_Customer1']);

Route::post('/update_customer/{id}',[RegisterController::class,'Update_Customer']);

Route::post('/cash_claim_request/{id}',[RegisterController::class,'Cash_Claim_Request']);
Route::get('get_cash_claim/{min}/{max}',[AdminUserController::class,'Get_Cash_Claim']);
Route::post('/update_vendor_profile/{id}',[RegisterController::class,'Update_Vendor1']);
Route::get('/customer_cash_claim',function(){
    return view('admin.cash_claim_req');
});

Route::post('/upload_documents/{id}',[RegisterController::class,'Upload_Docs']);

// Route::get('details',function(){
//     return view('p_details');
// });

Route::post('/otp',[RegisterController::class,'otpLogin']);
Route::get('All_Oppointed/{min}/{max}',[AdminUserController::class,'All_New_Customer']);

Route::get('/login',function(){
    if (session()->has('user')) {
        return redirect('/user_dashboard');
    }
    return view('login');
});

Route::get('All_Oues/{id}',[AdminUserController::class,'All_Questions']);
Route::get('get_User_Data/{id}',[AdminUserController::class,'All_User_Data']);
Route::get('/verify',[verifyController::class,'getVerify']);
Route::post('/verify',[verifyController::class,'postVerify']);

Route::post('/rrb_pass/{id}',[verifyController::class,'Change_Password']);





// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>'admin'],function(){

// Route::get('/pquestion1',[RegisterController::class, 'pquestion1']);
Route::post('/pques5',[QuestionsController::class,'pquestion5']);
// Route::post('/pquestion4',[QuestionsController::class,'pquestion4']);
Route::post('/pques3',[QuestionsController::class,'pquestion3']);
Route::post('/pques2',[QuestionsController::class,'pquestion2']);
Route::post('/pques1',[QuestionsController::class,'pquestion1']);

Route::get('/details_after',[QuestionsController::class,'p_details_after']);

// Route::get('/pquestion1', function () {
//     return view('pquestions.pquestion1');
// });

// Route::get('/pquestion1', function () {
//     return view('pquestions.pquestions');
// });

Route::get('select_date/{date}',[AdminUserController::class,'Select_Date']);
Route::get('get_time_slot/{name}/{date}',[AdminUserController::class,'Get_Time_Slot']);
Route::get('/pquestion1',[AdminUserController::class,'PQuestions']);
Route::post('/answer_fques',[QuestionsController::class,'question_Answer']);


Route::get('/pquestion2', function () {
    return view('pquestions.pquestion2');
});
Route::get('/pquestion3', function () {
    return view('pquestions.pquestion3');
});


Route::get('/pquestion4', function () {
    return view("pquestions.pquestion4");
    });


Route::get('/pquestion5', function () {
    return view('pquestions.pquestion5');
});

Route::get('/logout',function(){
    if (session()->has('user')) {
        session()->pull('user',null);
    }
    return redirect('/login');
});


Route::post('/details',[UserAuthController::class,'userLogin']);

Route::get('/p_details',[UserAuthController::class,'details']);

Route::get('/hair_health',[QuestionsController::class,'Get_hair']);

Route::get('/purchase_history',[QuestionsController::class,'Purchase_History']);

Route::get('/get_Questions/{name}',[QuestionsController::class,'get_Questions']);
Route::get('/get_Image/{name}',[QuestionsController::class,'get_Image']);
Route::get('/get_Treatments/{name}',[QuestionsController::class,'get_Treatments']);

Route::get('/get_Purchase_data/{name}',[QuestionsController::class,'get_Purchase_data']);

Route::get('/images',[QuestionsController::class,'Get_Cust_Image']);

// Route::get('/images',function(){
//     return view('get_images');
// });
Route::post('/set_schedule',[QuestionsController::class,'Set_Schedule']);

Route::get('/buy_product/{id}',[QuestionsController::class,'Buy_Product']);
Route::get('/get_CV/{city}',[OrderController::class,'Get_City']);
Route::get('get_vendor_data/{id}',[OrderController::class,'Get_Vendor_Data']);
Route::get('/del_product/{id}',[QuestionsController::class,'Delete_Product']);
Route::get('/Follow_up_Questions',function(){
    return view('follow_up_ques');
});

Route::post('/follow_up_question',[QuestionsController::class,'follow_up_questions']);
// Route::get('/details',[UserAuthController::class,'userLogin']);
});


/*     admin     */

// Route::group(['middleware' => ['admin','admin']],function(){

Route::get('/attempted_task',[UserController::class,'attempted_task']);
Route::post('/submit_task',[Registrationcontroller::class,'submit_task']);
// Route::get('/', function () {
//     return view('admin.login');
// });


Route::get('/withdraw',[UserController::class,'withdraw']);

Route::get('/withdraw_details',[UserController::class,'withdraw_details']);
Route::get('/wallet_report',[UserController::class,'wallet_report']);

Route::post('/withdraw_amount',[UserController::class,'withdraw_amount']);

Route::get('/front', function () {
    return view('admin.login');
})->name('front');

Route::get('/enquiry',function(){
    return view('admin.enquiry');
});

Route::post('send_email',[MailController::class,'sendEmail']);

Route::post('submit_enquiry',[EnquiryController::class,'enquiry']);

Route::post('/product_store',[OrderController::class,'product_store']);
Route::get('/sold_stock',[OrderController::class,'Sold_Stock']);
Route::get('get_sold_product_list/{min}/{max}',[OrderController::class,'Get_Sold_Product_List']);
Route::get('/vendor_request',[OrderController::class,'Vendor_Request']);
Route::get('/finance',[OrderController::class,'view_finance']);
Route::get('get_price/{id}',[OrderController::class,'get_price']);

Route::get('get_all_data/{id}',[OrderController::class,'get_allData']);

Route::post('place_orders',[OrderController::class,'place_Order']);
Route::get('all_return_order',[OrderController::class,'All_Return_Order']);
Route::get('view_ret_product/{id}',[OrderController::class,'Get_Rtrn_Prdct_Details']);
Route::post('/sold_offline/{id}',[OrderController::class,'Sold_Offline']);

Route::get('/product_details/{id}',[OrderController::class,'Get_Product_Details']);
Route::get('p_detail/{id}',[OrderController::class,'Get_P_Detail']);
Route::get('getCash_date/{id}',[AdminUserController::class,'getCash_date']);
Route::post('/update_ccs/{id}',[AdminUserController::class,'Update_CCS']);


Route::get('/get_product',[OrderController::class,'Get_Product']);
Route::post('/return_product',[OrderController::class,'Return_Product']);

Route::get('/all_order',[OrderController::class,'get_all_order']);
Route::get('get_all_order/{min}/{max}',[OrderController::class,'Get_All_Orders']);
Route::get('/all_orders',[OrderController::class,'orders_list']);
Route::get('/order_all/{min}/{max}',[OrderController::class,'Orders_All']);
Route::get('/all_order_amount',[OrderController::class,'All_Order_Amount']);

Route::post('/order_confirm/{id}',[OrderController::class,'sent_message']);
Route::get('/order_edit/{id}',[OrderController::class,'Order_Edit']);
Route::get('/close',function(){
 return redirect('/all_order');
});


// Route::post('/order_confirm/{name}',[OrderController::class,'sent_message']);
Route::get('/orderd_confirm/{name}',[OrderController::class,'sent_message1']);
Route::post('/return_order_confirm/{id}',[OrderController::class,'rtn_ordr_confirm']);

Route::get('/cash_claim_setting',function(){
 return view('admin.cash_claim_setting');
});

Route::get('get_cash_claim_date/{min}/{max}',[AdminUserController::class,'Get_CCDate']);
Route::post('/send_message_to/{id}',[AdminUserController::class,'Send_Message_To']);
Route::post('/cc_settings',[AdminUserController::class,'Cash_Claim_Settings']);

Route::get('/get_confirm_order',[OrderController::class,'get_confirm_order']);
Route::get('get_all_confirm_order/{min}/{max}',[OrderController::class,'get_all_confirm_order']);

Route::get('/update_quntitys/{name}',[OrderController::class,'get_update_prod']);

Route::get('/product/edit/{id}',[BuyProductsController::class,'edit_product']);

Route::post('/product_update/{id}',[BuyProductsController::class,'update_product']);

Route::post('/kyc_confirm/{id}',[RegisterController::class,'vendor_kyc']);
Route::get('/vendor_active/{id}',[RegisterController::class,'vendor_active']);
Route::get('/vendor_deactive/{id}',[RegisterController::class,'vendor_deactive']);
Route::get('/get_vendor_list/{min}/{max}',[RegisterController::class,'Get_Vendor_List']);

Route::get('/homepage', function () {
    return view('admin.index');
});

Route::post('/cust_images',[RegisterController::class,'CustImage']);
// Route::get('/registration',[Registrationcontroller::class,'registration']);

Route::get('/epin', function () {
    return view('admin.epin');
});

Route::get('/welcome', function () {
    return view('admin.welcome');
});

// Route::view('home','admin.home');

Route::get('/subregist', function () {
    return view('admin.subregist');
});

Route::get('/invoice', function () {
    return view('admin.invoice');
});

Route::get('/profile',function(){
    return view('admin.profile');
});

// Route::get('/my_direct', function () {
//     return view('cards');
// });


Route::get('/my_direct',[Registrationcontroller::class,'my_direct']);

Route::get('/navbar', function () {
    $data = Auth::user()->name;
    $request->session()->put('user_name',$data);
    return view('navbar',['user_name' => $data]);
});
// Route::get('/profile', function () {
//     return view('profile');
// });


// Route::get('/logout', function () {
//     return view('welcome');
// });

// Route::get('/login_user',function(){
//     return view('admin.login');
// });

Route::get('/policy',function(){
    return view('policy');
});

Route::get('/portal',function(){
    return view('portal');
});

Route::get('/task',function(){
    return view('task');
});

Route::get('/test',[Registrationcontroller::class,'test']);
Route::get('/test1',[Registrationcontroller::class,'test1']);


Route::get('/topup',[UserController::class,'topup']);

Route::POST('/payment_initiate_request',[UserController::class,'Initiate']);

Route::POST('/payment_success',[UserController::class,'payment_success']);



Route::get('/my_direct_report',[Registrationcontroller::class,'my_direct_report']);

Route::get('/mywallet',[Registrationcontroller::class,'mywalllet_list']);

Route::GET('/uploadkyc',[Registrationcontroller::class,'uploadkyc']);
Route::POST('/upload_kyc_details',[Registrationcontroller::class,'upload_kyc_detail'])->name('update_kyc.created');

// Route::GET('/login',[Registrationcontroller::class,'login_user']);
// First Registration Page
Route::GET('/myprofile',[Registrationcontroller::class,'viewProfile']);
Route::GET('/showprofile',[Registrationcontroller::class,'showProfile']);
Route::POST('/saveproile',[Registrationcontroller::class,'createProfile'])->name('profile.created');
// Route::get('/update',[Registrationcontroller::class,'updateProfile']);
Route::POST('/Profile-updated',[Registrationcontroller::class,'insertUpdate'])->name('profileUpdate.created');

Route::get('/place_order',[OrderController::class,'getOrder']);
Route::get('/add_product',function(){
    return view('admin.add_product');
});

//Sub Registration Page

Route::GET('/subprofile',[Subregistcontroller::class,'viewSubProfile'])->middleware('auth');
Route::POST('/savesubproile',[Subregistcontroller::class,'createSubProfile'])->name('subprofile.created');



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');
Route::get('/invoices',[InvoiceController::class,'invoice_report']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('/contact','admin.contact');
Route::view('/term','admin.termsandcondition');

Route::post('/admin_login', [App\Http\Controllers\AdminUserController::class, 'admin_login']);

Route::get('/admin_panel', function () {
    return view('admin.admin_welcome');
});

Route::post('/admin_register',[App\Http\Controllers\AdminUserController::class, 'admin_register']);
Route::post('/admin_frpass',[App\Http\Controllers\AdminUserController::class, 'admin_frpass']);

Route::get('/my_dashbord',[App\Http\Controllers\AdminUserController::class, 'All_Vndr_Cust']);
//  function () {
//     return view('admin.dashbord');
// });

Route::GET('/vendor_list',[AdminUserController::class,'getactive']);
Route::GET('/all_vendor',[AdminUserController::class,'all_vendor']);
Route::get('/all_purch_order',[AdminUserController::class,'all_order']);
Route::get('/vendor/details/{id}',[AdminUserController::class,'get_Details']);

Route::get('/all_customer/{id}',[AdminUserController::class,'customer_list']);



Route::GET('/customer_list',[AdminUserController::class,'getuser']);
Route::GET('get_members_list/{min}/{max}',[AdminUserController::class,'Get_Members_List']);

Route::GET('/employee_list',[AdminUserController::class,'getdeactive']);
Route::GET('/kyc',[AdminUserController::class,'getkyc']);
Route::get('/earning', function () {
    return view('earning'); 
});
Route::get('/payment',[App\Http\Controllers\AdminUserController::class,'payment']);
// Route::get('/images',[App\Http\Controllers\AdminUserController::class,'slideshow']);
Route::POST('/change_password', [App\Http\Controllers\AdminUserController::class,'change_password']);
Route::get('/change_password', [App\Http\Controllers\AdminUserController::class, 'change_pass_show']);
Route::post('/change_password', [App\Http\Controllers\AdminUserController::class, 'change_pass']);
Route::GET('/new_user',[AdminUserController::class,'display']);

Route::post('/new_users',[AdminUserController::class,'add_user']);
Route::get('/user_status/{id}', [App\Http\Controllers\AdminUserController::class, 'change_status']);
Route::get('/user_status/deactive/{id}', [App\Http\Controllers\AdminUserController::class, 'change_status_de']);

Route::get('customer/open/{id}', [App\Http\Controllers\AdminUserController::class, 'open']);
Route::post('/update_advice/{id}', [App\Http\Controllers\AdminUserController::class, 'Update_Advice']);

Route::get('members/edit/{id}', [App\Http\Controllers\AdminUserController::class, 'edit']);
Route::post('members/edit/{id}/update', [App\Http\Controllers\AdminUserController::class, 'update']);
Route::get('/members/delete/{id}', [App\Http\Controllers\AdminUserController::class, 'delete']);
Route::get('admin_genealogy/{id}',[App\Http\Controllers\AdminUserController::class,'genealogy_view']);
Route::get('get_all_request/{min}/{max}',[OrderController::class,'Get_All_Request']);
// });
Route::get('/vendor/open/{id}',[RegisterController::class,'genealogy_custmer']);

Route::resource('vRegisterModels', App\Http\Controllers\VRegisterModelController::class);


Route::resource('roleModels', App\Http\Controllers\RoleModelController::class);


Route::resource('/refCategories', App\Http\Controllers\RefCategoryController::class);

Route::get('/sponsor_link/{user_id}/{vens_id}',[BuyProductsController::class,'index']);

Route::get('/signups/{user_id}/{vens_id}',[BuyProductsController::class,'index']);

Route::post('/create-user',[BuyProductsController::class,'store']);

Route::get('/user_login',[BuyProductsController::class,'create']);
Route::post('/login_user',[BuyProductsController::class,'login']);
// Route::post('/logout_user',[BuyProductsController::class,'logout']);
Route::get('/logout_user',function(){
    if (session()->has('user')) {
        session()->pull('user',null);
    }
    return redirect('/login');
});

Route::get('/sold_offline',[AdminUserController::class,'Sold_Offline']);
Route::get('/admin_logout',[AdminUserController::class,'adminLogout']);

Route::get('/buy-product',[BuyProductsController::class,'buy_Product']);

Route::get('/ref',[RegisterController::class,'referral_count']);

Route::get('/all_user',[RegisterController::class,'genealogy_view']);

Route::get('/all_ref_user',[RegisterController::class,'genealogy_custmer']);

Route::get('/all_customers',[RegisterController::class,'allCustomers']);

Route::get('/update_customer_details/{c_id}',[RegisterController::class,'Ucd']);

Route::get('/update_cust_d/{c_id}',[RegisterController::class,'Udc']);
Route::get('/product_list',[OrderController::class,'prod_list']);
Route::get('all_prdct/{min}/{max}',[OrderController::class,'All_Prdct']);
Route::get('/user_profile',[BuyProductsController::class,'show']);

Route::get('/products_list',[BuyProductsController::class,'Products_list']);
Route::get('/sales',[BuyProductsController::class,'sales_list']);
Route::get('get_all_product_list/{min}/{max}',[BuyProductsController::class,'Get_All_Product_List']);
Route::get('get_sale_product_list/{min}/{max}',[BuyProductsController::class,'Get_Sale_Product_List']);
Route::get('/product/delete/{id}',[BuyProductsController::class,'delete_prod']);
Route::post('/time_slot',[AdminUserController::class,'time_slot']);


// Route::get('/buy-product',function(){
//     return view('product_view');
// });
Route::get('/set_schedule_admin',[OrderController::class,'Time_Set']);
// Route::get('/set_schedule_admin',function(){
//     return view('admin.Time_Set');
// });

Route::get('/reset_password',function(){
    return view('reset_password');
});
// Route::post('/confirm_password',[RegisterController::class,'Confirm_User_Password']);


Route::get('/payment1', [RazorpayPaymentController::class, 'index']);
Route::post('/payment_store', [RazorpayPaymentController::class, 'store'])->name('razorpay.payment.store');

Route::post('/offline', [BuyProductsController::class,'offline']);

Route::get('/all_diagnosis',[RegisterController::class,'add_Diagnosis']);

Route::post('/store_dia',[RegisterController::class,'store_dia']);

Route::get('/add_diagnosis',[RegisterController::class,'create_p']);
Route::get('/diagno/edit/{id}',[RegisterController::class,'edit_diagnosis']);
Route::post('/update_diagnosis/{id}',[RegisterController::class,'update_diagnosis']);

Route::post('/contactus', [RegisterController::class,'Contact_us']);

Route::get('/all_enquiry', [RegisterController::class,'all_Enquiry']);
Route::get('/enquiry_del/{id}', [RegisterController::class,'delete']);

Route::get('/nav',function(){
    return view('nav');
});

Route::get('/h1',function(){
    return view('homepage');
});
Route::get('/u_login',function(){
    return view('user_login');
});

Route::get('/test',function(){
    return view('analysis');
});

Route::get('/edit_vendor1',[RegisterController::class,'Edit_Vendor1']);

Route::get('get_dwise_Data/{dates}',[OrderController::class,'get_Dwise_Data']);

Route::get('get_finance_data/{min}/{max}',[OrderController::class,'get_F_Data']);
Route::get('vendortocompany/{min}/{max}',[OrderController::class,'VendorToCompany']);
Route::get('vendortocompanytotal/{min}/{max}',[OrderController::class,'VendorToCompanyTotal']);
Route::get('/all_c_transaction',[OrderController::class,'All_C_Transaction']);
Route::get('/customer_transaction/{min}/{max}',[OrderController::class,'Get_C_Transaction']);
Route::get('/customer_transaction_total/{min}/{max}',[OrderController::class,'get_Total_Price']);
Route::get('all_cstmr/{min}/{max}',[OrderController::class,'All_Cstmr']);
Route::get('/new_orders',[OrderController::class,'New_Purchase_Orders']);
Route::get('get_total/{min}/{max}',[OrderController::class,'get_Total']);
Route::post('/send_act_request',[RegisterController::class,'Send_Act_Request']);
Route::get('/v_sold_stock',[OrderController::class,'Vendor_Sold_Stock']);
Route::get('all_sold_cust/{min}/{max}',[OrderController::class,'Sold_Stock_Cust']);
Route::get('all_offline_sold/{min}/{max}',[OrderController::class,'All_Offline_Sold']);
Route::get('/all_offline_sold1/{min}/{max}',[AdminUserController::class,'All_Offline_Sold']);

Route::get('/all_customer_total',[OrderController::class,'All_Customer_Total']);
Route::post('/store_dates',[OrderController::class,'Store_Dates']);
// Route::get('/user_dashboard',function(){
//     return view('user_dashboard');
// });
Route::get('pdf/{newid}',[OrderController::class,'Get_PDF']); 

Route::get('edit_order_admin/{newid}',[OrderController::class,'Edit_Order_Admin']); 

Route::get('/demo',function(){
    return view('demo1');
}); 