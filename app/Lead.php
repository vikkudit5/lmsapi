<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = [
    	'status_id','first_name','email','last_name','telephone','status','source','due_date','budget','is_assigned','address','alternate_address','house_no','postcode','message','assigned_to',
    ];



    public function user()
    {
    	return $this->belongsToMany('App\User');
    }

    public function status()
    {
    	return $this->hasMany('App\Status');
    }

    public function notes()
    {
    	return $this->hasMany('App\Note');
    }

    public function comments()
    {
    	return $this->hasMany('App\Comment');
    }

}
