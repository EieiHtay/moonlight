<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Roomtype extends Model
{
    use SoftDeletes;
    protected $fillable=['name','photo','price','city_id'];

    public function city()
    {
        return $this->belongsTo('App\City');
    }
    public function rooms()
    {
        return $this->hasMany('App\Room');
    }
    public function bookings()
    {
        return $this->hasMany('App\Booking');
    }
    
}
