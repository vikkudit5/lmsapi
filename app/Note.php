<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = [
    	'lead_id','user_id','notes',
    ];

    

    public function users()
    {
    	return $this->belongsTo('App\User');
    }

    public function leads()
    {
    	return $this->belongsTo('App\Lead');
    }
}
