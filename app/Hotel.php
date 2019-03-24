<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable =[
        'review_id','name','location','description','email','telephone','address','website'
    ];
}
