<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class KvizResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'ime'=>$this->ime,
            'korisnikID'=>$this->korisnik_id,
            'autoskolaID'=>$this->autoskola_id,
            'opis'=>$this->opis,
            'pitanje1'=>$this->pitanje_1,
            'odgovor1'=>$this->odgovor_1,
            'pitanje2'=>$this->pitanje_2,
            'odgovor2'=>$this->odgovor_2,
            'pitanje3'=>$this->pitanje_3,
            'odgovor3'=>$this->odgovor_3,
            'pitanje4'=>$this->pitanje_4,
            'odgovor4'=>$this->odgovor_4,
            'pitanje5'=>$this->pitanje_5,
            'odgovor5'=>$this->odgovor_5,
            'pitanje6'=>$this->pitanje_6,
            'odgovor6'=>$this->odgovor_6,
            'pitanje7'=>$this->pitanje_7,
            'odgovor7'=>$this->odgovor_7,
            'pitanje8'=>$this->pitanje_8,
            'odgovor8'=>$this->odgovor_8,
            'pitanje9'=>$this->pitanje_9,
            'odgovor9'=>$this->odgovor_9,
            'pitanje10'=>$this->pitanje_10,
            'odgovor10'=>$this->odgovor_10,
        ];
    }
}
