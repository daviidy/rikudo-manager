<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientRt extends Model
{
     // definir le nom des champs
    protected $fillable = ['nom','prenoms','email','numero', 'image'];

    public function factureRts()
    {
        return $this->hasMany('App\FactureRt');
    }


}
