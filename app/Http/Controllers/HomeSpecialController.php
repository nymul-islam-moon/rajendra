<?php

namespace App\Http\Controllers;

use App\Models\specialOffers;
use Illuminate\Http\Request;

class HomeSpecialController extends Controller
{
    public function index()
    {
        $specialOffers = specialOffers::all();
        return view('frontend.special_offers', compact('specialOffers'));
    }
}
