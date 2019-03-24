<?php

namespace App\Http\Resources\Room;

use Illuminate\Http\Resources\Json\Resource;

class RoomCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'room_type'=> $this->room_type,
            'price' => $this->price,
            'rating' => $this->rating,
            'status' => $this->status,
            'href' => [
                'link' => route('rooms.show',$this->id)
            ]
        ];
    }
}
