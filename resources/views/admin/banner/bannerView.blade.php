@extends('admin.master')

@section('content')
    <h4>All Banners</h4>
    @if (session('Msg'))
        
    <p class="text-success">
        {{ session('Msg') }}
    </p>
    @endif
    <table class="table table-light table-bordered">
        <tbody>
            <tr>
                <td>Sl.</td>
                <td>Page</td>
                <td>Title</td>
                <td>Caption</td>
                <td>Image</td>
                <td>Actions</td>
            </tr>
          @forelse ($banners as $key => $banner)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $banner->getPage->page_name }}</td>
                    <td>{{ $banner->title }}</td>
                    <td>{{ $banner->caption }}</td>
                    <td><img width="200" src="{{ asset('admin/images/banner').'/'.$banner->bannerImg }}" alt="{{ $banner->bannerImg  }}"></td>
                    <td><a href="{{ route('bannerUpdate', $banner->id) }}" class="btn btn-success">Update</a></td>
                </tr>
                @empty
                <td colspan="50">No data available</td>
            @endforelse 
        </tbody>
    </table>
@endsection