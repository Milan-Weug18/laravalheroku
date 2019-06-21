<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    $role_employee = new Role();
    $role_employee->name = 'Admin';
    $role_employee->description = 'A Admin User';
    $role_employee->save();


    $role_manager = new Role();
    $role_manager->name = 'Influencer';
    $role_manager->description = 'A Influener User';
    $role_manager->save();

    $role_manager = new Role();
    $role_manager->name = 'Company';
    $role_manager->description = 'A Company User';
    $role_manager->save();
    }
}
