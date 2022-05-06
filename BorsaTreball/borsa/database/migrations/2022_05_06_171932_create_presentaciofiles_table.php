<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresentaciofilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presentaciofiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pre_id');
            $table->string('url',500);
            $table->string('name');
            $table->boolean('state')->default(true);
            $table->timestamps();
            $table->foreign('pre_id','pre_files_pre_id_fk')->references('id')->on('presentacios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('presentaciofiles');
    }
}
