<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use SoftDeletes;
    protected $fillable=[
    	'name','photo','price','description'
    ];

    public function subcategory()
    {
        return $this->belongsTo('App\Subcategory');
    }
    public function orders()
    {
    	return $this->belongsToMany('App\Order','orderdetails','order_id','item_id')
    	->withPivot('qty')
    	->withTimestamps();;
    }
}
