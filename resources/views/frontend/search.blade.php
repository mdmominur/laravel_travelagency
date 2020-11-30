
@extends('frontend.master')
@section('title')
    {{ $search }}
@endsection
@section('header_background')
  url('{{ asset('admin/images/banner') }}/{{ $banner->bannerImg }}');
@endsection

@section('header-section')
<h1>{{ $banner->title }}</h1>
<p>{{ $banner->caption }}</p>
@endsection

@section('content')
        <!-- tour destinaiton start -->
        <section class="container-fluid" id="tour-destination">
            <div class="container">
                
                @if ($counter != 0)
                    <p style="font-size:20px">Search Result for: <span style="font-weight:bold">{{ $search }}</span></p>
                @else
                    <p style="font-size:20px">No result found for: <span style="font-weight:bold">{{ $search }}</span></p>
                @endif

                <div class="row">
                    @php
                        $second = 0;
                    @endphp
                    @foreach ($destination as $item)    
                    <div class="col-md-4 wow fadeInUp" data-wow-delay=".{{ $second }}s">
                        <div class="single-destination">
                            <img src="{{ asset('admin/images/destination').'/'.$item->image }}" alt="{{ $item->image }}">
                            <span class="des-title">{{ $item->city }}</span>
                            <div class="destination-info">
                                <h4>{{ $item->price }}</h4>
                                <span>{{ $item->day }} days tour</span>
                                <h4>{{ substr($item->country.', '.$item->city,0,21) }}</h4>
                                <p>{{ substr($item->description, 0, 69).' ...'  }}</p>
                                <a href="{{ route('singleDestination', $item->slug) }}">View more details</a>
                            </div>
                        </div>
                    </div>

                    @php
                     $second++;
                     if($second == 3){
                         $second = 0;
                     }   
                    @endphp
                    @endforeach
                </div>
                <div class="pagination-holder">
                    {{ $destination->links() }}
                </div>
            </div>
        </section>
        <!-- tour destinaiton end -->
@endsection