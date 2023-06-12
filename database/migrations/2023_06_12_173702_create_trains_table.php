<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 100);
            $table->string('departure_station', 30);
            $table->string('arrival_station', 30);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->string('train_code', 30);
            $table->tinyInteger('number_train_carriage')->unsigned();
            $table->boolean('train_in_time')->default(true);
            $table->boolean('train_cancelled')->default(false);
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
        Schema::dropIfExists('trains');
    }
};
