@extends('admin.master')

@section('content')
    @if (session('Msg'))
        
    <p class="text-success">
        {{ session('Msg') }}
    </p>
    @endif
    <form method="post" action="{{ route('genarel_settingUpdatePost') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $genarel_setting->id }}">
        <h4 class="header-title mb-4">Site settings</h4>
        <div class="form-group col-xl-8">
            <label for="logo">Logo:</label> <br>
            <img  src="{{ asset('admin/images').'/'.$genarel_setting->logo }}" width="200" id="blah">
            <input id="logo" class="form-control @error('logo') is-invalid @enderror" type="file" name="logo" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
            @error('logo')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>
        <div class="form-group col-xl-8">
            <label for="site_title">Site title:</label>
            <input id="site_title" class="form-control @error('site_title') is-invalid @enderror" type="text" name="site_title" value="{{ $genarel_setting->site_title }}" placeholder="Enter Banner site_title">
            @error('site_title')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>
        <br>
        <br>
        <h4 class="header-title mb-4">About</h4>
        <div class="form-group col-xl-8">
            <label for="title1">Title 1:</label>
            <input id="title1" class="form-control @error('title1') is-invalid @enderror" type="text" name="title1" value="{{ $genarel_setting->title1 }}" placeholder="Enter Banner title1">
            @error('title1')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>
        <div class="form-group col-xl-8">
            <label for="title2">Title 2:</label>
            <input id="title2" class="form-control @error('title2') is-invalid @enderror" type="text" name="title2" value="{{ $genarel_setting->title2 }}" placeholder="Enter Banner title2">
            @error('title2')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>
        <div class="form-group col-xl-8">
            <label for="description">Description:</label>
            <textarea id="description" class="form-control @error('description') is-invalid @enderror" type="text" name="description" placeholder="Enter Banner description">{{ $genarel_setting->description }}</textarea>
            @error('description')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>

        <div class="form-group col-xl-8">
            <label for="image">Image:</label>
            <input id="image" class="form-control @error('image') is-invalid @enderror" type="file" name="image" onchange="document.getElementById('blah2').src = window.URL.createObjectURL(this.files[0])">
            @error('image')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
            <img  src="{{ asset('admin/images').'/'.$genarel_setting->image }}" width="200" id="blah2">
        </div>
        <br>
        <br>
        <h4 class="header-title mb-4">Contact</h4>
        <div class="form-group col-xl-8">
            <label for="address">Address:</label>
            <input id="address" class="form-control @error('address') is-invalid @enderror" type="text" name="address" value="{{ $genarel_setting->address }}" placeholder="Enter Banner address">
            @error('address')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>
        <div class="form-group col-xl-8">
            <label for="email">Email:</label>
            <input id="email" class="form-control @error('email') is-invalid @enderror" type="text" name="email" value="{{ $genarel_setting->email }}" placeholder="Enter Banner email">
            @error('email')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>
        <div class="form-group col-xl-8">
            <label for="phone">Phone:</label>
            <input id="phone" class="form-control @error('phone') is-invalid @enderror" type="text" name="phone" value="{{ $genarel_setting->phone }}" placeholder="Enter Banner phone">
            @error('phone')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection