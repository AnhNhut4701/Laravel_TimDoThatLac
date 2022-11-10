<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TinTuc extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "tin_tucs";
    protected $fillable = ['nguoi_dung_id','loai_tin_tuc_id','tieu_de', 'noi_dung'];
    protected $guarded = [];
    public function NguoiDung()
    {
        return $this->belongsTo(NguoiDung::class, 'nguoi_dung_id', 'id');
    }
    public function LoaiTinTuc()
    {
        return $this->belongsTo(LoaiTinTuc::class, 'loai_tin_tuc_id', 'id');
    }
    public function hinhanhtintuc()
    {
        return $this->hasMany(HinhAnhTinTuc::class, 'tin_tuc_id', 'id');
    }
}
