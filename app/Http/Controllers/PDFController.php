<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etudiant;
use App\Anneeacademique;
use App\Cycleniveau;
use App\Nationalite;
use App\Filiere;
use App\Repondant;
use PDF;

class PDFController extends Controller
{
        /**
     * Display the specified resource.
     *
     * @param  string  $matricule
     * @return \Illuminate\Http\Response
     */
    public function generatePDF($matricule) {
        $etudiant = Etudiant::findOrFail($matricule);
        $pdf = PDF::loadView('pdfff', compact('etudiant'));
        $name = "etudiant-".$etudiant->matricule.".pdf";
        return $pdf->stream('name');
        
        // return $pdf->download('pdf');
    }

        /**
     * Display the specified resource.
     *
     * @param  string  $matricule
     * @return \Illuminate\Http\Response
     */
    public function show(Etudiant $etudiant)
    {
        return view('pdfff',['etudiant' => Etudiant::findOrFail($etudiant)]);
    }

    // public function generatePDF() {

    //     // $customPaper = array(0,0,8.00,5.00);

    //     $pdf = PDF::loadView('pdfff');

    //     return $pdf->stream('pdf');
    // }
}
