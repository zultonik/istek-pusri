<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkeluarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skeluar', function (Blueprint $table) {
           $table->increments('id');
            $table->string('no_surat');
            $table->string('jenis_surat');
            $table->string('tujuan_surat');
            $table->string('tembusan_surat');
            $table->string('perihal');
            $table->date('tanggal_keluar');
            $table->string('sifat_surat');
            $table->string('penyelesaian_disposisi');
            $table->string('no_agenda');
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
        Schema::dropIfExists('skeluar');
    }
}
