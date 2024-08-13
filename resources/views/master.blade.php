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
</head>

<body>
    <!-- Body Inner -->
    <div class="body-inner">

        <!-- Header -->
        <header id="header" data-transparent="true" data-fullwidth="true" class="header-always-fixed dark">
            <div class="header-inner">
                <div class="container">
                    <!--Logo-->
                    <div id="logo">
                        <a href="{{route('index')}}" data-src-responsive="images/logo.png" class="logo">
                            <img src="images/logo-dark.png" alt="Polo Logo">
                        </a>
                    </div>
                    <!--End: Logo-->

                    <!--Header Extras-->
                    <div class="header-extras">
                        <ul>
                            <li>
                                <!--overlay menu-->
                                <a id="menu-overlay-trigger" href="#" class="lines-button x toggle-item" data-target="body" data-class="menu-overlay-active">
                                    <span class="lines"></span>
                                </a>
                                <!--end: overlay menu-->
                            </li>
                        </ul>
                    </div>
                    <!--end: Header Extras-->

                    <!--Navigation-->
                    <div id="mainMenu" class="menu-overlay menu-light menu-onclick">
                        <div class="container">
                            <nav>
                                <ul>
                                    <li><a href="{{route('index')}}">Home</a></li>
                                    <li><a href="{{route('tributes')}}">Tributes</a></li>


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
        <div id="slider" class="inspiro-slider slider-fullscreen dots-creative" data-height-xs="360">

            <!-- Slide 1 -->
            <div class="slide" style="background-image:url('images/1.png');">
                <div class="container">
                    <div class="slide-captions text-end">
                        <!-- Captions -->
                        <h3 class="m-b-0 text-light">Welcome, this is a tribute platform for</h3>

                        <h2 class="text-lg m-b-10 text-light">PASTOR OSHOKE<br />IMOAGENE</h2>
                        <h4 class="text-light">1970 - 2024</h4>
                        <div>
                            <a class="btn btn-light btn-outline" href="{{route('tributes')}}"><span>Send Tribute</span></a>
                        </div>
                        <!-- end: Captions -->
                    </div>
                </div>

            </div>
            <!-- end: Slide 1 -->

        </div>
        <!--end: Inspiro Slider -->

        <!-- ABOUT AGENCY -->
        <section class="text-light p-t-150 background-black">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading-text heading-section text-center">
                            <h2 class="text-medium fw-100">A Soldier Called Home!</h2>
                        </div>
                        <img src="{{asset('images/tribute.png')}}" class="img-thumbnail">

                    </div>


                </div>
            </div>
        </section>
        <!-- end: ABOUT AGENCY -->

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
