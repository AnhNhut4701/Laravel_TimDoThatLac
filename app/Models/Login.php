<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NguoiDung extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "nguoi_dungs";
    protected $fillable = ["tai_khoan", "mat_khau", "ho_ten"];

    public function getPasswordAttribute()
    {
        return $this->mat_khau;
    }
}
