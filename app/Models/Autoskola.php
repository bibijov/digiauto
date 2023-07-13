<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Instruktor;
use App\Models\Student;
use App\Models\Kviz;
use App\Models\Korisnik;

class Autoskola extends Model
{
    use HasFactory;

    protected $fillable=[
        'ime',
        'adresa',
        'brojtelefona'
    ];
    public function instruktori(){
        return $this->hasMany(Instruktor::class);
    }
    public function studenti(){
        return $this->hasMany(Student::class);
    }
    public function kvizovi(){
        return $this->hasMany(Kviz::class);
    }
    public function korisnici(){
        return $this->hasMany(Korisnik::class);
    }
}
