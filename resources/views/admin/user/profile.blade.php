@extends('admin.master')

@section('content')
    <h4 class="header-title mb-4">My Account</h4>
    @if (session('Msg'))
        
    <p class="text-success">
        {{ session('Msg') }}
    </p>
    @endif
    <form method="post" action="{{ route('user_profile_update') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <h5>Role:</h5>
            <p class="text-muted">
                @if ($my_profile->role == 1)
                    Admin
                @else
                    Moderator
                @endif
            </p>
        </div>
        <div class="form-group col-xl-8">
            <label for="image">Change Image:</label><br>
            <img  src="{{ asset('admin/images/user').'/'.$my_profile->image }}" width="200" id="blah">
            <input id="image" class="form-control @error('image') is-invalid @enderror" type="file" name="image" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
            @error('image')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>
      
        <div class="form-group col-xl-8">
            <label for="name">Name:</label>
            <input id="name" class="form-control @error('name') is-invalid @enderror" type="text" value="{{ $my_profile->name }}" name="name" placeholder="Enter Name">
            @error('name')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
