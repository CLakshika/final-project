<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'check_in_date','check_out_date','room_id','user_id'
        ];
    //
}
