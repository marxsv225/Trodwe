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
        //
        $categorie = new Category();
        $categorie->nom="Hommes";
        $categorie->slug="hommes";
        $categorie->save();

        $categorie = new Category();
        $categorie->nom="Femmes";
        $categorie->slug="femmes";
        $categorie->save();

        $categorie = new Category();
        $categorie->nom="Enfants";
        $categorie->slug="enfants";
        $categorie->save();
    }
}
