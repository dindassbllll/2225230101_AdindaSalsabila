@extends('layout.template')
<!-- START FORM -->
@section('konten')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page">
          <i class="fas fa-home"></i> Home
      </li>
      <li class="breadcrumb-item active" aria-current="page">
        Tambah Kegiatan
      </li>
  </ol>
</nav>

<form action='{{ url('todo') }}' method='post'>
@csrf
  <div class="my-3 p-3 bg-body rounded shadow-sm ">
    <a href="{{ url('todo') }}" class="btn btn-secondary"><< Kembali</a>
    <div class="col-12 col-md-7 mb-5">
      <div class="mb-3 row">
          <label for="kegiatan" class="col-sm-2 col-form-label">Kegiatan</label>
          <div class="col-sm-10">
              <input type="text" class="form-control" name='kegiatan' value="{{ Session::get ('kegiatan') }}" id="kegiatan">
          </div>
      </div>
      <div class="mb-3 row">
          <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
          <div class="col-sm-10">
              <input type="date" class="form-control" name='tanggal' value="{{ Session::get ('tanggal') }}" id="tanggal">
          </div>
      </div>
      <div class="mb-3 row" style="margin-top: 1rem">
        <label for="tanggal" class="col-sm-2 col-form-label"></label>
          <div class="col-sm-10"><button type="submit" class="btn btn-secondary" name="submit">SIMPAN</button></div>
      </div>    
  </div>
</form>
<!-- AKHIR FORM -->    
@endsection

