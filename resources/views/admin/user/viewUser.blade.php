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
                <td>Image</td>
                <td colspan="10">Actions</td>
            </tr>
          @forelse ($users as $key => $item)
            @if ($item->id != $main_user->id)
                <tr>
                    <td>{{ $users->firstItem()+$key }}</td> 
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email}}</td>
                    <td><img width="100" src="{{ asset('admin/images/user').'/'.$item->image }}" alt="{{ $item->image  }}"></td>
                    <td><a href="{{ route('userDelete', $item->id) }}" class="btn btn-danger">Remove</a></td>
                </tr>
            @endif
                @empty    
                    <td colspan="50">No Data Available</td>
            @endforelse 
        </tbody>
    </table>
    {{ $users->links() }}
@endsection