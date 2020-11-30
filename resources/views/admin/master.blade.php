@php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\blogComments;
use App\message;

$comments2 = blogComments::orderBy('created_at', 'desc')->limit(10)->get();
$message = message::orderBy('created_at', 'desc')->limit(10)->get();

@endphp
<!doctype html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/highdmin/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Apr 2019 06:51:24 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Highdmin - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('admin') }}/assets/images/favicon.ico">

        <!-- include summernote css -->
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

        <!-- App css -->
        <link href="{{ asset('admin') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin') }}/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin') }}/assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin') }}/assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="{{ asset('admin') }}/assets/js/modernizr.min.js"></script>

        

    

    </head>


    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">

                <div class="slimscroll-menu" id="remove-scroll">


                    <!-- User box -->
                    <div class="user-box">
                        <div class="user-img">
                            <img src="{{ asset('admin/images/user').'/'.auth()->user()->image }}" alt="user-img" style="height:60px" title="Mat Helme" class="rounded-circle img-fluid">
                        </div>
                        <h5><a href="#">{{ auth()->user()->name }}</a> </h5>
                        <p class="text-muted">
                            @if (auth()->user()->role == 1)
                                Admin
                            @else
                                Moderator
                            @endif
                        </p>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <!--<li class="menu-title">Navigation</li>-->

                            <li>
                                <a href="{{ url('/home') }}">
                                    <i class="fi-air-play"></i> <span> Dashboard </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/') }}" target="_blank">
                                    <i class="fi-air-play"></i> <span> Visit the website </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('subscriber') }}">
                                    <i class="fi-air-play"></i> <span> News Letter</span>
                                </a>
                            </li>
                            @if (Auth::user()->role == 1) 
                                <li>
                                    <a href="javascript: void(0);"><i class="fi-layers"></i>
                                    @php
                                        $count = User::where('admin_confirmation', 0)->count();
                                    @endphp
                                    @if ($count > 0)    
                                        <span class="badge badge-danger badge-pill float-right">
                                            {{ $count }}
                                        </span>
                                    @else
                                    <span class="menu-arrow"></span>
                                    @endif    
                                    <span> User </span> </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="{{ route('userView') }}">All users</a></li>
                                        <li><a href="{{ route('userUpdate') }}">User Request
                                            @if ($count > 0)    
                                            <span class="badge badge-danger badge-pill float-right">
                                                {{ $count }}
                                            </span>
                                        @endif  
                                        </a>
                                            
                                        </li>
                                    </ul>
                                </li>
                            @endif

                            <li>
                                <a href="javascript: void(0);"><i class="fi-layers"></i> <span> Banner </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{ route('addBanner') }}">Add banner</a></li>
                                    <li><a href="{{ route('bannerView') }}">banners</a></li>
                                   
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);"><i class="fi-layers"></i> <span> Service </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{ route('serviceAdd') }}">Add Service</a></li>
                                    <li><a href="{{ route('serviceView') }}">View Service</a></li>
                                   
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);"><i class="fi-layers"></i> <span> Destinaion </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{ route('destinationAdd') }}">Add Destinaion</a></li>
                                    <li><a href="{{ route('destinationView') }}">View Destinaion</a></li>
                                    <li><a href="{{ route('popularDestination') }}">Popular Destination</a></li>
                                   
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);"><i class="fi-layers"></i> <span> Blog </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{ route('blogAdd') }}">Post Blog</a></li>
                                    <li><a href="{{ route('blogView') }}">Your Blogs</a></li>

                                    @if (Auth::user()->role == 1)
                                        <li><a href="{{ route('allBlog') }}">All Blogs</a></li>
                                    @endif
                                   
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);"><i class="fi-layers"></i> <span> Tourist Experience </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{ route('tourist_experAdd') }}">Add Tourist Experience</a></li>
                                    <li><a href="{{ route('tourist_experView') }}">View Tourist Experience</a></li>
                                   
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);"><i class="fi-layers"></i> <span> Our team </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{ route('our_teamAdd') }}">Add Team Member</a></li>
                                    <li><a href="{{ route('our_teamView') }}">View Team Member</a></li>
                                    <li><a href="{{ route('home_item') }}">Marked for home</a></li>
                                   
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);"><i class="fi-layers"></i> <span> Why choose us </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{ route('why_choose_usAdd') }}">Add Reason</a></li>
                                    <li><a href="{{ route('why_choose_usView') }}">View All Reasons</a></li>
                                   
                                </ul>
                            </li>

                            <li>
                                <a href="{{ route('achivement') }}"><i class="fi-mail"></i><span> Achivement </span> <span class="menu-arrow"></span></a>
                            </li>
                            <li>
                                <a href="{{ route('genarel_setting') }}"><i class="fi-mail"></i><span> General setting </span> <span class="menu-arrow"></span></a>
                            </li>
                            <li>
                                <a href="{{ route('footer') }}"><i class="fi-mail"></i><span> Footer </span> <span class="menu-arrow"></span></a>
                            </li>
                        </ul>

                    </div>
                    <!-- Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>

            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

                <!-- Top Bar Start -->
                <div class="topbar">

                    <nav class="navbar-custom">

                        <ul class="list-unstyled topbar-right-menu float-right mb-0">

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <i class="fi-bell noti-icon"></i>
                                    <span class="badge badge-danger badge-pill noti-icon-badge">
                                        @php
                                            echo blogComments::where('status', 0)->count();
                                        @endphp
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">


                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5 class="m-0"><span class="float-right"><a href="{{ route('allCommentClear') }}" class="text-dark"><small>Clear All</small></a> </span>Comments</h5>
                                    </div>

                                    <div class="slimscroll" style="max-height: 230px;">
                                       @forelse ($comments2 as $item)
                                        <a style="padding:20px 20px; @if($item->status != 1) background:#f3f6f8 @endif"  href="{{ route('viewCommentOnPage', $item->id)  }}" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-success"><i class="mdi mdi-comment-account-outline"></i></div>
                                            <p class="notify-details">{{ $item->name }} commented on {{ $item->blogSlug}}<small class="text-muted"></small></p>
                                        </a>
                                           
                                       @empty
                                           No comments
                                       @endforelse
                                        <!-- item-->


                                    </div>

                                    <!-- All-->
                                    <a href="{{ route('allComments') }}" class="dropdown-item text-center text-primary notify-item notify-all">
                                        View all <i class="fi-arrow-right"></i>
                                    </a>

                                </div>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <i class="fi-speech-bubble noti-icon"></i>
                                    <span class="badge badge-custom badge-pill noti-icon-badge">
                                        @php
                                            echo message::where('status', 0)->count();
                                        @endphp
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">


                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5 class="m-0"><span class="float-right"><a href="{{ route('allMessageClear') }}" class="text-dark"><small>Clear All</small></a> </span>Chat</h5>
                                    </div>

                                    <div class="slimscroll" style="max-height: 230px;">
                                        @forelse ($message as $item)
                                        
                                            <!-- item-->
                                            <a href="{{ route('viewMessageOnPage', $item->id) }}" @if($item->status == 0) style="background:#f3f6f8" @endif class="dropdown-item notify-item">
                                                <div class="notify-icon"><img src="{{ asset('admin/images/user/avatar.png') }}" class="img-fluid rounded-circle" alt="" /> </div>
                                                <p class="notify-details">{{ $item->first_name.' '.$item->last_name }}</p>
                                                <p class="text-muted font-13 mb-0 user-msg">{{ $item->message }}</p>
                                            </a>
                                        @empty
                                            No message
                                        @endforelse

                                    </div>

                                    <!-- All-->
                                    <a href="{{ route('allMessage') }}" class="dropdown-item text-center text-primary notify-item notify-all">
                                        View all <i class="fi-arrow-right"></i>
                                    </a>

                                </div>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <img src="{{ asset('admin/images/user').'/'.Auth::user()->image }}" alt="user" class="rounded-circle"> <span class="ml-1">{{ Auth::user()->name }} <i class="mdi mdi-chevron-down"></i> </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="{{ route('user_profile') }}" class="dropdown-item notify-item">
                                        <i class="fi-head"></i> <span>My Account</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item"  href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                        <i class="fi-power"></i> <span>Logout</span>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                                </div>
                            </li>

                        </ul>

                        <ul class="list-inline menu-left mb-0">
                            <li class="float-left">
                                <button class="button-menu-mobile open-left disable-btn">
                                    <i class="dripicons-menu"></i>
                                </button>
                            </li>
                            <li>
                                <div class="page-title-box">
                                    <h4 class="page-title">Travel Agency </h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active">Welcome to admin panel</li>
                                    </ol>
                                </div>
                            </li>

                        </ul>

                    </nav>

                </div>
                <!-- Top Bar End -->



                <!-- Start Page content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    @yield('content')
                                </div>
                            </div>
                        </div>
                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer">
                    2020 © This site is developed by Md. Mominur Rahman
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <!-- jQuery  -->
        <script src="{{ asset('admin') }}/assets/js/jquery.min.js"></script>
        <script src="{{ asset('admin') }}/assets/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('admin') }}/assets/js/metisMenu.min.js"></script>
        <script src="{{ asset('admin') }}/assets/js/waves.js"></script>
        <script src="{{ asset('admin') }}/assets/js/jquery.slimscroll.js"></script>

        <!-- Flot chart -->
        <script src="../plugins/flot-chart/jquery.flot.min.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.time.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.resize.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.pie.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.crosshair.js"></script>
        <script src="../plugins/flot-chart/curvedLines.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.axislabels.js"></script>

        <!-- KNOB JS -->
        <!--[if IE]>
        <script type="text/javascript" src="../plugins/jquery-knob/excanvas.js"></script>
        <![endif]-->
        <script src="../plugins/jquery-knob/jquery.knob.js"></script>

        <!-- Dashboard Init -->
        <script src="{{ asset('admin') }}/assets/pages/jquery.dashboard.init.js"></script>

        <!-- App js -->
        <script src="{{ asset('admin') }}/assets/js/jquery.core.js"></script>
        <script src="{{ asset('admin') }}/assets/js/jquery.app.js"></script>
        <script src="{{ asset('admin') }}/assets/js/sweetalert.min.js"></script>
          <!-- include summernote js -->
          <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
        <script>
            //code of sweet alert
            function confirmation(ev) {
            ev.preventDefault();
            var urlToRedirect = ev.currentTarget.getAttribute('href'); //use currentTarget because the click may be on the nested i tag and not a tag causing the href to be empty
            console.log(urlToRedirect); // verify if this is the right URL
            swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            // redirect with javascript here as per your logic after showing the alert using the urlToRedirect value
            if (willDelete) {
                swal("Poof! Your file has been deleted!", {
                icon: "success",
                });
                window.location.href = urlToRedirect
            } else {
                swal("Your file is safe!");
            }
            });
            }

            //summernote js
            $(document).ready(function() {
            $('#tour_details').summernote({
                height: 300,                 // set editor height
                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor
                focus: true,
                toolbar: [
                            ['style', ['style']],
                            ['font', ['bold', 'underline', 'clear']],
                            ['color', ['color']],
                            ['para', ['ul', 'ol', 'paragraph']],
                            ['table', ['table']],
                            ['insert', ['link']],
                            ['view', ['fullscreen', 'codeview', 'help']]
                        ]  
            });
            });
          
        </script>
        @yield('customJs')

    </body>

<!-- Mirrored from coderthemes.com/highdmin/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Apr 2019 06:51:50 GMT -->
</html>