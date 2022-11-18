<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HinhAnhBaiViet extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $primaryKey = "id";
    protected $table = "hinh_anh_bai_viets";

    protected $fillable = ["bai_viet_id", "ten_hinh_anh","trang_thai"];
    public function baiviet(){
        return $this->belongsTo(BaiViet::class);
    }
}
