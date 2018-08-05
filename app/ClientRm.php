<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientRm extends Model
{

    // definir le nom des champs
    protected $fillable = ['nom','prenoms','email','Numero', 'image'];

    public function factureRms()
    {
        return $this->hasMany('App\FactureRm');
    }


}
