@extends('admin.master')

@section('content')
    <h4 class="header-title mb-4">Post a blog</h4>
    @if (session('Msg'))
        
    <p class="text-success">
        {{ session('Msg') }}
    </p>
    @endif
    <form method="post" action="{{ route('blogPost') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group col-xl-8">
            <label for="title">Title:</label>
            <input id="title" class="form-control @error('title') is-invalid @enderror" type="text" name="title" placeholder="Enter destinaion title">
            @error('title')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>
        <div class="form-group col-xl-8">
            <label for="image">Image:</label>
            <input id="image" class="form-control @error('image') is-invalid @enderror" type="file" name="image" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
            @error('image')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
            <img  src="" width="400" id="blah">
        </div>
        <div class="form-group col-xl-8">
            <label for="post_details">Post Details:</label>
            <textarea id="post_details" class="form-control @error('post_details') is-invalid @enderror" type="text" name="post_details" style="height: 200px"></textarea>
            @error('post_details')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Post</button>
    </form>
@endsection

