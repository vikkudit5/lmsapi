<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = [
    	'name',
    ];

    protected $hidden = [
    	'created_at','updated_at',
    ];

    public function leads()
    {
    	return $this->belongsTo('App\Lead');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
