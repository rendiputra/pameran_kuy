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
                  <form>
                    <div class="form-group">
                      <label>Nama Karya:</label>
                      <input type="text" class="form-control" name="nama_karya" aria-describedby="emailHelp" placeholder="Nama Karya">
                      {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                    </div>
                    <div class="form-group">
                      <label >Tahun</label>
                      <input type="text" class="form-control" name="tahun" placeholder="2020">
                    </div>
                    <div class="form-group">
                      <label >Media</label>
                      <input type="text" class="form-control" name="media" placeholder="Kertas">
                    </div>
                    <div class="form-group">
                      <label >Dimensi</label>
                      <input type="text" class="form-control" name="dimensi" placeholder="230 x 450">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlFile1">Upload foto</label>
                      <input type="file" class="form-control-file" name="up_foto"
                    </div>
                    <div class="form-group">
                      <label >Deskripsi</label>
                      <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="text">
                    </div>
                    <div class="form-group align-content-center text-center  ">
                      <button type="submit" class="btn btn-primary">Submit</button>
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
    CKEDITOR.replace( 'deskripsi' );
</script>
@endsection