<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
    	'comment','commented_by',
    ];

    

    public function lead()
    {
    	return $this->belongsToMany('App\Lead');
    }
}
