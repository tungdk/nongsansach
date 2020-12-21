<?php

namespace Database\Factories;

use App\Models\Setting;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class SettingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Setting::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Nông sản sạch',
            'phone' => '0348520202',
            'email' => 'nongsansach@gmail.com',
            'address' => '55 Giải Phóng - P.Đồng Tâm - Q.Hai Bà Trưng - HN',
            'map' => '<iframe>Gì gì đó</iframe>',
            'time_work' => 'Thứ 2 - Chủ nhật: 9:00 - 18:00',
            'fanpage' => 'Nhúng link fanpage',
            'slogan' => 'Chúng tôi chuyên cung cấp các sản phẩm thực phẩm sạch an toàn cho sức khỏe con người',
            'about_us' => 'Đây là trang giới thiệu',
            'created_at' => Carbon::now()
        ];
    }
}
