<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNamaJurusanToRombonganBelajarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rombongan_belajar', function (Blueprint $table) {
            $table->string('nama_jurusan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rombongan_belajar', function (Blueprint $table) {
            $table->dropColumn('nama_jurusan');
        });
    }
}
