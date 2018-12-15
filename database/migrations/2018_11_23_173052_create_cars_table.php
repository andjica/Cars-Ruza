<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('car');
            $table->string('image');
            $table->string('desc1');
            $table->string('desc2');
            $table->string('desc3');
            $table->string('desc4');
            $table->decimal('cost');
            $table->integer('category_id')->unsigned();
            $table->integer('user_id')->unsigned();
            
            $table->timestamps();

            $table->foreign('category_id')
                ->references('id')
                    ->on('categories');

            // $table->foreign('motor_id')
            //     ->references('id')
            //         ->on('motors');

            // $table->foreign('upholstery_id')
            //     ->references('id')
            //         ->on('upholsteries');

            $table->foreign('user_id')
                ->references('id')
                    ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
