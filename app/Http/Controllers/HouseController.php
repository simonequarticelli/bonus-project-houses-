<?php

namespace App\Http\Controllers;

use App\User;
use App\House;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $data = House::orderBy('created_at', 'desc')->get();
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
        //dd($data);

        // $permission = User::where('name', '=', 'mail')->first();
        // // role attach alias
        // $pippo = Auth::user()->attachPermission($permission); // parameter can be an Role object, array, or id
        // $pippo->save();

        //dd(Auth::user()->name);
        
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








