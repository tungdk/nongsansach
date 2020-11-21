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
        \DB::table('admins')->insert([
            'name' => 'admin',
            'email' =>'admin@gmail.com',
            'phone' => '0123456789',
            'password' => Hash::make('123456'),
            'created_at' => Carbon::now()
        ]);
    }
}
