<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Guest extends Model
{
    use SoftDeletes;
    protected $fillable=[
    	'checkin','checkout','user_id','room_id'
    ];

    public function room()
    {
    	return $this->belongsTo('App\Room');
    }
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
