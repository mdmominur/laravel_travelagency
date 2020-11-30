@php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use Auth;
@endphp

@extends('frontend.master')
@section('title')
{{ $blog->title }}
@endsection
@section('header_background')
  url('{{ asset('admin/images/banner') }}/{{ $banner->bannerImg }}');
@endsection

@section('header-section')
<h1>{{ $banner->title }}</h1>
<p>{{ $banner->caption }}</p>
@endsection

@section('content')
    <style>
        .is-invalid{border: 1px solid red}
    </style>
            <!-- post section start -->
    <section class="container" id="post">
        <h1 class="wow fadeInUp">{{ $blog->title }}</h1>
        <span class="wow fadeInUp">{{ date_format($blog->created_at, 'M d, yy') }} at {{ $blog->created_at->format('g:ia') }}</span>
        <br>
        <br>
        <div class="img-holder" style="text-align: center">
            <img style="width: 100%" src="{{ asset('admin/images/blog').'/'.$blog->image }}" alt="">
        </div>
        <br>
        <p class="wow fadeInUp">{{ $blog->post_details }}</p>
        <br>
        <div class="next-prev-post" id="next_prev">
            @if ($previous_post != [])    
                <div class="row prev wow fadeInUp">
                    <div class="col-4 col-md-6" style="padding: 0">
                        <img src="{{ asset('admin/images/blog').'/'.$previous_post->image?? ""  }}" alt="">
                    </div>
                    <div class="col-8 col-md-6" style="padding: 0">
                        <a href="{{ route('singleBlog', $previous_post->slug) ?? '#'}}">previous</a>
                        <h4>{{ $previous_post->title ?? ""}}</h4>
                    </div>
                </div>
            @endif
                @if ($next_post != [])    
                    <div class="row next wow fadeInUp" data-wow-delay=".1s">
                        <div class="col-8 col-md-6" style="padding: 0">
                            <a href="{{ route('singleBlog', $next_post->slug) ?? '#'}}">next</a>
                            <h4>{{ $next_post->title ?? "" }}</h4>
                        </div>
                        <div class="col-4 col-md-6" style="padding: 0">
                            <img src="{{ asset('admin/images/blog').'/'.$next_post->image ?? ""  }}" alt="">
                        </div>
                    </div>
                @endif
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="comment-section">
                        @if ($comments->count() != 0)
                            <span>{{ $comments->count() }} comments</span>
                        @endif
                        @forelse ($comments as $item)
                            <div class="row comments wow bounceInUp" id="{{ $item->id }}">
                                <div class="col-2">
                                    <img src="{{ asset('admin/images/user/avatar.png') }}" alt="">
                                </div>
                                <div class="col-10">
                                    <p>{{ $item->message }}</p>
                                    <h4><strong style="font-weight: bolder; text-transform:capitalize">{{ $item->name }}</strong> <span>{{ $item->created_at->format('M d, yy') }} at {{ $item->created_at->format('g:ia') }}</span></h4>
                                    @auth    
                                        @if (Auth::User()->admin_confirmation == 1)
                                            <a class="text-danger" href="{{ route('commentDelete', $item->id) }}">Delete</a>
                                        @endif
                                    @endauth
                                </div>
                            </div>
                        @empty
                            
                        @endforelse

                        <div class="comment-box wow zoomInUp">
                            <h2>Leave a comment</h2>
                            <div class="text-danger">
                                @error('name')
                                    <br>*{{ $message }}
                                @enderror
                                @error('email')
                                    <br>*{{ $message }}
                                @enderror
                                @error('message')
                                    <br>*{{ $message }}
                                @enderror
                            </div>
                            <form method="post" action="{{ route('blogComment') }}">
                                @csrf
                                <input type="hidden" name="blogSlug" value="{{ $blog->slug }}">
                                <div class="names-mail">
                                    <input type="text" class="@error('name') is-invalid @enderror" placeholder="Enter you name" name="name">
                                    <input type="email" class="@error('email') is-invalid @enderror" placeholder="Enter you email" name="email">
                                </div>
                                <textarea name="message" class="@error('message') is-invalid @enderror" id="" cols="30" rows="10" placeholder="Enter a message"></textarea>
                                <input type="submit" value="submit">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="newsletter-mini wow fadeInUp">
                        @if (session('newslatterMsg'))
                            <p class="text-light">{{ session('newslatterMsg') }}</p>
                        @endif
                        <h4>Subscribe for our newsletter</h4>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta perferendis exercitationem quibusdam, fugit dolorum ea laudantium quia voluptas excepturi labore.</p>
                        <form action="{{ route('newsLetter') }}" method="post">
                            @csrf
                            <input type="text" name="email" placeholder="Enter Email Adress">
                            <input type="submit" value="subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- post section end -->
@endsection