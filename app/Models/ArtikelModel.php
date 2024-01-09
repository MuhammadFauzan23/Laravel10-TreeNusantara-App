<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtikelModel extends Model
{
    use HasFactory;
    protected $table = 'tbl_artikel';

    protected $fillable = [
        'id',
        'judul',
        'slug',
        'body',
        'kategori_id',
        'user_id',
        'gambar_artikel',
        'is_active',
        'views',
    ];

    protected $hidden = [];

    public function kategori()
    {
        return $this->belongsTo(KategoriModel::class, 'kategori_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
