
@extends('frontend.master')
@section('title')
{{ $singleDestination->city }}, {{ $singleDestination->country }}
@endsection
@section('header_background')
  url('{{ asset('admin/images/banner') }}/{{ $banner->bannerImg }}');
@endsection

@section('header-section')
<h1>{{ $banner->title }}</h1>
<p>{{ $banner->caption }}</p>
@endsection

@section('content')
        <!-- Single destination start -->
        <div class="container" id="singleDestination">
            <div class="row basic_info">
                <div class="col-lg-6">
                    <img src="{{asset('admin/images/destination').'/'.$singleDestination->image }}" class=" wow fadeInUp" alt="">
                </div>
                <div class="col-lg-6 details-info  wow fadeInUp" data-wow-delay=".1s">
                    <h4>Title:</h4>
                    <p>{{ $singleDestination->title }}</p>
                    <h4>Description:</h4>
                    <p>{{ $singleDestination->description}} </p>
                    <h4>Pricing:</h4>
                    <p>{{ $singleDestination->price }}</p>
                    <h4>Location:</h4>
                    <p>{{ $singleDestination->city }}, {{ $singleDestination->country }}</p>
                    <h4>Day:</h4>
                    <p>{{ $singleDestination->day }} days tour</p>
                        
                </div>
                
            </div>
        </div>
        <!-- Single destination end -->

        <!-- Tour details start -->
        <div class="container wow fadeInUp" id="tour_details">
            <h1>Tour details</h1>
            {!! $singleDestination->tour_details !!}
            <div class="for_more_contact">
                <span class="for_more">For more:</span> <a href="#" class="contactUs2">Contact Us</a>
            </div>
        </div>
        
        <!-- Tour details End -->

        <!-- related tours -->
        @if($count > 1 )
        <div class="container" id="related_tour">
            <div class="container">
                <h1>Related destination</h1>
                <div class="row">
                    @php
                        $sec = 0; 
                    @endphp
                    @foreach ($reletedDestination as $item)
                        @if ($item->id != $singleDestination->id)
                        <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay=".{{ $sec }}s">
                            <div class="single-destination">
                                <img src="{{ asset('admin/images/destination').'/'.$item->image }}" alt="{{ $item->image }}">
                                <span class="des-title">{{ $item->city }}</span>
                                <div class="destination-info">
                                    <h4>{{ $item->price }}</h4>
                                    <span>{{ $item->day }} days tour</span>
                                    <h4>{{ substr($item->country.', '.$item->city,0,21) }}</h4>
                                    <p> {{ substr($item->description, 0, 69).' ...'  }}</p>
                                    <a href="{{ route('singleDestination', $item->slug) }}">View more details</a>
                                </div>
                            </div>
                        </div>
                        @php
                        $sec++;    
                        @endphp
                        @endif
                    @endforeach
                    
                </div>
            </div>
        </div>
        @endif
        <!-- related tours -->
@endsection