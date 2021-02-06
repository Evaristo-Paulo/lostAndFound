<?php

use App\Models\Provincia;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {    $this->call(PessoaSeeder::class);
         $this->call(UserSeeder::class);
         $this->call(RoleSeeder::class);
         $this->call(PermissionSeeder::class);
         $this->call(PermissionsRoleSeeder::class);
         $this->call(RoleUserSeeder::class);
         $this->call(ProvinciaSeeder::class);
         $this->call(MunicipioSeeder::class);
         $this->call(TipoObjectoSeeder::class);
    }
}
