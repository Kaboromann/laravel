<?php

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
Route:: get ('/reviewsform',function(){
    return view('reviewsform');
});
Route::get('/Rentndai',function(){
    return view('Rentndai');
});
Route::get('/vacation',function(){
    return view('vacation');
});

Route::get('/contactus', function(){
    return view('.contactus');
});
Route::get('/thankyou', function () {
    return view('thankyou');
});

Route::post("submit-review",
 [ReviewController::class, 'reviews']);


 
