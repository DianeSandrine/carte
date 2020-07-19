<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    //
    public function faculte()
    {
        return $this->belongsTo('App\Faculte');
    }
    public function etudiant()
    {
        return $this->hasMany('App\Etudiant');
    }
}
