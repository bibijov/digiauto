<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class KorisnikResource extends JsonResource
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
            'email'=>$this->email,
            'uloga'=>$this->uloga,
            'autoskolaID'=>$this->autoskola_id,
            'profilnaURL'=>$this->profilnaURL,
        ];
    }
}