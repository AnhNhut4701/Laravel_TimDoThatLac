<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HinhAnhTinTuc extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "hinh_anh_tin_tucs";
    protected $fillable = ["tin_tuc_id", "ten_hinh_anh","trang_thai"];
    public function tintuc(){
        return $this->belongsTo(TinTuc::class);
    }
}
