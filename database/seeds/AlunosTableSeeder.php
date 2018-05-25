<?php

use Illuminate\Database\Seeder;
use App\Models\Aluno;

class AlunosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Aluno::create([
            'nome'  => 'Fulano',
            'cpf'   => '75846324319',
            'rg'    =>'234567890',
            'cep'   =>'11789155',
            'rua'   =>'Rua das ruas',
            'numero'=> '453',
            'bairro'=>'Bairrista',
            'cidade'=>'São Paulo',
            'estado'=>'SP',
            'dt_nascimento' =>'1989-03-21',
            'telefone' =>'13998765432',
            'email'  =>'fulano@domain.com',
            'id_plano'=>1,
            'id_modalidade' =>1,
        ]);
    }
}
