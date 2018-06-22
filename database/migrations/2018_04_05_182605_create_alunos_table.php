<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->increments ('id');
            $table->string('nome');
            $table->bigInteger('cpf')->unique();
            $table->bigInteger('rg');
            $table->integer('cep');
            $table->string('rua');
            $table->integer('numero');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');
            $table->date('dt_nascimento');
            $table->bigInteger('telefone');
            $table->string('email');
            $table->integer('modalidade_id')->unsigned();
            $table->integer('plano_id')->unsigned();
            
            $table->foreign('modalidade_id')->references('id')->on('modalidades');
            $table->foreign('plano_id')->references('id')->on('planos');
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
        Schema::dropIfExists('alunos');
    }
}
