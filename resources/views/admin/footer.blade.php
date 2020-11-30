@extends('admin.master')

@section('content')
    @if (session('Msg'))
        
    <p class="text-success">
        {{ session('Msg') }}
    </p>
    @endif
    <form method="post" action="{{ route('footerUpdatePost') }}">
        @csrf
        <input type="hidden" name="id" value="{{ $footer->id }}">
        <h4 class="header-title mb-4">CopyRight</h4>
        <div class="form-group">
            <label for="copyright">Copyright:</label>
            <textarea id="copyright" class="form-control @error('copyright') is-invalid @enderror" type="text" name="copyright"  placeholder="Enter copyright">{{ $footer->copyright }}</textarea>
            @error('copyright')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>
        <br>
        <br>
        <h4 class="header-title mb-4">Social link</h4>
        <div class="form-group col-xl-8">
            <label for="instagram">instagram:</label>
            <input id="instagram" class="form-control @error('instagram') is-invalid @enderror" type="text" name="instagram" value="{{ $footer->instagram }}" placeholder="Enter instagram link">
            @error('instagram')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>
        <div class="form-group col-xl-8">
            <label for="facebook">facebook:</label>
            <input id="facebook" class="form-control @error('facebook') is-invalid @enderror" type="text" name="facebook" value="{{ $footer->facebook }}" placeholder="Enter facebook link">
            @error('address')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>
        <div class="form-group col-xl-8">
            <label for="twitter">twitter:</label>
            <input id="twitter" class="form-control @error('twitter') is-invalid @enderror" type="text" name="twitter" value="{{ $footer->twitter }}" placeholder="Enter twitter link">
            @error('address')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>
        <div class="form-group col-xl-8">
            <label for="whatsapp">whatsapp:</label>
            <input id="whatsapp" class="form-control @error('whatsapp') is-invalid @enderror" type="text" name="whatsapp" value="{{ $footer->whatsapp }}" placeholder="Enter whatsapp link">
            @error('whatsapp')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
@section('customJs')
    <script>
         $(document).ready(function() {
            $('#copyright').summernote({
                height: 300,                 // set editor height
                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor
                focus: true,
                toolbar: [
                            ['font', ['bold', 'underline', 'clear']],
                            ['color', ['color']],
                            ['para', ['ul', 'ol', 'paragraph']],
                            ['insert', ['link']],
                            ['view', ['fullscreen', 'codeview', 'help']]
                        ]  
            });
            });
    </script>
@endsection