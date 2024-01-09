<?php

namespace Database\Seeders;

use App\Models\KategoriModel;
use Illuminate\Database\Seeder;

class DummyKategoriSeeder extends Seeder
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
                'nama_kategori' => 'Node JS',
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
            KategoriModel::create($val);
        }
    }
}
