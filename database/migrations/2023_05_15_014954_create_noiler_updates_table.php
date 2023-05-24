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
        Schema::create('noiler_updates', function (Blueprint $table) {
            $table->id();
            $table->integer('AMO')->nullable();
            $table->integer('PLAIN')->nullable();
            $table->integer('SASSO')->nullable();
            $table->integer('DUAL')->nullable();
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
        Schema::dropIfExists('noiler_updates');
    }
};