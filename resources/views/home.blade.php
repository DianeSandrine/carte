@extends('template')
@extends('layouts.app')
@section('titre', 'Home')
@section('menu')
    <li class="active"><a href="{{ route ('login') }}">Accueil</a></li>
    <li><a href="{{ route ('nouvel-etudiant') }}">Enregistrer</a></li>
    <li><a href="{{ route ('liste') }}">Lister</a></li>
    {{-- <li><a href="#portfolio">Lister</a></li> --}}
    <li><a href="#resume">Envoyer un mail</a></li>
@endsection

{{-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
