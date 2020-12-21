<?php

namespace Database\Factories;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Đinh Khắc Tùng',
            'email' => 'tungdk228@gmail.com',
            'address' => 'Hà Nội',
            'phone' => '012345678',
            'confirmed' => 1,
            'password' => Hash::make('123456'),
            'created_at' => Carbon::now()
        ];
    }
}
