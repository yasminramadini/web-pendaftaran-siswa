@extends('layouts')

@section('content')

<div class="row justify-content-center">
  <div class="col-lg-6">
    <h1>Edit visi</h1>
    <small><i>Jika ingin mengembalikan visi yang terhapus, silahkan reload halaman ini</i></small>
    <hr>
    <form method="post" action="{{ route('pengaturan.update-visi') }}">
      @csrf
      @method('PUT')
      @foreach($visi as $v)
      <div class="mb-3 input-group">
        <input type="text" class="form-control" value="{{ $v }}" name="visi[]">
        <button class="btn btn-danger" type="button" onclick="hapusVisi(this.parentElement)"><i class="fas fa-ban"></i></button>
      </div>
      @endforeach
      <x-button message="Simpan" background="#008AFF" color="#fff"><i class="fas fa-save"></i> Simpan</x-button>
    </form>
  </div>
</div>

@endsection