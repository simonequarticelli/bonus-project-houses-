<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHousesTable extends Migration
{
    
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('city');
            $table->float('price', 6, 2);
            $table->string('description')->nullable();
            $table->string('path')->nullable();
            $table->tinyInteger('floor')->nullable();
            $table->smallInteger('mq')->nullable();
            $table->string('email')->nullable();
            $table->string('geolocalization')->nullable();
            $table->string('telephone')->nullable();
            $table->string('slug')->nullable();
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('houses');
    }
}
