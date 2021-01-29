@extends('layouts.admin')
@section('title', 'Dashboard')
@section('css')
    p{
        font-size: 1.23rem;
    }
@endsection
@section('content')
<div class="spacer"></div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card" style="box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);">
                <div class="card-header text-center text-white" style="background-color: #18212e"><h4 class=" text-white"> Daftar Laporan Post</h4></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (\Session::has('error'))
                        <div class="alert alert-warning alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Peringatan!</strong> {{\Session::get('error')}}
                        </div>
                    @elseif (\Session::has('sukses'))
                        <div class="alert alert-success alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Sukses!</strong> {{\Session::get('sukses')}}
                        </div>
                    @endif
                    {{-- <h4 class="text-center"> Daftar Antrian Karya Seni </h4> --}}
                    <a href="/admin/list_laporan/history" class="btn btn-primary mr-3 text-white">Daftar History Laporan</a>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered mt-3 mb-3">
                            <thead>
                            <tr>
                                {{-- <th scope="col">#</th> --}}
                                <th scope="col">Nama Karya</th>
                                <th scope="col">Pelapor</th>
                                <th scope="col">Pesan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
@php
$i = 1;
@endphp
@if (!empty($jml))
@foreach ($data as $k)
                            <tr>
                                {{-- <th scope="row">{{$i++}}</th> --}}
                                <td>{{$k->nama_karya}}</td>
                                <td>{{$k->name}}</td>
                                <td>"{{$k->pesan}}"</td>
                                <td>
                                    <a href="/admin/list_antrian_karya/detail/{{$k->id_karya}}" class="btn btn-primary mr-2 mb-2  text-white">Detail</a>
                                    <button type="button" class="btn btn-success mr-2 mb-2  text-white" data-toggle="modal" data-target="#exampleModal{{$i}}">
                                        Terima Laporan
                                    </button>
                                    <button type="button" class="btn btn-warning mr-2" data-toggle="modal" data-target="#exampleModal2{{$i}}">
                                        Tolak Laporan
                                    </button>
                                    
                                </td>
                            </tr>

                            <!-- Modal Terima -->
                            <div class="modal fade" id="exampleModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                        Apakah anda yakin untuk menerima laporan post dan menghapus post "{{$k->nama_karya}}" ?
                                        </div> 
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <form method="POST" action="{{ route('terima_laporan_act', $k->id_report) }}">
                                                @csrf
                                                <button type="submit" class="btn btn-warning" style="font-size: 1.23rem;">Terima laporan</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            

                            <!-- Modal Ditolak -->
                            <div class="modal fade" id="exampleModal2{{$i++}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah anda yakin untuk menolak laporan post dan membiarkan post "{{$k->nama_karya}}" untuk tetap terbit ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <form method="POST" action="{{ route('tolak_laporan_act', $k->id_report) }}">
                                                @csrf
                                                <button type="submit" class="btn btn-warning" >Tolak Laporan</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
    @endforeach
@else
                            <tr><th colspan="4" class="text-center">--- Tidak ada data ---</th></tr> 
@endif

                            </tbody>
                        </table>
                        <br>
                        <div class="d-flex justify-content-center">
                            {!! $data->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="spacer"></div>
@endsection