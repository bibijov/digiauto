<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Autoskola;
use App\Models\Kviz;
class Korisnik extends Model
{
    use HasFactory;

    protected $fillable=[
        'ime',
        'email',
        'uloga',
        'profilnaURL',
        'autoskola_id',

    ];

    protected $nullable=[
        'profilnaURL',
    ];
    protected $attributes=[
        'profilnaURL'=>'',
    ];

    public function autoskola(){
        return $this->belongsTo(Autoskola::class);
    }
    public function kvizovi(){
        return $this->hasMany(Kviz::class);
    }
}
