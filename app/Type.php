<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'type';
    protected $fillable = ['nama_type', 'jumlah_slide', 'harga'];

    public function client()
    {
        return $this->hasMany(Client::class, 'id', 'type_id');
    }
}
