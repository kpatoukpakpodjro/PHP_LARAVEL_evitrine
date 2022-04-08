<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    //Dans le modèle, on peut spécifier un nom de table comme ca le controlleur cherchera :
    protected $table = 'article';
    use HasFactory;
    protected $fillable = [
        'nomArt',
        'qtite',
        'descriptionArt',
        'PU',
        'prixLiv',
        'dateLiv',
        'categorie_id',
        ''
    ];

    /*Ici on a la méthode categorie (au singulier) 
    qui permet de trouver la catégorie à laquelle appartient (belongsTo) l'article. */
    public function categorie(){ 
        return $this->belongsTo(Categorie::class); 
    }
}
