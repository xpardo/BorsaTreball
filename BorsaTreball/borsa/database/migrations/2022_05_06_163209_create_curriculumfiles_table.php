<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurriculumfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curriculumfiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('curri_id');
            $table->string('url',500);
            $table->string('name');
            $table->boolean('state')->default(true);
            $table->timestamps();
            $table->foreign('curri_id','thesis_files_curri_id_fk')->references('id')->on('curricula')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curriculumfiles');
    }
}
