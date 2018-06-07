<?php

use Illuminate\Database\Seeder;
use App\Models\Modalidade;

class ModalidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Modalidade::Create([
            'nome'          =>'Boxe',
            'qt_aulasem'    =>'3',
            'qt_hraula'     =>'2',
            'professor_id'  =>'1',
        ]);
    }
}
