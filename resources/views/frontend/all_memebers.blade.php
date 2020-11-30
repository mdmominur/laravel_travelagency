
@extends('frontend.master')
@section('title')
    Our team members
@endsection
@section('header_background')
  url('{{ asset('admin/images/banner') }}/{{ $banner->bannerImg }}');
@endsection

@section('header-section')
<h1>{{ $banner->title }}</h1>
<p>{{ $banner->caption }}</p>
@endsection

@section('content')
    <section class="container main_team_page" id="ourTeam">
        <h1>Our Team</h1>
        <div class="row">
            @php
                $sec = 0;
            @endphp
            @foreach ($our_team as $item)    
                <div class="col-md-4 wow fadeInUp" data-wow-delay = ".{{ $sec }}s">
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
                    if($sec == 3){
                        $sec = 0;
                    }
                @endphp
            @endforeach
        </div>
        <div class="pagination-holder">
            {{ $our_team->links() }}
        </div>
    </section>
@endsection