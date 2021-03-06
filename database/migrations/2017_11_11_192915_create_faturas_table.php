<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFaturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faturas', function (Blueprint $table) {
            $table->increments('id');
            $table->float('leitura');
            $table->double('consumo_registado');
            $table->double('valor_pagar');
            $table->date('data_leitura');
            $table->date('data_limite');
            $table->integer('user_id')->references('id')->on('users');
            $table->integer('contrato_id')->references('id')->on('contratos');
            $table->double('multa');
            $table->boolean('status')->default(1);
            $table->boolean('estado_pagamento')->default(0);
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
        Schema::dropIfExists('faturas');
    }
}
