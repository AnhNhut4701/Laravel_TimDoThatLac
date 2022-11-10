<?php

namespace Database\Seeders;

use App\Models\HinhAnhBaiViet;
use Illuminate\Database\Seeder;

class HinhAnhBaiVietSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 6; $i++) {
            echo "Thêm hình ảnh bài viết {$i}";
            HinhAnhBaiViet::create([
                "bai_viet_id" => "{$i}",
                "ten_hinh_anh" => "aaaa",
                "trang_thai" => 1,
            ]);
        }
        for ($i = 1; $i <= 6; $i++) {
            echo "Thêm hình ảnh bài viết {$i}";
            HinhAnhBaiViet::create([
                "bai_viet_id" => "{$i}",
                "ten_hinh_anh" => "aaaa",
                "trang_thai" => 1,
            ]);
        }
    }
}
