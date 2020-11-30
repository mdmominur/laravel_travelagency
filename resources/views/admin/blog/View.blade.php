@extends('admin.master')

@section('content')
    <h4>Your blogs</h4>
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
                <td>Author</td>
                <td>Title</td>
                <td>Created At</td>
                <td>Image</td>
                <td colspan="10">Actions</td>
            </tr>
          @forelse ($blog as $key => $item)
                <tr>
                    <td>{{ $blog->firstItem()+$key }}</td>
                    <td>{{ $item->get_user->name ?? "User not available" }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->created_at}}</td>
                    <td><img width="100" src="{{ asset('admin/images/blog').'/'.$item->image }}" alt="{{ $item->image  }}"></td>
                    <td><a href="{{ route('blogUpdate', $item->slug) }}" class="btn btn-success">Update</a></td>
                    <td><a href="{{ route('blogDelete', $item->slug) }}"  onclick="confirmation(event)" class="btn btn-danger">Delete</a></td>
                </tr>
                @empty
                    <td colspan="50">No Data available</td>
                
            @endforelse 
        </tbody>
    </table>
    {{ $blog->links() }}

@endsection




