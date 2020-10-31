<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Blazen - Event and Exhibition Bootstrap4 Template</title>
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
</head>

<body>
    <!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

    <!-- Add your site or application content here -->

    <div class="fakeloader"></div>

    <!-- Wrapper -->
    <div id="wrapper" class="wrapper">
        
        <!-- Header -->
        <div class="header header-style-1 header-transparent sticky-header">
            <div class="container">
				<div class="mobile-menu d-block d-lg-none">
					<a href="index.html" class="logo">
						<img src="{{ asset('images/logo/logo-theme.png')}}" alt="logo theme">
					</a>
					<div class="social-icons">
						<ul>
							<li class="twitter"><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
							<li class="facebook"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
							<li class="instagram"><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
							<li class="pinterest"><a href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a></li>
						</ul>
					</div>
				</div>
                <div class="header-inner d-none d-lg-flex">
                    <a href="index.html" class="logo">
                        <img src="images/logo/logo-theme.png" alt="logo theme">
					</a>
					
					<!-- Nagivation -->
					<nav class="bn-navigation text-right">
						<ul>
							<li><a href="index.html">home</a>
								<ul>
									<li><a href="index.html">Homepage</a></li>
									<li><a href="index-2.html">Homepage 2</a></li>
									<li><a href="index-single-banner.html">Homepage Single Banner</a></li>
									<li><a href="index-parallax.html">Homepage Parallax</a></li>
								</ul>
							</li>
							<li><a href="about-us.html">about us</a></li>
							<li><a href="index.html">pages</a>
								<ul>
									<li><a href="about-us.html">About Us</a></li>
									<li><a href="portfolio-gallery.html">Portfolio Gallery</a></li>
									<li><a href="portfolio-gallery-2.html">Portfolio Gallery 2</a></li>
									<li><a href="schedule.html">Schedule</a></li>
									<li><a href="speakers.html">Speakers</a></li>
									<li><a href="faq.html">Faq</a></li>
									<li><a href="contact-us.html">Contact Us</a></li>
									<li><a href="404.html">404</a></li>
								</ul>
							</li>
							<li><a href="schedule.html">schedule</a></li>
							<li><a href="blog.html">blog</a>
								<ul>
									<li><a href="blog.html">Blog</a></li>
									<li><a href="blog-rightsidebar.html">Blog Right Sidebar</a></li>
									<li><a href="blog-details.html">Blog Details</a></li>
									<li><a href="blog-details-leftsidebar.html">Blog Details Left Sidebar</a></li>
								</ul>
							</li>
							<li><a href="faq.html">faq</a></li>
							<li><a href="contact-us.html">contact</a></li>
						</ul>
					</nav>
					<!--// Nagivation -->
					
                    <div class="social-icons">
                        <ul>
                            <li class="twitter"><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                            <li class="facebook"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                            <li class="instagram"><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
                            <li class="pinterest"><a href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--// Header -->

        <!-- Header Banner -->
        <div class="banner-area banner-slider-active">

            <!-- Single Banner -->
            <div class="banner bg-image-3 justify-content-center align-items-center">
                <div class="container">
                    <div class="banner-text banner-text-white">
                        <div class="banner-countbox event-countdown" data-countdown="2020/11/16"></div>
                        <h1>art exhibitions Blazen</h1>
                        <h4>May 21-28, 2018 in 2381 Rosecrans Ave, Suite 200 El Segundo, CA 90245. USA</h4>
                        <a href="#" class="cr-btn cr-btn-lg cr-btn-blue">
                            <span>Register Now</span>
                        </a>
                    </div>
                </div>
            </div>
            <!--// Single Banner -->

        </div>
        <!--// Header Banner -->

        <!-- Page Content -->
        <main id="page-content">
            
            <!-- About Area -->
            <section class="cr-section about-area bg-white section-padding-md">
                <div class="container">
                    <div class="about-text text-center">
                        <img src="{{ asset('images/icons/about-icon.png')}}" alt="about icons">
                        <h4>Painting exhibition showcases an array of style</h4>
                        <h2>Welcome !</h2>
						<p>The exhibition also features a workshop for artists and writers on March 26, where the participants would express and exchange their thoughts on the theme ‘Nature's fury over Japan'. Organised by the Indo-Russian Cultural & Friendship Society (IRCFS), it of a group of passionate artists who believe that enabling a shared space for artists with different areas of expertise and varied experiences would enrich the art and promote healthy exchange and learning.</p>
						<div class="button-group">
							<a href="schedule.html" class="cr-btn cr-btn-blue">
								<span>Buy Ticket</span>
							</a>
							<a href="about-us.html" class="cr-btn cr-btn-red">
								<span>View More</span>
							</a>
						</div>
                    </div>
                </div>
            </section>
			<!--// About Area -->
			
			<!-- Typical Author Area -->
			<section class="cr-section authors-area bg-image-2 section-padding-md" data-black-overlay="8">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-8 col-md-10 col-12">
							<div class="section-title section-title-white text-center">
								<h2>Typical author</h2>
							</div>
						</div>
					</div>
					<div class="row no-gutters">

						<!-- Single Author -->
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="author author-style-2">
								<div class="author-thumb">
									<img src="images/authors/author-thumb-1.jpg" alt="author thumb">
								</div>
								<div class="author-content">
									<h6>Author 1</h6>
									<h4>Reanna Stanton</h4>
									<div class="social-icons">
										<ul>
											<li class="twitter"><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
											<li class="facebook"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
											<li class="instagram"><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
											<li class="pinterest"><a href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!--// Single Author -->

						<!-- Single Author -->
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="author">
								<div class="author-thumb">
									<img src="images/authors/author-thumb-2.jpg" alt="author thumb">
								</div>
								<div class="author-content">
									<h6>Author 2</h6>
									<h4>Victor Davide</h4>
									<p>Ut aliquid ex ea commodi quatur? Quis autem vel eum iure voluptate velit esse quam nihil molestiae consequatur .</p>
									<div class="social-icons">
										<ul>
											<li class="twitter"><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
											<li class="facebook"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
											<li class="instagram"><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
											<li class="pinterest"><a href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!--// Single Author -->

						<!-- Single Author -->
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="author author-reverse">
								<div class="author-thumb">
									<img src="images/authors/author-thumb-3.jpg" alt="author thumb">
								</div>
								<div class="author-content">
									<h6>Author 3</h6>
									<h4>Shirley Balistreri</h4>
									<p>Ut aliquid ex ea commodi quatur? Quis autem vel eum iure voluptate velit esse quam nihil molestiae consequatur .</p>
									<div class="social-icons">
										<ul>
											<li class="twitter"><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
											<li class="facebook"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
											<li class="instagram"><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
											<li class="pinterest"><a href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!--// Single Author -->

						<!-- Single Author -->
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="author">
								<div class="author-thumb">
									<img src="images/authors/author-thumb-4.jpg" alt="author thumb">
								</div>
								<div class="author-content">
									<h6>Author 4</h6>
									<h4>Leonora Johnson</h4>
									<p>Ut aliquid ex ea commodi quatur? Quis autem vel eum iure voluptate velit esse quam nihil molestiae consequatur.</p>
									<div class="social-icons">
										<ul>
											<li class="twitter"><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
											<li class="facebook"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
											<li class="instagram"><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
											<li class="pinterest"><a href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!--// Single Author -->

					</div>
				</div>
			</section>
			<!--// Typical Author Area -->

			<!-- Portfolio Area -->
			<section class="cr-section portfolio-area bg-white section-padding-md">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-8 col-md-10 col-12">
							<div class="section-title text-center">
								<h2>collection worth wait</h2>
							</div>
						</div>
					</div>
					<div class="row justify-content-center portfolios portfolio-popup-gallery-active">

						<!-- Single Portfolio -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
							<a href="images/portfolio/lg-size/portfolio-image-large-1.jpg" class="portfolio">
								<div class="portfolio-thumb">
									<img src="images/portfolio/portfolio-image-1.jpg" alt="portfolio thumb 1">
								</div>
								<div class="portfolio-content">
									<h5>on verge of rain record</h5>
									<h6>William John</h6>
								</div>
							</a>
						</div>
						<!--// Single Portfolio -->

						<!-- Single Portfolio -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
							<a href="images/portfolio/lg-size/portfolio-image-large-2.jpg" class="portfolio">
								<div class="portfolio-thumb">
									<img src="images/portfolio/portfolio-image-2.jpg" alt="portfolio thumb 2">
								</div>
								<div class="portfolio-content">
									<h5>Magnam molestiae neque</h5>
									<h6>Mikel Runolfsson</h6>
								</div>
							</a>
						</div>
						<!--// Single Portfolio -->

						<!-- Single Portfolio -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
							<a href="images/portfolio/lg-size/portfolio-image-large-3.jpg" class="portfolio">
								<div class="portfolio-thumb">
									<img src="images/portfolio/portfolio-image-3.jpg" alt="portfolio thumb 3">
								</div>
								<div class="portfolio-content">
									<h5>Culpa ut id officiis est</h5>
									<h6>Cameron Reynolds</h6>
								</div>
							</a>
						</div>
						<!--// Single Portfolio -->

						<!-- Single Portfolio -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
							<a href="images/portfolio/lg-size/portfolio-image-large-4.jpg" class="portfolio">
								<div class="portfolio-thumb">
									<img src="images/portfolio/portfolio-image-4.jpg" alt="portfolio thumb 4">
								</div>
								<div class="portfolio-content">
									<h5>Libero suscipit nostrum</h5>
									<h6>Blanca Watsica</h6>
								</div>
							</a>
						</div>
						<!--// Single Portfolio -->

						<!-- Single Portfolio -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
							<a href="images/portfolio/lg-size/portfolio-image-large-5.jpg" class="portfolio">
								<div class="portfolio-thumb">
									<img src="images/portfolio/portfolio-image-5.jpg" alt="portfolio thumb 5">
								</div>
								<div class="portfolio-content">
									<h5>Soluta et consequatur</h5>
									<h6>Emil Kub</h6>
								</div>
							</a>
						</div>
						<!--// Single Portfolio -->

						<!-- Single Portfolio -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
							<a href="images/portfolio/lg-size/portfolio-image-large-6.jpg" class="portfolio">
								<div class="portfolio-thumb">
									<img src="images/portfolio/portfolio-image-6.jpg" alt="portfolio thumb 6">
								</div>
								<div class="portfolio-content">
									<h5>Non adipisci quia labore</h5>
									<h6>Jarod Hirthe</h6>
								</div>
							</a>
						</div>
						<!--// Single Portfolio -->

						<!-- Single Portfolio -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
							<a href="images/portfolio/lg-size/portfolio-image-large-7.jpg" class="portfolio">
								<div class="portfolio-thumb">
									<img src="images/portfolio/portfolio-image-7.jpg" alt="portfolio thumb 7">
								</div>
								<div class="portfolio-content">
									<h5>Et qui molestiae odio</h5>
									<h6>Jessie Lindgren</h6>
								</div>
							</a>
						</div>
						<!--// Single Portfolio -->

						<!-- Single Portfolio -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
							<a href="images/portfolio/lg-size/portfolio-image-large-8.jpg" class="portfolio">
								<div class="portfolio-thumb">
									<img src="images/portfolio/portfolio-image-8.jpg" alt="portfolio thumb 8">
								</div>
								<div class="portfolio-content">
									<h5>Aut animi dolorem</h5>
									<h6>Bernie Pouros</h6>
								</div>
							</a>
						</div>
						<!--// Single Portfolio -->

					</div>
				</div>
			</section>
			<!--// Portfolio Area -->

			<!-- Events Area -->
			<section class="cr-section events-area bg-image-3 section-padding-md" data-black-overlay="2">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-8 col-md-10 col-12">
							<div class="section-title section-title-white text-center">
								<h2>UPCOMING EVENTS</h2>
								<p>Upcoming Events. Here you can find all of the latest and greatest events for Blazen</p>
							</div>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-lg-4">
							<div class="events-triggers text-left text-lg-right">
								<h4 class="upcoming-event-title">May 21-26, 2018</h4>

								<ul class="nav" id="upcoming-events" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" id="upcoming-eventlist-1-tab" data-toggle="tab" href="#upcoming-eventlist-1" role="tab" aria-controls="upcoming-eventlist-1" aria-selected="true">21 Monday</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="upcoming-eventlist-2-tab" data-toggle="tab" href="#upcoming-eventlist-2" role="tab" aria-controls="upcoming-eventlist-2" aria-selected="false">22 Tuesday</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="upcoming-eventlist-3-tab" data-toggle="tab" href="#upcoming-eventlist-3" role="tab" aria-controls="upcoming-eventlist-3" aria-selected="false">23 Wednesday</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="upcoming-eventlist-4-tab" data-toggle="tab" href="#upcoming-eventlist-4" role="tab" aria-controls="upcoming-eventlist-4" aria-selected="false">24 Thursday</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="upcoming-eventlist-5-tab" data-toggle="tab" href="#upcoming-eventlist-5" role="tab" aria-controls="upcoming-eventlist-5" aria-selected="false">25 Friday</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="upcoming-eventlist-6-tab" data-toggle="tab" href="#upcoming-eventlist-6" role="tab" aria-controls="upcoming-eventlist-6" aria-selected="false">26 Saturday</a>
									</li>
								</ul>  

							</div>
						</div>
						<div class="col-lg-8">
							<div class="tab-content" id="upcoming-events-ontent">

								<div class="events-wrap tab-pane fade show active" id="upcoming-eventlist-1" role="tabpanel" aria-labelledby="upcoming-eventlist-1-tab">

									<!-- Single Upcoming Event -->
									<a href="event-details.html" class="event-single">
										<div class="event-thumb">
											<img src="images/events/upcoming-events/event-thumb-1.jpg" alt="upcoming event thumb">
										</div>
										<div class="event-content">
											<p>The array of paintings and sculptures on display at the exhibition hall of Russian Centre of Science and Culture here is unusual in several respects.</p>
											<span>12:00 am - 2:25 pm</span>
										</div>
									</a>
									<!--// Single Upcoming Event -->

									<!-- Single Upcoming Event -->
									<a href="event-details.html" class="event-single">
										<div class="event-thumb">
											<img src="images/events/upcoming-events/event-thumb-2.jpg" alt="upcoming event thumb">
										</div>
										<div class="event-content">
											<p>The array of paintings and sculptures on display at the exhibition hall of Russian Centre of Science and Culture here is unusual in several respects.</p>
											<span>2:25 pm - 6:25 pm</span>
										</div>
									</a>
									<!--// Single Upcoming Event -->

									<!-- Single Upcoming Event -->
									<a href="event-details.html" class="event-single">
										<div class="event-thumb">
											<img src="images/events/upcoming-events/event-thumb-3.jpg" alt="upcoming event thumb">
										</div>
										<div class="event-content">
											<p>The array of paintings and sculptures on display at the exhibition hall of Russian Centre of Science and Culture here is unusual in several respects.</p>
											<span>8:00 pm - 10:00 pm</span>
										</div>
									</a>
									<!--// Single Upcoming Event -->

								</div>

								<div class="events-wrap tab-pane fade" id="upcoming-eventlist-2" role="tabpanel" aria-labelledby="upcoming-eventlist-2-tab">

									<!-- Single Upcoming Event -->
									<a href="event-details.html" class="event-single">
										<div class="event-thumb">
											<img src="images/events/upcoming-events/event-thumb-4.jpg" alt="upcoming event thumb">
										</div>
										<div class="event-content">
											<p>The array of paintings and sculptures on display at the exhibition hall of Russian Centre of Science and Culture here is unusual in several respects.</p>
											<span>12:00 am - 2:25 pm</span>
										</div>
									</a>
									<!--// Single Upcoming Event -->

									<!-- Single Upcoming Event -->
									<a href="event-details.html" class="event-single">
										<div class="event-thumb">
											<img src="images/events/upcoming-events/event-thumb-5.jpg" alt="upcoming event thumb">
										</div>
										<div class="event-content">
											<p>The array of paintings and sculptures on display at the exhibition hall of Russian Centre of Science and Culture here is unusual in several respects.</p>
											<span>2:25 pm - 6:25 pm</span>
										</div>
									</a>
									<!--// Single Upcoming Event -->

									<!-- Single Upcoming Event -->
									<a href="event-details.html" class="event-single">
										<div class="event-thumb">
											<img src="images/events/upcoming-events/event-thumb-6.jpg" alt="upcoming event thumb">
										</div>
										<div class="event-content">
											<p>The array of paintings and sculptures on display at the exhibition hall of Russian Centre of Science and Culture here is unusual in several respects.</p>
											<span>8:00 pm - 10:00 pm</span>
										</div>
									</a>
									<!--// Single Upcoming Event -->
																			
								</div>

								<div class="events-wrap tab-pane fade" id="upcoming-eventlist-3" role="tabpanel" aria-labelledby="upcoming-eventlist-3-tab">

									<!-- Single Upcoming Event -->
									<a href="event-details.html" class="event-single">
										<div class="event-thumb">
											<img src="images/events/upcoming-events/event-thumb-7.jpg" alt="upcoming event thumb">
										</div>
										<div class="event-content">
											<p>The array of paintings and sculptures on display at the exhibition hall of Russian Centre of Science and Culture here is unusual in several respects.</p>
											<span>12:00 am - 2:25 pm</span>
										</div>
									</a>
									<!--// Single Upcoming Event -->

									<!-- Single Upcoming Event -->
									<a href="event-details.html" class="event-single">
										<div class="event-thumb">
											<img src="images/events/upcoming-events/event-thumb-8.jpg" alt="upcoming event thumb">
										</div>
										<div class="event-content">
											<p>The array of paintings and sculptures on display at the exhibition hall of Russian Centre of Science and Culture here is unusual in several respects.</p>
											<span>2:25 pm - 6:25 pm</span>
										</div>
									</a>
									<!--// Single Upcoming Event -->

									<!-- Single Upcoming Event -->
									<a href="event-details.html" class="event-single">
										<div class="event-thumb">
											<img src="images/events/upcoming-events/event-thumb-9.jpg" alt="upcoming event thumb">
										</div>
										<div class="event-content">
											<p>The array of paintings and sculptures on display at the exhibition hall of Russian Centre of Science and Culture here is unusual in several respects.</p>
											<span>8:00 pm - 10:00 pm</span>
										</div>
									</a>
									<!--// Single Upcoming Event -->

								</div>

								<div class="events-wrap tab-pane fade" id="upcoming-eventlist-4" role="tabpanel" aria-labelledby="upcoming-eventlist-4-tab">

									<!-- Single Upcoming Event -->
									<a href="event-details.html" class="event-single">
										<div class="event-thumb">
											<img src="images/events/upcoming-events/event-thumb-10.jpg" alt="upcoming event thumb">
										</div>
										<div class="event-content">
											<p>The array of paintings and sculptures on display at the exhibition hall of Russian Centre of Science and Culture here is unusual in several respects.</p>
											<span>12:00 am - 2:25 pm</span>
										</div>
									</a>
									<!--// Single Upcoming Event -->

									<!-- Single Upcoming Event -->
									<a href="event-details.html" class="event-single">
										<div class="event-thumb">
											<img src="images/events/upcoming-events/event-thumb-8.jpg" alt="upcoming event thumb">
										</div>
										<div class="event-content">
											<p>The array of paintings and sculptures on display at the exhibition hall of Russian Centre of Science and Culture here is unusual in several respects.</p>
											<span>2:25 pm - 6:25 pm</span>
										</div>
									</a>
									<!--// Single Upcoming Event -->

									<!-- Single Upcoming Event -->
									<a href="event-details.html" class="event-single">
										<div class="event-thumb">
											<img src="images/events/upcoming-events/event-thumb-1.jpg" alt="upcoming event thumb">
										</div>
										<div class="event-content">
											<p>The array of paintings and sculptures on display at the exhibition hall of Russian Centre of Science and Culture here is unusual in several respects.</p>
											<span>8:00 pm - 10:00 pm</span>
										</div>
									</a>
									<!--// Single Upcoming Event -->

								</div>

								<div class="events-wrap tab-pane fade" id="upcoming-eventlist-5" role="tabpanel" aria-labelledby="upcoming-eventlist-5-tab">

									<!-- Single Upcoming Event -->
									<a href="event-details.html" class="event-single">
										<div class="event-thumb">
											<img src="images/events/upcoming-events/event-thumb-2.jpg" alt="upcoming event thumb">
										</div>
										<div class="event-content">
											<p>The array of paintings and sculptures on display at the exhibition hall of Russian Centre of Science and Culture here is unusual in several respects.</p>
											<span>12:00 am - 2:25 pm</span>
										</div>
									</a>
									<!--// Single Upcoming Event -->

									<!-- Single Upcoming Event -->
									<a href="event-details.html" class="event-single">
										<div class="event-thumb">
											<img src="images/events/upcoming-events/event-thumb-3.jpg" alt="upcoming event thumb">
										</div>
										<div class="event-content">
											<p>The array of paintings and sculptures on display at the exhibition hall of Russian Centre of Science and Culture here is unusual in several respects.</p>
											<span>2:25 pm - 6:25 pm</span>
										</div>
									</a>
									<!--// Single Upcoming Event -->

									<!-- Single Upcoming Event -->
									<a href="event-details.html" class="event-single">
										<div class="event-thumb">
											<img src="images/events/upcoming-events/event-thumb-4.jpg" alt="upcoming event thumb">
										</div>
										<div class="event-content">
											<p>The array of paintings and sculptures on display at the exhibition hall of Russian Centre of Science and Culture here is unusual in several respects.</p>
											<span>8:00 pm - 10:00 pm</span>
										</div>
									</a>
									<!--// Single Upcoming Event -->

								</div>

								<div class="events-wrap tab-pane fade" id="upcoming-eventlist-6" role="tabpanel" aria-labelledby="upcoming-eventlist-6-tab">

									<!-- Single Upcoming Event -->
									<a href="event-details.html" class="event-single">
										<div class="event-thumb">
											<img src="images/events/upcoming-events/event-thumb-5.jpg" alt="upcoming event thumb">
										</div>
										<div class="event-content">
											<p>The array of paintings and sculptures on display at the exhibition hall of Russian Centre of Science and Culture here is unusual in several respects.</p>
											<span>12:00 am - 2:25 pm</span>
										</div>
									</a>
									<!--// Single Upcoming Event -->

									<!-- Single Upcoming Event -->
									<a href="event-details.html" class="event-single">
										<div class="event-thumb">
											<img src="images/events/upcoming-events/event-thumb-6.jpg" alt="upcoming event thumb">
										</div>
										<div class="event-content">
											<p>The array of paintings and sculptures on display at the exhibition hall of Russian Centre of Science and Culture here is unusual in several respects.</p>
											<span>2:25 pm - 6:25 pm</span>
										</div>
									</a>
									<!--// Single Upcoming Event -->

									<!-- Single Upcoming Event -->
									<a href="event-details.html" class="event-single">
										<div class="event-thumb">
											<img src="images/events/upcoming-events/event-thumb-7.jpg" alt="upcoming event thumb">
										</div>
										<div class="event-content">
											<p>The array of paintings and sculptures on display at the exhibition hall of Russian Centre of Science and Culture here is unusual in several respects.</p>
											<span>8:00 pm - 10:00 pm</span>
										</div>
									</a>
									<!--// Single Upcoming Event -->

								</div>

							</div>
						</div>
					</div>
				</div>
			</section>
			<!--// Events Area -->

			<!-- Video Promo Area -->
			<div class="cr-section video-promo-area bg-white section-padding-md">
				<div class="container">
					<div class="row">
						<div class="col-lg-7">
							<div class="videobox mr-0 mr-xl-3">
								<div class="embed-responsive embed-responsive-16by9">
									<iframe class="embed-responsive-item" src="https://player.vimeo.com/video/115116347" allowfullscreen></iframe>
								</div>
							</div>
						</div>
						<div class="col-lg-5">
							<div class="video-promo-content">
								<p>Speaking at the launch of the exhibition on Monday, cartoonist Madhan said it was remarkable that the organisers had brought together such an “eclectic mix” of paintings and sculptures.</p>
								<p>Artist and former chairman of National Lalit Kala Akademi, New Delhi, R.B. Bhaskaran said that the paintings exhibited were a sample of Tamil Nadu's art in the last 60 years.</p>
								<p>“Senior artists should do their best to promote younger artists and support them to take up opportunities in India and abroad.</p>
								<a href="about-us.html" class="cr-btn cr-btn-red">
									<span>View More</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--// Video Promo Area -->

        </main>
        <!--// Page Content -->

        <!-- Footer -->
        <div class="footer">

			<!-- Footer Top Area -->
			<div class="footer-top-area bg-dark-light">	
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-5">
							<ul class="footer-social-icons">
								<li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
								<li><a href="https://vimeo.com/"><i class="fa fa-vimeo-square"></i></a></li>
								<li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
								<li><a href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
						<div class="col-lg-7">
							<form action="#" class="footer-newsletter-form">
								<h4>newsletter</h4>
								<input type="email" placeholder="Email address...">
								<input type="submit" value="Subscribe">
							</form>
						</div>
					</div>
				</div>
			</div>
			<!--// Footer Top Area -->

			<!-- Footer Bottom Area -->
			<div class="footer-bottom-area bg-dark section-padding-xs">
				<div class="container">
					<div class="row widgets footer-widgets">

						<div class="col-lg-4">
							<div class="single-widget widget-about">
								<h6 class="widget-title">about us</h6>
								<a href="index.html">
									<img src="images/logo/logo-theme.png" alt="footer logo">
								</a>
								<p>We are a team of designers and developers that create high quality Magento, Prestashop, Opencart themes and provide premium and dedicated support to our products.</p>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="single-widget widget-events">
								<h6 class="widget-title">Our Upcoming Events</h6>
								<ul>
									<li>
										<a href="event-details.html" class="widget-event-thumb">
											<img src="images/events/small-events/small-event-thumb-1.png" alt="footer events">
										</a>
										<h6><a href="event-details.html">When Metro Rail was flooded with.</a></h6>
										<span>October 18, 2018</span>
									</li>
									<li>
										<a href="event-details.html" class="widget-event-thumb">
											<img src="images/events/small-events/small-event-thumb-2.png" alt="footer events">
										</a>
										<h6><a href="event-details.html">When Metro Rail was flooded with.</a></h6>
										<span>October 28, 2018</span>
									</li>
								</ul>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="single-widget widget-contact">
								<h6 class="widget-title">Contact us</h6>
								<ul>
									<li>
										<span class="icon"><i class="fa fa-map-marker"></i></span>
										<p>Address : No 40 Baria Sreet 133/2  NewYork City, NY, United States.</p>
									</li>
									<li>
										<span class="icon"><i class="fa fa-phone"></i></span>
										<p><a href="#">0(1234) 567 890</a></p>
									</li>
									<li>
										<span class="icon"><i class="fa fa-fax"></i></span>
										<p><a href="#">0(1234) 567 890</a></p>
									</li>
									<li>
										<span class="icon"><i class="fa fa-envelope-o"></i></span>
										<p><a href="#">info@example.com</a></p>
									</li>
								</ul>
							</div>
						</div>

					</div>
				</div>
			</div>
			<!--// Footer Bottom Area -->

			<!-- Footer Copyright Area -->
			<div class="footer-copyright-area bg-dark">
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
    <script src="js/vendor/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/active.js"></script>
    <script src="js/scripts.js"></script>
</body>


<!-- Mirrored from demo.devitems.com/blazen-v1/index-single-banner.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Oct 2020 16:00:19 GMT -->
</html>