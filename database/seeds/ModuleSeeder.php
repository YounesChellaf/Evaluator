<?php

use App\Module;
use Illuminate\Database\Seeder;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Module::insert([
            [
                'designation' => 'Langue Arab',
                'description' => 'Langue Arab',
                'coefficient' => 5,
                'hours_volume' => 30,
            ],
            [
                'designation' => 'Langue Francaise',
                'description' => 'Langue Francaise',
                'coefficient' => 5,
                'hours_volume' => 30,
            ],
            [
                'designation' => 'Mathematique',
                'description' => 'Mathematique',
                'coefficient' => 5,
                'hours_volume' => 30,
            ]
        ]);
    }
}
