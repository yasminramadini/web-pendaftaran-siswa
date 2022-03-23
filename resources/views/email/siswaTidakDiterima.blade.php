<h1>Halo, {{ $siswa->nama }}</h1>

<p>Mohon maaf kamu belum memiliki kesempatan untuk bergabung dengan keluarga {{ $pengaturan->nama_sekolah }}. Kami sangat menghargai kerja keras dan keinginanmu untuk menjadi bagian dari {{ $pengaturan->nama_sekolah }}. Meski begitu jangan berkecil hati, kami doakan agar segala impian dan cita-citamu segera terwujud ya! Tetap semangat! Terima kasih sudah menjadikan {{ $pengaturan->nama_sekolah }} sebagai pilihan hatimu.</p>

<p>Salam hormat,</p>
<span>{{ $pengaturan->nama_sekolah }}</span>

<p>{{ $pengaturan->alamat_sekolah }}</p>
<p>Telepon: {{ $pengaturan->telepon_sekolah }}</p>
<p>Email: {{ $pengaturan->email_sekolah }}</p>