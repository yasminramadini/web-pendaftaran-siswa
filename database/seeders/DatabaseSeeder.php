<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pengaturan')->insert([
          'nama_sekolah' => 'SMP Laravel',
          'telepon_sekolah' => '02123456789',
          'email_sekolah' => 'sdlaravel@sch.id',
          'alamat_sekolah' => 'Jl. Asia Amerika No 50 Blok F',
          'visi' => 'Mewujudkan pendidikan untuk menghasilkan prestasi dan lulusa berkwalitas tinggi yang peduli dengan lingkungan hidup.|Mewujudkan sumber daya manusia yang beriman, produktif, kreatif, inofatif dan efektif.|Mewujudkan pengembangan inovasi pembelajaran sesuai tuntutan.',
          'misi' => 'Memantapkan penghayatan dan pengamalan ajaran agama.|Melaksanakan kurikulum berwawasan lingkungan dengan berlandaskan budaya nasional dan kearifan lokal.|Melaksanakan peningkatan kualitas sumber daya manusia yang berkarakter dan mandiri.',
          'logo' => 'logo-sekolah.png',
          'banner' => 'contoh-banner.jpeg',
          'tema' => '#008AFF',
          'fasilitas' => '27 ruang kelas.|2 lab komputer.|Kolam renang, lapangan basket, lapangan futsal.|Ruang teater.|Studio rekaman dan foto.',
          'tentang_sekolah' => 'SMP Laravel didirikan pada tahun 1990 di Jl. Otto Iskandardinata. Pencetus berdirinya SMP Laravel adalah Bapak Taylor Otwell yang kini juga menjabat sebagai kepala sekolah SMP Laravel. Tak hanya SMP, Yayasan Laravel juga menaungi TK, SD, SMA, SMK, hingga perguruan tinggi. Harapan kami adalah menciptakan siswa/siswi yang berbudi luhur, cerdas, dan mahir dalam teknologi.'
        ]);
        
        DB::table('users')->insert([
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'avatar' => 'https://www.gravatar.com/avatar/' . md5(strtolower(trim('admin@gmail.com'))),
            'role' => 1
        ]);
    }
}
