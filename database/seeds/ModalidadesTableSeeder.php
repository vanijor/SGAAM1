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
        ]);
        Modalidade::Create([
            'nome'          =>'Jiujitsu',
            'qt_aulasem'    =>'3',
            'qt_hraula'     =>'2',
        ]);
        Modalidade::Create([
            'nome'          =>'Karate',
            'qt_aulasem'    =>'3',
            'qt_hraula'     =>'2',
        ]);
    }
}
