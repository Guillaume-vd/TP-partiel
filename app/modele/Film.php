<?php

namespace App\modele;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    //
    protected $fillable = ['titre', 'anneeSortie', 'description', 'id_categorie'];
}
