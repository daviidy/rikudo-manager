<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientSoutenance extends Model
{
  // definir le nom des champs
  protected $fillable = ['nom', 'prenoms', 'email', 'numero', 'filiere', 'theme', 'diplome_soutenu', 'image'];

  public function factureSoutenances()
  {
      return $this->hasMany('App\FactureSoutenance');
  }
}
