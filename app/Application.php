<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        //'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        //'password', 'remember_token',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }


    public function orders()
    {
        return $this->hasMany('App\Order');
    }
}
