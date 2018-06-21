<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    //
    protected $fillable = ['type de paiement','montant de paiement','date de paiement'];
}
