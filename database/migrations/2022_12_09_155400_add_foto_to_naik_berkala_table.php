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
        Schema::table('naik_berkala', function (Blueprint $table) {
            $table->string('foto')->nullable();
            $table->text('ket')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('naik_berkala', function (Blueprint $table) {
            $table->dropColumn('foto');
            $table->dropColumn('ket');
        });
    }
};
