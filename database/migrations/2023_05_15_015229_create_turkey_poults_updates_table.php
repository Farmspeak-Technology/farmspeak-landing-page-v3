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
        Schema::create('turkey_poults_updates', function (Blueprint $table) {
            $table->id();
            $table->integer('LOCAL')->nullable();
            $table->integer('FOREIGN')->nullable();
            $table->integer('BRAHMA')->nullable();
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
        Schema::dropIfExists('turkey_poults_updates');
    }
};