<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientUniversite extends Model
{
  // definir le nom des champs
  protected $fillable = ['nom', 'prenoms', 'email', 'image'];

  public function factureUniversites()
  {
      return $this->hasMany('App\FactureUniversite');
  }
}
