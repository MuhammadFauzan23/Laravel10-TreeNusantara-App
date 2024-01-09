<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlideModel extends Model
{
    use HasFactory;
    protected $table = "tbl_slide";

    protected $fillable = [
        'judul_slide',
        'link',
        'gambar_slide',
        'status',
    ];
}
