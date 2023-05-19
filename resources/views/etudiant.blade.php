@extends('layout')
@section('title', 'Etudiant')

@section('content')
<div class="container">
    <h1 class="mb-4">{{$etudiant->nom}}</h1>

    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('edit', [ $etudiant ])}}">modifier</a>
            <a class="navbar-brand" href="{{route('destroy', [ $etudiant ])}}">supprimer</a>
        </div>
    </nav>

    <ul class="list-group">
        <li class="list-group-item">Date de naissance: {{$etudiant->date_de_naissance}}</li>
        <li class="list-group-item">Adresse: {{$etudiant->adresse}}</li>
        <li class="list-group-item">Ville: {{$etudiant->nom_ville}}</li>
        <li class="list-group-item">Téléphone: {{$etudiant->phone}}</li>
        <li class="list-group-item">Courriel: {{$etudiant->email}}</li>
    </ul>

</div>

@endsection('content')


