<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LoaiBaiViet extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $primaryKey = "id";
    protected $table = "loai_bai_viets";
    protected $fillable = ["ten_bai_viet"];
    public function baiviet(){
        return $this->hasMany(BaiViet::class,'loai_bai_viet_id','id');
    }
}
