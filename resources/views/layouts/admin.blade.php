<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') - Pameran Kuy</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/icon.png">

    <!-- Google font (font-family: 'Lato', sans-serif;) -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,900" rel="stylesheet">
    <!-- Google font (font-family: 'Raleway', sans-serif;) -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700,800" rel="stylesheet">

    <!-- Stylesheets -->
	<!-- {{ asset('')}} -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}"> 
    <link rel="stylesheet" href="{{ asset('css/plugins.css')}}">
    <link rel="stylesheet" href="{{ asset('style.css')}}">

    <!-- Cusom css -->
    <link rel="stylesheet" href="{{ asset('css/custom.css')}}">

    <!-- Modernizer js -->
    <script src="{{ asset('js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <style>
        .min-h{
            min-height: 800px;
        }
        .spacer{
            width: 100%;
        	height: 140px;
        }
    </style>
</head>

<body>
    <!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

    <!-- Add your site or application content here -->

    <!-- <div class="fakeloader"></div> -->

    <!-- Wrapper -->
    <div id="wrapper" class="wrapper">
        
        <!-- Header -->
        <div class="header header-style-1 header-transparent sticky-header" style="background-color: #18212e">
            <div class="container">
				<div class="mobile-menu d-block d-lg-none">
					<a href="/" class="logo">
						<img src="{{ asset('images/logo/logo3.png')}}" >
					</a>
				</div>
                <div class="header-inner d-none d-lg-flex">
                    <a href="/" class="logo">
                        <img src="/images/logo/logo3.png" >
					</a>
					
					<!-- Nagivation -->
					<nav class="bn-navigation text-right">
						<ul>
							<li><a href="/">home</a></li>
							<li><a href="about-us.html">about us</a></li>
							<li><a href="/">pages</a></li>
							<li><a href="schedule.html">Hubungi Kami</a></li>
							@guest
							<li class="nav-item"><a href="/login" class=" btn btn-primary">Login</a></li>
							@endguest
						</ul>
					</nav>
                </div>
            </div>
        </div>
        <!--// Header -->


        <!-- Page Content -->
        <main id="page-content">
        @yield('content')
			

        </main>
        <!--// Page Content -->

        <!-- Footer -->
        <div class="footer">


			<!-- Footer Copyright Area -->
			<div class="footer-copyright-area " style="background-color: #18212e">
				<div class="container">
					<div class="footer-copyright text-center">
						<p>Copyright © <a href="#">Blazen</a>. All Rights Reserved</p>
					</div>
				</div>
			</div>
			<!--// Footer Copyright Area -->

        </div>
        <!--// Footer -->

    </div>
    <!--// Wrapper -->


    <!-- JS Files -->
    <script src="/js/vendor/jquery-3.2.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/plugins.js"></script>
    <script src="/js/active.js"></script>
    <script src="/js/scripts.js"></script>
    @yield('js')
</body>


<!-- Mirrored from demo.devitems.com/blazen-v1/index-single-banner.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Oct 2020 16:00:19 GMT -->
</html>