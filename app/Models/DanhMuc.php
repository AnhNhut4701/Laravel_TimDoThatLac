<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DanhMuc extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ["ten_danh_muc"];

    protected $primaryKey = "id";
    protected $table = "danh_mucs";

    public function baiviet(){
        return $this->hasMany(BaiViet::class,'danh_muc_id', 'id');
    }

}
