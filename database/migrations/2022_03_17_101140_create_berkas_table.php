<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBerkasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berkas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id');
            $table->string('skhun')->nullable();
            $table->string('ijazah')->nullable();
            $table->string('foto')->nullable();
            $table->string('raport')->nullable();
            $table->string('skl')->nullable();
            $table->string('kartu_keluarga')->nullable();
            $table->string('ktp')->nullable();
            $table->string('akte_kelahiran')->nullable();
            $table->string('sertifikat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('berkas');
    }
}
