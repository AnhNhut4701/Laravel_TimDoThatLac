<?php

namespace Database\Seeders;

use App\Models\NguoiDung;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<6;$i++)
        {
            echo "Add quản trị viên {$i}";
            NguoiDung::create([
                "tai_khoan" => "admin_{$i}",
                "mat_khau" => Hash::make("123456{$i}"),
                "ho_ten" => "Quản trị viên_{$i}",
            ]);

        }
        echo"Done__";
    }
}
