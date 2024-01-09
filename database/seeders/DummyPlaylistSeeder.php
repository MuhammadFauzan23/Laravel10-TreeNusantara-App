<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PlaylistModel;

class DummyPlaylistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
                'judul' => 'Node JS',
                'slug' => 'Node JS',
                'deskripsi' => 'Node JS',
                'user_id' => 'Node JS',
                'gambar_playlist' => 'Node JS',
                'slug' => 'Node JS',
            ],
            [
                'nama_kategori' => 'Laravel',
                'slug' => 'Laravel',
            ],
            [
                'nama_kategori' => 'Codeigniter',
                'slug' => 'Codeigniter',
            ],
        ];

        foreach ($userData as $key => $val) {
            PlaylistModel::create($val);
        }
    }
}
