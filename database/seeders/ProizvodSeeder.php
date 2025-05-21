<?php

namespace Database\Seeders;

use App\Models\Proizvod;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProizvodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Proizvod::create([ 'naziv' => 'Mleko 0.5% m.m.', 'opis' => 'Mleko sa niskim sadržajem masti 0,5% mlečne masti.', 'cena' => 80.00, 'istaknut' => false, 'slika' => null, 'kategorija_id' => 1 ]);
        Proizvod::create([ 'naziv' => 'Mleko 1.5% m.m.', 'opis' => 'Poluobrano mleko 1,5% mlečne masti.', 'cena' => 90.00, 'istaknut' => false, 'slika' => null, 'kategorija_id' => 1 ]);
        Proizvod::create([ 'naziv' => 'Mleko 2.8% m.m.', 'opis' => 'Sveže punomasno mleko 2,8% mlečne masti.', 'cena' => 100.00, 'istaknut' => true, 'slika' => null, 'kategorija_id' => 1 ]);
        Proizvod::create([ 'naziv' => 'Mleko 3.5% m.m.', 'opis' => 'Bogato punomasno mleko 3,5% mlečne masti.', 'cena' => 110.00, 'istaknut' => false, 'slika' => null, 'kategorija_id' => 1 ]);
        Proizvod::create([ 'naziv' => 'Prirodni jogurt 1kg', 'opis' => 'Kremasti obični jogurt.', 'cena' => 150.00, 'istaknut' => true, 'slika' => null, 'kategorija_id' => 2 ]);
        Proizvod::create([ 'naziv' => 'Voćni jogurt jagoda', 'opis' => 'Voćni jogurt od jagode.', 'cena' => 120.00, 'istaknut' => false, 'slika' => null, 'kategorija_id' => 2 ]);
        Proizvod::create([ 'naziv' => 'Voćni jogurt breskva', 'opis' => 'Voćni jogurt od breskve.', 'cena' => 120.00, 'istaknut' => false, 'slika' => null, 'kategorija_id' => 2 ]);
        Proizvod::create([ 'naziv' => 'Grčki jogurt', 'opis' => 'Gusti jogurt u grčkom stilu.', 'cena' => 200.00, 'istaknut' => true, 'slika' => null, 'kategorija_id' => 2 ]);
        Proizvod::create([ 'naziv' => 'Grčki jogurt med', 'opis' => 'Grcki jogurt sa medom.', 'cena' => 220.00, 'istaknut' => false, 'slika' => null, 'kategorija_id' => 2 ]);
        Proizvod::create([ 'naziv' => 'Pavlaka 12% m.m.', 'opis' => 'Svetla pavlaka 12% mlečne masti.', 'cena' => 130.00, 'istaknut' => false, 'slika' => null, 'kategorija_id' => 4 ]);
        Proizvod::create([ 'naziv' => 'Pavlaka 20% m.m.', 'opis' => 'Krem za kuvanje 20% mlečne masti.', 'cena' => 140.00, 'istaknut' => false, 'slika' => null, 'kategorija_id' => 4 ]);
        Proizvod::create([ 'naziv' => 'Pavlaka 30% m.m.', 'opis' => 'Šlag 30% mlečne masti.', 'cena' => 160.00, 'istaknut' => true, 'slika' => null, 'kategorija_id' => 4 ]);
        Proizvod::create([ 'naziv' => 'Krem sir', 'opis' => 'Meki sir za mazanje.', 'cena' => 180.00, 'istaknut' => false, 'slika' => null, 'kategorija_id' => 3 ]);
        Proizvod::create([ 'naziv' => 'Feta sir', 'opis' => 'Slani ukiseljeni sir.', 'cena' => 250.00, 'istaknut' => false, 'slika' => null, 'kategorija_id' => 3 ]);
        Proizvod::create([ 'naziv' => 'Gauda', 'opis' => 'Blagi polutvrdi sir.', 'cena' => 240.00, 'istaknut' => false, 'slika' => null, 'kategorija_id' => 3 ]);
        Proizvod::create([ 'naziv' => 'Parmezan', 'opis' => 'Stari tvrdi sir.', 'cena' => 300.00, 'istaknut' => true, 'slika' => null, 'kategorija_id' => 3 ]);
        Proizvod::create([ 'naziv' => 'Kajmak', 'opis' => 'Bogat kremasti mlečni namaz.', 'cena' => 200.00, 'istaknut' => false, 'slika' => null, 'kategorija_id' => 4 ]);
        Proizvod::create([ 'naziv' => 'Kefir', 'opis' => 'Napitak od fermentisanog mleka.', 'cena' => 110.00, 'istaknut' => false, 'slika' => null, 'kategorija_id' => 2 ]);
    }
}
