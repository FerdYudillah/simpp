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
        Schema::create('naik_pangkat', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pegawai_id');
            $table->foreign('pegawai_id')->references('id')->on('pegawai')->onDelete('cascade');
            $table->unsignedBigInteger('pangkat_id');
            $table->foreign('pangkat_id')->references('id_pangkat')->on('pangkat')->onDelete('cascade'); 
            $table->unsignedBigInteger('golongan_id');
            $table->foreign('golongan_id')->references('id_golongan')->on('golongan')->onDelete('cascade');
            $table->unsignedBigInteger('jabatan_id');
            $table->foreign('jabatan_id')->references('id_jabatan')->on('jabatan')->onDelete('cascade');
            $table->string('pangkat_baru');
            $table->date('mulai_tanggal');
            $table->string('foto')->nullable();
            $table->text('ket')->nullable();
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
        Schema::dropIfExists('naik_pangkat');
    }
};
