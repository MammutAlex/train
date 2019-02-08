<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Point extends JsonResource
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
            'date' => (string)$this->arrival->format('Y-m-d'),
            'city' => [
                'id' => $this->city->id,
                'name' => $this->city->name
            ]
        ];
    }
}
