<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BaiViet extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "bai_viets";
    protected $fillable = [
        "nguoi_dung_id",
        "loai_bai_viet_id",
        "danh_muc_id",
        "tieu_de",
        "noi_dung",
        "thoi_gian",
        "khu_vuc",
        "trang_thai",
    ];
    public function NguoiDung()
    {
        return $this->belongsTo(NguoiDung::class, 'nguoi_dung_id', 'id');
    }
    public function loaibaiviet()
    {
        return $this->belongsTo(LoaiBaiViet::class, 'loai_bai_viet_id', 'id');
    }
    public function danhmuc()
    {
        return $this->belongsTo(DanhMuc::class, 'danh_muc_id', 'id');
    }
    public function hinhanh(){
        return $this->hasMany(HinhAnhBaiViet::class,'bai_viet_id', 'id');
    }
    public function BinhLuan()
    {
        return $this->hasMany(BinhLuan::class);//->whereNull('parent_id');
    }

}
