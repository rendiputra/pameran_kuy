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
                <div class="card-header text-center text-white" style="background-color: #18212e"><h4 class="text-white"> Daftar History Laporan </h4></div>

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
                    <a href="/admin/list_laporan" class="btn btn-primary mr-3 text-white">Daftar Laporan Post</a>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-bordered mt-3 mb-3">
                            <thead>
                            <tr>
                                {{-- <th scope="col">#</th> --}}
                                <th scope="col">Nama Karya</th>
                                <th scope="col">Pelapor</th>
                                <th scope="col">Pesan</th>
                                <th scope="col">Status Laporan</th>
                                <th scope="col">Status Postingan</th>
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
                                    @if($k->status_report==0)
                                            <span class="badge badge-secondary">Menunggu Konfirmasi</span>
                                        @elseif ($k->status_report==1)
                                            <span class="badge badge-success">Diterima</span>
                                        @elseif ($k->status_report==2)
                                            <span class="badge badge-danger">Ditolak</span>
                                    @endif
                                </td>
                                <td>
                                    @if($k->status==0)
                                            <span class="badge badge-secondary">Menunggu Konfirmasi</span>
                                        @elseif ($k->status==1)
                                            <span class="badge badge-success">On Air</span>
                                        @elseif ($k->status==2)
                                            <span class="badge badge-danger">Off Air</span>
                                        @elseif ($k->status==3)
                                            <span class="badge badge-dark">Dihapus</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="/admin/list_antrian_karya/detail/{{$k->id_karya}}" class="btn btn-primary mr-2 mb-2 text-white">Detail</a>
                                    
                                </td>
                            </tr>

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