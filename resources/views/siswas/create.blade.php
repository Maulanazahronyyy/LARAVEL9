@extends('dashboard')
@section('siswa')

@php
$title= 'Data';
$pretitle= 'Semua Siswa';
@endphp

<div class="card">

  <div class="card-body">

<form action="{{ route('siswas.store') }}" class="" method="post">
  @csrf

  <div class="mb-3">
    <label class="form-label">Nama</label>
  <input type="text" name="nama" class="form-control" name="example-text-input" placeholder="Masukkan Nama">
    </div>

    <div class="mb-3">
    <label class="form-label">Kelas</label>
  <input type="text" name="kelas" class="form-control" name="example-text-input" placeholder="Masukkan Kelas">
    </div>

    <div class="mb-3">
    <label class="form-label">Alamat</label>
  <input type="text" name="alamat" class="form-control" name="example-text-input" placeholder="Masukkan Alamat">
    </div>

    <div class="mb-3">
    <label class="form-label">NIS</label>
  <input type="text" name="nis" class="form-control" name="example-text-input" placeholder="Masukkan NIS">
    </div>

    <div class="mb-3"></div>
    <input type="submit" value="Simpan" class="btn btn-primary">
  </div>


</div>
  </div>
</div>
</form>
@endsection