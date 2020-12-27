<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    // use HasFactory;

    public function souscategories(){
        return $this->belongsToMany('App\Models\SousCategory');
    }
}
