@extends('template')
@extends('layouts.app')
@section('titre', 'Etudiants inscrits')


@section('menu')
<li><a href="{{ route ('home') }}">Accueil</a></li>
<li><a href="{{ route ('nouvel-etudiant') }}">Enregistrer</a></li>
<li class="active"><a href="{{ route ('liste') }}">Lister</a></li>
@endsection
@section('contenu')
<a href="{{route('email')}}" type="button" class="btn btn-primary write">Envoyer un email</a>
<div class="table-responsive table">
    <table id="table_id" class="display">
        <thead>
            <tr>
                <th></th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Contact</th>
                <th>Matricule</th>
                <th>Année académique</th>
                <th>Nationalité</th>
                <th>Filière</th>
                <th>Niveau</th>
                <th>Répondant</th>
                <th>Actions</th>
                
            </tr>
        </thead>

        <tbody>

            @foreach ($etudiant as $etudiant)
                
                <tr class="text-dark">

                    <td><input type="checkbox" name="rows_to_delete[0]" value="{{$etudiant->email}}"></td> 
                    <td>{{$etudiant->nom}}</td>                
                    <td>{{$etudiant->prenom}}</td>                
                    <td>{{$etudiant->telephone}}</td>
                    <td>{{$etudiant->matricule}}</td>
                    <td>{{$etudiant->anneeacademique->annee}}</td>
                    <td>{{$etudiant->nationalite->nationalite}}</td>
                    <td>{{$etudiant->filiere->filiere}}</td> 
                    <td>{{$etudiant->cycleniveau->cycleniveau}}</td>                                   
                    <td>{{$etudiant->repondant->nom}}</td>
                   
                    <td> 
                       
                        <form action="{{route('etudiant.destroy', $etudiant->matricule )}}" method="POST">   @csrf
                            @method('DELETE')             
                            <a type="button" class="btn btn-warning" href="{{route('etudiant.update', $etudiant->matricule )}}">Modifier</a>                            
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                            <a type="button" class="btn btn-success" href="{{route('etudiant.pdf',$etudiant)}}">Imprimer</a>
                        </form>
                    </td>


                    
                </tr>

            @endforeach
            
        </tbody>

    </table>    
</div>  
    

@endsection