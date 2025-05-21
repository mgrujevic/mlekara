<?php

namespace Database\Seeders;

use App\Models\NutritivnaVrednost;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NutritivnaVrednostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NutritivnaVrednost::create(['proizvod_id' => 1, 'energija' => 20,  'proteini' => 3.4, 'ugljeni_hidrati' => 5.0, 'masti' => 0.5]);
        NutritivnaVrednost::create(['proizvod_id' => 2, 'energija' => 40,  'proteini' => 3.3, 'ugljeni_hidrati' => 5.0, 'masti' => 1.5]);
        NutritivnaVrednost::create(['proizvod_id' => 3, 'energija' => 60,  'proteini' => 3.2, 'ugljeni_hidrati' => 5.0, 'masti' => 2.8]);
        NutritivnaVrednost::create(['proizvod_id' => 4, 'energija' => 64,  'proteini' => 3.2, 'ugljeni_hidrati' => 5.0, 'masti' => 3.5]);

        NutritivnaVrednost::create(['proizvod_id' => 5,  'energija' => 61,  'proteini' => 5.0, 'ugljeni_hidrati' => 7.0, 'masti' => 3.3]);
        NutritivnaVrednost::create(['proizvod_id' => 6,  'energija' => 77,  'proteini' => 5.0, 'ugljeni_hidrati' => 12.0,'masti' => 0.4]);
        NutritivnaVrednost::create(['proizvod_id' => 7,  'energija' => 73,  'proteini' => 5.0, 'ugljeni_hidrati' => 11.0,'masti' => 0.4]);
        NutritivnaVrednost::create(['proizvod_id' => 8,  'energija' => 120, 'proteini' => 10.0,'ugljeni_hidrati' => 3.6, 'masti' => 6.0]);
        NutritivnaVrednost::create(['proizvod_id' => 9,  'energija' => 140, 'proteini' => 10.0,'ugljeni_hidrati' => 16.0,'masti' => 6.0]);

        NutritivnaVrednost::create(['proizvod_id' => 10, 'energija' => 120, 'proteini' => 2.0, 'ugljeni_hidrati' => 3.0, 'masti' => 12.0]);
        NutritivnaVrednost::create(['proizvod_id' => 11, 'energija' => 180, 'proteini' => 2.5, 'ugljeni_hidrati' => 3.0, 'masti' => 20.0]);
        NutritivnaVrednost::create(['proizvod_id' => 12, 'energija' => 300, 'proteini' => 2.8, 'ugljeni_hidrati' => 3.0, 'masti' => 30.0]);

        NutritivnaVrednost::create(['proizvod_id' => 13, 'energija' => 342, 'proteini' => 6.0, 'ugljeni_hidrati' => 4.0, 'masti' => 34.0]);
        NutritivnaVrednost::create(['proizvod_id' => 14, 'energija' => 264, 'proteini' => 14.0,'ugljeni_hidrati' => 4.0, 'masti' => 21.0]);
        NutritivnaVrednost::create(['proizvod_id' => 15, 'energija' => 356, 'proteini' => 25.0,'ugljeni_hidrati' => 2.2, 'masti' => 27.0]);
        NutritivnaVrednost::create(['proizvod_id' => 16, 'energija' => 431, 'proteini' => 38.0,'ugljeni_hidrati' => 4.0, 'masti' => 29.0]);
        NutritivnaVrednost::create(['proizvod_id' => 17, 'energija' => 350, 'proteini' => 5.0, 'ugljeni_hidrati' => 2.0, 'masti' => 35.0]);

        NutritivnaVrednost::create(['proizvod_id' => 18, 'energija' => 41,  'proteini' => 3.4, 'ugljeni_hidrati' => 4.0, 'masti' => 1.0]);
        
    }
}
