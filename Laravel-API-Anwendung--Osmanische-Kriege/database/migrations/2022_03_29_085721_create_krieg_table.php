<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKriegTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('krieg', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 250);
            $table->integer('regionID');
            $table->string('gegnerischesland', 250);
            $table->string('gegnerischerherrscher', 250);
            $table->string('nebenbeteiligtesland', 250);
            $table->date('startdatum');
            $table->date('stopdatum');
            $table->string('grund', 500);
            $table->string('ergebnis', 500);
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
        Schema::dropIfExists('krieg');
    }
}
