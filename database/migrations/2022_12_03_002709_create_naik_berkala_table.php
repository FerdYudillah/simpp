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
        Schema::create('naik_berkala', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pegawai_id');
            $table->foreign('pegawai_id')->references('id')->on('pegawai')->onDelete('cascade');   //pegawai
            $table->string('t_lahir', 100);
            $table->date('tgl_lahir');
            $table->unsignedBigInteger('pangkat_id');
            $table->foreign('pangkat_id')->references('id_pangkat')->on('pangkat')->onDelete('cascade'); //pangkat
            $table->unsignedBigInteger('jabatan_id');
            $table->foreign('jabatan_id')->references('id_jabatan')->on('jabatan')->onDelete('cascade'); //jabatan
            $table->string('gaji_lama');
            $table->string('gaji_baru');
            $table->string('masa_kerja', 100);
            $table->unsignedBigInteger('golongan_id');
            $table->foreign('golongan_id')->references('id_golongan')->on('golongan')->onDelete('cascade');;//golongan
            $table->date('mulai_tgl');
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
        Schema::dropIfExists('naik_berkala');
    }
};
