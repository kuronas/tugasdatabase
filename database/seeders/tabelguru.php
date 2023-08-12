<?php

namespace Database\Seeders;
use App\Models\guru;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tabelguru extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        guru::create([
            'NIP' => '115',
            'Nama Guru' => 'Ibu Rahmi',
            'Alamat' => 'Tanjung',
            'Tanggal Lahir' => '1996-03-26'
        ]);
    }
}
