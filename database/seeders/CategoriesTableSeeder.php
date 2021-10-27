<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'id'             => 1,
                'name'           => 'Actif Monétaire',
                'slug'          => 'Actif Monétaire',
            ],
            [
                'id'             => 2,
                'name'           => 'Actif Immobilier',
                'slug'          => 'Actif Immobilier',
            ],
            [
                'id'             => 3,
                'name'           => 'Actif Boursier',
                'slug'          => 'Actif Boursier',
            ],
        ];

        Category::insert($categories);

        //
    }
}
