<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHerrscherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('herrscher', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 250);
            $table->date('geburtsdatum');
            $table->date('sterbedatum');
            //$table->date('sultanatzeitstartdatum');
            //$table->date('sultanatzeitstopdatum');
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
        Schema::dropIfExists('herrscher');
    }
}
