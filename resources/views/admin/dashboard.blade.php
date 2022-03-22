@extends('layouts')

@section('content')
<div class="row justify-content-center">
  <div class="col-lg-6">
    <h1>Daftar Calon Siswa Baru</h1>
    <hr>
    
    @if(session('msg'))
    <x-alert type="success">
      {{ session('msg') }}
    </x-alert>
    @endif
    
    @if(count($siswa) === 0)
    <x-alert type="info">Tidak ada data</x-alert>
    @endif
    
    <form class="my-3">
      @csrf
      <div class="input-group">
        <input type="search" name="keyword" class="form-control" placeholder="Cari siswa..." required>
        <x-button color="#fff" background="#008AFF"><i class="fas fa-search"></i></x-buttoncolor>
      </div>
    </form>
    
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Asal Sekolah</th>
            <th>Status</th>
            <th><i class="fas fa-cog"></i></th>
          </tr>
        </thead>
        <tbody>
          @foreach($siswa as $index => $s)
          <tr>
            <td>{{ $index+1 }}</td>
            <td>{{ $s->nama }}</td>
            <td>{{ $s->asal_sekolah }}</td>
            <td>
              @if($s->diterima)
              <span class="badge bg-success">Diterima</span>
              @else 
              <span class="badge bg-danger">Belum diterima</span>
              @endif
            </td>
            <td>
              <a href="{{ route('siswa.show', ['siswa' => $s->id]) }}" style="background: #008AFF; color: #fff" class="btn">
                Detail <i class="fas fa-angle-right"></i>
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection