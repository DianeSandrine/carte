@extends('template')
@extends('layouts.app')
@section('titre', 'Enregistrer un étudiant')
@section('menu')
<li><a href="{{ route ('home') }}">Accueil</a></li>
<li class="active"><a href="{{ route ('nouvel-etudiant') }}">Enregistrer</a></li>
<li><a href="{{ route ('liste') }}">Lister</a></li>

@endsection
@section('contenu')
    {{-- <section id="contact" class="contact">
        <div class="container">         --}}
            
            <div class="section-title">
            <h2>Nouvel étudiant</h2>
            <p>Enregistrer un étudiant</p>
            </div>
            
            <form action="{{ route('save') }}" method="post" class="php-email-form mt-4" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="matricule" id="subject" placeholder="Matricule" required/>
                   
                </div>

                <div class="form-group">
                    <select class="form-control" name="filiere_id" id="subject" placeholder="Filière" data-rule="minlen:1" data-msg="Please enter at least 8 chars of subject" required>
                        <option selected></option>
                        @foreach ($filiere as $filiere)                      
                        <option value="{{$filiere->id}}">{{$filiere->filiere}}</option>  
                        @endforeach                                 
                    
                    </select>
                </div>
                    
                <div class="form-group">
                    <select class="form-control" name="cycleniveau_id" id="subject" placeholder="Cycle et niveau" data-rule="minlen:1" data-msg="Please enter at least 8 chars of subject" required>
                        <option selected></option> 
                        @foreach ($cycleniveau as $cycleniveau)                      
                        <option value="{{$cycleniveau->id}}">{{$cycleniveau->cycleniveau}}</option> 
                        @endforeach                                  
                    
                    </select>
                </div>

                <div class="form-group">
                    <select class="form-control" name="nationalite_code" id="subject" placeholder="Nationalité" data-rule="minlen:1" data-msg="Please enter at least 8 chars of subject" required>
                        <option selected></option>
                        @foreach ($nationalite as $nationalite)                      
                        <option value="{{$nationalite->code}}">{{$nationalite->nationalite}}</option>                                   
                        @endforeach
                    
                    </select>
                </div>

                <div class="form-group">
                    <select class="form-control" name="anneeacademique_id" id="subject" placeholder="Année académique" data-rule="minlen:1" data-msg="Please enter at least 8 chars of subject" required>
                        <option selected></option>  
                        @foreach ($anneeacademique as $anneeacademique)                     
                        <option value="{{$anneeacademique->id}}">{{$anneeacademique->annee}}</option>
                        @endforeach                                   
                    
                    </select>
                </div>

                <div class="form-group">
                    <select class="form-control" name="repondant_contact" id="subject" placeholder="Répondant" data-rule="minlen:1" data-msg="Please enter at least 8 chars of subject" required>
                        <option selected></option>  
                        @foreach ($repondant as $repondant)                     
                        <option value="{{$repondant->contact}}">{{$repondant->nom}}</option>
                        @endforeach                                   
                    
                    </select>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="nom" id="subject" placeholder="Nom" data-rule="minlen:1" data-msg="Please enter at least 8 chars of subject" required/>
                    
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="prenom" id="subject" placeholder="Prénom" data-rule="minlen:1" data-msg="Please enter at least 8 chars of subject" required/>
                    
                </div>

                <div class="form-group">
                    <input type="mail" class="form-control" name="email" id="subject" placeholder="Email" data-rule="minlen:1" data-msg="Please enter at least 8 chars of subject" required/>
                    
                </div>

                <div class="form-group">
                    <input type="number" class="form-control" name="telephone" id="subject" placeholder="Téléphone" data-rule="minlen:1" data-msg="Please enter at least 8 chars of subject" required/>
                    
                </div>

                <div class="form-group">
                    <input type="file" class="form-control" name="photo" id="subject" placeholder="Photo" required/>
                    
                </div>

                {{-- <div class="mb-3">
                    <div class="loading">Loading</div>
                    <div class="error-message">Etudiant non inscrit, réessayer</div>
                    <div class="sent-message">Succès de l'enregistrement!</div>
                </div> --}}
                <div class="text-center boutons">
                    <button type="submit">Envoyer</button>
                    <button type="reset">Annuler</button>
                </div>
                
            </form>

        {{-- </div> --}}
    {{-- </section> --}}
@endsection