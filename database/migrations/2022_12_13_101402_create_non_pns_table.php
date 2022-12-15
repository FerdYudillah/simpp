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
        Schema::create('non_pns', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nitp', 100);
            $table->text('t_lahir')->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->string('j_kelamin');
            $table->string('agama')->nullable();
            $table->date('awal_kerja')->nullable();
            $table->string('pend_awal');
            $table->string('pend_akhir');
            $table->unsignedBigInteger('jabatan_id');   
            $table->foreign('jabatan_id')->references('id_jabatan')->on('jabatan')->onDelete('cascade');  
            $table->text('alamat')->nullable();
            $table->string('nohp', 50)->nullable();
            $table->text('ket')->nullable();
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
        Schema::dropIfExists('non_pns');
    }
};
