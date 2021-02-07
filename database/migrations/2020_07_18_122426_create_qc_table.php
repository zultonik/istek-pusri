<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qc', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_gr');
            $table->string('no_qc');
            $table->string('po');
            $table->string('pr');
            $table->string('matl_code');
            $table->string('nama_barang');
            $table->string('item');
            $table->string('vendor');
            $table->string('p');
            $table->string('m');
            $table->string('g');
            $table->string('penyerahan');
            $table->string('te_to');
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
        Schema::dropIfExists('qc');
    }
}
