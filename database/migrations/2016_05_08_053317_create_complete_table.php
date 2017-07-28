<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompleteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complete_projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project_title');
            $table->string('project_manager');
            $table->string('project_supervisor');
            $table->string('project_types');
            $table->string('start_date');
            $table->string('front_language');
            $table->string('back_language');
            $table->text('description');
            $table->text('link');
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
        Schema::drop('complete_projects');
    }
}
