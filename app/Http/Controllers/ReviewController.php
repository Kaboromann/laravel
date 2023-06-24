<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use App\Models\Reviews;

class ReviewController extends Controller
{
     function reviews(Request $request)
    {
       
        $validateData= $request->validate(
            [
                'name'=> 'required',
                'email'=> 'required|email',
                'review'=> 'required',
               // 'updated_at'=>'required',
            ]);
            Reviews::create($validateData);

            return redirect('/thankyou');


    }
}
    