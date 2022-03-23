<h1>Halo, {{ $siswa->nama }}!</h1>

<p><strong>Selamat, kamu telah diterima untuk bergabung menjadi siswa {{ $pengaturan->nama_sekolah}}!</strong> Untuk itu kami mengundangmu untuk hadir ke sekolah dengan ketentuan berikut:</p>
<table>
  <tr>
    <th>Waktu:</th>
    <td>1 Juni 2022, pukul 09.00</td>
  </tr>
  <tr>
    <th>Tempat:</th>
    <td>Aula {{ $pengaturan->nama_sekolah }}</td>
  </tr>
  <tr>
    <th>Kegiatan:</th>
    <td>
      <ol>
        <li>Pengisian formulir</li>
        <li>Penyerahan berkas-berkas</li>
        <li>Pengumuman masuk sekolah</li>
      </ol>
    </td>
  </tr>
  <tr>
    <th>Syarat:</th>
    <td>
      - Wajib membawa berkas:
      <ol>
        <li>Fotocopy SKHUN</li>
        <li>Fotocopy KTP orang tua</li>
        <li>Fotocopy akte kelahiran</li>
        <li>Fotocopy kartu keluarga</li>
        <li>Fotocopy kartu KIP (jika ada)</li>
      </ol>
      - Pakaian bebas rapi
    </td>
  </tr>
</table>

<p>Untuk itu kami sangat berharap akan kehadiranmu. Kami tunggu di {{ $pengaturan->nama_sekolah}} ya!</p>

<p>Salam hangat,</p>
<span>{{ $pengaturan->nama_sekolah }}</span>

<p>{{ $pengaturan->alamat_sekolah }}</p>
<p>Telepon: {{ $pengaturan->telepon_sekolah }}</p>
<p>Email: {{ $pengaturan->email_sekolah }}</p>