<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    protected $table = 'client';
    protected $fillable = ['type_id', 'nama', 'no_hp'];
}
