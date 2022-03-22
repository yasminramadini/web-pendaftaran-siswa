@extends('layouts')

@section('content')

<div class="row justify-content-center">
  <div class="col-lg-6">
    
    @if(session('msg'))
    <x-alert type="danger">
      {{ session('msg') }}
    </x-alert>
    @endif
    
    <h1 class="text-center">Login</h1>
    <hr>
    
    <form method="post" action="{{ route('login.store') }}">
      @csrf
      <div class="mb-3">
        <label class="mb-1">Email</label>
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
        @error('email')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label class="mb-1">Password</label>
        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required>
        @error('password')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <x-button color="#fff" background="{{ $pengaturan->tema }}">Login</x-buttoncolor>
    </form>
  </div>
</div>

@endsection