<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class HomeBookingController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        return view('frontend.book_now', compact('rooms'));
    }
}
