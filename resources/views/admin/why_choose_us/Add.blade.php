@extends('admin.master')

@section('content')
    <h4 class="header-title mb-4">Add Reason</h4>
    @if (session('Msg'))
        
    <p class="text-success">
        {{ session('Msg') }}
    </p>
    @endif
    <form method="post" action="{{ route('why_choose_usPost') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group col-xl-8">
            <label for="title">Title:</label>
            <input id="title" class="form-control @error('title') is-invalid @enderror" type="text" name="title" placeholder="Enter title">
            @error('title')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>
        <div class="form-group col-xl-8">
            <label for="description">Description:</label>
            <textarea name="description" id="role" class="form-control @error('description') is-invalid @enderror" type="text" name="description" placeholder="Enter description"></textarea>
            @error('description')
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
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
@endsection
