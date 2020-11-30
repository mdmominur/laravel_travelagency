
@extends('frontend.master')
@section('title')
 Contact us   
@endsection
@section('body_class')
    class="contact"
@endsection
@section('header_background')
  url('{{ asset('admin/images/banner') }}/{{ $banner->bannerImg }}');
@endsection

@section('header-section')
<h1>{{ $banner->title }}</h1>
<p>{{ $banner->caption }}</p>
@endsection

@section('content')
    <!-- .contact form start -->
    <div class="container" id="contact">
        <div class="row">
            <div class="col-md-8 wow zoomInLeft">
                @if (session('msg'))
                   <p class="text-success">{{ session('msg') }}</p> 
                @endif
                @error('first_name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                @error('last_name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                @error('message')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <br>
                <br>
                <form action="{{ route('messagePost') }}" method="post">
                    @csrf
                    <div class="name">
                        <input type="text" name="first_name" class="@error('first_name') is-invalid @enderror" placeholder="Enater first name">
                        <input type="text" name="last_name" class="@error('last_name') is-invalid @enderror" placeholder="Enater last name">
                    </div>
                    <input type="text" name="email" class="@error('email') is-invalid @enderror" placeholder="Enater email">
                    <textarea name="message" class="@error('message') is-invalid @enderror" id="" cols="30" rows="10" placeholder="Enater your message"></textarea>
                    <input type="submit" value="send message">
                </form>
            </div>
            <div class="col-md-4 contact-info wow zoomInRight">
                <h2>Contact info</h2>
                <h4>Address:</h4>
                <p>{{ $genarel_setting->address }}</p>
                <h4>Call us:</h4>
                <p>{{ $genarel_setting->phone }}</p>
                <h4>Email us:</h4>
                <p>{{ $genarel_setting->email }}</p>
            </div>
        </div>    
    </div>
    <!-- .contact form end -->
    <!-- Map start -->
    <div class="container-fluid wow fadeInUp" id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1825.3683272887845!2d90.40026705666862!3d23.792390266555003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c712262d9c93%3A0xd930c0d259161067!2sTravel%20agency!5e0!3m2!1sen!2sbd!4v1598079561197!5m2!1sen!2sbd" frameborder="0" style="border:0;" allowfullscreen="true" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <!-- Map end -->

    <!-- newsletter start -->
    <section class="container-fluid" id="newsletter">
        <div class="container">
            <div class="row">
                <div class="offset-md-6"></div>
                <div class="col-md-6 wow zoomInRight">
                    @if (session('newslatterMsg'))
                        <p class="text-dark">{{ session('newslatterMsg') }}</p>
                    @endif
                    <h1>Subscribe
                        for our Newsletter</h1>
                    <p>Lorem ipsum dolor amet, consectetur adipiscing,
                        sed do eiusmod tempor incididunt ut labore et
                          enim  minim veniam, quis nostrud exercitation </p>
                    <form action="{{ route('newsLetter') }}" method="post">
                        @csrf
                        <input type="text" name="email" placeholder="Enter you email address">
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- newsletter end -->
@endsection
