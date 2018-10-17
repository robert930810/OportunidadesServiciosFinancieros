<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLiquidatorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('liquidator', function (Blueprint $table) {
            $table->increments('id');
            $table->string('creditLine')->nullable();
            $table->integer('idPagaduria')->nullable()->unsigned();
            $table->integer('age')->nullable();
            $table->string('customerType')->nullable();
            $table->integer('salary')->nullable();
            $table->foreign('idPagaduria')->references('id')->on('pagaduria');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('liquidator');
    }
}
