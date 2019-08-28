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










// Schema::create('users', function (Blueprint $table) {
//     $table->bigIncrements('id');
//     $table->string('name', 100)->nullable();
//     $table->string('surname', 100)->nullable();
//     $table->string('mail')->unique();
//     $table->string('password');
//     $table->date('data_of_bird')->nullable();
// });

// Schema::create('houses', function (Blueprint $table) {
//     $table->bigIncrements('id');
//     $table->string('title', 100);
//     $table->tinyInteger('bads');
//     $table->tinyInteger('wc');
//     $table->smallInteger('mq');
//     $table->string('address');
//     $table->float('longitude', 6,4);
//     $table->float('latitude', 6,4);
//     $table->text('img');
// });

// Schema::create('features', function (Blueprint $table) {
//     $table->bigIncrements('id');
//     $table->string('name', 100);
// });

// Schema::create('promotions', function (Blueprint $table) {
//     $table->bigIncrements('id');
//     $table->string('type', 100);
// });

// Schema::create('payments', function (Blueprint $table) {
//     $table->bigIncrements('id');
//     $table->float('type', 3, 2);
// });