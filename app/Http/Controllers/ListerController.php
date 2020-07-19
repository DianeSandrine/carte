<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etudiant;
use App\Anneeacademique;
use App\Cycleniveau;
use App\Nationalite;
use App\Filiere;
use App\Repondant;





class ListerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudiant=Etudiant::All();
        $anneeacademique=Anneeacademique::All();
        $cycleniveau=Cycleniveau::All();
        $nationalite=Nationalite::All();
        $filiere=Filiere::All();
        $repondant=Repondant::All();        
        return view('enregistrer', compact('etudiant','anneeacademique','cycleniveau','nationalite','filiere','repondant'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $etudiant = new Etudiant();
        $etudiant->matricule = $request->matricule;
        $etudiant->filiere_id = $request->filiere_id;
        $etudiant->anneeacademique_id = $request->anneeacademique_id;
        $etudiant->cycleniveau_id = $request->cycleniveau_id;
        $etudiant->nationalite_code = $request->nationalite_code;
        $etudiant->repondant_contact = $request->repondant_contact;
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->email = $request->email;
        $etudiant->telephone = $request->telephone;
        $etudiant->photo = $request->photo->store('public') ;  

        $etudiant->save();

        return redirect('nouvel-etudiant');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //


    }
    public function showListe()
    {
        
        $etudiant=Etudiant::All();
        $repondant=Repondant::All();
        $nationalite=Nationalite::All();
        return view('lister',compact('etudiant','repondant','nationalite'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $matricule)
    {
        //
        $request->validate([
            'matricule' => 'required',
            'filiere_id' => 'required',
            'annneeacademique_id' => 'required',
            'cycleniveau_id' => 'required',
            'code' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'telephone' => 'required',
            'photo' => 'required'
        ]);
        $etudiant = Etudiant::findOrFail($matricule);
        $etudiant->update([
            'matricule' => $request['matricule'],
            'filiere_id' => $request['filiere_id'],
            'annneeacademique_id' => $request['annneeacademique_id'],
            'cycleniveau_id' => $request['cycleniveau_id'],
            'code' => $request['code'],
            'nom' => $request['nom'],
            'prenom' => $request['prenom'],
            'email' => $request['email'],
            'telephone' => $request['telephone'],
            'photo' => $request['photo']
             
        ]);
        return redirect('liste');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($matricule)
    {
        $etudiant1=Etudiant::find($matricule);
        $etudiant1->delete();
        return redirect('liste');

        // $etudiant=Etudiant::findOrFail($matricule);
        // $etudiant->delete($matricule);
        
        // DB::table('etudiants')->where('matricule', $matricule)->delete();

    }
}
