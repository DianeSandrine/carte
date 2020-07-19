<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nationalite extends Model
{
    //
    protected $primaryKey = 'code';
    protected $keyType = 'string';
    public $incrementing = false;
    
    public function etudiant()
    {
        return $this->hasMany('App\Etudiant');
    }
}
