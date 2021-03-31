<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildVaccineInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('child_vaccine_infos', function (Blueprint $table) {
            $table->id();
            $table->string('v_ner');
            $table->integer('undur');
            $table->integer('jin');
            $table->string('shaltgan');
            $table->date('hiisen_ognoo');
            $table->date('burtgesen_ognoo');
            $table->integer('v_id');
            $table->integer('c_id');
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
        Schema::dropIfExists('child_vaccine_infos');
    }
}
