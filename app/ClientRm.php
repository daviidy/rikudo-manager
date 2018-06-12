<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientRm extends Model
{
    // defenir le nom de la table 
    protected $table = 'client_rms';

    // definir le nom des champs
    protected $fillable = ['nom','prenoms','email','Numero'];

}
