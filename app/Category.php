<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    protected $fillable=[
    	'name','photo','city_id'
    ];

    public function city()
    {
        return $this->belongsTo('App\City');
    }
    
    public function subcategories()
    {
    	return $this->hasMany('App\Subcategory');
    }
}
