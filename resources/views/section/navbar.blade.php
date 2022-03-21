<nav class="navbar navbar-light fixed-top">
  <div class="container-fluid" style="background: {{ $pengaturan->tema }}">
    <img class="navbar-brand" src="{{ asset('storage/logo/' . $pengaturan->logo) }}" width="50px">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">{{ $pengaturan->nama_sekolah }}</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link @if(request()->is('/')) active @endif" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(request()->is('/#tentang')) active @endif" href="/#tentang">Tentang Sekolah</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(request()->is('/#visi-misi')) active @endif" href="/#visi-misi">Visi Misi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(request()->is('/#pendaftaran')) active @endif" href="/#pendaftaran">Info Pendaftaran</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(request()->is('form-daftar')) active @endif" href="{{ route('form-daftar') }}">Form Pendaftaran</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(request()->is('admin/dashboard')) active @endif" href="{{ route('admin.dashboard') }}">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(request()->is('admin/pengaturan')) active @endif" href="{{ route('pengaturan.index') }}">Pengaturan</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>