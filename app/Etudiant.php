<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    //
    protected $keyType = 'string';
    protected $primaryKey = 'matricule';
    public $incrementing = false;
    
    public function nationalite()
    {
        return $this->belongsTo('App\Nationalite');
    }
    public function filiere()
    {
        return $this->belongsTo('App\Filiere');
    }
    public function anneeacademique()
    {
        return $this->belongsTo('App\Anneeacademique');
    }
    public function cycleniveau()
    {
        return $this->belongsTo('App\Cycleniveau');
    }
    public function repondant()
    {
        return $this->belongsTo('App\Repondant');
    }
}
