<?php

use Illuminate\Database\Seeder;
use App\Models\RolesUser;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RolesUser::create([
            'user_id' => 1,
            'role_id' => 1
        ]);
    }
}
