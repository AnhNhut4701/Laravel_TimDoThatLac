<?php

namespace Database\Seeders;

use App\Models\TinTuc;
use Illuminate\Database\Seeder;

class TinTucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 4; $i++) {
            echo "Add tin tức {$i}";
            TinTuc::create([
                "nguoi_dung_id" => "{$i}",
                "loai_tin_tuc_id" => 1,
                "tieu_de" => "Mẹo tìm đồ{$i}",
                "noi_dung" => "Tìm đồ{$i}",
                "thoi_gian" => "2022-10-10",
                "trang_thai"=>"1"
            ]);
        }
        for ($i = 4; $i <= 6; $i++) {
            echo "Add tin tức {$i}";
            TinTuc::create([
                "nguoi_dung_id" => "{$i}",
                "loai_tin_tuc_id" => 2,
                "tieu_de" => "Lừa đảo{$i}",
                "noi_dung" => "Danh sách lừa đảo{$i}",
                "thoi_gian" => "2022-10-10",
                "trang_thai"=>"1"
            ]);
        }
    }
}
