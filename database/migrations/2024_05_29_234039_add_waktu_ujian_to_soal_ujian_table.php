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
        Schema::table('soal_ujian', function (Blueprint $table) {
            $table->unsignedInteger('waktu_ujian')->nullable()->default(120);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('soal_ujian', function (Blueprint $table) {
            $table->dropColumn('waktu_ujian');
        });
    }
};
