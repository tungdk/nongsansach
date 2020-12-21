<?php

namespace Database\Factories;

use App\Models\Admin;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class AdminFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Admin::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456'),
            'phone' => '0123456789',
            'created_at' => Carbon::now()
        ];

    }
}
