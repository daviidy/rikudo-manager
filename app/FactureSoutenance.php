<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FactureSoutenance extends Model
{
  // definir le nom des champs
 protected $fillable = ['montant_de_paiement', 'reste', 'date_de_paiement', 'clientSoutenance_id'];

 public function clientSoutenance()
 {
     return $this->belongsTo('App\ClientSoutenance');
 }
}
