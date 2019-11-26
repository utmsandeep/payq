<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyPhoto extends Model
{
    protected $guarded = ['id'];

    public function Property()
    {
    	$this->belongsTo('App\Property');
    }
     public function Media()
    {
    	$this->hasOne('App\Media' , 'media_id');
    	
    }
}
