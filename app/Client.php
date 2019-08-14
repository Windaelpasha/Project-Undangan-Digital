<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    protected $table = 'client';
    protected $fillable = ['type_id', 'nama', 'no_hp'];

    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id','id');
    }

    public function order()
    {
        return $this->hasMany(Order::class,'client_id', 'id');
    }
}
