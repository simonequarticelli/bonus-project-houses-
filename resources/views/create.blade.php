@extends('layouts.app')

@section('content')

    <div class="container w-25">
        <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="name" name="name">
            </div>
            {{-- <div class="form-group">
                <label>City</label>
                <input type="text" class="form-control" placeholder="city" name="city">
            </div> --}}
            <div class="form-group">
                <label>Price in €</label>
                <input type="number" class="form-control" placeholder="price" name="price">
            </div>
            
            <div class="form-group">
                <label>Add image</label>
                <input type="file" name="img" class="form-control-file">
            </div>


            <div class="form-group">
                <input name="city" type="search" id="address-input" placeholder="Where are we going?">
            </div>

            <input id="lat" name="longitude" type="text" hidden>
            <input id="lng" name="latitude" type="text" hidden>
    
            <button type="submit" class="btn btn-primary">create</button>

            
        </form>

       

    </div>
    
    
@endsection

