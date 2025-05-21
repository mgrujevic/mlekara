<?php

namespace Database\Seeders;

use App\Models\KategorijaProizvoda;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategorijeProizvodaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KategorijaProizvoda::create([
            'naziv' => "Mleka"
        ]);
        KategorijaProizvoda::create([
            'naziv' => "Jogurti"
        ]);
        KategorijaProizvoda::create([
            'naziv' => "Sirevi"
        ]);
        KategorijaProizvoda::create([
            'naziv' => "Namazi"
        ]);
    }
}
