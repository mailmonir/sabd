<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
    protected $fillable = ['audit_name', 'slug'];

    public function getAuditNameAttribute($value)
    {
        return strtoupper($value);
    }

    public function orders()
    {
        return $this->hasMany('App\Order');
    }
    
    public function auditors()
    {
        return $this->belongsToMany('App\Auditor')->withPivot('base_price', 'vat')->withTimestamps();
    }
    


    
}
