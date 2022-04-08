<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{
    protected $table = 'categorie';
    use HasFactory;
    protected $fillable = [
        'nomCat', 'slug'
    ];

    /*On déclare ici avec la méthode articles (au pluriel) qu’une catégorie a plusieurs (hasMany) articles 
    (article). On aura ainsi une méthode pratique pour récupérer les films d’une catégorie.*/
    public function articles(){ 
        return $this->hasMany(article::class); 
    }
}
