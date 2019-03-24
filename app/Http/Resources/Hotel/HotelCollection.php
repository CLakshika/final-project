<?php

namespace App\Http\Resources\Hotel;

use Illuminate\Http\Resources\Json\Resource;

class HotelCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=> $this ->id,
            'name'=> $this ->name,
            'location' => $this ->location,
            'description' => $this ->description,
            'email' => $this ->email,
            'telephone' => $this ->telephone,
            'address' => $this ->address,
            'website' => $this ->website,
            'href' => [
                'link' => route('hotels.show',$this->id)
    ]
        ];
    }
}
