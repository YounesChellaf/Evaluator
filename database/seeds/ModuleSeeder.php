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
        Module::inserte([
            [
                'designation' => 'Langue Arab',
                'niveau_0' => true,
                'niveau_1' => true,
                'niveau_2' => true,
                'niveau_3' => true,
                'niveau_4' => true,
                'niveau_5' => true,
            ],
            [
                'designation' => 'Langue Arab',
                'niveau_0' => true,
                'niveau_1' => true,
                'niveau_2' => true,
                'niveau_3' => true,
                'niveau_4' => true,
                'niveau_5' => true,
            ],
            [],
            [],
            [],
            [],
            [],
            [],
            [],
        ]);
    }
}
