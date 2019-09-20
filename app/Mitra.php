<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
	protected $table = 'users';
    protected $fillable = [
    	'nama','email','password','status',
    ];
    public function mitra()
    {
    	return $this->hasMany(MItra::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
