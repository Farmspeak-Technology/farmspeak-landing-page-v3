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
        Schema::create('broiler_updates', function (Blueprint $table) {
            $table->id();
            $table->integer('AGRITED')->nullable();
            $table->integer('CHI')->nullable();
            $table->integer('ZARTECH')->nullable();
            $table->integer('SUPREME')->nullable();
            $table->integer('CASCADA')->nullable();
            $table->integer('FIDAN')->nullable();
            $table->integer('FUNTES')->nullable();
            $table->integer('VERTEX')->nullable();
            $table->integer('GS')->nullable();
            $table->integer('AMO')->nullable();
            $table->integer('SAYED')->nullable();
            $table->integer('VALENTINE')->nullable();
            $table->integer('FARM_SUPPORT')->nullable();
            $table->integer('STANDARD')->nullable();
            $table->integer('DOY')->nullable();
            $table->integer('PLAIN')->nullable();
            $table->integer('NUBREED')->nullable();
            $table->integer('AJILA')->nullable();
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
        Schema::dropIfExists('broiler_updates');
    }
};
