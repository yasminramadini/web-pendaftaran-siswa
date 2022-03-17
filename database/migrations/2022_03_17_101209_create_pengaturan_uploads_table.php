<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengaturanUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaturan_upload', function (Blueprint $table) {
            $table->id();
            $table->boolean('skhun')->default(true);
            $table->boolean('ijazah')->default(true);
            $table->boolean('foto')->default(false);
            $table->boolean('raport')->default(false);
            $table->boolean('skl')->default(false);
            $table->boolean('kartu_keluarga')->default(true);
            $table->boolean('ktp')->default(false);
            $table->boolean('akte_kelahiran')->default(true);
            $table->boolean('sertifikat')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengaturan_upload');
    }
}
