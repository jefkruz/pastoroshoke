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
        <div id="slider" class="inspiro-slider slider-fullscreen dots-dark arrows-dark dots-creative" data-fade="true" >

            <!-- Slide 1 -->
            <div class="slide background-image" style="background-image:url('images/slide1.png');">
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
                        <span class="strong text-dark">Welcome, this is a tribute platform for</span>
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
        <section>
            <div class="container">
                <div class="row  m-b-50">
                    <div class="col-lg-3">
                        <div class="heading-text heading-section">
                            <h2>ABOUT</h2>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-6">We celebrate the life and times of a kingdom addict, trail blazer, a decorated disciple of the Ministry, a man so full of love and so effusive of love, <strong>Highly Esteemed Pastor Oshoke Imoagene,</strong> who was the <strong>2nd Haven President of The Haven Nation from 2007 to 2015,</strong> went to be with the Lord on <strong>Tuesday July 23, 2024.</strong><br>
                                <br> Pastor Oshoke became a member of the Ministry in <strong>Ibadan in 1995.</strong> He joined The Haven in then CE Ibadan same year and became <strong>The Haven Governor CE Ibadan in 1997.</strong><br>
                                He relocated to Lagos in 1999 and continued to be an active member of the Ministry in then CE Ikeja where he also continued his passionate membership of The Haven Nation.</div>
                            <div class="col-lg-6">Pastor Oshoke was appointed the Governor of the highly celebrated and award-winning Chosen Haven Chapter of CE Ikeja in February 2005.<br>
                                <br>He was appointed as International President of <strong>The Haven on Friday 26, 2007,</strong> and creditably led The Haven Nation in that capacity <strong>till July 2015.</strong><br>
                                Pastor Oshoke’s life in God’s Word was legendary. His devotion and passion for the message of our Man of God were qualities many in Ministry particularly in The Haven Nation emulated.<br>
                                Pastor Oshoke was a devoted husband and a loving father who gave all for his family.<br>
                                We thank God for His dedicated life of service to the Lord and the Ministry.<br>
                                The impact he made will continue to be with us.
                                </div>
                        </div>
                    </div>
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
                                    <input type="text" aria-required="true" name="first_name" class="form-control " placeholder="Enter your First Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Last Name<span class="text-danger">*</span></label>
                                    <input type="text" aria-required="true" name="last_name" class="form-control" placeholder="Enter your Last Name">
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
                                <div class="form-group col-md-6">
                                    <label for="image">Upload Picture</label>
                                    <input type="file" name="image" class="form-control"accept="image/*" >
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="subject">Upload Video</label>
                                    <input type="file" name="video" class="form-control" accept="video/mp4">
                                </div>

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

</body>

</html>
