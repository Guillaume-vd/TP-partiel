<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testFormController extends Controller
{

    public function getInfos()
    {
        //le client demande l'affichage du formulaire
        //il est retourné dans la vue monFormulaire.blade.php
        return view('monFormulaire');
    }

    public function postInfos(Request $request)
    {
        //on ne crée pas de vue spécifique pour l'affichage d'un message après envoi du formulaire
        // on se contente d'afficher ce qui à été saisi dans la zone de texte du formulaire
        //grace à l'objet Request passé en paramètre
        return 'le message saisi dans la zone de texte est:' . $request->input('message');
    }

}
