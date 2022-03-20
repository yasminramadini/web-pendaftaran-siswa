<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('tgl_lahir');
            $table->string('asal_sekolah');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('nik');
            $table->string('telepon');
            $table->string('email')->nullable();
            $table->text('alamat');
            $table->boolean('diterima')->default(false);
            $table->string('foto');
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
        Schema::dropIfExists('siswa');
    }
}
