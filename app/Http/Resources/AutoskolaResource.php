<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AutoskolaResource extends JsonResource
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
            'adresa'=>$this->adresa,
            'brojtelefona'=>$this->brojtelefona,
        ];
    }
}
