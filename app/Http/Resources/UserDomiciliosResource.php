<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserDomiciliosResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'domicilio' => $this->domicilio,
            'numero_exterior' => $this->numero_exterior,
            'colonia' => $this->colonia,
            'cp' => $this->cp,
            'ciudad' => $this->ciudad
        ];
    }
}
