@extends('admin.master')

@section('content')
    <h4 class="header-title mb-4">Add Banner</h4>
    @if (session('Msg'))
        
    <p class="text-success">
        {{ session('Msg') }}
    </p>
    @endif
    <form method="post" action="{{ route('bannerPost') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group col-xl-8">
            <label for="title">Banner title:</label>
            <input id="title" class="form-control @error('title') is-invalid @enderror" type="text" name="title" placeholder="Enter Banner title">
            @error('title')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>
        <div class="form-group col-xl-8">
            <label for="caption">Banner caption:</label>
            <input id="caption" class="form-control @error('caption') is-invalid @enderror" type="text" name="caption"  placeholder="Enter Banner caption">
            @error('caption')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>
        <div class="form-group col-xl-8">
            <label for="bannerPage">Select page:</label>
            <select name="bannerPage" id="bannerPage"  class="form-control @error('bannerPage') is-invalid @enderror">
                <option value="">Select Page</option>
                @foreach ($pages as $page)    
                <option value="{{ $page->id }}">{{ $page->page_name }}</option>
                @endforeach
            </select>
            @error('bannerPage')
                <p class="text-danger">
                    {{ $message }}
                </p>
            @enderror
        </div>
        <div class="form-group col-xl-8">
            <label for="bannerImg">Banner caption:</label>
            <input id="bannerImg" class="form-control @error('bannerImg') is-invalid @enderror" type="file" name="bannerImg">
            @error('bannerImg')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Add Banner</button>
    </form>
@endsection