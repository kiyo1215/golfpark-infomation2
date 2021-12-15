<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGolfparksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('golfparks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name_kana');
            $table->string('roof')->nullable();
            $table->string('wash')->nullable();
            $table->string('restroom')->nullable();
            $table->text('round')->nullable();
            $table->string('lunch')->nullable();
            $table->string('smoke')->nullable();
            $table->text('golfbag')->nullable();
            $table->text('baggage')->nullable();
            $table->text('info')->nullable();
            $table->timestamps()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('golfparks');
    }
}
