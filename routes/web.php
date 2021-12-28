<?php

use App\Http\Controllers\MailController;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use \Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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



Route::group(
[
  'prefix' => LaravelLocalization::setLocale(),
  'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
],
function()
{
  
Route::get('/', function () {
    return view('home');
});
 
Route::get('/about', function () {
       return view('about');
    });

Route::get('/home', function () {
       return view('home');
    });

Route::get('service', function () {
       return view('service');

    });
Route::get('contact', function () {
        return view('contact');

    });
Route::get('/email', function () {
        return view('email');

    });
Route::post('/send-email','MailController@sendemail');
});








