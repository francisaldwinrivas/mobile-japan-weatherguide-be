<?php

declare(strict_types=1);

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CityResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'prefecture_id' => $this->prefecture_id,
            'name' => $this->name,
            'code' => $this->code,
            'lat' => $this->lat,
            'long' => $this->long,
        ];
    }
}
