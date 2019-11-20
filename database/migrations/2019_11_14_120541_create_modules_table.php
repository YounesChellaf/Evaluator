<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('designation');
            $table->boolean('niveau_0')->default(false);
            $table->boolean('niveau_1')->default(false);
            $table->boolean('niveau_2')->default(false);
            $table->boolean('niveau_3')->default(false);
            $table->boolean('niveau_4')->default(false);
            $table->boolean('niveau_5')->default(false);
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
        Schema::dropIfExists('modules');
    }
}
