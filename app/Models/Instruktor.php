<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instruktor extends Model
{
    use HasFactory;

    protected $fillable=[
      'ime',
      'korisnik_id',
      'autoskola_id',
      'auto',
      'brojtelefona'
    ];

      public function autoskola(){
        return $this->belongsTo(Autoskola::class);
    }
    public function studenti(){
      return $this->hasMany(Student::class);
  }
}
