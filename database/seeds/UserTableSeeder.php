<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\User;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        	
        $superadmin = User::create([
        	'email' => 'superadmin@email.com',
        	'password' => Hash::make('sample1234'),

        ]);

        $superadmin->assignRole('Super-Admin');

    }
}
