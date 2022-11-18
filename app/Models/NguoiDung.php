<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class NguoiDung extends Authenticatable
{
    use HasFactory;
    use SoftDeletes;
    protected $primaryKey = "id";
    protected $table = "nguoi_dungs";
    protected $fillable = ["tai_khoan", "mat_khau", "ho_ten", "email", "so_dien_thoai", "anh_dai_dien", "phan_quyen","trang_thai_email", "trang_thai_so_dien_thoai", "trang_thai_nguoi_dung"];

    public function getPasswordAttribute()
    {
        return $this->mat_khau;
    }
}
