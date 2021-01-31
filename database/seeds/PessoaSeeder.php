<?php

use Illuminate\Database\Seeder;
use App\Models\Pessoa;

class PessoaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pessoa::create([
            'nome' => 'Administrador',
            'telefone' => '999999999',
        ]);
    }
}
