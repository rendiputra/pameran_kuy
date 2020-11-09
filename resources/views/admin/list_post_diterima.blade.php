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
            <div class="card">
                <div class="card-header text-center text-white" style="background-color: #18212e"><h4 class="text-white"> Daftar Post Karya Seni Yang Diterima</h4></div>

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
                    <a href="/admin/list_antrian_karya" class="btn btn-primary mr-3">List Antrian Post</a>
                    <a href="/admin/list_post_ditolak" class="btn btn-danger mr-3">List Post Ditolak</a>
                    <div class="table-responsive">
                        <table class="table table-striped mt-3 mb-3">
                            <thead>
                            <tr>
                                <th scope="col">Nama Karya</th>
                                <th scope="col">Tahun Karya</th>
                                <th scope="col">Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
@php
$i = 1;
@endphp
@if (!empty($jml))
    @foreach ($karya as $k)
                            <tr>
                                <td>{{$k->nama_karya}}</td>
                                <td>{{$k->tahun_karya}}</td>
                                <td>
                                    <a href="/admin/list_antrian_karya/detail/{{$k->id_karya}}" class="btn btn-primary mr-2 mb-2">Detail</a>

                                    <form method="POST" action="/admin/list_antrian_karya/detail/{{$k->id_karya}}">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-warning">Tolak</button>
                                    </form>
                                </td>
                            </tr>
    @endforeach
@else
                            <tr><th colspan="4" class="text-center">--- Tidak ada data ---</th></tr> 
@endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="spacer"></div>
@endsection