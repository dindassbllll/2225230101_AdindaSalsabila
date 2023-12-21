@extends('layout.template')
<!-- START DATA -->
@section('konten')
<h2 style="margin: 2rem 0">Ayoo lakukan kegiatan</h2>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">
            <i class="fas fa-home"></i> Home
        </li>
    </ol>
</nav>

<div class="my-3 p-3 bg-body rounded shadow-sm">
        <!-- FORM PENCARIAN -->
        <div class="pb-3">
            <form class="d-flex" action="{{ url('todo') }}" method="get">
                <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                <button class="btn btn-warning" type="submit">Cari</button>
            </form>
        </div>
        
        <!-- TOMBOL TAMBAH DATA -->
        <div class="pb-3">
            <a href='{{ url('todo/create') }}' class="btn btn-warning">+ Tambah Data</a>
        </div>
          <table class="table table-warning table-hover">
            <thead>
              <tr>
                <th class="col-md-1">No</th>
                <th class="col-md-2">Kegiatan</th>
                <th class="col-md-2">Tanggal</th>
                <th class="col-md-2">Aksi</th>
              </tr>
            </thead>
            <tbody>
                <?php $i = $data->firstitem() ?>
                @foreach ($data as $item)
              <tr>
                  <td>{{ $i }}</td>
                  <td>{{ $item->kegiatan }}</td>
                  <td>{{ $item->tanggal }}</td>
                  <td>
                      <a href='{{ url('todo/'.$item->id_kegiatan.'/edit') }}' class="btn btn-outline-success btn-sm">Edit</a>
                      <form  onsubmit="return confirm('Yakin akan hapus kegiatan data?')" action="{{ url('todo/'.$item->id_kegiatan) }}" class="d-inline" method="post">
                          @csrf
                          @method('DELETE')
                          <button type="submit" name="submit" class="btn btn-outline-danger btn-sm">Del</button>
                      </form>
                  </td>
                  <?php $i++ ?>
                @endforeach
              </tr>
            </tbody>
          </table>
        {{ $data->withQueryString()->links() }} 
</div>
<!-- AKHIR DATA -->
@endsection
