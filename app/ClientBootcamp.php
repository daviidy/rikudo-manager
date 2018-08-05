<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientBootcamp extends Model
{
  // definir le nom des champs
  protected $fillable = ['nom', 'prenoms', 'email', 'numero', 'theme', 'metier', 'image'];

  public function factureBootcamps()
  {
      return $this->hasMany('App\FactureBootcamp');
  }
}
