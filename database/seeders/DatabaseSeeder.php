<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
//        \DB::table('admins')->insert([
//            'name' => 'admin',
//            'email' =>'admin@gmail.com',
//            'phone' => '0123456789',
//            'password' => Hash::make('123456'),
//            'created_at' => Carbon::now()
//        ]);

        for($i=1; $i<=10; $i++){
            \DB::table('users')->insert([
                'name' => 'user_'. $i,
                'email' => 'user_'.$i.'@gmail.com',
                'phone' => '012345678'.$i,
                'password' => Hash::make('123456'),
                'created_at' => Carbon::now()
            ]);
        }
    }
}
