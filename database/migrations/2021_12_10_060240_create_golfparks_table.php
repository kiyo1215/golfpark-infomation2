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
            $table->string('roof');
            $table->string('wash');
            $table->string('restroom');
            $table->text('round');
            $table->string('lunch');
            $table->string('smoke');
            $table->text('golfbag');
            $table->text('baggage');
            $table->text('info');
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
        Schema::dropIfExists('golfparks');
    }
}
