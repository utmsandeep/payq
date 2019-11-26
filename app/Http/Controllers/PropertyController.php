<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Media;
use App\Property;
class PropertyController extends Controller
{
   public function store(Request $request){

   	 $validatedData = $request->validate([
        'name' => 'required',
    ]);

   	 $requestStored = $request;

    if(isset($request['facilities']))
   	 $request['facilities'] = implode(",", $request['facilities']);
	 
   	 $person = $request['person'];
   	 $comment = $request['comment'];
   	 $country = $request['country'];
   	 $city = $request['city'];

   	 unset($request['_token'] , $request['submit'] ,  $request['person'] , $request['comment'] , $request['country'] , $request['city']);

   	 $media_id = $this->storeMedia($requestStored , "coverimage");
     $requestP = array_merge($request->except(['property_images' , 'dp' , 'coverimage']) , array('coverimage'=>$media_id));
     $property = Property::create($requestP);

   	 

   	 dd($requestP);
   }

   public function storeMedia(Request $request , $field="coverimage"){
   	$imageName = time().'.'.$request->file($field)->getClientOriginalExtension();
    request()->coverimage->move(public_path('/media'), $imageName);

    $media = Media::create(['file_name'=>$imageName]);

    return $media->id;
    
   }
}
