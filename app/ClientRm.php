<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientRm extends Model
{

    // definir le nom des champs
    protected $fillable = ['nom','prenoms','email','numero', 'image'];

}
