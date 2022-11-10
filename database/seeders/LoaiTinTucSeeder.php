<?php

namespace Database\Seeders;

use App\Models\LoaiTinTuc;
use Illuminate\Database\Seeder;

class LoaiTinTucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LoaiTinTuc::create([
            'ten_tin_tuc' => "Các mẹo vặt",
        ]);
        LoaiTinTuc::create([
            'ten_tin_tuc' => "Cảnh báo lừa đảo",
        ]);
    }
}
