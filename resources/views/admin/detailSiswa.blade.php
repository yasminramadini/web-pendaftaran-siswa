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
    @if(!$siswa->diterima)
    <form method="post" action="{{ route('siswaDiterima', ['id' => $siswa->id]) }}">
      @csrf
      @method('PUT')
      <x-button color="#fff" background="{{ $pengaturan->tema }}"><i class="fas fa-check-circle"></i> Terima</x-buttoncolor>
      @if($siswa->email)
      <div class="mt-2">
        <input type="checkbox" class="form-check-input" name="kirimEmail" id="kirimEmail">
        <label for="kirimEmail" class="form-check-label">Kirim email pemberitahuan</label>
      </div>
      @endif
    </form>
    @endif
    <form class="mt-4" method="post" action="{{ route('siswaTidakDiterima', ['id' => $siswa->id]) }}">
      @csrf
      @method('PUT')
      <x-button color="#fff" background="#E20020"><i class="fas fa-ban"></i> Tolak</x-buttoncolor>
      @if($siswa->email)
      <div class="mt-2">
        <input type="checkbox" class="form-check-input" name="kirimEmail" id="kirimEmail2">
        <label for="kirimEmail2" class="form-check-label">Kirim email pemberitahuan</label>
      </div>
      @endif
    </form>
  </div>
</div>

@endsection