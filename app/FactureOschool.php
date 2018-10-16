<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FactureOschool extends Model
{
  // definir le nom des champs
 protected $fillable = ['cours', 'montant_de_paiement', 'reste', 'date_de_paiement', 'client_oschool_id'];

 public function clientOschool()
 {
     return $this->belongsTo('App\ClientOschool', 'client_oschool_id');
 }

}
