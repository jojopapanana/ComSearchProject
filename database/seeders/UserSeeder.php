<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'Anita Baldwin',
            'email' => 'anitabaldwin@gmail.com',
            'password' => 'hibaldwin'
            ],
            ['name' => 'Rebecca Ferguson',
            'email' => 'rebeccaferguson@gmail.com',
            'password' => 'beccah'
            ],
            ['name' => 'Chris Pratt',
            'email' => 'chrispratt@gmail.com',
            'password' => 'prattpratt'
            ]
        ]);
    }
}
