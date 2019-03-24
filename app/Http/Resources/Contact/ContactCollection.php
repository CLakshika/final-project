<?php

namespace App\Http\Resources\Contact;

use Illuminate\Http\Resources\Json\Resource;

class ContactCollection extends Resource
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
            'name' =>$this->name,
            'email' =>$this->email,
            'subject'=>$this->subject,
            'message' =>$this->message,
            'href'=>[
              'link' =>route('contacts.show',$this->id)
            ]
        ];
    }
}
