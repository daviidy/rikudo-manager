<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FactureRt extends Model
{
  // definir le nom des champs
 protected $fillable = ['prestation', 'montant_de_paiement', 'reste', 'date_de_paiement', 'client_rt_id'];

 public function clientOschool()
 {
     return $this->belongsTo('App\ClientRt');
 }
}
