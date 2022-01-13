<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresceptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presceptions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('d_name');
            $table->string('date');
            $table->string('p_name');
            $table->string('age');
            $table->string('gender');
            $table->string('diseas');
            $table->string('examination');
            $table->string('provisional');
            $table->string('differential');
            $table->string('lab');
            $table->string('advice');
            $table->string('medicine');
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
        Schema::dropIfExists('presceptions');
    }
}
