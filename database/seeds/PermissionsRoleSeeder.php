<?php

use Illuminate\Database\Seeder;
use App\Models\PermissionsRole;

class PermissionsRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         PermissionsRole::create([
        	'permission_id' => 1,
            'role_id' => 1
         ]);
        PermissionsRole::create([
        	'permission_id' => 2,
            'role_id' => 1
         ]);
        PermissionsRole::create([
        	'permission_id' => 3,
            'role_id' => 1
         ]);
        PermissionsRole::create([
        	'permission_id' => 4,
            'role_id' => 1
         ]);
    }
}
