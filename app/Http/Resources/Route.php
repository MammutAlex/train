<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Route extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'train' => [
                'id' => $this->train->id,
                'number' => $this->train->number,
                'name' => $this->train->name,
            ],
            'points'=>Point::collection($this->points)
        ];
    }
}
