@extends('layouts')

@section('content')
<h1 class="text-center mb-3">Pendaftaran Siswa Baru {{ $pengaturan->nama_sekolah }} TP {{ date('Y') }}/{{ date('Y', strtotime('+1 years')) }}</h1>

<hr>

<img src="{{ asset('storage/logo/' . $pengaturan->banner) }}" alt="banner pendaftaran" width="100%" class="d-block mx-auto">

<p class="mt-3">Halo adik-adik! Kali ini {{ $pengaturan->nama_sekolah }} telah membuka pendaftaran siswa baru tahun pelajaran {{ date('Y') }}/{{ date('Y', strtotime('+1 years')) }}. Bagi adik-adik yang berminat untuk bergabung menjadi keluarga {{ $pengaturan->nama_sekolah }} boleh sekali dengan mengisi form pada <a href="{{ route('form-daftar') }}" class="text-decoration-none">halaman ini.</a></p>

<h3 class="mt-4" id="tentang">Tentang {{ $pengaturan->nama_sekolah }}</h3>
<p>{{ $pengaturan->tentang_sekolah }}</p>

<h3 class="mt-4" id="visi-misi">Visi Misi</h3>
<p class="fw-bold">Visi:</p>
<ol>
  @foreach($pengaturan->visi as $v)
  <li>{{ $v }}</li>
  @endforeach
</ol>

<p class="fw-bold">Misi:</p>
<ol>
  @foreach($pengaturan->misi as $m)
  <li>{{ $m }}</li>
  @endforeach
</ol>

<h3 class="mt-4" id="fasilitas">Fasilitas</h3>
<ul>
  @foreach($pengaturan->fasilitas as $f)
  <li>{{ $f }}</li>
  @endforeach
</ul>
@endsection