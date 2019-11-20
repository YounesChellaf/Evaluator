<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('matricule');
            $table->string('last_name');
            $table->string('first_name');
            $table->longText('about')->nullable();
            $table->date('birth_date');
            $table->enum('sexe',['male','female']);
            $table->string('address');
            $table->string('scolar_year');
            $table->string('tutel_last_name');
            $table->string('tutel_email')->nullable();
            $table->string('tutel_first_name');
            $table->string('job');
            $table->string('phone_number');
            $table->string('emergency_phone_number');
            $table->string('user_id');
            $table->string('class_id');
            $table->string('image_id');
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
    }
}
