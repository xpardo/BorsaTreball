<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurriculaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curricula', function (Blueprint $table) {
            $table->id();
            $table->string('curri_code')->index();
            $table->string('title');
            $table->boolean('state')->default(true);
            $table->unsignedBigInteger('id_alum');
            $table->timestamps();
            $table->foreign('id_alum','thesis_files_id_alum_fk')->references('id')->on('alumnes')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curricula');
    }
}
