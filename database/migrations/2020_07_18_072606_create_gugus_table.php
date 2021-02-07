<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGugusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gugus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('innovation_type');
            $table->string('team_name');
            $table->string('team_structure');
            $table->integer('year');
            $table->string('innovation_title');
            $table->string('abstraction');
            $table->string('achievement');
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
        Schema::dropIfExists('gugus');
    }
}
