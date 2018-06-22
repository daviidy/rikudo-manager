<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientOschool extends Model
{
  // definir le nom des champs
  protected $fillable = ['nom', 'prenoms', 'email', 'numero', 'cours', 'image'];
}
