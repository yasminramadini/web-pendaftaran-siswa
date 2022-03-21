<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTentangSekolahAndBannerToPengaturan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pengaturan', function (Blueprint $table) {
            $table->string('banner')->after('logo');
            $table->text('tentang_sekolah')->after('fasilitas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pengaturan', function (Blueprint $table) {
            $table->dropColumn('banner');
            $table->dropColumn('tentang_sekolah');
        });
    }
}
