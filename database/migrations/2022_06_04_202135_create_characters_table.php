<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('user_id');
            $table->foreignId('user_id')->constrained('users');
            $table->integer('level');
            $table->string('name');
            $table->string('gender');
            $table->integer('age');
            $table->string('height');
            $table->unsignedBigInteger('trait_id');
            $table->foreignId('trait_id')->constrained('traits');
            $table->unsignedBigInteger('profile_id');
            $table->foreignId('profile_id')->constrained('profiles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('characters');
    }
}
