<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IklanModel extends Model
{
    use HasFactory;
    protected $table = "tbl_iklan";

    protected $fillable = [
        'judul_iklan',
        'link',
        'gambar_iklan',
        'status',
    ];

    protected $hidden = [];
}
