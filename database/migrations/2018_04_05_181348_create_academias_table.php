<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cd_cnpj');
            $table->integer('userMASTER');
            $table->integer('cd_funcionario');
            $table->string('nm_academia');
            $table->integer('cd_registro_geral_funcionario');
            $table->integer('cd_telefone_academia');
            $table->integer('cd_cpf_funcionario');
            $table->string('nm_endereco_academia');
            $table->date('dt_admissao');
            $table->date('dt_demissao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('academias');
    }
}
