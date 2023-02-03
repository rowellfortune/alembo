<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klant extends Model
{
    use HasFactory;

    protected $fillable = [
      'voornaam',
      'achternaam',
      'geslacht',
      'adres',
      'huisnummer',
      'district',
      'telefoonnummer',
      'email',
  ];
}
