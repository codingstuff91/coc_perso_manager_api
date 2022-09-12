<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttributeCharacterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attribute_character', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('character_id');
            $table->unsignedBigInteger('attribute_id');
            $table->integer('value');
            $table->integer('modificator');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attribute_character');
    }
}
