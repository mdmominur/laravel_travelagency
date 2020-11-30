@extends('admin.master')

@section('content')
    <h4 class="header-title mb-4">Update Service</h4>
    @if (session('Msg'))
        
    <p class="text-success">
        {{ session('Msg') }}
    </p>
    @endif
    <form method="post" action="{{ route('serviceUpdatePost') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" value="{{ $singleService->id }}" name="id">
        <div class="form-group col-xl-8">
            <label for="title">Service title:</label>
            <input id="title" class="form-control @error('title') is-invalid @enderror" type="text" value="{{ $singleService->title }}" name="title" placeholder="Enter service title">
            @error('title')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>
        <div class="form-group col-xl-8">
            <label for="service_pra">Service pragraph:</label>
            <textarea id="service_pra" class="form-control @error('service_pra') is-invalid @enderror" type="text" name="service_pra"  placeholder="Enter service pragraph">{{ $singleService->service_pra }}</textarea>
            @error('service_pra')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>
    
        <div class="form-group col-xl-8">
            <label for="serviceImg">Service Images:</label>
            <input id="serviceImg" class="form-control @error('serviceImg') is-invalid @enderror" type="file" name="serviceImg" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
            @error('serviceImg')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
            <img style="background: #00ACB2; color:#fff" src="{{ asset('admin/images/services').'/'.$singleService->serviceImg }}" width="200" id="blah" alt="insert image">
        </div>
        
        <button type="submit" class="btn btn-primary">Update Service</button>
    </form>
@endsection