<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateAlumnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cognom');
            $table->date('neixement');
            $table->date('genere');
            $table->char('cp');
            $table->string('genere');
            $table->char('telefon');
            $table->string('poblacio');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('estat');
            $table->string('fet');
            $table->string('treballat');
            $table->rememberToken();
            $table->timestamps();
            $table->role_id(2);
       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnes');
    }
}
