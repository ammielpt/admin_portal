<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearUsuarioRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('usuario_rol', function (Blueprint $table) {
            //
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_usuario')->unsigned(); // unsigned solo admite valores positivos
            $table->foreign('id_usuario')->references('id')->on('users');
            $table->unsignedBigInteger('id_rol')->unsigned(); // unsigned solo admite valores positivos
            $table->foreign('id_rol')->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('usuario_rol', function (Blueprint $table) {
            //
        });
    }
}
