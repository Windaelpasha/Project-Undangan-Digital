<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ip extends Model
{
    //
    public function order(){

    return $this->belongsTo(Order::class, 'client_id', 'id');
    }
}

