<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FactureUniversite extends Model
{
<<<<<<< HEAD
  // definir le nom des champs
 protected $fillable = ['montant_de_paiement', 'reste', 'date_de_paiement', 'client_universite_id'];

 public function clientUniversite()
 {
     return $this->belongsTo('App\ClientUniversite');
 }
=======
   protected $fillable = ['montant_de_paiement', 'reste', 'date_de_paiement', 'client_universite_id'];

 public function ClientUniversite()
 {
     return $this->belongsTo('App\ClientUniversite');
 }

>>>>>>> 9e01b834002e637971df51350e8e8b38c228c24b
}
