<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculte extends Model
{
    //
    public function filiere()
    {
        return $this->hasMany('App\Filiere');
    }
}
