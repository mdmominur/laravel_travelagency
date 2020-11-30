@extends('admin.master')

@section('content')
    <h4 class="header-title mb-4">Update Reason</h4>
    @if (session('Msg'))
        
    <p class="text-success">
        {{ session('Msg') }}
    </p>
    @endif
    <form method="post" action="{{ route('why_choose_usUpdatePost') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" value="{{ $why_choose_us->id }}" name="id">
        <div class="form-group col-xl-8">
            <label for="title">Title:</label>
            <input id="title" class="form-control @error('title') is-invalid @enderror" value="{{ $why_choose_us->title }}" type="text" name="title" placeholder="Enter title">
            @error('title')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>
        <div class="form-group col-xl-8">
            <label for="description">Description:</label>
            <textarea name="description" id="role" class="form-control @error('description') is-invalid @enderror" type="text" name="description" placeholder="Enter description">{{ $why_choose_us->description }}</textarea>
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
            <img  src="{{ asset('admin/images/why_choose_us').'/'.$why_choose_us->image }}" width="200" id="blah">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
