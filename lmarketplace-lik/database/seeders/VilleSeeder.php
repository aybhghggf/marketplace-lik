<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VilleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Villes= [
            // moroccan villes name and image
            ['name' => 'Casablanca', 'image' => 'casablanca.jpg'],
            ['name' => 'Rabat', 'image' => 'rabat.jpg'],
            ['name' => 'Marrakech', 'image' => 'marrakech.jpg'],
            ['name' => 'Fès', 'image' => 'fes.jpg'],
            ['name' => 'Tanger', 'image' => 'tanger.jpg'],
            ['name' => 'Agadir', 'image' => 'agadir.jpg'],
            ['name' => 'Oujda', 'image' => 'oujda.jpg'],
            ['name' => 'Meknès', 'image' => 'meknes.jpg'],
            ['name' => 'Tétouan', 'image' => 'tetouan.jpg'],
        ];
        foreach ($Villes as $ville) {
            \App\Models\Ville::create($ville);
        }
    }
}
