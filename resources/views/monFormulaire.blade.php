@extends('template')

@section('contenu')
    {!! Form::open(['url' => 'testFormulaire']) !!}
    {!! Form::label('message', 'Entrez votre message: ') !!}
    {!! Form::text('message') !!}
    {!! Form::submit('Envoyer!') !!}
    {!! Form::close() !!}
@endsection
