<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeCulumToNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('golfparks', function (Blueprint $table) {
            $table->string('roof')->nullable()->change();
            $table->string('wash')->nullable()->change();
            $table->string('restroom')->nullable()->change();
            $table->text('round')->nullable()->change();
            $table->string('lunch')->nullable()->change();
            $table->string('smoke')->nullable()->change();
            $table->text('golfbag')->nullable()->change();
            $table->text('baggage')->nullable()->change();
            $table->text('info')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('golfparks', function (Blueprint $table) {
             $table->string('roof')->nullable(false)->change();
            $table->string('wash')->nullable(false)->change();
            $table->string('restroom')->nullable(false)->change();
            $table->text('round')->nullable(false)->change();
            $table->string('lunch')->nullable(false)->change();
            $table->string('smoke')->nullable(false)->change();
            $table->text('golfbag')->nullable(false)->change();
            $table->text('baggage')->nullable(false)->change();
            $table->text('info')->nullable(false)->change();
        });
    }
}
