<?php

namespace Database\Seeders;

use App\Models\DanhMuc;
use Illuminate\Database\Seeder;

class DanhMucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DanhMuc::create([
            'ten_danh_muc' => "Ví",
        ]);
        DanhMuc::create([
            'ten_danh_muc' => "Giấy tờ",
        ]);
        DanhMuc::create([
            'ten_danh_muc' => "Thú cưng",
        ]);
        DanhMuc::create([
            'ten_danh_muc' => "Điện thoại",
        ]);
        DanhMuc::create([
            'ten_danh_muc' => "Đồ vật khác",
        ]);

    }
}
