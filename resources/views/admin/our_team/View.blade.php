@extends('admin.master')

@section('content')
    <h4>All Members</h4>
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
                <td>Name</td>
                <td>Role</td>
                <td>Facebook</td>
                <td>Twitter</td>
                <td>Instragram</td>
                <td>Mark</td>
                <td>Image</td>
                <td colspan="10">Actions</td>
            </tr>
          @forelse ($our_team as $key => $item)
                <tr>
                    <td>{{ $our_team->firstItem()+$key }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->role}}</td>
                    <td>{{ $item->facebook}}</td>
                    <td>{{ $item->twitter}}</td>
                    <td>{{ $item->instagram}}</td>
                    <td>{{ $item->mark}}</td>
                    <td><img width="100" src="{{ asset('admin/images/our_team').'/'.$item->image }}" alt="{{ $item->image  }}"></td>
                    <td><a href="{{ route('our_teamUpdate', $item->slug) }}" class="btn btn-success">Update</a></td>
                    <td><a href="{{ route('our_teamDelete', $item->slug) }}"  onclick="confirmation(event)" class="btn btn-danger">Delete</a></td>
                </tr>
                @empty
                    <td colspan="50">No Data available</td>
                
            @endforelse 
        </tbody>
    </table>
    {{ $our_team->links() }}

@endsection




