<?php

use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Permission::create([
            'tipo' => 'Registar utilizador',
            'slug' => 'descricao',
            'link' => 'user.create'
        ]);
         Permission::create([
            'tipo' => 'Listar utilizador',
            'slug' => 'descricao',
            'link' => 'user.index'
        ]);
         Permission::create([
            'tipo' => 'Registar função',
            'slug' => 'descricao',
            'link' => 'role.create'
        ]);
         Permission::create([
            'tipo' => 'Listar função',
            'slug' => 'descricao',
            'link' => 'role.index'
        ]);    }
}
