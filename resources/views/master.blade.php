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
    <style>

    </style>
</head>

<body>
    <!-- Body Inner -->
    <div class="body-inner">

        <!-- Topbar -->

        <!-- end: Topbar -->

        <!-- Header -->
        <header id="header" data-fullwidth="true">
            <div class="header-inner">
                <div class="container">
                    <!--Logo-->
                    <div id="logo"> <a href="index.html"><span class="logo-default">POI</span><span class="logo-dark">POI</span></a> </div>
                    <!--End: Logo-->
                    <!-- Search -->

                    <!-- end: search -->
                    <!--Header Extras-->
{{--                    <div class="header-extras">--}}
{{--                        <ul>--}}
{{--                            <li>--}}
{{--                                <a id="btn-search" href="#"> <i class="icon-search"></i></a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <div class="p-dropdown"> <a href="#"><i class="icon-globe"></i><span>EN</span></a>--}}
{{--                                    <ul class="p-dropdown-content">--}}
{{--                                        <li><a href="#">French</a></li>--}}
{{--                                        <li><a href="#">Spanish</a></li>--}}
{{--                                        <li><a href="#">English</a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
                    <!--end: Header Extras-->
                    <!--Navigation Resposnive Trigger-->
                    <div id="mainMenu-trigger"> <a class="lines-button x"><span class="lines"></span></a> </div>
                    <!--end: Navigation Resposnive Trigger-->
                    <!--Navigation-->
                    <div id="mainMenu">
                        <div class="container">
                            <nav>
                                <ul>
                                    <li><a href="{{route('index')}}">Home</a></li>
                                    <li><a href="{{route('tributes')}}">Tributes</a></li>
                                    <li><a href="{{route('index')}}">Watch Live</a></li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--end: Navigation-->
                </div>
            </div>
        </header>
        <!-- end: Header -->

        <!-- Inspiro Slider -->
        <div id="slider" class="inspiro-slider slider-halfscreen dots-dark arrows-dark dots-creative" data-fade="true" >


            <!-- Slide 1 -->
            <div class="slide background-image" style="background-image:url('images/slide2.png');">
                <div class="container">
                    <div class="slide-captions text-end">
                        <!-- Captions -->
                        <span class="strong text-dark">Welcome, this is a tribute platform for</span>
                        <h2 class="text-dark text-lg">ESTEEMED PASTOR <br>OSHOKE IMOAGENE</h2>
                        <span class="strong text-dark">1970 - 2024</span>
                        <a  href="{{route('tributes')}}" class="btn btn-dark">SEND TRIBUTE</a>
                        <!-- end: Captions -->
                    </div>
                </div>
            </div>
            <!-- end: Slide 1 -->

            <!-- Slide 2 -->
            <div class="slide" style="background-image:url('images/slide2.png');">
                <div class="container">
                    <div class="slide-captions text-end">
                        <!-- Captions -->
                        <span class="strong text-dark">Celebrating a life of Grace and Impact</span>
                        <h2 class="text-dark text-lg">ESTEEMED PASTOR <br>OSHOKE IMOAGENE</h2>
                        <span class="strong text-dark">1970 - 2024</span>
                        <a  href="{{route('tributes')}}" class="btn btn-dark">SEND TRIBUTE</a>
                        <!-- end: Captions -->
                    </div>
                </div>
            </div>
            <!-- end: Slide 2 -->


        </div>
        <!--end: Inspiro Slider -->
        <section id="page-content" class="no-padding" style="background-color: #edd9f4">

            <div class="container">
                <div class="row">
                    <div class="content col-lg-12">
{{--                        <h4>Tabs - Folder</h4>--}}
                        <div class="tabs tabs-folder">
                            @if(session('message'))
                                <div role="alert" class="alert alert-success alert-dismissible">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button>
                                    <strong><i class="fa fa-check-circle"></i> Thank You!</strong> {{session('message')}} </div>
                            @endif
                            <ul class="nav nav-tabs nav-justified" id="myTab3" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home3" role="tab" aria-controls="home" aria-selected="true"><b>About</b></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile3" role="tab" aria-controls="profile" aria-selected="false"><b>Gallery</b></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact3" role="tab" aria-controls="contact" aria-selected="false"><b>Videos</b></a>
                                </li>

                            </ul>
                            <div class="tab-content" id="myTabContent3">
                                <div class="tab-pane fade show active" id="home3" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="row  m-b-50">
                                        <div class="col-lg-3">
                                            <div class="heading-text heading-section">
{{--                                                <h2 style="font-size: 45px">ABOUT</h2>--}}

                                                <img   class="img-thumbnail" src="{{url('images/him.jpeg')}}">
                                                <img   class="img-thumbnail" src="{{url('images/he.jpeg')}}">
                                                <img   class="img-thumbnail" src="{{url('images/himm.jpeg')}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="row">
                                                <div class="col-lg-6">

                                                    We celebrate the life and times of a kingdom addict, trail blazer, a decorated disciple of the Ministry, a man so full of love and so effusive of love, <strong>Highly Esteemed Pastor Oshoke Imoagene,</strong> who was the <strong>2nd Haven President of The Haven Nation from 2007 to 2015,</strong> went to be with the Lord on <strong>Tuesday July 23, 2024. </strong><br>
                                                    <br>Pastor Oshoke was born on the <strong>9th of June 1970</strong> at <strong>Ibadan, Oyo State.</strong> <br> He was a very studious, hardworking and trail blazing student who went through school with excellent academic performances, bagging his BA in History at the age of 19 and his master’s degree in Industrial Labour Relations before he turned 22 <br><br>
                                                    Pastor Oshoke’s fast growth was also evidenced in his career. Kicking off in 1991, he rose quickly through the ranks in Human Resource Management and by 2008, he had become the Divisional Head, Human Capital Management and Corporate Resources at one of the notable banks in Nigeria. It is worthy of note that Pastor Oshoke mentored a great number of people in the banking industry, helping them find their feet and kick off their stellar careers.</div>
                                                <div class="col-lg-6">Pastor Oshoke became a member of Christ Embassy in <strong>Ibadan in 1995.</strong> He joined The Haven that same year and became The Haven Governor, <strong>CE Ibadan in 1997.</strong><br>
                                                    He relocated to Lagos in 1999, where he continued his passionate membership of The Haven Nation at the then Christ Embassy Ikeja. In February 2005, Pastor Oshoke was appointed the Governor of the highly celebrated and award-winning Chosen Haven Chapter. <br>
                                                    He was appointed as International President of The Haven on <strong>Friday 26, January 2007,</strong> and creditably led The Haven Nation in that capacity till <strong>July 2015.</strong><br>
                                                    Pastor Oshoke’s life in God’s Word was legendary. His devotion and passion for the message of our Man of God were qualities many in Ministry particularly in The Haven Nation emulated.
                                                    <br><br>
                                                    Pastor Oshoke was a devoted husband and a loving father who gave all for his family.<br>
                                                    We thank God for His dedicated life of service to the Lord and the Ministry.<br>
                                                    The impact he made will continue to be with us.

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile3" role="tabpanel" aria-labelledby="profile-tab">

                                    <div class="container">
                                        <form method="POST"  action="{{route('uploadImages')}}" enctype="multipart/form-data">
                                            @csrf
                                            <h4>Upload your Images Here</h4>
                                            <div role="alert" class="alert alert-primary alert-dismissible">
                                                <strong><i class=""></i>Please Note!</strong> Maximum  Image upload size is 10mb.
                                            </div>


                                            <div class="row">
                                                <div class="form-group col-md-9">
                                                    <input type="file" name="images[]" class="form-control" accept="image/*" multiple >
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <button type="submit" class="btn btn-primary">SUBMIT</button>
                                                </div>
                                            </div>
                                        </form>


                                    </div>
                                </div>
                                <div class="tab-pane fade" id="contact3" role="tabpanel" aria-labelledby="contact-tab">
                                    <div role="alert" class="alert alert-primary alert-dismissible">
                                        <strong><i class="fa fa-warning"></i>Please Note!</strong> Maximum  video upload size is 500mb and MP4 format only.
                                    </div>
                                    <form method="POST"  action="{{route('uploadVideos')}}"  enctype="multipart/form-data">
                                        @csrf
                                        <h4>Upload your Videos Here</h4>
                                        <div class="row">
                                            <div class="form-group col-md-9">
                                                <input type="file" name="video" class="form-control"  required accept="video/mp4">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <button type="submit" class="btn btn-primary">SUBMIT</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="row">
                                        @foreach($videos as $video)
                                            <div class="col-md-4">
                                                <div class="card mb-4">
                                                    <div class="card-body">
                                                        <video width="100%" controls>
                                                            <source src="{{ $video->url }}" type="video/mp4">
                                                            Your browser does not support the video tag.
                                                        </video>
                                                    </div>
                                                    <div class="card-footer">
                                                        <h5>Video {{ $loop->iteration }}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="space"></div>


                    </div>
                    <!-- Sidebar-->

                </div>
            </div>
        </section>
        <section id="page-content" style="background-color: #edd9f4">
            <div class="container">
                <!-- Gallery -->
                <div class="carousel" data-items="3" data-dots="false" data-lightbox="gallery">
                    @foreach($images as $image)
                    <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="{{$image->url}}" alt=""></a>
                            </div>
                            <div class="portfolio-description">
                                <a title="Paper Pouch!" data-lightbox="gallery-image" href="{{$image->url}}" class="btn btn-light btn-roundeded">Zoom</a>
                            </div>
{{--                            {{$image->id}}--}}
                        </div>
                    </div>
                    @endforeach

                </div>

                <!-- end: Gallery -->
            </div>
        </section>
        <section style="background-color: #edd9f4">
            <div class="container">

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

        </section>



        <!-- GET IN TOUCH -->
        <section class="text-light background-black">
            <div class="container">

                <div class="text-center m-b-100">
                    <h1 class="text-medium">Send your tribute</h1>
                </div>
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
                <div class="row">
                    <div class="col-lg-8 center">
                        <form   action="{{route('submitTribute')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">First Name<span class="text-danger ">*</span></label>
                                    <input type="text" required name="first_name" class="form-control " placeholder="Enter your First Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Last Name<span class="text-danger">*</span></label>
                                    <input type="text" required name="last_name" class="form-control" placeholder="Enter your Last Name">
                                </div>

                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="subject">Phone Number</label>
                                    <input type="text" name="phone" class="form-control" placeholder="Enter your phone number">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="subject">City<span class="text-danger">*</span></label>
                                    <input type="text" name="city" class="form-control" placeholder="Enter your City">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="subject">State</label>
                                    <input type="text" name="state" class="form-control" placeholder="Enter your State">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="subject">Country</label>
                                    <input type="text" name="country" class="form-control" placeholder="Enter your Country">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message">Tribute<span class="text-danger">*</span></label>
                                <textarea type="text" name="tribute" rows="8" class="form-control" placeholder="Write your Tribute"></textarea>
                            </div>

                            <div class="row">
                                <div class="form-group text-center">
                                    <button class="btn center" type="submit" ><i class="fa fa-paper-plane"></i>&nbsp;Send Tribute</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: GET IN TOUCH -->
        <!-- Modal Structure -->
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modal-label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="modal-label">Allow Background Music?</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <p>Your permission is needed to play background music on this website. Click below to allow playback.</p>
                    </div>
                    <div class="modal-footer">
                        <button id="mute-btn" type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="icon-volume-x"></i> Mute</button>
                        <button id="play-btn" type="button" class="btn btn-primary" data-bs-dismiss="modal"><i class="icon-volume-2"></i> Play Music</button>
                    </div>
                </div>
            </div>
        </div>

        <audio id="background-audio" src="{{url('images/audio.mp3')}}" loop></audio>



        <!-- FOOTER -->
        <footer class="inverted" id="footer">
            <div class="copyright-content">
                <div class="container">
                    <div class="row">
                        <div class="copyright-text text-white text-center"> © 2024 PASTOR OSHOKE IMOAGENE.</div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end: FOOTER -->

    </div>
    <!-- end: Body Inner -->

    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
    <!--Plugins-->
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>

    <!--Template functions-->
    <script src="{{asset('js/functions.js')}}"></script>

    <script>
        // Play and Mute button actions
        document.getElementById('play-btn').addEventListener('click', function() {
            var audio = document.getElementById('background-audio');
            audio.play();
        });

        document.getElementById('mute-btn').addEventListener('click', function() {
            var audio = document.getElementById('background-audio');
            audio.pause();
        });

        // Show modal on page load
        window.onload = function() {
            var audioModal = new bootstrap.Modal(document.getElementById('modal'), {});
            audioModal.show();
        };
    </script>
</body>

</html>
