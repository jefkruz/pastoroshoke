<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Pastor Oshoke" />
    <meta name="description" content="Pastor Oshoke Tribute">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>Pastor Oshoke's Tribute</title>
    <!-- Stylesheets & Fonts -->
    <link href="{{asset('css/plugins.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="https://vjs.zencdn.net/8.3.0/video-js.css" rel="stylesheet" />

</head>

<body>
<body>
<!-- Body Inner -->
<div class="body-inner">
    <!-- Header -->
    <header id="header" data-fullwidth="true">
        <div class="header-inner">
            <div class="container">
                <!--Logo-->
                <div id="logo">
                    <a href="{{route('index')}}">
                        <span class="logo-default">POI</span>
                        <span class="logo-dark">POI</span>
                    </a>
                </div>
                <!--End: Logo-->
                <!-- Search -->

                <!-- end: search -->
                <!--Header Extras-->

                <!--end: Header Extras-->
                <!--Navigation Resposnive Trigger-->
                <div id="mainMenu-trigger">
                    <a class="lines-button x"><span class="lines"></span></a>
                </div>
                <!--end: Navigation Resposnive Trigger-->
                <!--Navigation-->
                <div id="mainMenu">
                    <div class="container">
                        <nav>
                            <ul>
                                <li><a href="{{route('index')}}">Home</a></li>
                                <li><a href="{{route('tributes')}}">Tributes</a></li>
                                <li><a href="{{route('live')}}">Watch Live</a></li>

                            </ul>
                        </nav>
                    </div>
                </div>
                <!--END: NAVIGATION-->
            </div>
        </div>
    </header>
    <!-- end: Header -->
    <!-- Content -->
    <section id="page-content" class="sidebar-right" style="background-color: #edd9f4">
        <div class="container">

            <div class="row">

                <!-- post content -->
                <div class="content col-lg-9">
                        @if(session('message'))
                            <div role="alert" class="alert alert-success alert-dismissible">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button>
                                <strong><i class="fa fa-check-circle"></i> Thank You!</strong> {{session('message')}} </div>
                        @endif

                            @if(session('error'))
                                <div role="alert" class="alert alert-danger alert-dismissible">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button>
                                    <strong><i class="fa fa-exclamation-circle"></i> Sorry!</strong> {{session('error')}} </div>
                            @endif
                        <!-- Blog -->
                            <div class="card">
                                <div class="card-header">
                                    <h4>WATCH LIVE</h4>
                                </div>
                                <div class="card-body border-top">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <video id="video" class="video-js"></video>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="container mt-3">

                                <div class="carousel" data-items="3">
                                    <!-- Post item-->
                                    @foreach($tributes as $post)
                                        <div class="post-item border">
                                            <div class="post-item-wrap">
                                                <div class="post-image">
                                                    <a href="#">
                                                        <img alt="" src="{{url('images/default.png')}}"></a>
                                                </div>
                                                <div class="post-item-description">
                                                    <span class="post-meta-date"><i class="fa fa-calendar-o"></i>{{ $post->created_at->format('M d, Y') }}</span>
                                                    {{--                                <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>0--}}
                                                    {{--                                                Comments</a></span>--}}
                                                    <h2><a href="{{route('readTributes',$post->id)}}">{{ ucwords($post->first_name .' ' . $post->last_name) }}</a></h2>
                                                    <p>
                                                        {{ (Str::limit($post->tribute, 150)) }}
                                                    </p>
                                                    <a href="{{route('readTributes',$post->id)}}" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                @endforeach
                                <!-- end: Post item-->

                                </div>
                            </div>
                </div>
                <!-- end: post content -->
                <!-- Sidebar-->
                <div class="sidebar sticky-sidebar col-lg-3">
                    <!--Tabs with Posts-->
                    <div class="widget ">
                        <h4 class="widget-title text-primary">Write A Tribute</h4>
                        <form   action="{{route('submitTribute')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="name">First Name</label>
                                    <input type="text" required name="first_name" class="form-control " placeholder="Enter your First Name">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="name">Last Name</label>
                                    <input type="text" required name="last_name" class="form-control" placeholder="Enter your Last Name">
                                </div>

                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="subject">Phone Number</label>
                                    <input type="text" name="phone" class="form-control" placeholder="Enter your phone number">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="subject">City</label>
                                    <input type="text" name="city" class="form-control" placeholder="Enter your City">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="subject">State</label>
                                    <input type="text" name="state" class="form-control" placeholder="Enter your State">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="subject">Country</label>
                                    <input type="text" name="country" class="form-control" placeholder="Enter your Country">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message">Tribute</label>
                                <textarea type="text" name="widget-contact-form-message" rows="8" class="form-control required" placeholder="Write your Tribute"></textarea>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group text-center">
                                        <button class="btn btn-primary" type="submit">Submit Tribute</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--End: Tabs with Posts-->

                </div>
                <!-- end: Sidebar-->
            </div>
        </div>
    </section>
    <!-- end: Content -->
    <!-- Footer -->
    <footer id="footer">
        <div class="copyright-content">
            <div class="container">
                <div class="copyright-text  text-center"> © 2024 PASTOR OSHOKE IMOAGENE.</div>
            </div>
        </div>
    </footer>
    <!-- end: Footer -->
</div>
<!-- end: Body Inner -->
<!-- Scroll top -->
<a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
<!--Plugins-->
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>

<!--Template functions-->
<script src="{{asset('js/functions.js')}}"></script>

<script src="https://vjs.zencdn.net/8.3.0/video.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const player = videojs('video', {
            controls: true,
            fluid: true,
            liveui: true
        });

        const vidSource = 'https://vcpout-lw-wdc-01-sp.internetmultimediaonline.org/phronesis/celvz4846zdlive/playlist.m3u8';


        player.src({
            src: vidSource,
            type: 'application/x-mpegURL'
        });

        player.play();
    });

</script>

</body>

</html>
