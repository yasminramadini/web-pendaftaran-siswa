@extends('layouts')

@section('content')

<h1>Pengaturan</h1>
<hr>
<div class="row justify-content-center">
  <div class="col-lg-6">

    @if(session('msg'))
    <x-alert type="success">
      {{ session('msg') }}
    </x-alert>
    @endif
    <form class="my-3" method="post" action="{{ route('pengaturan.update', ['pengaturan' => $pengaturan->id]) }}" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <input type="hidden" name="logo_lama" value="{{ $pengaturan->logo }}">
      <div class="mb-3">
        <label class="mb-1">Ubah Tema</label>
        <input type="color" name="tema" class="form-control @error('tema') is-invalid @enderror" value="{{ $pengaturan->tema }}">
        @error('tema')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label class="mb-1">Nama sekolah</label>
        <input type="text" name="nama_sekolah" class="form-control @error('nama_sekolah') is-invalid @enderror" value="{{ $pengaturan->nama_sekolah }}">
        @error('nama_sekolah')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label class="mb-1">Alamat sekolah</label>
        <textarea class="form-control @error('alamat_sekolah') is-invalid @enderror" name="alamat_sekolah">{{ $pengaturan->alamat_sekolah }}</textarea>
        @error('alamat_sekolah')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label class="mb-1">Telepon sekolah</label>
        <input type="number" name="telepon_sekolah" class="form-control @error('telepon_sekolah') is-invalid @enderror" value="{{ $pengaturan->telepon_sekolah }}">
        @error('telepon_sekolah')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label class="mb-1">Email sekolah</label>
        <input type="email" name="email_sekolah" class="form-control @error('email_sekolah') is-invalid @enderror" value="{{ $pengaturan->email_sekolah }}">
        @error('email_sekolah')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label class="mb-1">Logo sekolah</label>
        <input type="file" name="logo" class="form-control mb-2 @error('logo') is-invalid @enderror">
        <img src="{{ asset('logo/' . $pengaturan->logo) }}" width="150px" class="img-thumbnail" alt="logo lama sekolah">
        @error('logo')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3" id="visi">
        <label>Visi sekolah</label>
        @foreach($pengaturan->visi as $v)
        <input type="text" name="visi[]" class="form-control mb-2" value="{{ $v }}">
        @endforeach
        <a href="{{ route('pengaturan.edit-visi') }}" class="text-decoration-none my-3">Edit visi</a>
      </div>
      <button type="button" class="btn mb-4 d-block" style="background: #1FC600; color: #fff;" onclick="tambahVisi()"><i class="fas fa-plus-circle"></i> Tambah visi</button>
      <div class="my-3" id="misi">
        <label>Misi sekolah</label>
        @foreach($pengaturan->misi as $m)
        <input type="text" name="misi[]" class="form-control mb-2" value="{{ $m }}">
        @endforeach
        <a href="{{ route('pengaturan.edit-misi') }}" class="text-decoration-none my-3">Edit misi</a>
      </div>
      <button type="button" class="btn mb-4 d-block" style="background: #1FC600; color: #fff;" onclick="tambahMisi()"><i class="fas fa-plus-circle"></i> Tambah misi</button>
      <x-button message="Simpan" background="#008AFF" color="#fff"><i class="fas fa-save"></i> Simpan</x-button>
    </form>
    
    <form class="mt-5">
      <h3 class="mb-3">Pengaturan Pendaftaran</h3>
      <div class="mb-3">
        <label>Gelombang</label>
        <input type="text" placeholder="Ex: Gelombang 1" name="gelombang" class="form-control">
      </div>
      <div class="row mb-3">
        <div class="col-6">
          <label>Tanggal Mulai</label>
          <input type="date" class="form-control" name="tgl_mulai">
        </div>
      </div>
      <div class="mb-3">
        <label>Biaya</label>
        <input type="number" name="biaya" class="form-control">
      </div>
      <div class="mb-3" id="rincian">
        <label>Rincian Biaya</label>
        <input type="text" placeholder="Ex: Seragam batik, olahraga, pramuka, dan muslim" name="rincian[]" class="form-control mb-2">
        <input type="text" placeholder="Ex: Biaya SPP 1 bulan" name="rincian[]" class="form-control mb-2">
      </div>
      <button type="button" class="btn mb-4 d-block" style="background: #1FC600; color: #fff;" onclick="tambahRincian()"><i class="fas fa-plus-circle"></i> Tambah rincian</button>
      <x-button message="Simpan" background="#008AFF" color="#fff"><i class="fas fa-save"></i> Simpan</x-button>
    </form>
  </div>
</div>

@endsection