<?php

use App\Role;
use Illuminate\Database\Seeder;


class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
                $roles = 
        [
            ['id'=>'1','name'=>'Manager'],
            ['id'=>'2','name'=>'User'],
        ];

        foreach ($roles as $role) {
            # code...
            Role::create($role);

        }
    }
}
