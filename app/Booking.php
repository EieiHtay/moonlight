<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
    use SoftDeletes;
    protected $fillable=[
    	'checkin','checkout','noofpeople','noofroom','user_id','roomtype_id','status'
    ];

    public function roomtype()
    {
    	return $this->belongsTo('App\Roomtype');
    }
}
