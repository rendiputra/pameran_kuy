@extends('layouts.admin')
@section('title','Detail Galeri')
@section('css')
.spacee{
    width: 100%;
    height: 100px;
}
.body{
    font-family: 'Nunito', sans-serif;
}
p{
    font-size: 1.23rem;
}
@endsection
@section('content')
<section class="cr-section authors-area bg-image-2 section-padding-md" data-black-overlay="8">
    <div class="container">
        <div class="row justify-content-center " >
            <div class="col-lg-8 col-md-10 col-12">
                <div class="section-title section-title-white text-center">
                    <br><h2 style="font-size: 1.23rem">DETAIL KARYA</h2>
                    <center><hr style="width: 50px; border: 3px solid rgb(255, 255, 255); border-radius: 5px;" class="text-center"></center>
                </div>
            </div>
        </div>
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" style="font-size: 1.23rem">Detail</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" style="font-size: 1.23rem">Diskusi</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 style="font-size: 1.93rem">{{$data->nama_karya}}</h3>
                        <div class="text-center">
                            <img src="{{ asset('foto_karya')}}/{{ $data->gambar}}" class="rounded" alt="{{$data->nama_karya}}" style="max-width: 400px;">
                        </div>
                        <br>
                        <div class="row justify-content-center text-center">
                            <div class="col-auto">
                                <table style="margin-left: auto; margin-right: auto; font-size: 1.23rem;">
                                    <tr>
                                      <td>Seniman</td>
                                      <td>:</td>
                                      <td><strong>{{$data->nama_seniman}}</strong></td>
                                    </tr>
                                    <tr>
                                      <td>Tahun</td>
                                      <td>:</td>
                                      <td><strong>{{$data->tahun_karya}}</strong></td>
                                    </tr>
                                    <tr>
                                      <td>Media</td>
                                      <td>:</td>
                                      <td><strong>{{$data->media}}</strong></td>
                                    </tr>
                                    <tr>
                                      <td>Ukuran</td>
                                      <td>:</td>
                                      <td><strong style="font-size: 1.23rem">{{$data->dimensi}}</strong></td>
                                    </tr>
                                    <tr>
                                  </table>
                            </div>
                        </div>
                        @php
                            $str = $data->deskripsi;
                            // $len = strlen($str);
                        @endphp
                        <div class="ml-4 mr-5 @if (strlen($str) <= 100) text-center @else  text-justify @endif" style="font-size: 15.9rem" >
                            <br>{!! $data->deskripsi !!}
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <p>
                        Where can I get some? There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                    </div>
                    </div>
            </div>
          </div>
    
          
        </div>
        <div class="spacee"></div>
    </section>
@endsection
