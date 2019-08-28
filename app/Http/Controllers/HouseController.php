<?php

namespace App\Http\Controllers;

use App\House;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HouseController extends Controller
{
    public function __construct() {
        $this->middleware('role:admin|auth');
        // per vedere tutto hai bisogno del permesso all 
        // eccetto per queste view -> ['index', 'show', 'edit']
        $this->middleware('permission:all')->except(['index', 'show', 'edit']);
    }

    public function index()
    {
        $data = House::all();
        return view('auth.admin', compact('data'));
    }

    
    public function create()
    {
        return view('create');
    }

    
    public function store(Request $request)
    {   
        // dd($request);
        $data = $request->all();
        dd($data);
        $img = Storage::put('upload_file', $data['img']);
        // dd($img);
        $new_house = new House();
        $new_house->path = $img; 
        $new_house->fill($data);
        $new_house->save();

        return redirect()->route('admin.index');
    }

    
    public function show(House $house)
    {
        //
    }

    
    public function edit(House $house)
    {
        //
    }

    
    public function update(Request $request, House $house)
    {
        //
    }

    
    public function destroy(House $house)
    {
        //
    }
}
