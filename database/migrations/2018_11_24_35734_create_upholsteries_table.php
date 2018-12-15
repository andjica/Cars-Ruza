<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUpholsteriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upholsteries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('car_id')->unsigned()->index();
            $table->integer('class_id')->unsigned()->index();
            $table->decimal('cost');

            $table->foreign('car_id')
                ->references('id')
                    ->on('cars');
            $table->foreign('class_id')
                ->references('id')
                    ->on('classes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('upholsteries');
    }
}
