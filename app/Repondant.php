<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repondant extends Model
{
    //
    protected $primaryKey = 'contact';
    
    public $incrementing = false;
    
    public function etudiant()
    {
        return $this->hasMany('App\Etudiant');
    }
}
