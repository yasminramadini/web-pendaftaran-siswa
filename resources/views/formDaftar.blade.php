@extends('layouts')

@section('content')

<div class="row justify-content-center">
  <div class="col-lg-6">
    <h1 class="text-center">Form Pendaftaran Siswa Baru {{ $pengaturan->nama_sekolah }} TP {{ date('Y') }}/{{ date('Y', strtotime('+1 years')) }}</h1>
    <hr>
    
    @if(session('msg'))
    <x-alert type="success">
      {{ session('msg') }}
    </x-alert>
    @endif
    
    <form class="mt-4" method="post" action="{{ route('siswa.store') }}" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <label class="mb-1">Nama lengkap</label>
        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" autocomplete="off" value="{{ old('nama') }}" required>
        @error('nama')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label class="mb-1">Asal sekolah</label>
        <input type="text" name="asal_sekolah" class="form-control @error('asal_sekolah') is-invalid @enderror" placeholder="Ex: SD Laravel" autocomplete="off" value="{{ old('asal_sekolah') }}" required>
        @error('asal_sekolah')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label class="mb-1">Tempat, Tanggal lahir</label>
        <div class="row g-3">
          <div class="col-md-6">
            <input type="text" name="kota_lahir" placeholder="Kota" class="form-control @error('kota_lahir') is-invalid @enderror" autocomplete="off" value="{{ old('kota_lahir') }}" required>
            @error('kota_lahir')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="col-md-6">
            <input type="date" name="tgl_lahir" class="form-control @error('tgl_lahir') is-invalid @enderror" placeholder="Tanggal" value="{{ old('tgl_lahir') }}" required>
            @error('tgl_lahir')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
        </div>
      </div>
      <div class="mb-3">
        <label class="mb-1">Jenis kelamin</label>
        <select class="form-control @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin">
          <option value="laki-laki" @if(old('jenis_kelamin') === 'laki-laki') selected @endif>Laki-laki</option>
          <option value="perempuan" @if(old('jenis_kelamin') === 'perempuan') selected @endif>Perempuan</option>
        </select>
        @error('jenis_kelamin')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label class="mb-1">Agama</label>
        <input type="text" name="agama" class="form-control @error('agama') is-invalid @enderror" autocomplete="off" value="{{ old('agama') }}" required>
        @error('agama')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label class="mb-1">Nomor Induk Kependudukan (NIK)</label>
        <input type="number" name="nik" class="form-control @error('nik') is-invalid @enderror" placeholder="Ex: 16 digit angka" autocomplete="off" value="{{ old('nik') }}" required>
        @error('nik')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label class="mb-1">Telepon</label>
        <input type="number" name="telepon" class="form-control @error('telepon') is-invalid @enderror" autocomplete="off" value="{{ old('telepon') }}" required>
        @error('telepon')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label class="mb-1">Email (Jika ada)</label>
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" autocomplete="off">
        @error('email')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label class="mb-1">Alamat</label>
        <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" required>{{ old('alamat') }}</textarea>
        @error('alamat')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label class="mb-1">Pas Foto</label>
        <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror" value="{{ old('foto') }}" required>
        @error('foto')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <x-button color="#fff" background="#008AFF">Submit</x-buttoncolor>
    </form>
  </div>
</div>

@endsection