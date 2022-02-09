<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DynamicPDFController;
use App\Http\Controllers\DepositDynamicPDFController;  
use App\Http\Controllers\WithdrawDynamicPDFController; 
use App\Http\Controllers\FinanceDynamicPDFController;  
use App\Http\Controllers\QuoteDynamicPDFController; 
use App\Http\Controllers\BeneficiaryDynamicPDFController; 
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
 

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


 


Route::get('/redirect',[HomeController::class,'redirect'])->middleware('verified');

Route::get('/',[HomeController::class,'index']);

Route::get('/admin_login',[HomeController::class,'admin_login']);


////______________________________make_verified______________________________________
Route::get('/make_verified',[HomeController::class,'make_verified']);
route::post('/upload_make_verified',[HomeController::class,'upload_make_verified']);



////______________________________deposits_funds______________________________________
Route::get('/deposits_funds',[HomeController::class,'deposits_funds']);
Route::post('/upload_deposits_funds',[HomeController::class,'upload_deposits_funds']);


////______________________________withdraw_funds______________________________________
Route::get('/withdraw_funds',[HomeController::class,'withdraw_funds']);
Route::post('/upload_withdraw_funds',[HomeController::class,'upload_withdraw_funds']);


////______________________________Profile_____________________________________________
route::get('/profile',[HomeController::class,'profile']);
route::post('/profile_contact_update',[HomeController::class,'profile_contact_update']);
route::post('/profile_pass_update',[HomeController::class,'profile_pass_update']);
route::post('/profile_picture_update',[HomeController::class,'profile_picture_update']);

////______________________________Transiction_history______________________________________
Route::get('/transiction_history',[HomeController::class,'transiction_history']);
Route::post('/add_transiction_history',[HomeController::class,'add_transiction_history']);


////______________________________last deposit______________________________________
Route::get('/last_deposit',[HomeController::class,'last_deposit']);



 



 




















//_________________________Admin____________________________________________________________________________

Route::get('/user_management',[AdminController::class,'user_management']);
route::get('/view_upload_user_management/{id}',[AdminController::class,'view_upload_user_management']);
route::post('/upload_user_management/{id}',[AdminController::class,'upload_user_management']);
route::get('/delete_upload_user_management/{id}',[AdminController::class,'delete_upload_user_management']);
route::get('/view_transaction_user_management/{id}',[AdminController::class,'view_transaction_user_management']);




Route::get('/deposits_management',[AdminController::class,'deposits_management']);
route::get('/view_deposits_management/{id}',[AdminController::class,'view_deposits_management']);
route::post('/upload_deposits_management/{id}',[AdminController::class,'upload_deposits_management']);
route::get('/delete_deposits_management/{id}',[AdminController::class,'delete_deposits_management']);



Route::get('/withdraw_management',[AdminController::class,'withdraw_management']);
route::get('/view_withdraw_management/{id}',[AdminController::class,'view_withdraw_management']);
route::post('/upload_withdraw_management/{id}',[AdminController::class,'upload_withdraw_management']);
route::get('/delete_withdraw_management/{id}',[AdminController::class,'delete_withdraw_management']);





Route::get('/finance_management',[AdminController::class,'finance_management']);
route::get('/view_finance_management/{id}',[AdminController::class,'view_finance_management']);
route::post('/upload_finance_management/{id}',[AdminController::class,'upload_finance_management']);






Route::get('/profile_and_security',[AdminController::class,'profile_and_security']);
route::get('/delete_profile_and_security/{id}',[AdminController::class,'delete_profile_and_security']);
route::get('/view_upload_profile_and_security',[AdminController::class,'view_upload_profile_and_security']);
route::post('/upload_profile_and_security',[AdminController::class,'upload_profile_and_security']);
 






Route::get('/quote_management',[AdminController::class,'quote_management']);
route::get('/view_quote_management/{id}',[AdminController::class,'view_quote_management']);
route::post('/upload_quote_management/{id}',[AdminController::class,'upload_quote_management']);


Route::get('/beneficiary_management',[AdminController::class,'beneficiary_management']);
route::get('/view_beneficiary_management/{id}',[AdminController::class,'view_beneficiary_management']);
route::post('/upload_beneficiary_management/{id}',[AdminController::class,'upload_beneficiary_management']);











 



/////___________________________PDF_____________________________________

Route::get('/dynamic_pdf',[DynamicPDFController::class,'index']);
Route::get('/dynamic_pdf/pdf',[DynamicPDFController::class,'pdf']);

Route::get('/deposit_dynamic_pdf',[DepositDynamicPDFController::class,'index']);
Route::get('/deposit_dynamic_pdf/pdf',[DepositDynamicPDFController::class,'pdf']);

Route::get('/withdraw_dynamic_pdf',[WithdrawDynamicPDFController::class,'index']);
Route::get('/withdraw_dynamic_pdf/pdf',[WithdrawDynamicPDFController::class,'pdf']); 

 
Route::get('/finance_dynamic_pdf',[FinanceDynamicPDFController::class,'index']);
Route::get('/finance_dynamic_pdf/pdf',[FinanceDynamicPDFController::class,'pdf']); 

Route::get('/quote_dynamic_pdf',[QuoteDynamicPDFController::class,'index']);
Route::get('/quote_dynamic_pdf/pdf',[QuoteDynamicPDFController::class,'pdf']); 

Route::get('/ben_dynamic_pdf',[BeneficiaryDynamicPDFController::class,'index']);
Route::get('/ben_dynamic_pdf/pdf',[BeneficiaryDynamicPDFController::class,'pdf']); 