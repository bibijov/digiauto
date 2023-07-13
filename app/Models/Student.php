<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable=[
        'korisnik_id',
        'autoskola_id',
        'instruktor_id',
        'polozenateorija',
        'brojcasovavoznje',
        'brojnocnihvoznji',
        'brojtelefona',
        'brojkredita',
    ];
    public function autoskola(){
        return $this->belongsTo(Autoskola::class);
    }
    public function instruktor(){
        return $this->belongsTo(Instruktor::class);
    }
}
