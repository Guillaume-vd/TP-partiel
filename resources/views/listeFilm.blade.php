@extends('template')

@section('titrePage')
    Liste des films
@endsection

@section('titreItem')
    <h1>Tous les Films :</h1>
@endsection

@section('contenu')
    @if(session()->has('info'))
        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
            <div class="card-body">
                <p class="card-text">{{ session('info') }}</p>
            </div>
        </div>
    @endif

    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Afficher les films par genre : </p>
            <div class="select">
                <select onchange="window.location.href = this.value">
                    <option value="{{ route('films.index') }}" @unless($leGenre) selected @endunless>Tous les genres</option>
                    @foreach($genres as $genre)
                        <option value="{{ route('film.genre', $genre->lib_genre) }}" {{ $leGenre == $genre->lib_genre ? 'selected' : '' }}>{{ $genre->lib_genre }}</option>
                    @endforeach
                </select>
            </div>
        </header>
        <div class="card-content">
            <div class="content">
                <table class="table is-hoverable">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Titre</th>
                        <th>Categorie</th>
                        <th></th>
                        <th><a class="btn btn-success" href="{{ route('films.create') }}">Crée Film</a></th>
                        <th></th>
                    </tr>
                    </thead>
                    @foreach($lesFilms as $lesFilms)
                        <tr>
                            <td> {{ $lesFilms->id }} </td>
                            <td><strong>{{ $lesFilms->titre}}</strong>  </td>
                            <td> {{ $lesFilms->genre}}</td>
                            <td><a class="btn btn-primary" href="{{ route('films.show', $lesFilms->id) }}">Voir</a></td>
                            <td><a class="btn btn-warning" href="{{ route('films.edit', $lesFilms->id) }}">Modifier</a></td>
                            <td>
                                <form action="{{ route('films.destroy', $lesFilms->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
