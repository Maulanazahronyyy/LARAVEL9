@extends('dashboard')
@section('siswa')

@php
$title= 'Data';
$pretitle= 'Edit Data Siswa';
@endphp

<div class="card">

  <div class="card-body">

<form action="{{ route('siswas.update', $siswa->id) }}" class="" method="post">
  @csrf
  @method('PUT')

  <div class="mb-3">
    <label class="form-label">Nama</label>
  <input type="text" name="nama" class="form-control" name="example-text-input"
   placeholder="Masukkan Nama" value="{{ $siswa->nama }}">
    </div>

    <div class="mb-3">
    <label class="form-label">Kelas</label>
  <input type="text" name="kelas" class="form-control" name="example-text-input" 
  placeholder="Masukkan Kelas" value="{{ $siswa->kelas }}">
    </div>

    <div class="mb-3">
    <label class="form-label">Alamat</label>
  <input type="text" name="alamat" class="form-control" name="example-text-input" 
  placeholder="Masukkan Alamat" value="{{ $siswa->alamat }}">
    </div>

    <div class="mb-3">
    <label class="form-label">NIS</label>
  <input type="text" name="nis" class="form-control" name="example-text-input" 
  placeholder="Masukkan NIS" value="{{ $siswa->nis }}">
    </div>

    <div class="mb-3"></div>
    <input type="submit" value="Simpan" class="btn btn-primary">
  </div>


</div>
  </div>
</div>
</form>
@endsection