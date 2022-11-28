<?php

namespace Database\Seeders;

use App\Models\NguoiDung;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class NguoiDungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 6; $i++) {
            echo "Add tài khoản {$i}";
            NguoiDung::create([
                "ho_ten" => "Quản trị viên_{$i}",
                "email" => "anhnhut{$i}@gmail.com",
                "so_dien_thoai" => "12345{$i}",
                "tai_khoan" => "admin_{$i}",
                "mat_khau" => Hash::make("123456{$i}"),
                "anh_dai_dien" => "aaaa",
                "phan_quyen" => "1",
                "trang_thai_email" => "1",
                "trang_thai_so_dien_thoai" => "1",
                "trang_thai_nguoi_dung" => "1",
            ]);

        }
        echo "Done__";
    }
}
