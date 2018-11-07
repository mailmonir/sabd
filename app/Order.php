<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['auditor_id', 'audit_id', 'user_id', 'final_price', 'discount', 'workers', 'paid_amount', 'status', 'inv_id', 'manday', 'audit_type','cf', 'confirmed', 'point', 'completed_at', 'report_date'];

    public function audit()
    {
        return $this->belongsTo('App\Audit');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function auditor()
    {
        return $this->belongsTo('App\Auditor');
    }
    
    public function payments()
    {
        return $this->hasMany('App\Payment');
    }
}
