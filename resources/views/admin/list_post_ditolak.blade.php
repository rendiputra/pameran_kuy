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
                <div class="card-header text-center text-white" style="background-color: #18212e"><h4 class="text-white"> Daftar Post Karya Seni Yang Ditolak</h4></div>

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
                    <a href="/admin/list_antrian_karya" class="btn btn-primary mr-3 text-white">List Antrian Post</a>
                    <a href="/admin/list_post_diterima" class="btn btn-success mr-3 text-white">List Post Diterima</a>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered mt-3 mb-3">
                            <thead>
                            <tr>
                                <th scope="col">Nama Karya</th>
                                <th scope="col">Nama Seniman</th>
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
                                <td>{{$k->nama_seniman}}</td>
                                <td >
                                    <!-- Button trigger modal -->
                                    <a href="/admin/list_antrian_karya/detail/{{$k->id_karya}}" class="btn btn-primary mr-2 mb-2 text-white">Detail</a>
                                    <button type="button" class="btn btn-success mr-2 text-white" data-toggle="modal" data-target="#exampleModal{{$i}}">
                                            Terima
                                    </button>
                                    {{-- <button type="button" class="btn btn-warning mr-2" data-toggle="modal" data-target="#exampleModal2{{$i}}">
                                            Hapus
                                    </button> --}}
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
                                        Apakah anda yakin untuk menerima post "{{$k->nama_karya}}" ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <form method="POST" action="{{ route('list_antrian_detail_diterima',$k->id_karya) }}">
                                                @csrf
                                                <button type="submit" class="btn btn-success text-white" style="font-size: 1.23rem;">Terima</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            {{-- <!-- Modal Tolak -->
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
                                            Apakah anda yakin untuk menolak post "{{$k->nama_karya}}" ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <form method="POST" action="/admin/list_antrian_karya/detail/{{$k->id_karya}}">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-warning">Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
    @endforeach
@else
                            <tr><th colspan="4" class="text-center">--- Tidak ada data ---</th></tr> 
@endif

                            </tbody>
                        </table>
                        <br>
                        <div class="d-flex justify-content-center">
                            {!! $karya->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="spacer"></div>
@endsection