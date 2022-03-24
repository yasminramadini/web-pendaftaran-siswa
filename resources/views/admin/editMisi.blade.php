@extends('layouts')

@section('content')

<div class="row justify-content-center">
  <div class="col-lg-6">
    <h1>Edit misi</h1>
    <small><i>Jika ingin mengembalikan misi yang terhapus, silahkan reload halaman ini</i></small>
    <hr>
    <form method="post" action="{{ route('pengaturan.update-misi') }}">
      @csrf
      @method('PUT')
      @foreach($misi as $m)
      <div class="mb-3 input-group">
        <input type="text" class="form-control" value="{{ $m }}" name="misi[]">
        <button class="btn btn-danger" type="button" onclick="hapusMisi(this.parentElement)"><i class="fas fa-ban"></i></button>
      </div>
      @endforeach
      <x-button message="Simpan" background="{{ $pengaturan->tema }}" color="#fff"><i class="fas fa-save"></i> Simpan</x-button>
    </form>
  </div>
</div>

@endsection