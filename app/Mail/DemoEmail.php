<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Etudiant;
use App\Anneeacademique;
use App\Cycleniveau;
use App\Nationalite;
use App\Filiere;
use App\Repondant;

class DemoEmail extends Mailable
{
    use Queueable, SerializesModels;

         /**
     * The order instance.
     *
     * @var Etudiant
     */
    public $etudiant;
    

        /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($etudiant)
    {
        $this->etudiant = $etudiant;
       
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email')
        ->attachFromStorage('/path/to/file');;
    }
}
