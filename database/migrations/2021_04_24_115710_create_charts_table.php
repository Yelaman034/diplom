<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('charts', function (Blueprint $table) {
            $table->id();
            $table->double('age');
            $table->double('lenght');
            $table->double('lenght2');
            $table->double('lenght3');
            $table->double('lenght_2');
            $table->double('lenght_3');
            $table->double('weigth');
            $table->double('weigth2');
            $table->double('weigth3');
            $table->double('weigth_2');
            $table->double('weigth_3');
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
        Schema::dropIfExists('charts');
    }
}
