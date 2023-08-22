<?php
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Mechanic;
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
    return view('welcome');
});

Route::get('/about-us', function () {
    return view('about-us');
});
Route::get('/SendRequest.create', function () {
    return view('request');
});
Route::get('/contact-us', function () {
    return view('contact-us');
});
Route::get('/mechanic.index', function () {
    return view('mechanic.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::resource('/admin/users','App\Http\Controllers\Admin\UsersController',['except'=>['show','create','store']]);

Route::namespace('App\Http\Controllers\Admin')->prefix('admin')->name('admin')->middleware('can:manage-users')->group(function(){
    Route::resource('/users','UsersController',['except'=>['show','create','store']]);
});
Route::resource('Mechanic','App\Http\Controllers\MechanicsController');

Route::get('contact-us', 'App\Http\Controllers\ContactController@getContact');
Route::post('contact-us', 'App\Http\Controllers\ContactController@saveContact');

//Route::get('SendRequest/getMechanics','App\Http\Controllers\SendRequestController@getMechanics')->name('SendRequest.getMechanics');

Route::get('/dropdownlist','App\Http\Controllers\DataController@getMechanics');
Route::resource('SendRequest','App\Http\Controllers\SendRequestController');
Route::get('dropdownlist/getstatus/{id}','App\Http\Controllers\DataController@getStatus');


// Route::get('insert','App\Http\Controllers\ApprovalController@insertform');
// Route::post('create','App\Http\Controllers\ApprovalController@insert');

Route::resource('Approval','App\Http\Controllers\ApprovalsController');

Route::get('contact-us1', 'App\Http\Controllers\Contact1Controller@getContact');
Route::post('contact-us1', 'App\Http\Controllers\Contact1Controller@saveContact');