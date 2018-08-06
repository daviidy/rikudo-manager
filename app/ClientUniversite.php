<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientUniversite extends Model
{
<<<<<<< HEAD
  // definir le nom des champs
=======
    // definir le nom des champs
>>>>>>> 9e01b834002e637971df51350e8e8b38c228c24b
  protected $fillable = ['nom', 'prenoms', 'email', 'image'];

  public function factureUniversites()
  {
      return $this->hasMany('App\FactureUniversite');
  }
<<<<<<< HEAD
=======




>>>>>>> 9e01b834002e637971df51350e8e8b38c228c24b
}
