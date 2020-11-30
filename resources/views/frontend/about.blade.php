@extends('frontend.master')
@section('title')
    About us
@endsection
@section('body_class')
    class="about"
@endsection
@section('header_background')
  url('{{ asset('admin/images/banner') }}/{{ $banner->bannerImg }}');
@endsection

@section('header-section')
<h1>{{ $banner->title }}</h1>
<p>{{ $banner->caption }}</p>
@endsection

@section('content')
            <!-- Achivements start -->
    <section class="container" id="achivements">
        <div class="row">
            <div class="col-lg-6 wow fadeInLeft"><img src="{{ asset('admin/images').'/'.$genarel_setting->image }}" class="img-fluid" alt="{{ $genarel_setting->image }}"></div>
            <div class="col-lg-6  wow fadeInRight">
                <h4>{{ $genarel_setting->title1 }}</h4>
                <h2>{{ $genarel_setting->title2 }}</h2>
                <p>{{ $genarel_setting->description }}</p>
            </div>
        </div>
    </section>
    <!-- Achivements End -->

    <h1 class="wcu">why chose us?</h1>
    <!-- why chose us start -->
    <section class="container-fluid" id="why-chose-us">
        <div class="container">
            <div class="row">
                @php
                    $sec = 0;
                @endphp
                @foreach ($why_choose_us as $item)    
                <div class="col-md-4 wow fadeInUp" data-wow-delay=".{{ $sec }}s">
                    <div class="reason-holder">
                        <img src="{{ asset('admin/images/why_choose_us').'/'.$item->image }}" alt="">
                        <h4>{{ $item->title }}</h4>
                        <p>{{ $item->description }}</p>
                    </div>
                </div>
                @php
                    $sec++;
                @endphp
                @endforeach
            </div>
        </div>
    </section>
    <!-- why chose us end -->

    <!-- newsletter start -->
    <section class="container-fluid" id="newsletter">
        <div class="container">
            <div class="row">
                <div class="offset-md-6"></div>
                <div class="col-md-6 wow zoomInRight">
                    @if (session('newslatterMsg'))
                       <p class="text-light">{{ session('newslatterMsg') }}</p>
                    @endif
                    <h1>Subscribe
                        for our Newsletter</h1>
                    <p>Lorem ipsum dolor amet, consectetur adipiscing,
                        sed do eiusmod tempor incididunt ut labore et
                          enim  minim veniam, quis nostrud exercitation </p>
                    <form action="{{ route('newsLetter') }}" method="post">
                        @csrf
                        <input type="text" name="email" placeholder="Enter you email address">
                        <button>Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- newsletter end -->
@endsection
