<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LoaiTinTuc extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "loai_tin_tucs";
    protected $fillable = ["ten_tin_tuc"];
    public function TinTuc(){
        return $this->hasMany(TinTuc::class,'loai_tin_tuc_id','id');
    }
}
