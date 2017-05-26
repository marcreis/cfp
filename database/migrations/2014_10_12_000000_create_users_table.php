<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('apelido');
            $table->string('email')->unique();
            $table->string('git')->unique();
            $table->string('foto');
            $table->string('cidade');
            $table->string('estado');
            $table->text('biografia');
            $table->integer('sexo_id');
            $table->string('aeroporto',50);
            $table->string('alimentacao',100);
            $table->string('password');
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
