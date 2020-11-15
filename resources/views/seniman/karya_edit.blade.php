@extends('layouts.admin')
@section('title','Submit Karya')
@section('content')
<div class="spacer"></div> 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: #18212e"><h4 style="color: aliceblue" class="text-center">{{ __('Submit Karya') }}</h4></div>

                <div class="card-body">
                  <div class="alert alert-warning alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Peringatan!</strong> Apabila anda mengedit data karya maka akan dilakukan pengecekan ulang oleh petugas dan akan masuk daftar antrian submit karya.
                  </div>
                <form  method="POST" action="/karya/edit/" enctype="multipart/form-data">
                    <input class="form-control" type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input class="form-control" type="hidden" name="id" value="{{$data->id_karya}}">
                    <div class="form-group">
                      <label>Nama Seniman</label>
                      <input type="text" class="form-control @error('nama_seniman') is-invalid @enderror" name="nama_seniman" placeholder="Nama Seniman" value="{{$data->nama_seniman}}">
                          @error('nama_seniman')
                            <div class="invalid-feedback">
                              <strong>{{ $message }}</strong>
                            </div>
                          @enderror
                    </div>
                    <div class="form-group">
                      <label>Nama Karya</label>
                      <input type="text" class="form-control @error('nama_karya') is-invalid @enderror" name="nama_karya" placeholder="Nama Karya" value="{{$data->nama_karya}}">
                          @error('nama_karya')
                            <div class="invalid-feedback">
                              <strong>{{ $message }}</strong>
                            </div>
                          @enderror
                    </div>
                    <div class="form-group">
                      <label >Tahun</label>
                      <input type="text" class="form-control @error('tahun') is-invalid @enderror" name="tahun" placeholder="2020" value="{{$data->tahun_karya}}">
                        @error('tahun')
                          <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                          </div>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label >Media</label>
                      <input type="text" class="form-control @error('media') is-invalid @enderror" name="media" placeholder="Kertas" value="{{$data->media}}">
                      @error('media')
                      <div class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                      </div>
                    @enderror
                    </div>
                    <div class="form-group">
                      <label >Dimensi</label>
                      <input type="text" class="form-control @error('dimensi') is-invalid @enderror" name="dimensi" placeholder="230 x 450" value="{{$data->dimensi}}">
                      @error('dimensi')
                      <div class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                      </div>
                    @enderror
                    </div>

                    <div class="form-group">
                      <label>Upload foto</label><br>
                      <img src="{{ asset('foto_karya')}}/{{$data->gambar}}" class="align-content-center mt-3 mb-5" style="width: 190px">
                      {{-- <span>Silahkan kosongkan</span><br> --}}
                      <input type="file" class=" @error('up_foto') is-invalid @enderror" name="up_foto" accept="image/*" style="width: 300px">
                      @error('up_foto')
                          <div class="text-danger">
                            <strong>{{ $message }}</strong>
                          </div>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label >Deskripsi</label>
                      <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" placeholder="text" >{{$data->deskripsi}}</textarea>
                      @error('deskripsi')
                          <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                          </div>
                        @enderror
                    </div>
                    <div class="form-group align-content-center text-center  ">
                      <button type="submit" class="btn btn-primary">Submit </button>
                    </div>
                    
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="spacer"></div>
@endsection
@section('js')
  <script src="/vendor/ckeditor/ckeditor.js"></script>
  <script>
      CKEDITOR.replace('deskripsi');
  </script>
@endsection