@extends('layouts')

@section('content')

<div class="row justify-content-center">
  <div class="col-lg-6">
    <h1 class="text-center">Form Pendaftaran Siswa Baru Gelombang 1 SMP Laravel TP 2022/2023</h1>
    <hr>
    <form class="mt-4">
      <div class="mb-3">
        <label class="mb-1">Nama lengkap</label>
        <input type="text" name="nama" class="form-control" autocomplete="off">
      </div>
      <div class="mb-3">
        <label class="mb-1">Asal sekolah</label>
        <input type="text" name="nama" class="form-control" placeholder="Ex: SD Laravel" autocomplete="off">
      </div>
      <div class="mb-3">
        <label class="mb-1">Tempat, Tanggal lahir</label>
        <div class="row g-3">
          <div class="col-md-6">
            <input type="text" name="kota-lahir" placeholder="Kota" class="form-control" autocomplete="off">
          </div>
          <div class="col-md-6">
            <input type="date" name="tgl-lahir" class="form-control" placeholder="Tanggal">
          </div>
        </div>
      </div>
      <div class="mb-3">
        <label class="mb-1">Jenis kelamin</label>
        <select class="form-control" name="jenis_kelamin">
          <option value="laki-laki">Laki-laki</option>
          <option value="perempuan">Perempuan</option>
        </select>
      </div>
      <div class="mb-3">
        <label class="mb-1">Agama</label>
        <input type="text" name="agama" class="form-control" placeholder="Ex: SD Laravel" autocomplete="off">
      </div>
      <div class="mb-3">
        <label class="mb-1">Nomor Induk Kependudukan (NIK)</label>
        <input type="number" name="nisn" class="form-control" placeholder="Ex: 16 digit angka" autocomplete="off" max="16" min="16">
      </div>
      <div class="mb-3">
        <label class="mb-1">Telepon</label>
        <input type="number" name="number" class="form-control" autocomplete="off">
      </div>
      <div class="mb-3">
        <label class="mb-1">Email (Jika ada)</label>
        <input type="email" name="nama" class="form-control" placeholder="Ex: SD Laravel" autocomplete="off">
      </div>
      <div class="mb-3">
        <label class="mb-1">Alamat</label>
        <textarea class="form-control"></textarea>
      </div>
      <x-button message="submit" color="#fff" background="#008AFF" />
    </form>
  </div>
</div>

@endsection