<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    protected $fillable = [
    	'client_id', 
    	'gambar1', 'gambar2', 'gambar3', 'gambar4', 'gambar5', 'gambar6',
    	'slide1','slide2','slide3','slide4','slide5','slide6'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id', 'id');
    }
    public function ip()
    {
        return $this->hasMany(Ip::class, 'id', 'client_id');
    }
}
