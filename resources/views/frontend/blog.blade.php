@extends('frontend.master')
@section('title')
    Blogs
@endsection
@section('body_class')
    class="blog"
@endsection
@section('header_background')
  url('{{ asset('admin/images/banner') }}/{{ $banner->bannerImg }}');
@endsection

@section('header-section')
<h1>{{ $banner->title }}</h1>
<p>{{ $banner->caption }}</p>
@endsection

@section('content')

   <!-- blog start -->
   <div class="container" id="blog">
    <div class="row">
        @php
            $sec = 0;
        @endphp
        @foreach ($blog as $item)
            
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".{{ $sec }}s">
            <div class="single-block">
                <img src="{{ asset('admin/images/blog').'/'.$item->image }}" alt="">
                <h4><a href="{{ route('singleBlog', $item->slug) }}">{{ $item->title }}</a></h4>
                <p class="date-author">{{ date_format($item->created_at , 'M d, yy') }} by <span>{{ $item->get_user->name ?? 'User name not available'}}</span></p>
                <p>{{ substr($item->post_details, 0, 168).'...' }}<a href="{{ route('singleBlog', $item->slug) }}">see more</a></p>
                
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
        {{ $blog->links() }}
    </div>
</div>
<!-- blog end -->
@endsection
