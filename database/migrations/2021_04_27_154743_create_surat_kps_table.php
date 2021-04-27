<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratKpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_kps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('semester');
            $table->string('tahun');
            $table->string('NIM');
            $table->string('lembaga');
            $table->string('pimpinan');
            $table->string('noTelp');
            $table->string('alamat');
            $table->string('fax');
            $table->string('dokumen');
            $table->string('statusverifikasi');
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
        Schema::dropIfExists('surat_kps');
    }
}
