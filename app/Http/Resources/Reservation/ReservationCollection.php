<?php

namespace App\Http\Resources\Reservation;

use Illuminate\Http\Resources\Json\Resource;

class ReservationCollection extends Resource
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
            'check_in_date'=>$this->check_in_date,
            'check_out_date'=>$this->check_out_date,
            'room_id' => $this->room_id,
            'user_id' => $this->user_id,
            'href'=>[
                'link' => route('reservations.show',$this->id)
            ]
        ];
    }
}
