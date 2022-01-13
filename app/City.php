<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use SoftDeletes;
    protected $fillable=[
    	'name','photo'
    ];

    public function roomtypes()
    {
    	return $this->hasMany('App\Roomtype');
    }

    public function categories()
    {
    	return $this->hasMany('App\Category');
    }
}
