@extends('admin.master')

@section('content')
    <h4>All Members</h4>
    <p>Last 3 item will appear on web site</p>
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
                <td>Description</td>
                <td>Image</td>
                <td colspan="10">Actions</td>
            </tr>
          @forelse ($why_choose_us as $key => $item)
                <tr>
                    <td>{{ $why_choose_us->firstItem()+$key }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->description}}</td>
                    <td><img width="100" src="{{ asset('admin/images/why_choose_us').'/'.$item->image }}" alt="{{ $item->image  }}"></td>
                    <td><a href="{{ route('why_choose_usUpdate', $item->slug) }}" class="btn btn-success">Update</a></td>
                    <td><a href="{{ route('why_choose_usDelete', $item->slug) }}"  onclick="confirmation(event)" class="btn btn-danger">Delete</a></td>
                </tr>
                @empty
                    <td colspan="50">No Data available</td>
                
            @endforelse 
        </tbody>
    </table>
    {{ $why_choose_us->links() }}

@endsection




