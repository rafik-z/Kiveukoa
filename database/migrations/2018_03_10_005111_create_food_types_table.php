<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodTypesTable extends Migration
{

    public function up()
    {
        Schema::create('food_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->integer('userId');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('food_types');
    }
}
