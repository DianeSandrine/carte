<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Generate Pdf</title>
    <link href="{{ asset('assets/css/pdfff.css')}}" rel="stylesheet">
</head>
<body>      
              
<div class="flex">
  <div class="card">
    <div class="logo"> 
      <img src="{{asset('assets/img/Logo.png')}}" id="cardlogo"/>
      <span id="pays">BURKINA FASO</span>
      <span id="univ"><center><b>UNIVERSITE NAZI BONI</b></center></span>
      <span id="ufr">UFR / {{$etudiant->filiere->faculte->ufr}}</span>      
    </div><hr>
    <p id="annee">{{$etudiant->anneeacademique->annee}}</p>
    <div> 
      <p class="f b">          
        Nom: {{$etudiant->nom}}<br/>
        Prénom(s): {{$etudiant->prenom}}<br/>
        Niveau: {{$etudiant->cycleniveau->cycleniveau}}<br/>
        Filière: {{$etudiant->filiere->filiere}}<br/>
        Nationalité: {{$etudiant->nationalite->nationalite}}
      </p>
    
      <div id="doge">
        <img src="{{asset('assets/img/testimonials/testimonials-1.jpg')}}"/>
        <span id="mat">{{$etudiant->matricule}}</span>
      </div>
    </div>
    <p class="categorietitre">cette carte est strictement personnelle</p>
  </div>
</div>

<div class="page-break"></div>

<div class="flex">
    <div class="card">
      <div class="logo">        
        <span id="pay"><center>BURKINA FASO</center></span>
        <span><center><b>UNIVERSITE NAZI BONI</b></center></span>             
      </div><hr>

      <div> 
          <center><img src="{{asset('assets/img/Logo.png')}}" id="cardlog"/></center>
          <p id="info">03 BP 7021 Bobo-dioulasso 03<br/>Tel: +226 20 00 00 00 / 03<br/>daoi@nazi-boni.bf</p>
      </div>
      <p class="categorietitre">merci de retourner cette carte à l'adresse ci-dessus</p>
    </div>
  </div>
</body>
</html>