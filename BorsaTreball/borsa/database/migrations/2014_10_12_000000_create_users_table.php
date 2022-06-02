<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cognom');
            $table->string('empre');
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
            $table->boolean('tipo_usuario')->default(1); // 1 = administrador && 2 = alumne && 3 = empresa
            $table->string('imagen')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
