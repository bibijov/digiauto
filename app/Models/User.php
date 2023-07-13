<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Autoskola;
use App\Models\Kviz;
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'ime',
        'email',
        'password',
        'uloga',
        'profilnaURL',
        'autoskola_id',
    ];
    protected $hidden = [
        'password',
        'remember_token',
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
