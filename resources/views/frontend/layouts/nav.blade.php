<!-- START NAVBAR -->
<div id="navigation" class="navbar-light bg-faded site-navigation">
    <div class="container-fluid">
        <div class="row">
            <div class="col-20 align-self-center">
                <div class="site-logo">
                    <a href="index.html"><img src="{{asset('frontend_assets/img/logo.png')}}" alt=""></a>
                </div>
            </div>
            <!--- END Col -->

            <div class="col-60 d-flex">
                <nav id="main-menu">
                    <ul>
                        <li class="menu-item-has-children"><a href="#">Home</a>
                            <ul>
                                <li><a href="{{route('frontend.index')}}">Home 01</a></li>
                                <li><a href="index2.html">Home 02</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">About</a></li>
                        <li class="menu-item-has-children"><a href="{{route('frontend.course')}}">Course</a>
                            <ul>
                                <li><a href="{{route('frontend.course')}}">Course</a></li>
                                <li><a href="{{route('frontend.course_details')}}">Course Details</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#">Pages</a>
                            <ul>
                                <li><a href="{{route('frontend.instructor')}}">Instructor</a></li>
                                <li><a href="ins_details.html">Instructor Details</a></li>
                                <li><a href="pricing.html">Pricing Plan</a></li>
                                <li><a href="{{route('frontend.faq')}}">Faq Page</a></li>
                                <li><a href="404.html">404</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="{{route('frontend.blog')}}">Blog</a>
                            <ul>
                                <li><a href="{{route('frontend.blog')}}">Blog</a></li>
                                <li><a href="{{route('frontend.blog_single')}}">Blog Details</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('frontend.contact')}}">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <!--- END Col -->

            <div class="col-20 d-none d-xl-block text-end align-self-center">
                <a href="{{route('frontend.login')}}" class="header-btn">Sign In</a>
                <a href="{{route('frontend.register')}}" class="btn_one">Sign Up</a>
            </div>
            <!--- END Col -->

            <ul class="mobile_menu">
                <li><a href="{{route('frontend.index')}}">Home</a>
                </li>
                <li><a href="{{route('frontend.about')}}">About</a></li>
                <li><a href="#">Course</a>
                    <ul class="sub-menu">
                        <li><a href="{{route('frontend.course')}}">Course</a></li>
                        <li><a href="{{route('frontend.course_details')}}">Course Deails</a></li>
                    </ul>
                </li>
                <li><a href="#">Pages</a>
                    <ul class="sub-menu">
                        <li><a href="{{route('frontend.instructor')}}">Instructor</a></li>
                        <li><a href="ins_details.html">Instructor Details</a></li>
                        <li><a href="pricing.html">Pricing Plan</a></li>
                        <li><a href="{{route('frontend.index')}}">Faq Page</a></li>
                        <li><a href="404.html">404</a></li>
                    </ul>
                </li>
                <li><a href="{{route('frontend.blog')}}">Blog</a>
                    <ul class="sub-menu">
                        <li><a href="{{route('frontend.blog')}}">Blog</a></li>
                        <li><a href="blog_single.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="{{route('frontend.contact')}}">Contact</a></li>
            </ul>
        </div>
        <!--- END ROW -->
    </div>
    <!--- END CONTAINER -->
</div>
<!-- END NAVBAR -->