<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarBimbingansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_bimbingans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nim');
            $table->string('nama');
            $table->string('judul');
            $table->string('lembaga');
            $table->string('set_pengajuan_ujian_kp');
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
        Schema::dropIfExists('daftar_bimbingans');
    }
}
