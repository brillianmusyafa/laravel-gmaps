<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function(Blueprint $table) {
            $table->increments('id');
            $table->string('video_title');
            $table->text('video_url');
            $table->string('video_id');
            $table->string('video_thumbnail')->nullable();
            $table->string('video_duration')->nullable();
            $table->string('video_description')->nullable();
            $table->string('video_type')->nullable();
            $table->string('size')->nullable();
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
        Schema::drop('videos');
    }
}
