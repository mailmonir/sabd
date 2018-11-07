<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['location_name', 'travel_cost', 'group'];

    public function getTravelCostAttribute($value)
    {
        return $value/100;
    }

    public function getLocationNameAttribute($value)
    {
        return ucwords($value);
    }

    public function users()
    {
        return $this->hasMany('App\User');
    }
    
    public function profiles() 
    {
        return $this->hasMany('App\Profile');
    }
    
}
