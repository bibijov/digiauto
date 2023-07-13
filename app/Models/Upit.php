<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Instruktor;


class Upit extends Model
{
    use HasFactory;

    protected $fillable=[
        'korisnik_id',
        'instruktor_id',
        'datum',
        'stanje',
        'vreme'

    ];
    public function korisnik(){
        return $this->belongsTo(User::class);
    }
    public function instruktor(){
        return $this->belongsTo(Instruktor::class);
    }
}
