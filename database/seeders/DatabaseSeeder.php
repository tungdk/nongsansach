<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Setting;
use App\Models\User;
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
//         User::factory(1)->create();
//         Admin::factory(1)->create();
         Setting::factory(1)->create();
//        DB::table('admins')->insert([
//            'name' => 'Admin',
//            'email' => 'admin@gmail.com',
//            'password' => Hash::make('123456'),
//            'phone' => '0123456789',
//            'created_at' => Carbon::now()
//        ]);
//
//        DB::table('users')->insert([
//           'name' => 'Đinh Khắc Tùng',
//           'email' => 'tungdk228@gmail.com',
//           'address' => 'Hà Nội',
//           'phone' => '012345678',
//           'confirmed' => 1,
//           'password' => Hash::make('123456'),
//           'created_at' => Carbon::now()
//        ]);
    }
}
