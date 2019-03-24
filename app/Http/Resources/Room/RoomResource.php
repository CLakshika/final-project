<?php

namespace App\Http\Resources\Room;

use Illuminate\Http\Resources\Json\JsonResource;

class RoomResource extends JsonResource
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

            'room_type' => $this->room_type,
            'price' => $this->price,
            'rating' => $this->rating,
            'status' => $this->status
        ];
    }
}
