<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Registration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('stud_no');
            $table->string('fname', 50);
            $table->string('mname', 50);
            $table->string('lname', 50);
            $table->string('course', 50);
            $table->string('town', 50);
            $table->string('guardian', 50);
            $table->integer('age');
            $table->integer('contact_no');
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
        Schema::dropIfExists('members');
    }
}
