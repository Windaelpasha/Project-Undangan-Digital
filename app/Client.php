<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    protected $table = 'client';
    protected $fillable = ['type_id', 'nama', 'no_hp'];
    protected $guarded = [''];

    public function type()
    {
        return $this->belongsTo(App\Type::class);
    }

    public function order()
    {
        return $this->hasMany(App\Order::class);
    }
}
