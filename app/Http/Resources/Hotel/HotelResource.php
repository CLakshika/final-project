<?php

namespace App\Http\Resources\Hotel;

use Illuminate\Http\Resources\Json\JsonResource;

class HotelResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'review_id'=>$this->review_id,
          'name'=>$this->name,
          'location'=>$this->location,
          'description'=>$this->description,
          'email'=>$this->email,
          'telephone'=>$this->telephone,
          'address'=>$this->address,
          'website'=>$this->website
        ];
    }
}
