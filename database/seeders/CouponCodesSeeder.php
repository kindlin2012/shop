<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CouponCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\CouponCode::factory()->count(20)->create();
    }
}
