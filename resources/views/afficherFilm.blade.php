@extends('template')

@section('titrePage')
    Information sur le Film
@endsection

@section('contenu')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mt-3">
                <div class="card">
                    <div class="card-horizontal">
                        <div class="card-body">
                            <h5 class="card-title">Titre : {{ $film->titre }}</h5>
                            <p class="card-text">
                            <p>annee de sotrie : {{ $anneeSortie }}</p>
                            <p>description : {{ $libelle }}</p>
                            <p>Categorie : {{ $genre }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
