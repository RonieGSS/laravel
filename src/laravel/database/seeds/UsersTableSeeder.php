<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
        	'id' => 1,
            'name' => 'Fuge',
            'email' => 'fuga@example.com',
            'password' => Hash::make('fugefuge')
        ]);

        $adminUser = User::find(1);
        $adminUser->assignRole('admin');
    }
}
