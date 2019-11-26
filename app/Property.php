<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $guarded = ['id'];

    public function CoverImage(){
    	return $this->hasOne('App\Media' , 'coverimage');
    }

    public public function PropertyReviews()
    {
    	return $this->hasMany('App\PropertyReview');
    }

     public public function PropertyPhotos()
    {
    	return $this->hasMany('App\PropertyPhoto');
    }
}
