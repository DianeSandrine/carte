@extends('template')
@extends('layouts.app')
@section('titre', 'Accueil')

  <!-- ======= Header ======= -->

    <div class="container">
        <h1><a href="{{ route ('home') }}">Student card maker</a></h1>
        <h2>Editez et imprimez les <span>cartes étudiants</span> en quelques clics</h2>

        @section('menu')
        <li class="active"><a href="{{ route ('home') }}">Accueil</a></li>
        <li><a href="{{ route ('nouvel-etudiant') }}">Enregistrer</a></li>
        <li><a href="{{ route ('liste') }}">Lister</a></li>
        @endsection
    </div>