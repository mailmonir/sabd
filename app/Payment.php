<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['order_id', 'payment_amount', 'payment_type', 'reference_no'];
    
    public function order()
    {
        return $this->belongsTo('App\Order');
    }
}
