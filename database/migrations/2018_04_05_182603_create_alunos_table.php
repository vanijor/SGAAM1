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
            $table->increments('id');
            $table->integer('matricula_aluno');
            $table->integer('cpf_aluno');
            $table->integer('registro_geral_aluno');
            $table->string('nm_endereco');
            $table->date('dt_nascimento_aluno');
            $table->integer('cd_telefone_aluno');
            $table->string('nm_email_aluno');
            $table->string('nm_aluno');
            $table->string('tipo_plano');
            $table->string('nm_modalidade');
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
