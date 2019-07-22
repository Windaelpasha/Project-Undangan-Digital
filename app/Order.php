<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    protected $fillable = ['client_id', 'gambar1', 'gambar2', 'gambar3', 'gambar4', 'gambar5', 'gambar6'];
}
