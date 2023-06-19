<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
function reviews(Request $request){
    $request ->validate([
        'name'=> 'required'
    ]);
    return redirect('/thankyou');
}
           
       
    }