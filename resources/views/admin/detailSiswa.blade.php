@extends('layouts')

@section('content')

<div class="row justify-content-center">
  <div class="col-lg-6">
    <img src="{{ asset('storage/foto/' . $siswa->foto) }}" width="200px" alt="Pas foto" class="d-block mx-auto img-thumbnail my-4">
    <table cellpadding="10px" class="mb-4">
      <tr>
        <th>Nama:</th>
        <td>{{ $siswa->nama }}</td>
      </tr>
      <tr>
        <th>Asal sekolah:</th>
        <td>{{ $siswa->asal_sekolah }}</td>
      </tr>
      <tr>
        <th>Tanggal lahir:</th>
        <td>{{ $siswa->tgl_lahir }} ( {{ $siswa->umur }} tahun)</td>
      </tr>
      <tr>
        <th>Agama:</th>
        <td>{{ $siswa->agama }}</td>
      </tr>
      <tr>
        <th>NIK:</th>
        <td>{{ $siswa->nik }}</td>
      </tr>
      <tr>
        <th>Telepon:</th>
        <td>{{ $siswa->telepon }}</td>
      </tr>
      <tr>
        <th>Email:</th>
        <td>{{ $siswa->email }}</td>
      </tr>
      <tr>
        <th>Alamat:</th>
        <td>{{ $siswa->alamat }}</td>
      </tr>
    </table>
    <x-button color="#fff" background="#008AFF"><i class="fas fa-check-circle"></i> Terima</x-buttoncolor>
    <x-button color="#fff" background="#E20020"><i class="fas fa-ban"></i> Tolak</x-buttoncolor>
  </div>
</div>

@endsection