<?php

use Illuminate\Database\Seeder;
use App\Models\Professor;

class ProfessorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        
        Professor::create([
            'nm_professor'     => 'Leonardo',
            'registro_geral_professor'    => '123456789',
            'cpf_professor' => '12345678910',
            'dt_nascimento_professor'     => '1981-05-10', 
            'nm_endereco'     => 'rua n 269', 
            'nm_email_professor'     => 'leonardo@hotmail.com', 
            'cd_telefone_professor'     => '996774285', 
        ]);
        Professor::create([
            'nm_professor'     => 'Maria',
            'registro_geral_professor'    => '987654321',
            'cpf_professor' => '01987654321',
            'dt_nascimento_professor'     => '1981-05-10', 
            'nm_endereco'     => 'rua n 269', 
            'nm_email_professor'     => 'maria@hotmail.com', 
            'cd_telefone_professor'     => '996774285', 
        ]);
    }
}