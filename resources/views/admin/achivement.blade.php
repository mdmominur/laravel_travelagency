@extends('admin.master')

@section('content')
    <h4 class="header-title mb-4">Update Achivement</h4>
    @if (session('Msg'))
        
    <p class="text-success">
        {{ session('Msg') }}
    </p>
    @endif
    <form method="post" action="{{ route('achivementUpdatePost') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $achivement->id }}">
        <div class="form-group col-xl-8">
            <label for="title1">Title 1:</label>
            <input id="title1" class="form-control @error('title1') is-invalid @enderror" type="text" name="title1" value="{{ $achivement->title1 }}" placeholder="Enter Banner title1">
            @error('title1')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>
        <div class="form-group col-xl-8">
            <label for="title2">Title 2:</label>
            <input id="title2" class="form-control @error('title2') is-invalid @enderror" type="text" name="title2" value="{{ $achivement->title2 }}" placeholder="Enter Banner title2">
            @error('title2')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>
        <div class="form-group col-xl-8">
            <label for="description">Description:</label>
            <textarea id="description" class="form-control @error('description') is-invalid @enderror" type="text" name="description" placeholder="Enter Banner description">{{ $achivement->description }}</textarea>
            @error('description')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>
        <div class="col-xl-8">
            <div class="row">
                <div class="col">
                    <label for="opt1">Option 1:</label>
                  <input type="text" id="opt1" name="opt1" value="{{ $achivement->opt1 }}" class="form-control @error('opt1') is-invalid @enderror" placeholder="Option 1">
                  @error('opt1')
                  <p class="text-danger">
                      {{ $message }}
                  </p>
                  @enderror
                </div>
                <div class="col">
                    <label for="opt1_value">Value:</label>
                  <input type="text" name="opt1_value" value="{{ $achivement->opt1_value }}" id="opt1_value" class="form-control @error('opt1_value') is-invalid @enderror" placeholder="Value">
                  @error('opt1_value')
                  <p class="text-danger">
                      {{ $message }}
                  </p>
                  @enderror
                </div>
              </div>
        </div>
        <div class="col-xl-8">
            <div class="row">
                <div class="col">
                    <label for="opt2">Option 2:</label>
                  <input type="text" id="opt2" name="opt2" value="{{ $achivement->opt2 }}" class="form-control @error('opt2') is-invalid @enderror" placeholder="Option 2">
                  @error('opt2')
                  <p class="text-danger">
                      {{ $message }}
                  </p>
                  @enderror
                </div>
                <div class="col">
                    <label for="opt2_value">Value:</label>
                  <input type="text" name="opt2_value" value="{{ $achivement->opt2_value }}" id="opt2_value" class="form-control @error('opt2_value') is-invalid @enderror" placeholder="Value">
                  @error('opt2_value')
                  <p class="text-danger">
                      {{ $message }}
                  </p>
                  @enderror
                </div>
              </div>
        </div>
        <div class="col-xl-8">
            <div class="row">
                <div class="col">
                    <label for="opt3">Option 3:</label>
                  <input type="text" id="opt3" name="opt3" value="{{ $achivement->opt3 }}" class="form-control @error('opt3') is-invalid @enderror" placeholder="Option 3">
                  @error('opt3')
                  <p class="text-danger">
                      {{ $message }}
                  </p>
                  @enderror
                </div>
                <div class="col">
                    <label for="opt3_value">Value:</label>
                  <input type="text" name="opt3_value" value="{{ $achivement->opt3_value }}" id="opt3_value" class="form-control @error('opt3_value') is-invalid @enderror" placeholder="Value">
                  @error('opt3_value')
                  <p class="text-danger">
                      {{ $message }}
                  </p>
                  @enderror
                </div>
              </div>
        </div>
        
        <div class="form-group col-xl-8">
            <label for="image">Image:</label>
            <input id="image" class="form-control @error('image') is-invalid @enderror" type="file" name="image" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
            @error('image')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
            <img  src="{{ asset('admin/images').'/'.$achivement->image }}" width="200" id="blah">
        </div>

        
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection