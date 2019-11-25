<?php

use App\Level;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Level::insert([
            [
                'name' => 'Année préparatoire',
                'cycle' => 'primaire'
            ],
            [
                'name' => 'Premiére année',
                'cycle' => 'primaire'
            ],
            [
                'name' => 'Deuxieme année',
                'cycle' => 'primaire'
            ],
            [
                'name' => 'Troisiéme année',
                'cycle' => 'primaire'
            ],
            [
                'name' => 'Quatriéme année',
                'cycle' => 'primaire'
            ],
            [
                'name' => 'Cinquiéme année',
                'cycle' => 'primaire'
            ],
            [
                'name' => 'Premiére année',
                'cycle' => 'cem'
            ],
            [
                'name' => 'Deuxieme année',
                'cycle' => 'cem'
            ],
            [
                'name' => 'Troisieme année',
                'cycle' => 'cem'
            ],
            [
                'name' => 'Quatrieme année',
                'cycle' => 'cem'
            ],
            [
                'name' => 'Premiére année',
                'cycle' => 'lycee'
            ],
            [
                'name' => 'Deuxieme année',
                'cycle' => 'lycee'
            ],
            [
                'name' => 'Troisieme année',
                'cycle' => 'lycee'
            ],
        ]);
    }
}
