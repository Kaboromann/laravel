<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ReviewController;
use App\Models\Flight2;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\UserController;
use App\Http\Controllers\PhotoController;
/*Route::get('/user/{id}', [UserController::class, 'show']);
Route::get('/booking/{name}', [PhotoController::class, 'store']);
Route::get('/update/{name}', [PhotoController::class, 'update']);
Route::get('/delete',[PhotoController::class,'destroy']);
Route::get('/welcome',function(){
    return view('welcome',['response'=>'WELCOME  USER']);
});

Route::get('/data',function(){
    return response('heading'=>'IANO',
    'data'=>Flight2::all())
});


    //{return view('welcome',['para'=>'Hello']);*/
        Route::get('/',function(){
            return view('index');
        });
Route::get('/offers',function(){
    return view('offers');
});
Route::get('/login',function(){
    return view('login');
})->name('login');
Route::get('/registration',function(){
    return view('registration');
})->name('register');

Route:: get ('/reviewsform',function(){
    return view('reviewsform');
});
Route::get('/Rentndai',function(){
    return view('Rentndai');
});
Route::get('/vacation',function(){
    return view('vacation');
});
Route::get('/pracical',function(){
    return view('pracical');
});

Route::get('/contactus', function(){
    return view('contactus');
});
Route::get('/thankyou', function () {
    return view('thankyou');
});
Route::get('/packages', function(){
    return view('packages');
});
Route::post('/admin', function () {
    return view('admin');
});
Route::get('/bookings', function(){
    return view('bookings');
});

Route::post('submit-review',
 [ReviewController::class, 'reviews']);

 Route::post('/register', 
 [UserController::class, 'registerUser'])->name('register');
   
   Route::post('/login', 
 [UserController::class, 'loginUser'])->name('login');
   Route::view('/dashboard','dashboard');

   Route::post('booking-form',
   [
    BookingController::class, 'bookings'
   ]);
   

 


 
