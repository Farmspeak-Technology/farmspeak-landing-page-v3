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
        Schema::create('pullet_updates', function (Blueprint $table) {
            $table->id();
            $table->integer('CROWN')->nullable();
            $table->integer('CHI')->nullable();
            $table->integer('ZARTECH')->nullable();
            $table->integer('SUPREME')->nullable();
            $table->integer('STANDARD')->nullable();
            $table->integer('FIDAN')->nullable();
            $table->integer('AMO')->nullable();
            $table->integer('BLACK_PULLET')->nullable();
            $table->integer('AGRITED')->nullable();
            $table->integer('FARM_SUPPORT')->nullable();
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
        Schema::dropIfExists('pullet_updates');
    }
};