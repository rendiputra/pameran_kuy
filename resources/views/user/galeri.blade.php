@extends('layouts.admin')
@section('title','Galeri')
@section('css')
	.bg-warna{
		background-color: #00031f;
	}
	.spacee{
		width: 100%;
		height: 25px;
	}
@endsection
@section('content')
 <!-- Typical Author Area -->
 <section class="cr-section authors-area bg-image-2 section-padding-md" data-black-overlay="8">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-8 col-md-10 col-12">
							<div class="section-title section-title-white text-center">
								<br><h2>GALERI</h2>
								<center><hr style="width: 50px; border: 3px solid #fff; border-radius: 5px;" class="text-center"></center>
							</div>
						</div>
					</div>
					
					<div class="row no-gutters justify-content-center">


@foreach ($data as $d)
						<div class="card mr-2 mt-2 ml-2 mb-2 col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12" style="width: 18rem; max-height: 30rem;">
							<a href="/galeri/detail/{{$d->id_karya}}">
								<img class="card-img-top" src="{{ asset('foto_karya')}}/{{ $d->gambar}}" alt="{{$d->nama_karya}}" style="max-height: 18rem; ">
									<div class="card-body " style="max-height: 10rem;">
										<h5 class="card-title text-center">"{{ substr($d->nama_karya, 0,  20) }}"</h5>
									<p class="card-text text-center text-dark">{{$d->nama_seniman}} - {{$d->tahun_karya}}</p>
									</div>
							</a>
						</div>
@endforeach

					</div>
					{{-- Pagination --}}<br><br><br>
					<div class="d-flex justify-content-center">
						{!! $data->links() !!}
					</div>
				</div>
				
				<div class="spacee"></div>
			</section>
			<!--// Typical Author Area -->
@endsection