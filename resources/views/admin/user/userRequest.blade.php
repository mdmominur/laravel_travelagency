@extends('admin.master')

@section('content')
    <h4>All Users</h4>
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
                <td>Name</td>
                <td max-width="400">Email</td>
                <td colspan="10">Actions</td>
            </tr>
          @forelse ($users as $key => $item)
                <tr>
                    <td>{{ $users->firstItem()+$key }}</td> 
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email}}</td>
                    <td><a href="{{ route('userUpdatePost', $item->id) }}"  class="btn btn-success">Accept</a></td>
                    <td><a href="{{ route('userDelete', $item->id) }}"  class="btn btn-danger">Delete</a></td>
                </tr>
                @empty    
                    <td colspan="50">No registration available</td>
            @endforelse 
        </tbody>
    </table>
    {{ $users->links() }}
@endsection