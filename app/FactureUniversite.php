<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FactureUniversite extends Model
{
   protected $fillable = ['montant_de_paiement', 'reste', 'date_de_paiement', 'client_universite_id'];

 public function ClientUniversite()
 {
     return $this->belongsTo('App\ClientUniversite');
 }

}
