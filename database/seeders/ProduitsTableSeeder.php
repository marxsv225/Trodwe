<?php

namespace Database\Seeders;

use App\Models\Produit;
use Illuminate\Database\Seeder;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $produit = new Produit();
        $produit->nom = "Chemise rose homme";
        $produit->slug = "chemise-rose-homme";
        $produit->prix_ht = "7000";
        $produit->soustitre = "Chemise de marque Hugo Boss";
        $produit->description = "Loret fugit, sed quia consequuntur magni lores eos qui ratione voluptatem sequi nesciunt";
        $produit->photo = "product-2.jpg";
        $produit->sous_category_id = "1";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Robe orange";
        $produit->slug = "robe-orange";
        $produit->prix_ht = "8000";
        $produit->soustitre = "Robe d'hiver";
        $produit->description = "Loret fugit, sed quia consequuntur magni lores eos qui ratione voluptatem sequi nesciunt";
        $produit->photo = "product-3.jpg";
        $produit->sous_category_id = "2";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Chemise beige homme";
        $produit->slug = "chemise-beige-homme";
        $produit->prix_ht = "6000";
        $produit->soustitre = "chemise de texture modérée";
        $produit->description = "Loret fugit, sed quia consequuntur magni lores eos qui ratione voluptatem sequi nesciunt";
        $produit->photo = "product-4.jpg";
        $produit->sous_category_id = "1";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Chemise raillée homme";
        $produit->slug = "chemise-raillée-homme";
        $produit->prix_ht = "9000";
        $produit->soustitre = "Chemise en cotton de Japon";
        $produit->description = "Loret fugit, sed quia consequuntur magni lores eos qui ratione voluptatem sequi nesciunt";
        $produit->photo = "product-5.jpg";
        $produit->sous_category_id = "1";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Ensemble femme";
        $produit->slug = "ensemble-femme";
        $produit->prix_ht = "8000";
        $produit->soustitre = "tenue de soirée";
        $produit->description = "Loret fugit, sed quia consequuntur magni lores eos qui ratione voluptatem sequi nesciunt";
        $produit->photo = "product-6.jpg";
        $produit->sous_category_id = "2";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Nuisette blanche";
        $produit->slug = "nuisette-blanche";
        $produit->prix_ht = "5000";
        $produit->soustitre = "nuisette de marque Laverio ";
        $produit->description = "Loret fugit, sed quia consequuntur magni lores eos qui ratione voluptatem sequi nesciunt";
        $produit->photo = "product-7.jpg";
        $produit->sous_category_id = "2";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Chemise fleurie homme";
        $produit->slug = "chemise-fleurie-homme";
        $produit->prix_ht = "7000";
        $produit->soustitre = "Chemise en cotton de Bresil";
        $produit->description = "Loret fugit, sed quia consequuntur magni lores eos qui ratione voluptatem sequi nesciunt";
        $produit->photo = "product-8.jpg";
        $produit->sous_category_id = "1";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Blooz femme";
        $produit->slug = "blooz-femme";
        $produit->prix_ht = "9000";
        $produit->soustitre = "Robe d'été";
        $produit->description = "Loret fugit, sed quia consequuntur magni lores eos qui ratione voluptatem sequi nesciunt";
        $produit->photo = "shop-1.jpg";
        $produit->sous_category_id = "2";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Sac à main de marque";
        $produit->slug = "sac-a-main-de-marque";
        $produit->prix_ht = "12000";
        $produit->soustitre = "Sac Gucci";
        $produit->description = "Loret fugit, sed quia consequuntur magni lores eos qui ratione voluptatem sequi nesciunt";
        $produit->photo = "shop-2.jpg";
        $produit->sous_category_id = "13";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Robe de luxe";
        $produit->slug = "robe-de-luxe";
        $produit->prix_ht = "25000";
        $produit->soustitre = "Robe chandelier a cruche tendue";
        $produit->description = "Loret fugit, sed quia consequuntur magni lores eos qui ratione voluptatem sequi nesciunt";
        $produit->photo = "shop-3.jpg";
        $produit->sous_category_id = "2";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Jean Wrangler femme";
        $produit->slug = "jean-wrangler-femme";
        $produit->prix_ht = "15000";
        $produit->soustitre = "Jean sur mesure";
        $produit->description = "Loret fugit, sed quia consequuntur magni lores eos qui ratione voluptatem sequi nesciunt";
        $produit->photo = "shop-4.jpg";
        $produit->sous_category_id = "2";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Chaussures botillon";
        $produit->slug = "chaussures-botillon";
        $produit->prix_ht = "35000";
        $produit->soustitre = "Chaussures en dainh";
        $produit->description = "Loret fugit, sed quia consequuntur magni lores eos qui ratione voluptatem sequi nesciunt";
        $produit->photo = "shop-5.jpg";
        $produit->sous_category_id = "5";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Sac à dos femme";
        $produit->slug = "sac-a-dos-femme";
        $produit->prix_ht = "9000";
        $produit->soustitre = "sac en peau de lion";
        $produit->description = "Loret fugit, sed quia consequuntur magni lores eos qui ratione voluptatem sequi nesciunt";
        $produit->photo = "shop-6.jpg";
        $produit->sous_category_id = "13";
        $produit->save();
    }
}
