<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeteiligungTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beteiligung', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('herrscherID');
            $table->integer('kriegID');
            $table->date('startdatum');
            $table->date('stopdatum');
            $table->string('beteiligungsgrund', 500);
            $table->char('ist_beginner', 4);
            $table->char('ist_nebenbeteiliger', 4);
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
        Schema::dropIfExists('beteiligung');
    }
}
