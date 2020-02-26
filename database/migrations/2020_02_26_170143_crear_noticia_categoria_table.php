<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearNoticiaCategoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticia_categoria', function (Blueprint $table) {
            //
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_noticia')->unsigned(); // unsigned solo admite valores positivos
            $table->foreign('id_noticia')->references('id')->on('noticias');
            $table->unsignedBigInteger('id_categoria')->unsigned(); // unsigned solo admite valores positivos
            $table->foreign('id_categoria')->references('id')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('noticia_categoria', function (Blueprint $table) {
            //
        });
    }
}
