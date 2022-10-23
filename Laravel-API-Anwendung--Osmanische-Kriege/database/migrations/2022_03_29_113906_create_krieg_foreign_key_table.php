<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKriegForeignKeyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('krieg', function (Blueprint $table) {
            $table->foreign('regionID')
                ->references('id')
                ->on('region')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('krieg_foreign_key');
    }
}
