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
        Schema::create('anak', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('pegawai_id');   //
            $table->foreign('pegawai_id')->references('id')->on('pegawai')->onDelete('cascade');;

            $table->string('nama', 100)->nullable();
            $table->string('status', 100)->nullable();
            $table->string('umur', 50)->nullable();
            $table->text('t_lahir');
            $table->date('tgl_lahir');
            $table->date('tgl_umur_21')->nullable();
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan'])->nullable();
            $table->enum('sts_nikah', ['Menikah', 'Belum Menikah'])->nullable();
            $table->string('pendidikan')->nullable();
            $table->date('tgl_lulus_sekolah')->nullable();
            $table->text('ket')->nullable();
            // $table->string('ket')->nullable();
            $table->string('tunjangan')->nullable();
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
        Schema::dropIfExists('anak');
    }
};
