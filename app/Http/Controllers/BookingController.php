<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'package' => 'required',
            'name' => 'required',
            'email' => 'required|email',
        ]);
        Booking::create($validateData);
        return redirect()->back()->with('success','Booking successful!!');
    }

}
