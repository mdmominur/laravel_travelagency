@extends('admin.master')

@section('content')
    <h4>All Services</h4>
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
        <tbody>
            <tr style="font-weight: bold">
                <td>Sl.</td>
                <td>Title</td>
                <td max-width="400">Pragraph</td>
                <td>Image</td>
                <td colspan="10">Actions</td>
            </tr>
          @forelse ($services as $key => $item)
                <tr>
                    <td>{{ $services->firstItem()+$key }}</td> 
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->service_pra}}</td>
                    <td><img style="background: #00ACB2" width="100" src="{{ asset('admin/images/services').'/'.$item->serviceImg }}" alt="{{ $item->serviceImg  }}"></td>
                    <td><a href="{{ route('serviceUpdate', $item->id) }}" class="btn btn-success">Update</a></td>
                    <td><a href="{{ route('serviceDelete', $item->id) }}"  onclick="confirmation(event)" class="btn btn-danger">Delete</a></td>
                </tr>
                @empty    
                    <td colspan="50">No Data Available</td>
            @endforelse 
        </tbody>
    </table>
    {{ $services->links() }}
@endsection