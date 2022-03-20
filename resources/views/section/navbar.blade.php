<nav class="navbar navbar-light fixed-top">
  <div class="container-fluid">
    <img class="navbar-brand" src="{{ asset('logo/logo-sekolah.png') }}" width="50px">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">SMP Laravel</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/#tentang">Tentang Sekolah</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/#visi-misi">Visi Misi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/#fasilitas">Fasilitas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/#pendaftaran">Info Pendaftaran</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('form-daftar') }}">Form Pendaftaran</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('pengaturan.index') }}">Pengaturan</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>