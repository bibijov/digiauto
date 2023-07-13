<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
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
            'autoskolaID'=>$this->autoskola_id,
            'korisnikID'=>$this->korisnik_id,
            'instruktorID'=>$this->instruktor_id,
            'polozenateorija'=>$this->polozenateorija,
            'brojcasovavoznje'=>$this->brojcasovavoznje,
            'brojnocnihvoznji'=>$this->brojnocnihvoznji,
            'brojtelefona'=>$this->brojtelefona,
            'brojkredita'=>$this->brojkredita,
        ];
    }
}
