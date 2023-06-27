<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BookingController extends Controller
{
    public function bookings(Request $request)
    {
        $validateData = $request->validate([
            'package' => 'required',
            'name' => 'required',
            'email' => 'required|email',
        ]);
        Booking::create($validateData);
        return redirect('/thankyou');
        // return redirect()->back()->with('success','Booking successful!!');
    }

}
