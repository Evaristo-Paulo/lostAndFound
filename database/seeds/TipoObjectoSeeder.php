<?php

use App\Models\TipoObjecto;
use Illuminate\Database\Seeder;

class TipoObjectoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         TipoObjecto::create([
            'nome' => 'documentação',
            'descricao' => 'texto genérico',

        ]);

         TipoObjecto::create([
            'nome' => 'viatura',
            'descricao' => 'texto genérico',

        ]);
    }
}
