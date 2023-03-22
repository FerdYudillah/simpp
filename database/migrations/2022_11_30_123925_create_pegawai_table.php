<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id();
            $table->string('nip', 100)->unique();
            $table->string('nama');
            $table->text('t_lahir');
            $table->date('tgl_lahir');
            $table->text('alamat');
            $table->enum('j_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('nohp', 100)->unique();
            $table->enum('agama', ['Islam', 'Kristen','Hindu']);
            $table->enum('sts_kawin', ['Menikah', 'Belum Menikah']);
            $table->string('pendidikan');
            $table->string('jumlah_anak')->nullable();

            $table->unsignedBigInteger('pangkat_id');   
            $table->foreign('pangkat_id')->references('id_pangkat')->on('pangkat')->onDelete('cascade');;  
            $table->unsignedBigInteger('jabatan_id');   
            $table->foreign('jabatan_id')->references('id_jabatan')->on('jabatan')->onDelete('cascade');;  
            $table->string('masa_kerja', 100);
            $table->unsignedBigInteger('golongan_id');  
            $table->foreign('golongan_id')->references('id_golongan')->on('golongan')->onDelete('cascade');; 

            $table->string('gaji', 100);
            $table->date('naik_berkala')->nullable();
            $table->date('naik_pangkat')->nullable();
            $table->enum('sts_pegawai', ['Aktif', 'Tidak Aktif']);
            $table->date('tmt')->nullable();
            $table->string('email', 100)->nullable()->unique();
            $table->text('pelatihan')->nullable();
            $table->string('foto')->nullable();
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
        Schema::dropIfExists('pegawai');
    }
};
