<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('tahun_masuk');
            $table->string('phone');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('email');
            $table->bigstring('id_jurusan');
            $table->bigstring('nim');
            $table->string('alamat_asal');
            $table->string('status_tempat_tinggal');
            $table->string('nomor_kk');
            $table->string('image');
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
        Schema::dropIfExists('tbl_siswa');
    }
};
