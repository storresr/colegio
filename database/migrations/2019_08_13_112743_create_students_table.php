<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('identification')->unique();
            $table->string('name');
            $table->string('last_name');
            $table->integer('phone');
            $table->string('direction');
            $table->string('neighborhood');
            $table->string('rh');
            $table->string('eps');
            $table->date('date');
            $table->integer('hostess_id')->unsigned();
            $table->foreign('hostess_id')->references('id')->on('hostesses')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('students');
        Schema::dropForeign('students_hostess_id_foreign');
        Schema::dropColumn('hostess_id');
    }
}
