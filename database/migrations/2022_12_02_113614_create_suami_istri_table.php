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
        Schema::create('suami_istri', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pegawai_id');
            $table->foreign('pegawai_id')->references('id')->on('pegawai')->onDelete('cascade');;
            $table->string('nama_si', 100);
            $table->enum('j_kelamin', ['Laki-laki', 'Perempuan']);
            $table->enum('status', ['Suami', 'Istri'])->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('umur')->nullable();
            $table->string('nohp')->nullable();
            $table->enum('sts_tunjangan', ['Ya', 'Tidak']);
            $table->text('t_lahir');
            $table->date('tgl_lahir')->nullable();
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
        Schema::dropIfExists('suami_istri');
    }
};
