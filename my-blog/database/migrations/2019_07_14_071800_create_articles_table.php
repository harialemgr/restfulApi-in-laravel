<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles',function(Blueprint $table){
            $table->increments('id');
            $table->integer('user_id');
            // $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('excerpts');
            $table->text('body');
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
        Schema::drop('articles');
    }
}
