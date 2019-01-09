<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maps', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('kategory_id');
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('lat')->nullable();
            $table->string('long')->nullable();
            $table->text('upload')->nullable();
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
        Schema::drop('maps');
    }
}
