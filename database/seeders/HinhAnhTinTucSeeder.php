<?php

namespace Database\Seeders;

use App\Models\HinhAnhTinTuc;
use Illuminate\Database\Seeder;

class HinhAnhTinTucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 6; $i++) {
            echo "Thêm hình ảnh tin tức {$i}";
            HinhAnhTinTuc::create([
                "tin_tuc_id" => "{$i}",
                "ten_hinh_anh" => "aaaa",
                "trang_thai" => 1,
            ]);
        }
        for ($i = 1; $i <= 6; $i++) {
            echo "Thêm hình ảnh tin tức {$i}";
            HinhAnhTinTuc::create([
                "tin_tuc_id" => "{$i}",
                "ten_hinh_anh" => "aaaa",
                "trang_thai" => 1,
            ]);
        }
    }
}
