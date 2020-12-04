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
        $produit->prix_ht = "7000";
        $produit->description = "Loret fugit, sed quia consequuntur magni lores eos qui ratione voluptatem sequi nesciunt";
        $produit->photo = "product-2.jpg";
        $produit->category_id = "1";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Robe orange";
        $produit->prix_ht = "8000";
        $produit->description = "Loret fugit, sed quia consequuntur magni lores eos qui ratione voluptatem sequi nesciunt";
        $produit->photo = "product-3.jpg";
        $produit->category_id = "2";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Chemise beige homme";
        $produit->prix_ht = "6000";
        $produit->description = "Loret fugit, sed quia consequuntur magni lores eos qui ratione voluptatem sequi nesciunt";
        $produit->photo = "product-4.jpg";
        $produit->category_id = "1";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Chemise raillée homme";
        $produit->prix_ht = "9000";
        $produit->description = "Loret fugit, sed quia consequuntur magni lores eos qui ratione voluptatem sequi nesciunt";
        $produit->photo = "product-5.jpg";
        $produit->category_id = "1";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Ensemble femme";
        $produit->prix_ht = "8000";
        $produit->description = "Loret fugit, sed quia consequuntur magni lores eos qui ratione voluptatem sequi nesciunt";
        $produit->photo = "product-6.jpg";
        $produit->category_id = "2";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Nuisette blanche";
        $produit->prix_ht = "5000";
        $produit->description = "Loret fugit, sed quia consequuntur magni lores eos qui ratione voluptatem sequi nesciunt";
        $produit->photo = "product-7.jpg";
        $produit->category_id = "2";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Chemise fleurie homme";
        $produit->prix_ht = "7000";
        $produit->description = "Loret fugit, sed quia consequuntur magni lores eos qui ratione voluptatem sequi nesciunt";
        $produit->photo = "product-8.jpg";
        $produit->category_id = "1";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Blooz femme";
        $produit->prix_ht = "9000";
        $produit->description = "Loret fugit, sed quia consequuntur magni lores eos qui ratione voluptatem sequi nesciunt";
        $produit->photo = "shop-1.jpg";
        $produit->category_id = "2";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Sac à main de marque";
        $produit->prix_ht = "12000";
        $produit->description = "Loret fugit, sed quia consequuntur magni lores eos qui ratione voluptatem sequi nesciunt";
        $produit->photo = "shop-2.jpg";
        $produit->category_id = "6";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Robe de luxe";
        $produit->prix_ht = "25000";
        $produit->description = "Loret fugit, sed quia consequuntur magni lores eos qui ratione voluptatem sequi nesciunt";
        $produit->photo = "shop-3.jpg";
        $produit->category_id = "2";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Jean Wrangler femme";
        $produit->prix_ht = "15000";
        $produit->description = "Loret fugit, sed quia consequuntur magni lores eos qui ratione voluptatem sequi nesciunt";
        $produit->photo = "shop-4.jpg";
        $produit->category_id = "2";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Chaussures botillon";
        $produit->prix_ht = "35000";
        $produit->description = "Loret fugit, sed quia consequuntur magni lores eos qui ratione voluptatem sequi nesciunt";
        $produit->photo = "shop-5.jpg";
        $produit->category_id = "6";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Sac à dos femme";
        $produit->prix_ht = "9000";
        $produit->description = "Loret fugit, sed quia consequuntur magni lores eos qui ratione voluptatem sequi nesciunt";
        $produit->photo = "shop-6.jpg";
        $produit->category_id = "6";
        $produit->save();
    }
}
