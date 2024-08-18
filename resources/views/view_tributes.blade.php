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
                <!-- content -->
                <div class="content col-lg-9">
                    <!-- Blog -->
                    <div id="blog" class="single-post">
                        <!-- Post single item-->
                        <div class="post-item">
                            <div class="post-item-wrap">
                                <div class="post-image">
                                    <a href="#">
                                        <img alt="" src="{{ $post->image ? asset($post->image) : 'images/default.png' }}">
                                    </a>
                                </div>
                                <div class="post-item-description">
                                    <h2>By: {{ ucwords($post->first_name .' ' . $post->last_name) }}</h2>
                                    <div class="post-meta">
                                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                        <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>0 Comments</a></span>

                                    </div>
                                    <p>{{$post->tribute}}</p>

                                    <br>
                                    @if($post->video)

                                        <div class="row mt-5">


                                            <div class="col-md-12">
                                                <video id="video" class="video-js">
                                                    <source src="{{$post->video}}" type="video/mp4">
                                                </video>
                                            </div>

                                        </div>
                                    @endif
                               </div>

                                <div class="post-navigation">
                                    @if($previous)
                                        <a href="{{ route('readTributes', $previous->id) }}" class="post-prev">
                                            <div class="post-prev-title">
                                                <span>Previous Tribute</span>{{ $previous->first_name . ' ' . $previous->last_name }}
                                            </div>
                                        </a>
                                    @endif

                                    <a href="{{ route('tributes') }}" class="post-all">
                                        <i class="icon-grid"></i>
                                    </a>

                                    @if($next)
                                        <a href="{{ route('readTributes', $next->id) }}" class="post-next">
                                            <div class="post-next-title">
                                                <span>Next Tribute</span>{{ $next->first_name . ' ' . $next->last_name }}
                                            </div>
                                        </a>
                                    @endif
                                </div>

                                <!-- Comments -->
{{--                                <div class="comments" id="comments">--}}
{{--                                    <div class="comment_number">--}}
{{--                                        Comments <span>(1)</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="comment-list">--}}
{{--                                        <!-- Comment -->--}}
{{--                                        <div class="comment" id="comment-1">--}}
{{--                                            <div class="image"><img alt="" src="images/blog/author.jpg" class="avatar"></div>--}}
{{--                                            <div class="text">--}}
{{--                                                <h5 class="name">John Doe</h5>--}}
{{--                                                <span class="comment_date">Posted at 15:32h, 06 December</span>--}}
{{--                                                <a class="comment-reply-link" href="#">Reply</a>--}}
{{--                                                <div class="text_holder">--}}
{{--                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type--}}
{{--                                                        and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the--}}
{{--                                                        1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <!-- end: Comment -->--}}
{{--                                        </div>--}}
{{--                                        <!-- end: Comment -->--}}

{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- end: Comments -->--}}
{{--                                <div class="respond-form" id="respond">--}}
{{--                                    <div class="respond-comment">--}}
{{--                                        Leave a <span>Comment</span></div>--}}
{{--                                    <form class="form-gray-fields">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-lg-4">--}}
{{--                                                <div class="form-group">--}}
{{--                                                    <label class="upper" for="name">First Name</label>--}}
{{--                                                    <input class="form-control " name="first_name" placeholder="Enter name"  type="text">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-lg-4">--}}
{{--                                                <div class="form-group">--}}
{{--                                                    <label class="upper" for="email">Last Name</label>--}}
{{--                                                    <input class="form-control" name="last_name" placeholder="Enter Last Name"  type="text">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-lg-4">--}}
{{--                                                <div class="form-group">--}}
{{--                                                    <label class="upper" for="website">Phone Number</label>--}}
{{--                                                    <input class="form-control " name="phone" placeholder="Enter Phone Number"  type="text">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-lg-12">--}}
{{--                                                <div class="form-group">--}}
{{--                                                    <label class="upper" for="comment">Your comment</label>--}}
{{--                                                    <textarea class="form-control required" name="comment" rows="9" placeholder="Enter comment"  aria-required="true"></textarea>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-lg-12">--}}
{{--                                                <div class="form-group text-center">--}}
{{--                                                    <button class="btn btn-primary" type="submit">Submit Comment</button>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                        <!-- end: Post single item-->
                    </div>
                </div>
                <!-- end: content -->
                <!-- Sidebar-->
                <div class="sidebar sticky-sidebar col-lg-3">
                    <!--widget newsletter-->


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
@if($post->video)
    <script src="https://vjs.zencdn.net/8.3.0/video.min.js"></script>
    <script>
        const player = videojs('video', {
            controls: true,
            fluid: true,
            liveui: true
        });
        player.on('contextmenu', function (e) {
            // Prevent the default right-click context menu
            e.preventDefault();
        });
    </script>
@endif
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>

<!--Template functions-->
<script src="{{asset('js/functions.js')}}"></script>



</body>

</html>
