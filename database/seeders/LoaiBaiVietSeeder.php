<?php

namespace Database\Seeders;

use App\Models\LoaiBaiViet;
use Illuminate\Database\Seeder;

class LoaiBaiVietSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LoaiBaiViet::create([
            'ten_bai_viet' => "Nhặt đồ",
        ]);
        LoaiBaiViet::create([
            'ten_bai_viet' => "Mất đồ",
        ]);
    }
}
