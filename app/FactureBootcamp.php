<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FactureBootcamp extends Model
{
  // definir le nom des champs
 protected $fillable = ['montant_de_paiement', 'reste', 'date_de_paiement', 'clientBootcamp_id'];

 public function clientBootcamp()
 {
     return $this->belongsTo('App\ClientBootcamp');
 }
 
}
