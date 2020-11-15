<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pameran Karya Untuk Indonesia</title>
    <meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="dicoding:email" content="rendiputrapradana@gmail.com">


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


    <!-- Wrapper -->
    <div id="wrapper" class="wrapper">
        
        <!-- Header -->
        <div class="header header-style-1 header-transparent sticky-header">
            <div class="container">
				<div class="mobile-menu d-block d-lg-none">
					<a href="index.html" class="logo">
						<img src="{{ asset('images/logo/logo3.png')}}" alt="logo theme">
					</a>
				</div>
                <div class="header-inner d-none d-lg-flex">
                    <a href="index.html" class="logo">
                        <img src="images/logo/logo3.png" alt="logo theme">
					</a>
					
					<!-- Nagivation -->
					<nav class="bn-navigation text-right">
						<ul>
							<li><a href="/">home</a></li>
							<li><a href="/galeri">Galeri</a></li>
							<li><a href="/tentang">Tentang Kami</a></li>
							@guest
                            <li><a href="/login" class="btn btn-outline-primary pt-2 pb-2 mr-2 text-white" >Login</a></li>
                            <li><a href="/register" class=" btn btn-primary pt-2 pb-2 ml-2 text-white">Daftar</a></li>
                            @else
                                <li><a href="#" class="text-danger">{{ substr(Auth::user()->name, 0,  20) }}</a>
                                    <ul>
                                        <li><a href="/home">Dashbord</a></li>
                                        @if(Auth::user()->isSuperAdmin == 1)
                                            <li><a href="/admin/list_antrian_karya">List Antrian Post</a></li>
                                            <li><a href="/admin/list_laporan">List Laporan Post</a></li>
                                        @endif
                                        <li>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                        
                                        
                                    </ul>
                                </li>
                            @endguest
                            
						</ul>
					</nav>
                </div>
            </div>
        </div>
        <!--// Header -->

        <!-- Header Banner -->
        <div class="banner-area banner-slider-active">

            <!-- Single Banner -->
            <div class="banner bg-image-3 justify-content-center align-items-center" data-black-overlay="5">
                <div class="container">
                    <div class="banner-text banner-text-white">
					@php
						$date = date("Ymd", strtotime("20-12-2020"));
						$dateNow = date("Ymd", strtotime(now()));
						//dd($dateNow);
					@endphp
					@if	($dateNow<$date)
                        <div class="banner-countbox event-countdown" data-countdown="2020/12/20"></div>
					@endif
                        <h1>Pameran karya untuk Indonesia</h1>
                        <h4>20-31 Desember 2020 | {{$jml_karya}} Karya {{$jml_user}} Seniman</h4>
@guest	
						<a href="/register" class="cr-btn cr-btn-lg cr-btn-blue">
							<span>Daftar Sekarang</span>
						</a>
@endguest
                    </div>
                </div>
            </div>

        </div>
        <!--// Header Banner -->

        <!-- Page Content -->
        <main id="page-content">
            
			<!-- Portfolio Area -->
			<section class="cr-section portfolio-area bg-white section-padding-md">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-8 col-md-10 col-12">
							<div class="section-title text-center">
								<h2>KOLEKSI FAVORIT</h2>
								<center><hr style="width: 50px; border: 3px solid rgb(0, 0, 0); border-radius: 5px;" class="text-center"></center>
							</div>
						</div>
					</div>
					<div class="row justify-content-center portfolios portfolio-popup-gallery-active">

@foreach ($data as $d)
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
							<a href="{{ asset('foto_karya')}}/{{ $d->gambar}}" class="portfolio">
								<div class="portfolio-thumb">
									<img src="{{ asset('foto_karya')}}/{{ $d->gambar}}" alt="{{ substr($d->nama_karya, 0,  50) }} - {{ substr($d->nama_seniman, 0,  50) }}">
								</div>
								<div class="portfolio-content">
									<h5>{{ substr($d->nama_karya, 0,  20) }}</h5>
									<h6>{{ substr($d->nama_seniman, 0,  20) }} - {{$d->tahun_karya}}</h6>
								</div>
							</a>
						</div>
@endforeach

						
						
					</div>
					<div class="button-group mt-1 text-center" >

						<a href="/register" class="cr-btn cr-btn-blue">
							<span>Lihat Lebih Banyak</span>
						</a>							

						
					</div>
				</div>
			</section>
			<!--// Portfolio Area -->

			<!-- About Area -->
            <section class="cr-section about-area   mb-5 mt-3" style="background-color: #f5f5f5"><br><br>
                <div class="container align-content-center">
					<div class="card col-md-12" style="box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);">
						<div class="card-body">
							<div class="about-text text-center">
								<br><br>
								<h2 class="">Pameran Kui</h2>
								<center><hr style="width: 50px; border: 3px solid rgb(0, 0, 0); border-radius: 5px;" ></center>
								<p class="text-justify">Pameran KUI(Karya Untuk Indonesia) adalah Cras lectus dui, porta rhoncus nulla et, maximus tempor justo. In eget neque dui. Vivamus dolor neque, accumsan ac volutpat non, venenatis eu velit. Nulla commodo hendrerit sem a lacinia. Fusce vulputate ante eu mattis hendrerit. Aenean vel luctus mi. Praesent ultrices euismod molestie. Nunc ut felis egestas, tempus erat ac, interdum elit. Fusce vel lectus eu dolor ornare tristique a quis quam. Suspendisse potenti.</p>
								<p class="text-justify">Mauris aliquet lacinia massa, in tincidunt risus euismod vel. Mauris aliquet ac odio eu scelerisque. Vestibulum iaculis lectus eget iaculis egestas. Aenean ac neque urna. Nulla placerat felis at ante tincidunt maximus. Phasellus elementum ultrices augue et scelerisque. Aenean molestie quam nunc, sagittis elementum magna dictum ut. Proin id scelerisque justo, vitae scelerisque massa. Maecenas id ligula vitae libero finibus viverra a quis sem.</p>
								<div class="button-group">
									<a href="/tentang" class="cr-btn cr-btn-blue">
										<span>Lihat Selengkapnya</span>
									</a>
								</div>
							</div>
							
					  </div>
					  
                    
                </div>
            </section>
			<!--// About Area -->


        </main>
        <!--// Page Content -->

        <!-- Footer -->
        <div class="footer">


			<!-- Footer Copyright Area -->
			<div class="footer-copyright-area " style="background-color: #18212e">
				<div class="container">
					<div class="footer-copyright text-center">
						<p style="font-size: 1.23rem">Copyright ©2020 | Challenge Dicoding</p>
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
</html>