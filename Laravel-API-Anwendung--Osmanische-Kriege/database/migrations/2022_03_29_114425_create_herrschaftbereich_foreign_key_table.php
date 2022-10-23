<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHerrschaftbereichForeignKeyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('herrschaftbereich', function (Blueprint $table) {

            $table->foreign('regionID')
                ->references('id')
                ->on('region')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table->foreign('herrscherID')
                ->references('id')
                ->on('herrscher')
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
        Schema::dropIfExists('herrschaftbereich_foreign_key');
    }
}
