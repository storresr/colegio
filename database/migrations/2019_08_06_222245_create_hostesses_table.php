<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHostessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hostesses', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('name');
            $table->string('last_name');
            $table->integer('identification')->unique();
            $table->integer('phone');
            $table->string('direction');
            $table->string('relationship');
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
        Schema::dropIfExists('hostesses');
    }
}
