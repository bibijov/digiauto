<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kviz extends Model
{
    use HasFactory;

    protected $fillable=[
        'ime',
        'korisnik_id',
        'autoskola_id',
        'opis',
        'pitanje_1',
        'odgovor_1',
        'pitanje_2',
        'odgovor_2',
        'pitanje_3',
        'odgovor_3',
        'pitanje_4',
        'odgovor_4',
        'pitanje_5',
        'odgovor_5',
        'pitanje_6',
        'odgovor_6',
        'pitanje_7',
        'odgovor_7',
        'pitanje_8',
        'odgovor_8',
        'pitanje_9',
        'odgovor_9',
        'pitanje_10',
        'odgovor_10',
    ];
    public function autoskola(){
        return $this->belongsTo(Autoskola::class);
    }
    public function korisnik(){
        return $this->belongsTo(Korisnik::class);
    }
}
