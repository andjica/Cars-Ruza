<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarColorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_colors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('car_id')->unsigned()->index();
            $table->integer('color_id')->unsigned()->index();
            $table->timestamps();

            $table->foreign('car_id')
                ->references('id')
                    ->on('cars');

            $table->foreign('color_id')
                ->references('id')
                    ->on('colors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_colors');
    }
}
