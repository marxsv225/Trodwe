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
        $categorie->is_online="1";
        $categorie->save();

        $categorie = new Category();
        $categorie->nom="Femmes";
        $categorie->is_online="1";
        $categorie->save();

        $categorie = new Category();
        $categorie->nom="Enfants";
        $categorie->is_online="1";
        $categorie->save();

        $categorie = new Category();
        $categorie->nom="Garçons";
        $categorie->is_online="1";
        $categorie->save();

        $categorie = new Category();
        $categorie->nom="Filles";
        $categorie->is_online="1";
        $categorie->save();

        $categorie = new Category();
        $categorie->nom="Accessoires";
        $categorie->is_online="1";
        $categorie->save();

        $categorie = new Category();
        $categorie->nom="Beaute";
        $categorie->is_online="1";
        $categorie->save();
    }
}
