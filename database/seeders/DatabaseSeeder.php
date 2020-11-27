<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('admins')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456'),
            'phone' => '0123456789',
            'created_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
           'name' => 'Đinh Khắc Tùng',
           'email' => 'tungdk228@gmail.com',
           'password' => Hash::make('123456'),
           'created_at' => Carbon::now()
        ]);
    }
}
