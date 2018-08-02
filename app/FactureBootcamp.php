<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FactureBootcamp extends Model
{
  // definir le nom des champs
 protected $fillable = ['montant_de_paiement', 'reste', 'date_de_paiement', 'client_bootcamp_id'];

 public function clientBootcamp()
 {
     return $this->belongsTo('App\ClientBootcamp');
 }

}
