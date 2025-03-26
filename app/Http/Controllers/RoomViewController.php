<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomViewController extends Controller
{
    public function index()
    {
        return view('rooms'); 
    }
}
