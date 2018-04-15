<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher', function (Blueprint $table) {
            $table->increments('id');
            $table->text('e_name');
            $table->text('b_name');
            $table->text('gender');
            $table->text('blood');
            $table->text('dmy');
            $table->text('religion');
            $table->text('t_id');
            $table->text('email');
            $table->text('phone');
            $table->text('nid');
            $table->text('image');
            $table->text('present_address');
            $table->text('parmanent_address');
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
        Schema::dropIfExists('teacher_models');
    }
}
