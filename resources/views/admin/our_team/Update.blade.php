@extends('admin.master')

@section('content')
    <h4 class="header-title mb-4">Update Team Member</h4>
    @if (session('Msg'))
        
    <p class="text-success">
        {{ session('Msg') }}
    </p>
    @endif
    <form method="post" action="{{ route('our_teamUpdatePost') }}" enctype="multipart/form-data">
        <input type="hidden" name="id" value="{{ $our_team->id }}">
        @csrf
        <div class="form-group col-xl-8">
            <label for="title">Name:</label>
            <input id="title" class="form-control @error('title') is-invalid @enderror" value="{{ $our_team->title }}" type="text" name="title" placeholder="Enter Name">
            @error('title')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>
        <div class="form-group col-xl-8">
            <label for="role">Role:</label>
            <input id="role" class="form-control @error('role') is-invalid @enderror" value="{{ $our_team->role }}" type="text" name="role" placeholder="Enter role">
            @error('role')
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
            <img  src="{{ asset('admin/images/our_team').'/'.$our_team->image }}" width="200" id="blah">
        </div>
        <h4>Social links</h4>
        <div class="form-group col-xl-8">
            <label for="facebook">Facebook:</label>
            <input id="facebook" class="form-control @error('facebook') is-invalid @enderror" value="{{ $our_team->facebook }}" type="text" name="facebook" placeholder="Enter facebook profile link">
            @error('facebook')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>
        <div class="form-group col-xl-8">
            <label for="twitter">Twitter:</label>
            <input id="twitter" class="form-control @error('twitter') is-invalid @enderror" value="{{ $our_team->twitter }}" type="text" name="twitter" placeholder="Enter Twitter profile link">
            @error('twitter')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>
        <div class="form-group col-xl-8">
            <label for="instagram">Instagram:</label>
            <input id="instagram" class="form-control @error('instagram') is-invalid @enderror" value="{{ $our_team->instagram }}" type="text" name="instagram" placeholder="Enter Instagram profile link">
            @error('instagram')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>
        <div class="form-group col-xl-8">
            <label for="mark">Mark for homepage:</label>
            <input id="mark" class=" @error('mark') is-invalid @enderror" @if($our_team->mark == "on") checked @endif type="checkbox" name="mark" >
            @error('mark')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
