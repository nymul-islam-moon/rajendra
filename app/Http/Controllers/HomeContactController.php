<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeContactController extends Controller
{
    public function index()
    {
        return view('frontend.contact');
    }
}
