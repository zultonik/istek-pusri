<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmasukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smasuk', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_surat');
            $table->string('jenis_surat');
            $table->string('asal_surat');
            $table->date('tanggal_surat');
            $table->string('perihal');
            $table->date('tanggal_terima');
            $table->string('sifat_surat');
            $table->string('tujuan');
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
        Schema::dropIfExists('smasuk');
    }
}
