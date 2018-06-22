<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formateur extends Model
{
    //
    protected $fillable = ['nom','prenom','nationalité','genre','ComptePaypal',
                           'DateNaiss','numero','email','cours', 'image'];
}
