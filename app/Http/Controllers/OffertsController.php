<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OffertsController extends Controller
{
    public function index()
    {
        return view('offerts'); 
    }
}
