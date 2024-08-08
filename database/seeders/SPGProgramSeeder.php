<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SPGProgram;

class SPGProgramSeeder extends Seeder
{
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            $ecc = rand(0, 1);
            $ps = $ecc === 0 ? 0 : rand(0, 3);
            $usia = rand(20, 30);

            SPGProgram::create([
                'ecc' => $ecc,
                'ps' => $ps,
                'usia' => $usia,
            ]);
        }
    }
}
