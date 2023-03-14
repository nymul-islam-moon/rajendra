<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeBookingController extends Controller
{
    public function index()
    {
        # code...
        return view('frontend.book_now');
    }
}
