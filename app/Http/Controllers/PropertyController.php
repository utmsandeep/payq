<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Media;
use App\Property;
class PropertyController extends Controller
{
  public function store(Request $request){

       	$validatedData = $request->validate([
            'coverimage'            => 'required|mimes:jpg,jpeg,png,bmp|max:5000',
            'property_images'       => "required|array|min:15",
            'property_images.*'     => 'required|mimes:jpg,jpeg,png,bmp|max:5000',
            'dp'                    => "required|array|min:10",
            'dp.*'                  => 'required|mimes:jpg,jpeg,png,bmp|max:5000',
             
            'person'                => "required|array|min:10",
            'person.*'              => 'required|string',
            'comment'               => "required|array|min:10",
            'comment.*'             => 'required|string',
            'city'                  => "required|array|min:10",
            'city.*'                => 'required|string',
            'country'               => "required|array|min:10",
            'country.*'             => 'required|string',

            'name'                  => 'required|string',
            'number'                => 'required|string',
            'property_country'      => 'required|string',
            'state'                 => 'required|string',
            'property_city'         => 'required|string',
            'phone'                 => 'required|digits:10',
            'address'               => 'required|string',
            'location'              => 'required|string',
            'rent'                  => 'required|numeric|min:0',
            'rating'                => 'required|string',
            'type'                  => 'required|string',
            'status'                => 'required|string'


        ]);

   	 
        unset($request['_token'] , $request['submit']);
        if(isset($request['facilities']))
       	$request['facilities'] = implode(",", $request['facilities']);
	 
   	 ///Add Property

       	$media_id = $this->storeMedia($request->file('coverimage'));
        $requestP = array_merge($request->except(['property_images' , 'dp' , 'coverimage' , 'person' , 'comment' , 'country' , 'city']) , array('coverimage'=>$media_id));
        $property = Property::create($requestP);

    // Add Property Review
       for($i=1 ; $i <= sizeof($request['person']) ; $i++){
       
            $media_id = $this->storeMedia($request->file('dp')[$i]);
            $reviews = $property->PropertyReviews()->create([
                  "name"       =>$request['person'][$i] ,
                  "comment"    =>$request['comment'][$i],
                  "media_id"   =>$media_id,
                  "city"       =>$request['city'][$i],
                  "country"    =>$request['country'][$i]
            ]);
       }

     //Add Property Photos

     for($i=0 ; $i<sizeof($request->file('property_images')) ; $i++){
     
          $media_id = $this->storeMedia($request->file('property_images')[$i]);
          $photos = $property->PropertyPhotos()->create([
               
                "media_id"   =>$media_id
              
          ]);
     }
     
     return $property->load('PropertyReviews' , 'PropertyPhotos');
	 
  }

  public function storeMedia($file){

     	$imageName = time().'.'.$file->getClientOriginalExtension();
      $file->move(public_path('/media'), $imageName);
      $media = Media::create(['file_name'=>$imageName]);
      return $media->id;
  
 }

}
