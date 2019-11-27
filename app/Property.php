<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $guarded = ['id'];

    public function CoverImage(){
    	return $this->hasOne('App\Media', 'id'  , 'coverimage');
    }

    public  function PropertyReviews()
    {
    	return $this->hasMany('App\PropertyReview');
    }

     public  function PropertyPhotos()
    {
    	return $this->hasMany('App\PropertyPhoto');
    }
}
