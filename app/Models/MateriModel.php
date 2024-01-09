<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MateriModel extends Model
{
    use HasFactory;
    protected $table = "tbl_materi";

    protected $fillable = [
        'judul_materi',
        'slug',
        'deskripsi_materi',
        'link',
        'playlist_id',
        'user_id',
        'gambar_materi',
        'is_active',
    ];
    protected $hidden = [];

    public function playlist()
    {
        return $this->belongsTo(PlaylistModel::class, 'playlist_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
