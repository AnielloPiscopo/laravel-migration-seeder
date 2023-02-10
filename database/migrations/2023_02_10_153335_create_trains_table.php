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
            $table->string('company',50);
            $table->string('arrival_station',50);
            $table->date('departure_time');
            $table->date('arrival_time');
            $table->string('train_code',12);
            $table->tinyInteger('num_of_railways');
            $table->boolean('is_on_time');
            $table->boolean('was_removed');
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