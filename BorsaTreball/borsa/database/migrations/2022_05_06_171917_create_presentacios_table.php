<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresentaciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presentacios', function (Blueprint $table) {
            $table->id();
            $table->string('pre_code')->index();
            $table->string('title');
            $table->boolean('state')->default(true);
            $table->unsignedBigInteger('id_alum');
            $table->timestamps();
            $table->foreign('id_alum','alum_files_id_alum_fk')->references('id')->on('alumnes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('presentacios');
    }
}
