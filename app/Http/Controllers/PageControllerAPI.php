<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\users;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class PageControllerAPI extends Controller
{
    //get functions
    public function model($brandname) {
        $modelNames=DB::table('car_infos')->select('model')->groupBy('model')->where('man_name',$brandname)->get();
        return response()->json($modelNames);
    }


    public function infocar ($modelName) {
        $modelNames=DB::table('car_infos')->select('model','man_name')->groupBy('model')->groupBy('man_name')->where('model',$modelName)->get();
        return response()->json($modelNames);
    }

    public function detailads ($username,$created_at) {
        $detailads=DB::table('rent_ads')->latest() ->where('user_name',$username)->where('created_at',$created_at)->get();
        $detailads2=DB::table('sellcar_ads')->latest() ->where('user_name',$username)->where('created_at',$created_at)->get();
        $detailads3=DB::table('spareparts_ads')->latest() ->where('user_name',$username)->where('created_at',$created_at)->get();
        $detailads4=DB::table('tboa_ads')->latest() ->where('user_name',$username)->where('created_at',$created_at)->get();
        return response()->json([$detailads,$detailads2,$detailads3,$detailads4]);
    }

    public function brand () {
        $brandNames=DB::table('brands')->latest()->get();
        return response()->json($brandNames);
    }


    public function newcarads () {
        $cfs=DB::table('sellcar_ads')->latest() ->where('condition','=','new')->get();
        // $favorites=DB::table('favorites')->latest()->get();
        return response()->json($cfs);
    }

    public function usedcarads () {
        $cfs=DB::table('sellcar_ads')->latest() ->where('condition','=','used')->get();
        // $favorites=DB::table('favorites')->latest()->get();
        return response()->json($cfs);
    }

    public function rentcarads () {
        $cfr=DB::table('rent_ads')->latest()->get();
        // $favorites=DB::table('favorites')->latest()->get();
        return response()->json($cfr);
    }

    public function sparepartads () {
        $csp=DB::table('spareparts_ads')->latest()->get();
        // $favorites=DB::table('favorites')->latest()->get();
        return response()->json($csp);
    }

    public function tboaads () {
        $tboa=DB::table('tboa_ads')->latest()->get();
        // $favorites=DB::table('favorites')->latest()->get();
        return response()->json($tboa);
    }

    public function ads() {
        $cfs=DB::table('sellcar_ads')->latest()->get();
        $cfr=DB::table('rent_ads')->latest()->get();
        $tboa=DB::table('tboa_ads')->latest()->get();
        $csp=DB::table('spareparts_ads')->latest()->get();
        return response()->json([$cfs,$cfr,$tboa,$csp]);
    }
    public function favoriteView($username) {
        $favorites=DB::table('favorites')->latest()->where('username',$username)->get();
        return response()->json($favorites);
    }




    //post functions

    public function insertRentAds ($modelName,Request $request) {
    //     $validated = $request->validate([
    //         'body_type' => 'required',
    //         'transmission_type' => 'required',
    //         'year' => 'required|numeric',
    //         'engine_capacity' => 'required',
    //         'fuel_type' => 'required',
    //         'location' => 'required',
    //         'color' => 'required',
    //         'price' => 'required|numeric',
    //         'rental_period' => 'required',
    //         'rental_option' => 'required',
    //         'image' => 'required|mimes:jpg,png,jpeg,gif,svg',
    //     ],
    //     [
    //         'body_type.required' => 'Please choose body type',
    //         'transmission_type.required' => 'Please choose transmission type',
    //         'year.required' => 'Please enter year',
    //         'year.numeric' => 'Please enter numbers only',
    //         'engine_capacity.required' => 'Please choose engine capacity',
    //         'fuel_type.required' => 'Please choose fuel type',
    //         'location.required' => 'Please enter location',
    //         'color.required' => 'Please choose color',
    //         'price.required' => 'PLease enter price',
    //         'price.numeric' => 'Please enter numbers only',
    //         'rental_period.required' => 'Please choose rental period',
    //         'rental_option.required' => 'Please choose rental option',
    //         'image.required' => 'Please insert photo', 
    //         'image.mimes' => 'Photo type only can be jpg,png,jpeg,gif,svg',
    //     ]
    // );

         //multiple photos
        //  $images=array();
        //  $files = $request->file('images');
        //  foreach($files as $file){
        //  $name_gen2 = hexdec(uniqid());
        //  $img_ext2 = strtolower($file->getClientOriginalExtension());
        //  $img_names = $name_gen2.'.'.$img_ext2;
        //  $up_location2 = 'images/rentCarImages/';
        //  $last_images = $up_location2.$img_names;
        //  $file->move($up_location2,$img_names);
        //  $images[]=$last_images;
        //  }

    $rent = array();
    $rent['user_name'] = $request->user_name;
    $rent['brand'] = $request->brand;
    $rent['car_model'] = $request->car_model;
    $rent['body_type'] = $request->body_type;
    $rent['transmission_type'] = $request->transmission_type;
    $rent['year'] = $request->year;
    $rent['engine_capacity'] = $request->engine_capacity;
    $rent['fuel_type'] = $request->fuel_type;
    $rent['location'] = $request->location;
    $rent['color'] = $request->color;
    // $rent['images'] = implode('|',$images);
    $rent['rental_option'] = $request->rental_option;
    $rent['rental_period'] = $request->rental_period;
    $rent['price'] = $request->price;
    $rent['description'] = $request->description;
    $rent['created_at'] = Carbon::now();
    $insert=DB::table('rent_ads')->insert($rent);
    return response()->json($insert);
    }







public function insertTboaAds ($modelName,Request $request) {
//     $validated = $request->validate([
//         'type' => 'required',
//         'condition' => 'required',
//         'location' => 'required',
//         'price' => 'required|numeric',
//         'image' => 'required|mimes:jpg,png,jpeg,gif,svg',
//     ],
//     [
//         'type.required' => 'Please choose type',
//         'condition.required' => 'Please choose condition',
//         'location.required' => 'Please enter location',
//         'price.required' => 'Please enter price',
//         'price.numeric' => 'Please enter numbers only',
//         'image.required' => 'Please insert photo',
//         'image.mimes' => 'Photo type only can be jpg,png,jpeg,gif,svg',
//     ]
// );

        // $images=array();
        // $files = $request->file('images');
        // foreach($files as $file){
        // $name_gen2 = hexdec(uniqid());
        // $img_ext2 = strtolower($file->getClientOriginalExtension());
        // $img_names = $name_gen2.'.'.$img_ext2;
        // $up_location2 = 'images/tboaImages/';
        // $last_images = $up_location2.$img_names;
        // $file->move($up_location2,$img_names);
        // $images[]=$last_images;
        // }

        $tboa = array();
        $tboa['user_name'] = $request->user_name;
        $tboa['type'] = $request->type;
        $tboa['brand'] = $request->brand;
        $tboa['car_model'] = $request->car_model;
        $tboa['condition'] = $request->condition;
        $tboa['location'] = $request->location;
        // $tboa['images'] = implode('|',$images);
        $tboa['price'] = $request->price;
        $tboa['description'] = $request->description;
        $tboa['created_at'] = Carbon::now();
        $insert=DB::table('tboa_ads')->insert($tboa);
        return response()->json($insert);
    }
    





public function insertSparepartsAds ($modelName,Request $request) {
//     $validated = $request->validate([
//         'type' => 'required',
//         'condition' => 'required',
//         'location' => 'required',
//         'price' => 'required|numeric',
//         'image' => 'required|mimes:jpg,png,jpeg,gif,svg',
//     ],
//     [
//         'type.required' => 'Please choose type',
//         'condition.required' => 'Please choose condition',
//         'location.required' => 'Please enter location',
//         'price.required' => 'Please enter price',
//         'price.numeric' => 'Please enter numbers only',
//         'image.required' => 'Please insert photo',
//         'image.mimes' => 'Photo type only can be jpg,png,jpeg,gif,svg',
//     ]
// );

    // $images=array();
    // $files = $request->file('images');
    // foreach($files as $file){
    // $name_gen2 = hexdec(uniqid());
    // $img_ext2 = strtolower($file->getClientOriginalExtension());
    // $img_names = $name_gen2.'.'.$img_ext2;
    // $up_location2 = 'images/sparepartsImages/';
    // $last_images = $up_location2.$img_names;
    // $file->move($up_location2,$img_names);
    // $images[]=$last_images;
    // }


    $spareparts = array();
    $spareparts['user_name'] = $request->user_name;
    $spareparts['type'] = $request->type;
    $spareparts['brand'] = $request->brand;
    $spareparts['car_model'] = $request->car_model;
    $spareparts['condition'] = $request->condition;
    $spareparts['location'] = $request->location;
    // $spareparts['images'] = implode('|',$images);
    $spareparts['price'] = $request->price;
    $spareparts['description'] = $request->description;
    $spareparts['created_at'] = Carbon::now();
    $insert=DB::table('spareparts_ads')->insert($spareparts);
    return response()->json($insert);
    }








    public function sellCarAds ($modelName,Request $request) {
    //     $validated = $request->validate([
    //         'ad_type' => 'required',
    //         'body_type' => 'required',
    //         'transmission_type' => 'required',
    //         'year' => 'required|numeric',
    //         'engine_capacity' => 'required',
    //         'fuel_type' => 'required',
    //         'condition' => 'required',
    //         'location' => 'required',
    //         'color' => 'required',
    //         'price' => 'required|numeric',
    //         'payment_method' => 'required',
    //         'image' => 'required|mimes:jpg,png,jpeg,gif,svg',
    //     ],
    //     [
    //         'ad_type.required' => 'Please choose AD type',
    //         'body_type.required' => 'Please choose body type',
    //         'transmission_type.required' => 'Please choose transmission type',
    //         'year.required' => 'Please enter year',
    //         'year.numeric' => 'Please enter numbers only',
    //         'engine_capacity.required' => 'Please choose engine capacity',
    //         'fuel_type.required' => 'Please choose fuel type',
    //         'condition.required' => 'Please choose condition',
    //         'location.required' => 'Please enter location',
    //         'color.required' => 'Please choose color',
    //         'price.required' => 'PLease enter price',
    //         'price.numeric' => 'Please enter numbers only',
    //         'payment_method.required' => 'Please choose payment method',
    //         'image.required' => 'Please insert photo', 
    //         'image.mimes' => 'Photo type only can be jpg,png,jpeg,gif,svg', 
    //     ]
    // );

   
        $images=array();
        $files = $request->file('images');
        foreach($files as $file){
        $name_gen2 = hexdec(uniqid());
        $img_ext2 = strtolower($file->getClientOriginalExtension());
        $img_names = $name_gen2.'.'.$img_ext2;
        $up_location2 = 'images/sellCarImages/';
        $last_images = $up_location2.$img_names;
        $file->move($up_location2,$img_names);
        $images[]=$last_images;
        }

        $sellCar = array();
        $sellCar['user_name'] = $request->user_name;
        $sellCar['ad_type'] = $request->ad_type;
        $sellCar['brand'] = $request->brand;
        $sellCar['car_model'] = $request->car_model;
        $sellCar['body_type'] = $request->body_type;
        $sellCar['transmission_type'] = $request->transmission_type;
        $sellCar['year'] = $request->year;
        $sellCar['engine_capacity'] = $request->engine_capacity;
        $sellCar['fuel_type'] = $request->fuel_type;
        $sellCar['condition'] = $request->condition;
        $sellCar['location'] = $request->location;
        $sellCar['color'] = $request->color;
        $sellCar['images'] = implode('|',$images);
        $sellCar['price'] = $request->price;
        $sellCar['payment_method'] = $request->payment_method;
        $sellCar['description'] = $request->description;
        $sellCar['created_at'] = Carbon::now();
        $insert=DB::table('sellcar_ads')->insert($sellCar);
        return response()->json($insert);
       
    }

    public function favorite (Request $request) {
        $data=DB::table('favorites')
        ->where('username','=', $request->username)
        ->where('ad_username','=', $request->ad_username)
        ->where('model','=', $request->model)
        ->where('price','=', $request->price)
        ->where('brand','=', $request->brand)
        ->where('type','=', $request->type)
        ->where('image','=', $request->image)
        ->where('created_at','=', $request->time)
        ->get();
        
        if(count($data)>0 ){

            $data=DB::table('favorites')
            ->where('username','=', $request->username)
            ->where('ad_username','=', $request->ad_username)
            ->where('model','=', $request->model)
            ->where('price','=', $request->price)
            ->where('brand','=', $request->brand)
            ->where('type','=', $request->type)
            ->where('image','=', $request->image)
            ->where('created_at','=', $request->time)
            ->delete();
            return response()->json($data); 
          }
        else{
            $favorite = array();
            $favorite['username'] = $request->username;
            $favorite['ad_username'] = $request->ad_username;
            $favorite['model'] = $request->model;
            $favorite['price'] = $request->price;
            $favorite['brand'] = $request->brand;
            $favorite['type'] = $request->type;
            $favorite['image'] = $request->image;
            $favorite['created_at'] = $request->time;
            $insert=DB::table('favorites')->insert($favorite);
            return response()->json($insert); 
            }
        }

        public function favorite2 (Request $request) {
            $data=DB::table('favorites')
            ->where('username','=', $request->username)
            ->where('ad_username','=', $request->ad_username)
            ->where('model','=', $request->model)
            ->where('price','=', $request->price)
            ->where('brand','=', $request->brand)
            ->where('image','=', $request->image)
            ->where('created_at','=', $request->time)
            ->get();
            
            if(count($data)>0 ){

                $data=DB::table('favorites')
                ->where('username','=', $request->username)
                ->where('ad_username','=', $request->ad_username)
                ->where('model','=', $request->model)
                ->where('price','=', $request->price)
                ->where('brand','=', $request->brand)
                ->where('image','=', $request->image)
                ->where('created_at','=', $request->time)
                ->delete();
                return response()->json($data);
              }
            else{

            $favorite = array();
            $favorite['username'] = $request->username;
            $favorite['ad_username'] = $request->ad_username;
            $favorite['model'] = $request->model;
            $favorite['price'] = $request->price;
            $favorite['brand'] = $request->brand;
            $favorite['image'] = $request->image;
            $favorite['created_at'] = $request->time;
            $insert=DB::table('favorites')->insert($favorite);
            return response()->json($insert) ;
            }
            }

public function test (Request $request) {
    $test['firstname'] = $request->firstname;
    $test['lastname'] = $request->lastname;
    $test['phone'] = $request->phone;
    $insert=DB::table('test')->insert($test);
    return response()->json($insert);
}



}


