@extends('admin.master')

@section('content')
    <h4>View tourist experiences</h4>
    <p>Last 3 will appear on website</p>
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
                <td>Role</td>
                <td>Quote</td>
                <td>Image</td>
                <td colspan="10">Actions</td>
            </tr>
          @forelse ($experience as $key => $item)
                <tr>
                    <td>{{ $experience->firstItem()+$key }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->role}}</td>
                    <td>{{ $item->description}}</td>
                    <td><img width="100" src="{{ asset('admin/images/tourist').'/'.$item->image }}" alt="{{ $item->image  }}"></td>
                    <td><a href="{{ route('tourist_experUpdate', $item->slug) }}" class="btn btn-success">Update</a></td>
                    <td><a href="{{ route('tourist_experDelete', $item->slug) }}"  onclick="confirmation(event)" class="btn btn-danger">Delete</a></td>
                </tr>
                @empty
                    <td colspan="50">No Data available</td>
                
            @endforelse 
        </tbody>
    </table>
    {{ $experience->links() }}

@endsection




