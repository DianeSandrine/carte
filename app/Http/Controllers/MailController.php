<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\DemoEmail;
use App\Etudiant;
use App\Anneeacademique;
use App\Cycleniveau;
use App\Nationalite;
use App\Filiere;
use App\Repondant;
use Mail;

class MailController extends Controller
{
            /**
     * Display the specified resource.
     *
     * @param  string  $matricule
     * @return \Illuminate\Http\Response
     */

    public function index(Etudiant $etudiant){
        $etudiant = Etudiant::findOrFail($etudiant)->first();
        return view('email',compact('etudiant'));
    }

    public function sendemail(Request $request)
    {
        $title = $request->title;
        $content = $request->content;
        $user_email = $request->email;
        $sender = 'dianesandrineoued@gmail.com';
        
        try
        {
            $data = ['email'=> $user_email, 'subject' => $title, 'content' => $content, 'sender' => $sender];
            Mail::send('email', $data, function($message) use($data)
            {
                $subject=$data['subject'];
                // $contenu=$data['content'];
                $expediteur=$data['sender'];
                $message=$data['content'];
                $message->from($expediteur)->to($data['email'])->subject($subject);
            });
        }
        catch (\Exception $e)
        {
            dd($e->getMessage());
        }

    }
}
