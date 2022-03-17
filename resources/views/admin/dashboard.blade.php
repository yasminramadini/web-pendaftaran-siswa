@extends('layouts')

@section('content')

<h1>Daftar Calon Siswa Baru</h1>
<hr>
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
      <tr>
        <td>1</td>
        <td>Ismail Bin Mail</td>
        <td>SD Codeigniter</td>
        <td>
          <span class="badge bg-success">Diterima</span>
        </td>
        <td>
          <button class="btn btn-warning"><i class="fas fa-eye"></i></button>
        </td>
      </tr>
    </tbody>
  </table>
</div>

@endsection