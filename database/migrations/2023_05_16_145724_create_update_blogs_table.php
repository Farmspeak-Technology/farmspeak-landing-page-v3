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
        Schema::create('update_blogs', function (Blueprint $table) {
            $table->id();
            $table->string('topic');
            $table->string('short_description');
            $table->string('published_date');
            $table->string('read_time');
            $table->string('sub_category');
            $table->string('image');
            $table->string('blog_link');
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
        Schema::dropIfExists('update_blogs');
    }
};