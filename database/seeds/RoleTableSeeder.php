<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Spatie\Permission\Models\Role;


class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $superAdmin = Role::create([
            'name' => 'Super-Admin',
            'guard_name' => 'super-admin',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    	
        $admin = Role::create([
            'name' => 'Admin',
            'guard_name' => 'admin',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]); 

        $instructor = Role::create([
            'name' => 'Instructor',
            'guard_name' => 'instructor',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);  


        $registrar = Role::create([
            'name' => 'Registrar',
            'guard_name' => 'registrar',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);  

        $cashier = Role::create([
            'name' => 'Cashier',
            'guard_name' => 'cashier',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);  

        $trainee = Role::create([
            'name' => 'Trainee',
            'guard_name' => 'trainee',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

    }
}
