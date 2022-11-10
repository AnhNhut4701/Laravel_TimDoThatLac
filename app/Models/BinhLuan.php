<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class BinhLuan extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "binh_luans";
    protected $fillable = [
        "bai_viet_id",
        "nguoi_dung_id",
        "noi_dung",
        "trang_thai",
    ];
    public function NguoiDung()
    {
        return $this->belongsTo(NguoiDung::class, 'nguoi_dung_id', 'id');
    }
    public function replies()
    {
        return $this->hasMany(BinhLuan::class/* , 'parent_id' */);
    }
}
