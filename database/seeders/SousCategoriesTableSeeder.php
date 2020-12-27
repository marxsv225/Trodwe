<?php

namespace Database\Seeders;

use App\Models\SousCategory;
use Illuminate\Database\Seeder;

class SousCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $sCategorie = new SousCategory();
        $sCategorie->nom = "Vêtements";
        $sCategorie->slug = "vetements";
        $sCategorie->is_online="1";
        $sCategorie->category_id = "1";
        $sCategorie->save();

        $sCategorie = new SousCategory();
        $sCategorie->nom = "Vêtements";
        $sCategorie->slug = "vetements";
        $sCategorie->is_online="1";
        $sCategorie->category_id = "2";
        $sCategorie->save();

        $sCategorie = new SousCategory();
        $sCategorie->nom = "Vêtements";
        $sCategorie->slug = "vetements";
        $sCategorie->is_online="1";
        $sCategorie->category_id = "3";
        $sCategorie->save();

        $sCategorie = new SousCategory();
        $sCategorie->nom = "Chaussures";
        $sCategorie->slug = "chaussures";
        $sCategorie->is_online="1";
        $sCategorie->category_id = "1";
        $sCategorie->save();

        $sCategorie = new SousCategory();
        $sCategorie->nom = "Chaussures";
        $sCategorie->slug = "chaussures";
        $sCategorie->is_online="1";
        $sCategorie->category_id = "2";
        $sCategorie->save();

        $sCategorie = new SousCategory();
        $sCategorie->nom = "Chaussures";
        $sCategorie->slug = "chaussures";
        $sCategorie->is_online="1";
        $sCategorie->category_id = "3";
        $sCategorie->save();

        $sCategorie = new SousCategory();
        $sCategorie->nom = "Accessoires";
        $sCategorie->slug = "accessoires";
        $sCategorie->is_online="1";
        $sCategorie->category_id = "1";
        $sCategorie->save();

        $sCategorie = new SousCategory();
        $sCategorie->nom = "Accessoires";
        $sCategorie->slug = "accessoires";
        $sCategorie->is_online="1";
        $sCategorie->category_id = "2";
        $sCategorie->save();

        $sCategorie = new SousCategory();
        $sCategorie->nom = "Costumes et accessoires";
        $sCategorie->slug = "costumes-et-accessoire";
        $sCategorie->is_online="1";
        $sCategorie->category_id = "1";
        $sCategorie->save();

        $sCategorie = new SousCategory();
        $sCategorie->nom = "Articles de plage et maillot de bain";
        $sCategorie->slug = "articles-de-plage-et-maillot-de-bain";
        $sCategorie->is_online="1";
        $sCategorie->category_id = "1";
        $sCategorie->save();

        $sCategorie = new SousCategory();
        $sCategorie->nom = "Articles de plage et maillot de bain";
        $sCategorie->slug = "articles-de-plage-et-maillot-de-bain";
        $sCategorie->is_online="1";
        $sCategorie->category_id = "2";
        $sCategorie->save();

        $sCategorie = new SousCategory();
        $sCategorie->nom = "Articles de plage et maillot de bain";
        $sCategorie->slug = "articles-de-plage-et-maillot-de-bain";
        $sCategorie->is_online="1";
        $sCategorie->category_id = "3";
        $sCategorie->save();

        $sCategorie = new SousCategory();
        $sCategorie->nom = "Sacs et portefeuilles";
        $sCategorie->slug = "sacs-et-portfeuilles";
        $sCategorie->is_online="1";
        $sCategorie->category_id = "2";
        $sCategorie->save();

        $sCategorie = new SousCategory();
        $sCategorie->nom = "Montres";
        $sCategorie->slug = "montres";
        $sCategorie->is_online="1";
        $sCategorie->category_id = "1";
        $sCategorie->save();

        $sCategorie = new SousCategory();
        $sCategorie->nom = "Montres";
        $sCategorie->slug = "montres";
        $sCategorie->is_online="1";
        $sCategorie->category_id = "2";
        $sCategorie->save();

        $sCategorie = new SousCategory();
        $sCategorie->nom = "Sous-vêtements";
        $sCategorie->slug = "sous-vetements";
        $sCategorie->is_online="1";
        $sCategorie->category_id = "1";
        $sCategorie->save();

        $sCategorie = new SousCategory();
        $sCategorie->nom = "Lingerie";
        $sCategorie->slug = "lingerie";
        $sCategorie->is_online="1";
        $sCategorie->category_id = "2";
        $sCategorie->save();

        $sCategorie = new SousCategory();
        $sCategorie->nom = "Garçons";
        $sCategorie->slug = "garcons";
        $sCategorie->is_online="1";
        $sCategorie->category_id = "3";
        $sCategorie->save();

        $sCategorie = new SousCategory();
        $sCategorie->nom = "Filles";
        $sCategorie->slug = "filles";
        $sCategorie->is_online="1";
        $sCategorie->category_id = "3";
        $sCategorie->save();

        $sCategorie = new SousCategory();
        $sCategorie->nom = "Beauté";
        $sCategorie->slug = "beaute";
        $sCategorie->is_online="1";
        $sCategorie->category_id = "2";
        $sCategorie->save();

    }
}
