<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('car_id')->unsigned()->index();
            $table->string('type');
            $table->enum('gearshift',['Handmatig','Automatisch']);
            $table->string('cost');

            $table->timestamps();

            $table->foreign('car_id')
                ->references('id')
                    ->on('cars');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('motors');
    }
}
