<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\AuditorResetPasswordNotification;
use App\Notifications\VerifyAuditorEmail;

class Auditor extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    protected $guard = 'auditor';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname', 'lname', 'phone', 'company', 'address', 'gender', 'email', 'password', 'agree', 'slug', 'designation', 'satus', 'avatar', 'exchange_rate'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new AuditorResetPasswordNotification($token));
    }

    public function audits()
    {
        return $this->belongsToMany('App\Audit')->withPivot('base_price', 'vat')->withTimestamps();
    }
    
    public function orders()
    {
        return $this->hasMany('App\Order');
    }
    
    public function locations()
    {
        return $this->belongsToMany('App\Location')->withPivot('travel_cost')->withTimestamps();
    }

    /**
     * Send the email verification notification.
     *
     * @return void
     */
    public function sendEmailVerificationNotification()
    {
        $this->notify(new VerifyAuditorEmail);
    }
}
