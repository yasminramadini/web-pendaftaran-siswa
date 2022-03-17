@extends('layouts')

@section('content')

<h1>Pengaturan</h1>
<hr>
<div class="row justify-content-center">
  <div class="col-lg-6">
    <form>
      <div class="mb-3">
        <label class="mb-1">Ubah Tema</label>
        <input type="color" name="tema" class="form-control">
      </div>
      <div class="mb-3">
        <label class="mb-1">Nama sekolah</label>
        <input type="text" name="nama" class="form-control">
      </div>
      <div class="mb-3">
        <label class="mb-1">Alamat sekolah</label>
        <textarea class="form-control" name="alamat"></textarea>
      </div>
      <div class="mb-3">
        <label class="mb-1">Telepon sekolah</label>
        <input type="number" name="telepon" class="form-control">
      </div>
      <div class="mb-3">
        <label class="mb-1">Email sekolah</label>
        <input type="email" name="email" class="form-control">
      </div>
      <div class="mb-3">
        <label class="mb-1">Logo sekolah</label>
        <input type="file" name="logo" class="form-control">
      </div>
      <p style="font-weight: 400;" class="mt-5">Pilih file yang wajib diupload:</p>
      <div class="mb-3">
        <input type="checkbox" class="form-check-input me-1" value="skhun" id="skhun" name="berkas">
        <label for="skhun">Sertifikat Hasil Ujian Nasional (SKHUN)</label>
      </div>
      <div class="mb-3">
        <input type="checkbox" class="form-check-input me-1" value="ijazah" id="ijazah" name="berkas">
        <label for="ijazah">Ijazah</label>
      </div>
      <div class="mb-3">
        <input type="checkbox" class="form-check-input me-1" value="raport" id="raport" name="berkas">
        <label for="raport">Raport terakhir</label>
      </div>
      <div class="mb-3">
        <input type="checkbox" class="form-check-input me-1" value="akte_kelahiran" id="skhun" name="berkas">
        <label for="akte_kelahiran">Akte Kelahiran</label>
      </div>
      <div class="mb-3">
        <input type="checkbox" class="form-check-input me-1" value="kartu_keluarga" id="kartu_keluarga" name="berkas">
        <label for="kartu_keluarga">Kartu Keluarga</label>
      </div>
      <div class="mb-3">
        <input type="checkbox" class="form-check-input me-1" value="skl" id="skl" name="berkas">
        <label for="skl">Surat Keterangan Lulus (SKL)</label>
      </div>
      <div class="mb-3">
        <input type="checkbox" class="form-check-input me-1" value="foto" id="foto" name="berkas">
        <label for="foto">Pas Foto</label>
      </div>
      <div class="mb-3">
        <input type="checkbox" class="form-check-input me-1" value="ktp" id="ktp" name="berkas">
        <label for="ktp">Kartu Tanda Penduduk (KTP) Orang Tua</label>
      </div>
      <x-button message="Simpan" background="#008AFF" color="#fff" />
    </form>
  </div>
</div>

@endsection