<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeteiligungForeignKeyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('beteiligung', function (Blueprint $table) {


            $table->foreign('herrscherID')
                ->references('id')
                ->on('herrscher')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
            $table->foreign('kriegID')
                ->references('id')
                ->on('krieg')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beteiligung_foreign_key');
    }
}
