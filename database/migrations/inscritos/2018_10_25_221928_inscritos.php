<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Inscritos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscritos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo')->nullable();
            $table->string('nombre')->nullable();
            $table->string('apellido')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('institucion')->nullable();
            $table->float('pago')->nullable();
            $table->string('modo_pago')->nullable();
            $table->string('email')->nullable();
            $table->string('tipo_inscripcion')->nullable();
            $table->string('descuento')->nullable();
            $table->string('celular')->nullable();
            $table->string('foto_voucher')->nullable();
            $table->integer('confirmado')->nullable();
            $table->string('dni')->nullable();
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
        //
    }
}
