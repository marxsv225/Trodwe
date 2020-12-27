<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SousCategory extends Model
{
    //use HasFactory;
    public function categories(){
        return $this->belongsToMany('App\Models\Category');
    }

    public function produits(){
        return $this->belongsToMany('App\Models\Produit');
    }
}
