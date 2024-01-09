<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DummyUserSeeder extends Seeder
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
                'name' => 'fauzan',
                'email' => 'fauzan@gmail.com',
                'password' => bcrypt('fauzan'),
                'status' => 'aktif',
                'role' => 'administrator',
            ],
            // [
            //     'name' => 'suci',
            //     'email' => 'suci@gmail.com',
            //     'password' => bcrypt('suci'),
            //     'status' => 'aktif',
            //     'role' => 'kasir',
            // ],
            // [
            //     'name' => 'nauval',
            //     'email' => 'nauval@gmail.com',
            //     'password' => bcrypt('nauval'),
            //     'status' => 'blokir',
            //     'role' => 'kasir',
            // ]
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
