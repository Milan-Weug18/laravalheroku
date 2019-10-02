<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    

    $role_employee = Role::where('name', 'User')->first();
    $role_manager  = Role::where('name', 'Admin')->first();
    $role_company  = Role::where('name', 'Company')->first();

    $employee = new User();
    $employee->name = 'Default Name';
    $employee->email = 'user@example.com';
    $employee->password = bcrypt('secret');
    $employee->save();
    $employee->roles()->attach($role_employee);


    $manager = new User();
    $manager->name = 'Manager Name';
    $manager->email = 'manager@example.com';
    $manager->password = bcrypt('secret');
    $manager->save();
 
 	$manager->roles()->attach($role_manager);

    $company = new User();
    $company->name = 'Company Name';
    $company->email = 'company@example.com';
    $company->password = bcrypt('secret');
    $company->save();



    $company->roles()->attach($company);


    //     $users = User::all();

    //     foreach ($users as $user) {
    //         $user->roles()->attach($role_employee);
    //     }

    }


}
