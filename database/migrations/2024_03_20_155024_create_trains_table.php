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

            $table->string('company');
            $table->string('departure_name');
            $table->string('arrival_name');
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->string('train_code');
            $table->string('carroza_number');
            $table->boolean('on_time')-> default(true);
            $table->boolean('cancelled')-> default(false);

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
