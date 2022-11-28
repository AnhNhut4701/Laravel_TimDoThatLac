<?php

namespace Database\Seeders;

use App\Models\BaiViet;
use Illuminate\Database\Seeder;

class BaiVietSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 4; $i++) {
            echo "Thêm bài viết{$i}";
            BaiViet::create([
                "nguoi_dung_id" => "{$i}",
                "loai_bai_viet_id" => 1,
                "danh_muc_id" => 1,
                "tieu_de" => "Nhặt được giấy tờ xea{$i}",
                "noi_dung" => "Nhặt được giấy tờaaaaaaaaaa xe tại TP.HCM{$i}",
                "khu_vuc" => "Quận 1, TP.HCM{$i}",
                "created_at"=>"2022-11-18 13:26:03",
                "trang_thai" => "1",
            ]);
        }
        for ($i = 4; $i <= 6; $i++) {
            echo "Thêm bài viết{$i}";
            BaiViet::create([
                "nguoi_dung_id" => "{$i}",
                "loai_bai_viet_id" => 2,
                "danh_muc_id" => 2,
                "tieu_de" => "Mất được giấy tờ xea{$i}",
                "noi_dung" => "Mất được giấy tờaaaaaaaaaa xe tại TP.HCM{$i}",
                "khu_vuc" => "Quận 1, TP.HCM{$i}",
                "created_at"=>"2022-11-18 13:26:03",
                "trang_thai" => "1",
            ]);
        }
    }
}
