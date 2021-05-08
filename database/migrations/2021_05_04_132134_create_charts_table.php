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
            $table->double('l');
            $table->double('l3');
            $table->double('l_3');
            $table->double('w');
            $table->double('w3');
            $table->double('w_3');
            $table->double('lf');
            $table->double('lf3');
            $table->double('lf_3');
            $table->double('wf');
            $table->double('wf3');
            $table->double('wf_3');
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
