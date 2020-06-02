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
                            <h5 class="card-title">Création d'un film</h5>
                            <label for="name">Titre:</label>
                            <input type="text" id="titre" name="titre" required
                                   minlength="4" maxlength="8" size="10">

                            <label for="years">Année de Sotie:</label>
                            <input type="month" id="years" name="years" required
                                   minlength="4" maxlength="8" size="10">

                            <label for="libelle">Description:</label>
                            <label for="libelle"></label><input type="text" id="libelle" name="libelle" required
                                                                minlength="4" maxlength="100" size="10">

                            <label for="categorie">Categorie:</label>
                            <input type="text" id="id_categorie" name="id_categorie" required
                                   minlength="4" maxlength="10" size="10">
                        </div>
                        <center>
                        <a class="btn btn-success" href="{{ route('films.store') }}">Validé</a>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
