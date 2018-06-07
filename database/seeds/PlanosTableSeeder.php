<?php

use App\Models\Plano;
use Illuminate\Database\Seeder;

class PlanosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plano::create([
            'tipo' => 'Mensal',
            'forma_pagamento' => 'Dinheiro',
            'modalidade_id' => '1',
        ]);
        Plano::create([
            'tipo' => 'Mensal',
            'forma_pagamento' => 'Crédito',
            'modalidade_id' => '1',
        ]);
        Plano::create([
            'tipo' => 'Mensal',
            'forma_pagamento' => 'Débito',
            'modalidade_id' => '1',
        ]);
        Plano::create([
            'tipo' => 'Trimestral',
            'forma_pagamento' => 'Dinheiro',
            'modalidade_id' => '1',
        ]);
        Plano::create([
            'tipo' => 'Trimestral',
            'forma_pagamento' => 'Crédito',
            'modalidade_id' => '1',
        ]);
        Plano::create([
            'tipo' => 'Trimestral',
            'forma_pagamento' => 'Débito',
            'modalidade_id' => '1',
        ]);
        Plano::create([
            'tipo' => 'Anual',
            'forma_pagamento' => 'Dinheiro',
            'modalidade_id' => '1',
        ]);
        Plano::create([
            'tipo' => 'Anual',
            'forma_pagamento' => 'Crédito',
            'modalidade_id' => '1',
        ]);
        Plano::create([
            'tipo' => 'Anual',
            'forma_pagamento' => 'Débito',
            'modalidade_id' => '1',
        ]);
    }
}
