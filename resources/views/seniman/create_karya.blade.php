@extends('layouts.admin')
@section('title','Submit Karya')
@section('content')
<div class="spacer"></div>
                       
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);">
                <div class="card-header" style="background-color: #18212e"><h4 style="color: aliceblue" class="text-center">{{ __('Submit Karya') }}</h4></div>

                <div class="card-body">
                  <form  method="POST" action="{{ route('insert_karya') }}" enctype="multipart/form-data">
                    <input class="form-control" type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                      <label>Nama Seniman</label>
                      <input type="text" class="form-control @error('nama_seniman') is-invalid @enderror" name="nama_seniman" placeholder="Nama Seniman" value="{{ old('nama_seniman') }}">
                          @error('nama_seniman')
                            <div class="invalid-feedback">
                              <strong>{{ $message }}</strong>
                            </div>
                          @enderror
                    </div>
                    <div class="form-group">
                      <label>Nama Karya</label>
                      <input type="text" class="form-control @error('nama_karya') is-invalid @enderror" name="nama_karya" placeholder="Nama Karya" value="{{ old('nama_karya') }}">
                        @error('nama_karya')
                          <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                          </div>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label >Tahun</label>
                      <input type="text" class="form-control @error('tahun') is-invalid @enderror" name="tahun" placeholder="2020" value="{{ old('tahun') }}">
                        @error('tahun')
                          <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                          </div>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label >Media</label>
                      <input type="text" class="form-control @error('media') is-invalid @enderror" name="media" placeholder="Kertas" value="{{ old('media') }}">
                      @error('media')
                      <div class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                      </div>
                    @enderror
                    </div>
                    <div class="form-group">
                      <label >Dimensi</label>
                      <input type="text" class="form-control @error('dimensi') is-invalid @enderror" name="dimensi" placeholder="230 x 450" value="{{ old('dimensi') }}">
                      @error('dimensi')
                      <div class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                      </div>
                    @enderror
                    </div>

                    <div class="form-group">
                      <label>Upload foto</label>
                      <input type="file" class="form-control-file @error('up_foto') is-invalid @enderror" name="up_foto" value="{{ old('up_foto') }}">
                      @error('up_foto')
                          <div class="text-danger">
                            <strong>{{ $message }}</strong>
                          </div>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label >Deskripsi</label>
                      <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" placeholder="text">{{ old('deskripsi') }}</textarea>
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