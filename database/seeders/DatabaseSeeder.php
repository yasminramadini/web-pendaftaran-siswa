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
          'tema' => '#008AFF'
        ]);
    }
}
