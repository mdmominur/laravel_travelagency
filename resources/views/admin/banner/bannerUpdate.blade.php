@extends('admin.master')

@section('content')
    <h4 class="header-title mb-4">Update Banner</h4>
    
    @if (session('Msg'))
        
    <p class="text-success">
        {{ session('Msg') }}
    </p>
    @endif
    <form method="post" action="{{ route('bannerUpdatePost') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $singleBanner->id }}">
        <div class="form-group col-xl-8">
            <label for="title">Banner title:</label>
            <input id="title" class="form-control @error('title') is-invalid @enderror" type="text" name="title" value="{{ $singleBanner->title }}" placeholder="Enter Banner title">
            @error('title')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>
        <div class="form-group col-xl-8">
            <label for="caption">Banner caption:</label>
            <input id="caption" class="form-control @error('caption') is-invalid @enderror" type="text" name="caption" value="{{ $singleBanner->caption }}"  placeholder="Enter Banner caption">
            @error('caption')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>
        <div class="form-group col-xl-8">
            <label for="bannerImg">Change banner image:</label>
            <img src="{{ asset('admin/images/banner').'/'.$singleBanner->bannerImg }}" width="200" id="blah" alt="insert image">
            <input id="bannerImg" class="form-control @error('bannerImg') is-invalid @enderror" type="file" name="bannerImg" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
            @error('bannerImg')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Update Banner</button>
    </form>
@endsection