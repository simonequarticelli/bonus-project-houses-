<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\House;

class HomeController extends Controller
{
    
    public function index()
    {
        $data = House::orderBy('created_at', 'desc')->get();
        return view('home', compact('data'));
    }
}
