<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','created_at','updated_at',
    ];

    /*one user has many notes*/
    public function notes()
    {
        return $this->hasMany('App\Note');
    }

    public function leads()
    {
        return $this->HasMany('App\Lead');
    }

    public function status()
    {
        return $this->hasOne('App\Status');
    }
}
