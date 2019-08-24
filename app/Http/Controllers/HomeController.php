<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\House;

class HomeController extends Controller
{
    
    public function index()
    {
        $data = House::all();
        return view('home', compact('data'));
    }
}
