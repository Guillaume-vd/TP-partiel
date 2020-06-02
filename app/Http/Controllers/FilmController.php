<?php

namespace App\Http\Controllers;

use App\modele\Categories;
use App\modele\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($leGenre = null)
    {
        //
        //On liste tous les fils stockés dans la table film
        //return view('listeFilms', compact('lesFilms'));
        $query = $leGenre ? Categories::where('lib_genre',"$leGenre")->firstOrFail()->films() : Film::query();
        $lesFilms = $query->get();
        $genres = Categories::all();
        return view('listeFilm', compact('lesFilms', 'genres', 'leGenre'));
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('créeFilm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Post::create($request->all());
        App\Film::create(
            [
                'titre' => titre,
                'anneeSortie' => years,
                'description' => libelle,
                'id_categorie' => id_categorie,
            ]
        );
        return redirect()->route('films.index')->with('success','Post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  Film $film
     * @return \Illuminate\Http\Response
     */
    public function show(Film $film)
    {
        //
        $anneeSortie = $film->anneeSortie;
        $libelle = $film->description;
        $genre = $film->id_categorie;
        return view('afficherFilm',compact('film','anneeSortie','libelle','genre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Film $film
     * @return \Illuminate\Http\Response
     */
    public function edit(Film $film)
    {
        //
        $anneeSortie = $film->anneeSortie;
        $libelle = $film->description;
        $genre = $film->id_categorie;
        return view('modifierFilm',compact('film','anneeSortie','libelle','genre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Film $film
     * @return \Illuminate\Http\Response
     */
    public function destroy(Film $film)
    {
        //
        $film->delete();
        return back()->with('info', 'Le films a bien été supprimé dans la base de données.');
    }
}
