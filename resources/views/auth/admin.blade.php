@extends('layouts.app')

@section('content')

{{-- @php
    dd($data)
@endphp --}}

<div class="container-fluid">

    
    <table class="table table-striped">
        <thead>
        <tr>
            <th><strong>Id</strong></th>
            <th><strong>Name</strong></th>
            <th><strong>City</strong></th>
            <th><strong>Price</strong></th>
            <th><strong>description</strong></th>
            <th><strong>path</strong></th>
            <th><strong>floor</strong></th>
            <th><strong>mq</strong></th>
            <th><strong>email</strong></th>
            <th><strong>geolocalization</strong></th>
            <th><strong>telephone</strong></th>
            <th><strong>slug</strong></th>
            <th class="text-center"><strong>action</strong></th>
        </tr>
        </thead>
        <tbody>
            @foreach ( $data as $house )
                <tr>
                    <td style="max-width: 100px;" class="text-truncate">{{ $house->name ? $house->name : '-' }}</td>
                    <td style="max-width: 100px;" class="text-truncate">{{ $house->id }}</td>
                    <td style="max-width: 100px;" class="text-truncate">{{ $house->city ? $house->city : '-' }}</td>
                    <td style="max-width: 100px;" class="text-truncate">{{ $house->price ? $house->price : '-' }}</td>
                    <td style="max-width: 100px;" class="text-truncate">{{ $house->description ? $house->description : '-' }}</td>
                    <td style="max-width: 100px;" class="text-truncate">{{ $house->path ? $house->path : '-' }}</td>
                    <td style="max-width: 100px;" class="text-truncate">{{ $house->floor ? $house->floor : '-' }}</td>
                    <td style="max-width: 100px;" class="text-truncate">{{ $house->mq ? $house->mq : '-' }}</td>
                    <td style="max-width: 100px;" class="text-truncate">{{ $house->email }}</td>
                    <td style="max-width: 100px;" class="text-truncate">{{ $house->geolocalization ? $house->geolocalization : '-' }}</td>
                    <td style="max-width: 100px;" class="text-truncate">{{ $house->telephone ? $house->telephone : '-' }}</td>
                    <td style="max-width: 100px;" class="text-truncate">{{ $house->slug ? $house->slug : '-' }}</td>
                    <td style="min-width: 200px;" >
                        <a href="{{ route('admin.show', $house->id) }}" class="btn btn-outline-info m-2">Show</a>
                        <a href="{{ route('admin.edit', $house->id) }}" class="btn btn-outline-primary m-2">modify</a>
                        @if (Auth::user() == null)
                        {{-- non fare niente --}}
                        @elseif (Auth::user()->hasRole('admin'))
                            <a href="{{ route('admin.destroy', $house->id) }}" class="btn btn-outline-danger m-2">delete</a>
                        @endif
                    </td>
                </tr>  
            @endforeach
        </tbody>
    </table>

    
</div>    






@endsection