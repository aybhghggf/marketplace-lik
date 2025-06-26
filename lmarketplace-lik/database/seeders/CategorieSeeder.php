<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Categorie;

class CategorieSeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Électronique',
                'slug' => Str::slug('Électronique'),
                'icon' => 'ri-smartphone-line',
                'color' => 'from-orange-400 to-orange-500',
                'ads_count' => 1245,
                'is_hot' => true,
            ],
            [
                'name' => 'Mode',
                'slug' => Str::slug('Mode'),
                'icon' => 'ri-t-shirt-line',
                'color' => 'from-pink-400 to-pink-500',
                'ads_count' => 892,
                'is_hot' => false,
            ],
            [
                'name' => 'Maison',
                'slug' => Str::slug('Maison'),
                'icon' => 'ri-home-line',
                'color' => 'from-blue-400 to-blue-500',
                'ads_count' => 1567,
                'is_hot' => false,
            ],
            [
                'name' => 'Véhicules',
                'slug' => Str::slug('Véhicules'),
                'icon' => 'ri-car-line',
                'color' => 'from-green-400 to-green-500',
                'ads_count' => 754,
                'is_hot' => false,
            ],
            [
                'name' => 'Loisirs',
                'slug' => Str::slug('Loisirs'),
                'icon' => 'ri-gamepad-line',
                'color' => 'from-purple-400 to-purple-500',
                'ads_count' => 1023,
                'is_hot' => false,
            ],
            [
                'name' => 'Livres',
                'slug' => Str::slug('Livres'),
                'icon' => 'ri-book-line',
                'color' => 'from-indigo-400 to-indigo-500',
                'ads_count' => 456,
                'is_hot' => false,
            ],
            [
                'name' => 'Sports',
                'slug' => Str::slug('Sports'),
                'icon' => 'ri-basketball-line',
                'color' => 'from-red-400 to-red-500',
                'ads_count' => 678,
                'is_hot' => false,
            ],
            [
                'name' => 'Enfants',
                'slug' => Str::slug('Enfants'),
                'icon' => 'ri-parent-line',
                'color' => 'from-yellow-400 to-yellow-500',
                'ads_count' => 512,
                'is_hot' => false,
            ],
            [
                'name' => 'Outillage',
                'slug' => Str::slug('Outillage'),
                'icon' => 'ri-tools-line',
                'color' => 'from-gray-400 to-gray-500',
                'ads_count' => 389,
                'is_hot' => false,
            ],
            [
                'name' => 'Cuisine',
                'slug' => Str::slug('Cuisine'),
                'icon' => 'ri-cup-line',
                'color' => 'from-teal-400 to-teal-500',
                'ads_count' => 723,
                'is_hot' => false,
            ],
            [
                'name' => 'Jardinage',
                'slug' => Str::slug('Jardinage'),
                'icon' => 'ri-leaf-line',
                'color' => 'from-lime-400 to-lime-500',
                'ads_count' => 267,
                'is_hot' => false,
            ],
            [
                'name' => 'Santé',
                'slug' => Str::slug('Santé'),
                'icon' => 'ri-heart-pulse-line',
                'color' => 'from-rose-400 to-rose-500',
                'ads_count' => 198,
                'is_hot' => false,
            ],
        ];

        foreach ($categories as $category) {
            Categorie::create($category);
        }
    }
}
