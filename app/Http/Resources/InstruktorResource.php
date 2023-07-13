<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InstruktorResource extends JsonResource
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
            'auto'=>$this->auto,
            'brojtelefona'=>$this->brojtelefona,
        ];
    }
}
