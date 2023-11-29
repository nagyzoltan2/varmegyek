<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Varmegyek;

class VarmegyekTableSeeder extends Seeder
{
    public function run()
    {
        $varmegyek = ['Pest', 'Nógrád', 'Csongrád'];

        foreach ($varmegyek as $varmegye) {
            Varmegyek::create(['nev' => $varmegye]);
        }
    }
}
