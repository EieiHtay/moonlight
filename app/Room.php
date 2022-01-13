<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room extends Model
{
    use SoftDeletes;
    protected $fillable=['roomno','photo','roomtype_id'];

    public function roomtype()
    {
    	return $this->belongsTo('App\Roomtype');
    }
    public function guest()
    {
        return $this->hasOne('App\Guest');
    }
}
