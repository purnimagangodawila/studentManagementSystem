<!DOCTYPE html>
<html lang="en">

<head>
    <title>Success deucation institute</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('index/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('index/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('index/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('index/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('index/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('index/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('index/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('index/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('index/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('index/style.css') }}">
</head>

<body>
    <div class="bg-top navbar-light">
        <div class="container">
            <div class="row no-gutters d-flex align-items-center align-items-stretch">
                <div class="col-md-4 d-flex align-items-center py-4">
                    <a class="navbar-brand" href="{{ url('home-old') }}">Success <span>Education Institute</span></a>
                </div>
                <div class="col-lg-8 d-block">
                    <div class="row d-flex">
                        <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                            <div class="icon d-flex justify-content-center align-items-center"><span><img
                                        src="/images/email.gif"></span></div>
                            <div class="text">
                                <span>Email</span>
                                <span>successeduemail@email.com</span>
                            </div>
                        </div>
                        <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                            <div class="icon d-flex justify-content-center align-items-center"><span><img
                                        src="/images/phone.png"></span></div>
                            <div class="text">
                                <span>Call</span>
                                <span>Call Us:0718765342</span>
                            </div>
                        </div>
                        <div class="col-md topper d-flex align-items-center justify-content-end">
                            <p class="mb-0">
                                <a href="{{ route('login') }}"
                                    class="btn py-2 px-3 btn-primary d-flex align-items-center justify-content-center">
                                    <span>Login</span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container d-flex align-items-center px-4">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <form action="#" class="searchform order-lg-last">
                <div class="form-group d-flex">
                    <input type="text" class="form-control pl-3" placeholder="Search">
                    <button type="submit" placeholder="" class="form-control search"><span> <img
                                src="/images/seachimg.gif"></span></button>
                </div>
            </form>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a href="{{ url('home-old') }}" class="nav-link pl-0">Home</a></li>
                    <li class="nav-item active"><a href="{{ url('about') }}" class="nav-link">About</a></li>
                    <li class="nav-item active"><a href="{{ url('teacher') }}" class="nav-link">Teachers</a></li>
                    <li class="nav-item active"><a href="{{ url('news') }}" class="nav-link">News</a></li>
                    <li class="nav-item active"><a href="{{ url('timetable-interface') }}" class="nav-link">Time
                            Table</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2" style="background-image: url('/images/ imgp (6).jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">News</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Teacher <i
                                class="ion-ios-arrow-forward"></i></span></p>

                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">

        <div class="container-fluid px-4">
            <div class="row">
				@foreach ($news as $item)
				<div class="col-md-4 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url({{asset('/images/photo6.jpg')}}) !important;">
                            </div>
                        </div>
                        <div class="img align-self-stretch" style="background-image: url({{asset('/images/photo10.jpg')}}) !important;">
                        </div>
                        <div class="text pt-3 text-center">

                            <span class="position mb-2"> </span>
                            <div class="faded">
                                <p> {{$item->news_date}}</p>
								<h3>{{$item->news_title}}</h3>
                                <p> {{$item->news_content}}</p>

                            </div>
                        </div>
                    </div>
                </div>
				@endforeach


            </div>
        </div>
    </section>



    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-5">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span><img src="/images/location2.png"></span><span class="text">203,Giriulla
                                        Road,Mirigama</span></li>
                                <li><span><img src="/images/call.png"></span><span
                                        class="text">0718765342</span></a></li>
                                <li><span><img src="/images/email1.png"></span><span
                                        class="text">successeduemail@email.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-5">
                        <h2 class="ftco-heading-2">News</h2>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(/images/photo6.jpg);"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">2024 is the new academic year</a></h3>
                            </div>
                        </div>
                        <div class="block-21 mb-5 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(/images/photo10.jpg);"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#"> 2024 New Academic Year Class Commencement
                                        Seminar Series.</a></h3>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-5 ml-md-4">
                      <h2 class="ftco-heading-2">Links</h2>
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item active"><a href="{{ url('home-old') }}" class="nav-link pl-0">Home</a></li>
                        <li class="nav-item active"><a href="{{url ('about') }}" class="nav-link">About</a></li>
                        <li class="nav-item active"><a href="{{ url('teacher') }}" class="nav-link">Teachers</a></li>
                        <li class="nav-item active"><a href="{{ url('news-website') }}" class="nav-link">news</a></li>
                      <li class="nav-item active"><a href="{{ url('timetable-interface') }}" class="nav-link">Time Table</a></li>
                      </ul>
                    </div>
                  </div>
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-5">

                        <h2 class="ftco-heading-2">Contact Us!</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span></span><span class="text">Phone number:0718765342</span></li>
                                <li><span></span><span class="text">Address:203,Giriulla Road,Mirigama</span></a>
                                </li>
                                <li><span></span><span class="text">Email:successeduemail@email.com</span></a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="ftco-footer-widget mb-5">
                        <h2 class="ftco-heading-2 mb-0">Connect With Us</h2>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                            <li class="ftco-animate"><a href="#"><span><img
                                            src="/images/facebook.png"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span><img
                                            src="/images/whatzapp.png"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> by Success Education Institute | </a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    <script src="index/jquery.min.js"></script>
    <script src="index/jquery-migrate-3.0.1.min.js"></script>
    <script src="index/popper.min.js"></script>
    <script src="index/bootstrap.min.js"></script>
    <script src="index/jquery.easing.1.3.js"></script>
    <script src="index/jquery.waypoints.min.js"></script>
    <script src="index/jquery.stellar.min.js"></script>
    <script src="index/owl.carousel.min.js"></script>
    <script src="index/jquery.magnific-popup.min.js"></script>
    <script src="index/aos.js"></script>
    <script src="index/jquery.animateNumber.min.js"></script>
    <script src="index/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="index/google-map.js"></script>
    <script src="index/main.js"></script>

</body>

</html>
