<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHerrschaftbereichTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('herrschaftbereich', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('regionID');
            $table->integer('herrscherID');
            $table->date('startdatum');
            $table->date('endedatum');
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
        Schema::dropIfExists('herrschaftbereich');
    }
}
