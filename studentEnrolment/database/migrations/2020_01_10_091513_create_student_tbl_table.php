<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_tbl', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('roll')->unique();
            $table->string('fathername');
            $table->string('mothername');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('image');
            $table->string('password');
            $table->string('department');
            $table->string('year');
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
        Schema::dropIfExists('student_tbl');
    }
}
