<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
	protected $fillable = [
		'driver_name','unit_number','unit_type','plate_number',
	];

    public function user()
    {
    	return $this->belongsTo('App/User');
    }
}
