<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cycleniveau extends Model
{
    //
    public function etudiant()
    {
        return $this->hasMany('App\Etudiant');
    }
}
