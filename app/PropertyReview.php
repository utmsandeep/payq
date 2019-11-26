<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyReview extends Model
{
	protected $guarded = ['id'];

    public function Property()
    {
    	$this->belongsTo('App\Property');
    }

    public function DP()
    {
    	$this->hasOne('App\Media' , 'dp');
    	
    }
}
