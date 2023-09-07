@extends('dashboard')

@php
$title= 'Semua Siswa';
$pretitle= 'Data';
@endphp

@push('page-action')
<a href="{{ route('siswas.create')}}" class="btn btn-primary">Tambah Data</a>
@endpush

@section('siswa')
<div class="card">
<div class="table-responsive">

  <table class="table table-vcenter card-table">
                      <thead>
                        <tr>
                          <th>Nama</th>
                          <th>Alamat</th>
                          <th>Kelas</th>
                          <th>Nis</th>
                          <th class="w-1"></th>

</tr>
</thead>

<tbody>

    @foreach ($siswas as $siswa)
  

    <tr>
    

        <td class="text-secondary">{{ $siswa->nama }}</td>
        <td class="text-secondary">{{ $siswa->alamat }}</td>
        <td class="text-secondary">{{ $siswa->kelas }}</td>
        <td class="text-secondary">{{ $siswa->nis }}</td>   
        <td>
              <a href="{{ route('siswas.edit', $siswa->id) }}">Edit</a>
              <form action="{{ route('siswas.destroy', $siswa->id) }}" method="post">
                @csrf

                @method('DELETE')
                
                <input type="submit" value="Hapus" class="btn btn-danger btn-sm">
              </form>
        </td> 
    </tr>

    @endforeach 


</tbody>
</table>
</div>
</div>
                 

@endsection