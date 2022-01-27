<?php

use Illuminate\Support\Facades\Route;
use App\Controllers\RoomtypeController;
use App\Controllers\AdminController;
use App\Controllers\RoomController;
use App\Controllers\CustomerController;
use App\Controllers\BookingController;
use App\Controllers\HomeController;
use App\Http\Controllers\StaffDepartment;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\EmployeeController;
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
Route::get('admin/pdf', [EmployeeController::class, 'showEmployees']);
Route::get('/employee/pdf', [EmployeeController::class, 'createPDF']);

Route::get('/admin/sendemail', 'App\Http\Controllers\SendEmailController@index');
Route::post('/sendemail/send', 'App\Http\Controllers\SendEmailController@send');

Route::get('/chat', [App\Http\Controllers\ChatsController::class, 'index']);
Route::get('/messages', [App\Http\Controllers\ChatsController::class, 'fetchMessages']);
Route::post('/messages', [App\Http\Controllers\ChatsController::class, 'sendMessage']);

Route::get('test',[App\Http\Controllers\HomeController::class,'test']);
Route::get('about',[App\Http\Controllers\HomeController::class,'about']);
Route::get('services',[App\Http\Controllers\HomeController::class,'services']);
Route::get('/',[App\Http\Controllers\HomeController::class,'test']);
Route::get('payment',[App\Http\Controllers\HomeController::class,'payment']);

Route::get('contact',[App\Http\Controllers\ContactController::class,'contact']);
Route::post('contact','App\Http\Controllers\ContactController@store');
Route::resource('admin/complain', App\Http\Controllers\ContactController::class);
Route::get('admin/complain/{id}/delete',[ContactController::class,'destroy']);

//AdRoute::get('welcome',[App\Http\Controllers\HomeController::class,'welcome']);min Login
Route::get('admin/login',[App\Http\Controllers\AdminController::class,'login']);
Route::post('admin/login',[App\Http\Controllers\AdminController::class,'check_login']);

// logout
Route::get('admin/logout',[App\Http\Controllers\AdminController::class,'logout']);

// Admin Dashboard
Route::get('admin',[App\Http\Controllers\AdminController::class,'dashboard']);

// RoomType Routes
//Route::resource('admin/insurance',RoomtypeController::class);
Route::get('admin/insurance/{id}/delete', [App\Http\Controllers\RoomtypeController::class,'destroy']);
Route::resource('admin/insurance', App\Http\Controllers\RoomtypeController::class);

// Rooms
Route::get('admin/policy/{id}/delete', [App\Http\Controllers\RoomController::class,'destroy']);
Route::resource('admin/policy', App\Http\Controllers\RoomController::class);

//Customer
Route::get('admin/customer/{id}/delete', [App\Http\Controllers\CustomerController::class,'destroy']);
Route::resource('admin/customer', App\Http\Controllers\CustomerController::class);

//delete image
Route::get('admin/insuranceimage/delete/{id}', [App\Http\Controllers\RoomtypeController::class,'destroy_image']);

//department
Route::get('admin/department/{id}/delete',[StaffDepartment::class,'destroy']);
Route::resource('admin/department',StaffDepartment::class);

// Staff Payment
Route::get('admin/staff/payments/{id}',[StaffController::class,'all_payments']);
Route::get('admin/staff/payment/{id}/add',[StaffController::class,'add_payment']);
Route::post('admin/staff/payment/{id}',[StaffController::class,'save_payment']);
Route::get('admin/staff/payment/{id}/{staff_id}/delete',[StaffController::class,'delete_payment']);
// Staff CRUD
Route::get('admin/staff/{id}/delete',[StaffController::class,'destroy']);
Route::resource('admin/staff',StaffController::class);

//Bookings
Route::get('admin/booking/{id}/delete', [App\Http\Controllers\BookingController::class,'destroy']);
Route::get('admin/booking/available-rooms/{checkin_date}', [App\Http\Controllers\BookingController::class,'available_rooms']);
Route::resource('admin/booking', App\Http\Controllers\BookingController::class);

Route::get('login',[App\Http\Controllers\CustomerController::class,'login']);
Route::post('customer/login',[App\Http\Controllers\CustomerController::class,'customer_login']);
Route::get('register',[App\Http\Controllers\CustomerController::class,'register']);
Route::get('logout',[App\Http\Controllers\CustomerController::class,'logout']);

Route::get('booking',[App\Http\Controllers\BookingController::class,'front_booking']);
Route::get('booking/success',[App\Http\Controllers\BookingController::class,'booking_payment_success']);
Route::get('booking/fail',[App\Http\Controllers\BookingController::class,'booking_payment_fail']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home']);