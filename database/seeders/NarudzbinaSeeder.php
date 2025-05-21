<?php

namespace Database\Seeders;

use App\Models\Narudzbina;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NarudzbinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Narudzbina::create([ 'user_id' => 1, 'proizvod_id' => 3,  'kolicina' => 2, 'status' => 'cekanje' ]);
        Narudzbina::create([ 'user_id' => 1, 'proizvod_id' => 8,  'kolicina' => 1, 'status' => 'placeno' ]);
        Narudzbina::create([ 'user_id' => 1, 'proizvod_id' => 12, 'kolicina' => 3, 'status' => 'cekanje' ]);
        Narudzbina::create([ 'user_id' => 1, 'proizvod_id' => 16, 'kolicina' => 1, 'status' => 'otkazano' ]);
        Narudzbina::create([ 'user_id' => 1, 'proizvod_id' => 5,  'kolicina' => 4, 'status' => 'placeno' ]);
 
    }
}
