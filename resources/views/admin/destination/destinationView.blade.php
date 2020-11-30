@extends('admin.master')

@section('content')
    <h4>All destination</h4>
    @if (session('Msg'))
        
    <p class="text-success">
        {{ session('Msg') }}
    </p>
    @endif

    @if (session('deleteMsg'))
        
    <p class="text-danger">
        {{ session('deleteMsg') }}
    </p>
    @endif
    <table class="table table-light table-bordered">
        <tbody style="text-align: center ;aligh-item:center">
            <tr style="font-weight: bold">
                <td>Sl.</td>
                <td>Title</td>
                <td>price</td>
                <td>day</td>
                <td>Location</td>
                <td>description</td>
                <td>Marked as Popular</td>
                <td>image</td>
                <td colspan="10">Actions</td>
            </tr>
          @forelse ($destinations as $key => $item)
                <tr>
                    <td>{{ $destinations->firstItem()+$key }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->price}}</td>
                    <td>{{ $item->day}}</td>
                    <td>{{ $item->city}}, {{ $item->country}}</td>
                    <td>{{ $item->description}}</td>
                    <td>@if($item->popular == 'on') {{ $item->popular}} @endif</td>
                    <td><img width="100" src="{{ asset('admin/images/destination').'/'.$item->image }}" alt="{{ $item->image  }}"></td>
                    <td><a href="{{ route('destinationUpdate', $item->slug) }}" class="btn btn-success">Update</a></td>
                    <td><a href="{{ route('destinationDelete', $item->id) }}"  onclick="confirmation(event)" class="btn btn-danger">Delete</a></td>
                </tr>
                @empty
                <td colspan="50"></td>
            @endforelse 
        </tbody>
    </table>
    {{ $destinations->links() }}

@endsection




