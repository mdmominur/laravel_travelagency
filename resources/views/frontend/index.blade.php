@extends('frontend.master')
@section('title')
    Welcome to Travel Agency
@endsection

@section('header_background')
  url('{{ asset('admin/images/banner') }}/{{ $banner->bannerImg }}');
@endsection

@section('header-section')
<h1>{{ $banner->title }}</h1>
<p>{{ $banner->caption }}</p>
@endsection

@section('content')
  <!-- location section start -->
  <section class="container-fluid" id="location">
        <div class="container">
            
            <div class="row">
                @php
                    $second = 0;
                @endphp
                @foreach ($services as $item)  
                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay=".{{ $second }}s">
                        <div class="row locaion-single" >
                            <div class="col-4"><img src="{{ asset('admin/images/services').'/'.$item->serviceImg }}" alt="{{ $item->serviceImg }}">
                                <h4>{{ $item->title }}</h4>
                            </div>
                            <div class="col-8">
                                <p>{{ $item->service_pra }} </p>
                            </div>
                        </div>
                    </div>
                    @php
                        $second++;
                        if ($second == 4) {
                            $second = 0;
                        } 
                    @endphp
                @endforeach
            </div>
        </div>
    </section>
    <!-- location section End -->

    <!-- Achivements start -->
    <section class="container" id="achivements">
        <div class="row">
            <div class="col-lg-6"><img src="{{ asset('admin/images').'/'.$achivement->image }}" class="img-fluid" alt="{{ $achivement->image }}"></div>
            <div class="col-lg-6">
                <h2>{{ $achivement->title1 }}</h2>
                <h4>{{ $achivement->title2 }} </h4>
                <p>{{ $achivement->description }}</p>
                <div class="row row2">
                    <div class="col-4">
                        <h6 class="counter">{{ $achivement->opt1_value }}</h6>
                        <p>{{ $achivement->opt1 }}</p>
                    </div>
                    <div class="col-4">
                        <h6 class="counter">{{ $achivement->opt2_value }}</h6>
                        <p>{{ $achivement->opt2 }}</p>
                    </div>
                    <div class="col-4">
                        <h6 class="counter">{{ $achivement->opt3_value }}</h6>
                        <p>{{ $achivement->opt3 }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Achivements End -->

       <!-- Popular destinaiton start -->
       <section class="container-fluid" id="popular-destination">
        <div class="container">
            <h1>POPULAR DESTINATION</h1>
            <div class="row">
                    @php
                        $second = 0;
                    @endphp 
                @foreach ($PopularDestination as $item)   
                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay=".{{ $second }}s">
                        <div class="single-destination">
                            <img src="{{ asset('admin/images/destination').'/'.$item->image }}" alt="">
                            <span class="des-title">{{ $item->city }}</span>
                            <div class="destination-info">
                                <h4>{{ $item->price }}</h4>
                                <span>{{ $item->day }} days tour</span>
                                <h4>{{ substr($item->country.', '.$item->city,0,22) }}</h4>
                                <p>{{ substr($item->description, 0, 66).' ...' }}</p>
                                <a href="{{ route('singleDestination', $item->slug) }}">View more details</a>
                            </div>
                        </div>
                    </div>
                    @php
                        $second++;
                        if ($second == 4) {
                            $second = 0;
                        }
                    @endphp
                @endforeach

            </div>
        </div>
        </section>
        <!-- Popular destinaiton end -->

        <!-- tour destinaiton start -->
        <section class="container-fluid" id="tour-destination">
            <div class="container">
                <h1>Tour DESTINATION</h1>
                @php
                    $second = 0;
                @endphp 
                <div class="row">
                    @foreach ($destination as $item)    
                        <div class="col-md-4 wow fadeInUp" data-wow-delay=".{{ $second }}s">
                            <div class="single-destination">
                                <img src="{{ asset('admin/images/destination').'/'.$item->image }}">
                                <span class="des-title"></span>
                                <div class="destination-info">
                                    <h4>{{ $item->city }}</h4>
                                    <span>{{ $item->day }} days tour</span>
                                    <h4>{{ substr($item->country.', '.$item->city,0,22) }}</h4>
                                    <p>{{ substr($item->description, 0, 66).' ...' }}</p>
                                    <a href="{{ route('singleDestination', $item->slug) }}">View more details</a>
                                </div>
                            </div>
                        </div>
                        @php
                            $second++;
                            if ($second == 3) {
                                $second = 0;
                            }
                        @endphp
                    @endforeach
                </div>
                <div class="load_more">
                    <a href="{{ route('destination') }}">Load more</a>
                </div>
            </div>
        </section>
        <!-- tour destinaiton end -->

    <!-- Experience start -->
        <h1 class="exp-h1">Tourist Experience</h1>
        <section class="container-fluid" id="experience">
            <div class="container">
                <div class="row">
                    @php
                        $second = 0;
                    @endphp
                    @foreach ($tourist_exp as $item) 
                        <div class="col-lg-4  wow fadeInUp" data-wow-delay=".{{ $second }}s">
                            <div class="singleExp">
                                <p>{{ $item->description }}</p>
                                <div class="tourist-info">
                                    <span>{{ $item->role }}</span>
                                    <img src="{{ asset('admin/images/tourist').'/'.$item->image }}" alt="{{ $item->image }}">
                                </div>
                            </div>
                        </div>
                        @php
                            $second++;
                        @endphp
                    @endforeach
                </div>
            </div>
        </section>
    <!-- Experience End -->

    <!-- Our team start -->
    <section class="container" id="ourTeam">
        <h1>Our Team</h1>
        <div class="row">
            @php
                $sec = 0; 
            @endphp
            @foreach ($our_team as $item)    
                <div class="col-md-4 wow fadeInUp" data-wow-delay=".{{ $sec }}s">
                    <div class="singleTeam">
                        <img src="{{ asset('admin/images/our_team').'/'.$item->image }}" alt="">
                        <h4>{{ $item->title }}</h4>
                        <span>{{ $item->role }}</span>
                        <div class="socialLink">
                            <a href="{{ $item->facebook }}"><img src="{{ asset('frontend').'/' }}img/iconfinder_2018_social_media_popular_app_logo_facebook_3225194@2x.png" alt=""></a>
                            <a href="{{ $item->twitter }}"><img src="{{ asset('frontend').'/' }}img/iconfinder_-4@2x.png" alt=""></a>
                            <a href="{{ $item->instagram }}"><img src="{{ asset('frontend').'/' }}img/iconfinder_-2@2x.png" alt=""></a>
                        </div>
                    </div>
                </div>
                @php
                    $sec++;
                    if($sec == 0){
                        $sec = 0;
                    }
                @endphp
            @endforeach
        </div>
        <div class="load_more">
            <a href="{{ route('all_memebers') }}">View all members</a>
        </div>
    </section>
    <!-- Our team End -->
        
@endsection  


