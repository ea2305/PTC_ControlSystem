<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePtcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ptcs', function (Blueprint $table) {
            $table->integer('id')->unsigned();

            //Informacion del ptc
            $table->string('nombre');
            $table->string('email')->unique();
            $table->string('clave');
            $table->rememberToken();

            //Datos originales de la tabla
            $table->integer('claveU')->unsigned();
            $table->string('MateriasImpartidas');
            $table->timestamps();

            $table->primary(['id','claveU']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ptcs');
    }
}
