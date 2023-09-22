<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\users;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class PageController extends Controller
{
    public function home () {
        if(Session('AuthUser') != null)
        {
            $logged = "ok";
        }
        elseif(Session('AuthUser') == null)
        {
            $logged = "no";
        }
        return view('page.home' , compact('logged'));
    }
    public function model($brandname) {
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        $modelNames=DB::table('car_infos')->select('model')->groupBy('model')->where('man_name',$brandname)->get();
        if(Session('AuthUser') != null)
        {
            $logged = "ok";
        }
        elseif(Session('AuthUser') == null)
        {
            $logged = "no";
        }
        return view('page.model',compact('modelNames' , 'logged') , $data);
    }
    public function model2($brandname) {
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        $modelNames=DB::table('car_infos')->select('model')->groupBy('model')->where('man_name',$brandname)->get();
        if(Session('AuthUser') != null)
        {
            $logged = "ok";
        }
        elseif(Session('AuthUser') == null)
        {
            $logged = "no";
        }
        return view('page.model2',compact('modelNames' , 'logged') , $data);
    }
    public function model3($brandname) {
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        $modelNames=DB::table('car_infos')->select('model')->groupBy('model')->where('man_name',$brandname)->get();
        if(Session('AuthUser') != null)
        {
            $logged = "ok";
        }
        elseif(Session('AuthUser') == null)
        {
            $logged = "no";
        }
        return view('page.model3',compact('modelNames' , 'logged') , $data);
    }

    public function model4($brandname) {
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        $modelNames=DB::table('car_infos')->select('model')->groupBy('model')->where('man_name',$brandname)->get();
        if(Session('AuthUser') != null)
        {
            $logged = "ok";
        }
        elseif(Session('AuthUser') == null)
        {
            $logged = "no";
        }
        return view('page.model4',compact('modelNames' , 'logged') , $data);
    }


    public function Maintenance() {
        if(Session('AuthUser') != null)
        {
            $logged = "ok";
        }
        elseif(Session('AuthUser') == null)
        {
            $logged = "no";
        }
        return view('page.Maintenance' , compact('logged'));
    }

    public function infotboa($modelName) {
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        $modelNames=DB::table('car_infos')->select('model')->groupBy('model')->where('model',$modelName)->get();
        $brandnames=DB::table('car_infos')->select('man_name')->groupBy('man_name')->where('model',$modelName)->get();
        if(Session('AuthUser') != null)
        {
            $logged = "ok";
        }
        elseif(Session('AuthUser') == null)
        {
            $logged = "no";
        }
        return view('page.infotboa',compact('modelNames' , 'brandnames' , 'logged') , $data);
    }

    public function infosparepart($modelName) {
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        $modelNames=DB::table('car_infos')->select('model')->groupBy('model')->where('model',$modelName)->get();
        $brandnames=DB::table('car_infos')->select('man_name')->groupBy('man_name')->where('model',$modelName)->get();
        if(Session('AuthUser') != null)
        {
            $logged = "ok";
        }
        elseif(Session('AuthUser') == null)
        {
            $logged = "no";
        }
        return view('page.infosparepart',compact('modelNames' , 'brandnames' , 'logged'), $data);
    }

    public function inforent ($modelName) {
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        $modelNames=DB::table('car_infos')->select('model')->groupBy('model')->where('model',$modelName)->get();
        $brandnames=DB::table('car_infos')->select('man_name')->groupBy('man_name')->where('model',$modelName)->get();
        if(Session('AuthUser') != null)
        {
            $logged = "ok";
        }
        elseif(Session('AuthUser') == null)
        {
            $logged = "no";
        }
        return view('page.inforent',compact('modelNames' , 'brandnames' , 'logged'), $data);
    }

    public function infooil () {
        if(Session('AuthUser') != null)
        {
            $logged = "ok";
        }
        elseif(Session('AuthUser') == null)
        {
            $logged = "no";
        }
        return view('page.infooil' , 'logged');
    }

    public function infomaintenance () {
        if(Session('AuthUser') != null)
        {
            $logged = "ok";
        }
        elseif(Session('AuthUser') == null)
        {
            $logged = "no";
        }
        return view('page.infomaintenance' , 'logged');
    }

    public function infocar ($modelName) {
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        $modelNames=DB::table('car_infos')->select('model')->groupBy('model')->where('model',$modelName)->get();
        $brandnames=DB::table('car_infos')->select('man_name')->groupBy('man_name')->where('model',$modelName)->get();
        if(Session('AuthUser') != null)
        {
            $logged = "ok";
        }
        elseif(Session('AuthUser') == null)
        {
            $logged = "no";
        }
        return view('page.infocar',compact('modelNames' , 'brandnames' , 'logged') , $data);
    }
    public function detailads ($username,$created_at) {
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        $detailads=DB::table('rent_ads')->latest() ->where('user_name',$username)->where('created_at',$created_at)->get();
        $detailads2=DB::table('sellcar_ads')->latest() ->where('user_name',$username)->where('created_at',$created_at)->get();
        $detailads3=DB::table('spareparts_ads')->latest() ->where('user_name',$username)->where('created_at',$created_at)->get();
        $detailads4=DB::table('tboa_ads')->latest() ->where('user_name',$username)->where('created_at',$created_at)->get();
        if(Session('AuthUser') != null)
        {
            $logged = "ok";
        }
        elseif(Session('AuthUser') == null)
        {
            $logged = "no";
        }
        return view('page.detailads',compact('detailads','detailads2','detailads3','detailads4' , 'logged') , $data);
    }

    public function categorysell () {
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        if(Session('AuthUser') != null)
        {
            $logged = "ok";
        }
        elseif(Session('AuthUser') == null)
        {
            $logged = "no";
        }
        return view('page.categorysell' , $data , compact('logged'));
    }
    public function brand () {
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        $brandNames=DB::table('brands')->latest()->get();
        if(Session('AuthUser') != null)
        {
            $logged = "ok";
        }
        elseif(Session('AuthUser') == null)
        {
            $logged = "no";
        }
        return view('page.brand',compact('brandNames' , 'logged'), $data);
    }
    public function brand2 () {
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        $brandNames=DB::table('brands')->latest()->get();
        if(Session('AuthUser') != null)
        {
            $logged = "ok";
        }
        elseif(Session('AuthUser') == null)
        {
            $logged = "no";
        }
        return view('page.brand2',compact('brandNames' , 'logged'), $data);
    }
    public function brand3 () {
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        $brandNames=DB::table('brands')->latest()->get();
        if(Session('AuthUser') != null)
        {
            $logged = "ok";
        }
        elseif(Session('AuthUser') == null)
        {
            $logged = "no";
        }
        return view('page.brand3',compact('brandNames' , 'logged'), $data);
    }
    public function brand4 () {
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        $brandNames=DB::table('brands')->latest()->get();
        if(Session('AuthUser') != null)
        {
            $logged = "ok";
        }
        elseif(Session('AuthUser') == null)
        {
            $logged = "no";
        }
        return view('page.brand4',compact('brandNames' , 'logged') , $data);
    }
    public function newcarads () {
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        $cfs=DB::table('sellcar_ads')->latest() ->where('condition','=','new')->get();
        $favorites=DB::table('favorites')->latest()->get();
        if(Session('AuthUser') != null)
        {
            $logged = "ok";
        }
        elseif(Session('AuthUser') == null)
        {
            $logged = "no";
        }
        return view('page.newcarads',compact('cfs','favorites' , 'logged'), $data);
    }
    public function usedcarads () {
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        $cfs=DB::table('sellcar_ads')->latest() ->where('condition','=','used')->get();
        $favorites=DB::table('favorites')->latest()->get();
        if(Session('AuthUser') != null)
        {
            $logged = "ok";
        }
        elseif(Session('AuthUser') == null)
        {
            $logged = "no";
        }
        return view('page.usedcarads',compact('cfs','favorites','logged'), $data);
    }
    public function rentcarads () {
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        $cfr=DB::table('rent_ads')->latest()->get();
        $favorites=DB::table('favorites')->latest()->get();
        if(Session('AuthUser') != null)
        {
            $logged = "ok";
        }
        elseif(Session('AuthUser') == null)
        {
            $logged = "no";
        }
        return view('page.rentcarads',compact('cfr' , 'favorites' , 'logged'),$data);
    }
    public function sparepartads () {
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        $csp=DB::table('spareparts_ads')->latest()->get();
        $favorites=DB::table('favorites')->latest()->get();
        if(Session('AuthUser') != null)
        {
            $logged = "ok";
        }
        elseif(Session('AuthUser') == null)
        {
            $logged = "no";
        }
        return view('page.sparepartads',compact('csp' , 'favorites' , 'logged'), $data);
    }
    public function tboaads () {
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        $tboa=DB::table('tboa_ads')->latest()->get();
        $favorites=DB::table('favorites')->latest()->get();
        if(Session('AuthUser') != null)
        {
            $logged = "ok";
        }
        elseif(Session('AuthUser') == null)
        {
            $logged = "no";
        }
        return view('page.tboaads',compact('tboa' , 'favorites' , 'logged'), $data);
    }

    public function ads() {
        $cfs=DB::table('sellcar_ads')->latest()->get();
        $cfr=DB::table('rent_ads')->latest()->get();
        $tboa=DB::table('tboa_ads')->latest()->get();
        $csp=DB::table('spareparts_ads')->latest()->get();
        if(Session('AuthUser') != null)
        {
            $logged = "ok";
        }
        elseif(Session('AuthUser') == null)
        {
            $logged = "no";
        }
        return view('page.ads',compact('cfs','cfr','tboa','csp','logged'));
    }

    public function infousercar() {
        if(Session('AuthUser') != null)
        {
            $logged = "ok";
        }
        elseif(Session('AuthUser') == null)
        {
            $logged = "no";
        }
        return view('page.infoCarMaintenance',compact('logged'));
    }

    public function changeddetails() {
        if(Session('AuthUser') != null)
        {
            $logged = "ok";
        }
        elseif(Session('AuthUser') == null)
        {
            $logged = "no";
        }
        return view('page.ichanged',compact('logged'));
    }

    public function adsviews() {
        if(Session('AuthUser') != null)
        {
            $logged = "ok";
        }
        elseif(Session('AuthUser') == null)
        {
            $logged = "no";
        }
        return view('page.viewer',compact('logged'));
    }
    public function favoriteView($username) {
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        $favorites=DB::table('favorites')->latest()->where('username',$username)->get();
        if(Session('AuthUser') != null)
        {
            $logged = "ok";
        }
        elseif(Session('AuthUser') == null)
        {
            $logged = "no";
        }
        return view('page.favorites',compact('favorites','logged'), $data);
    }

    //this is rent page inserting code
    public function insertRentAds ($modelName,Request $request) {
        $validated = $request->validate([
            'body_type' => 'required',
            'transmission_type' => 'required',
            'year' => 'required|numeric',
            'engine_capacity' => 'required',
            'fuel_type' => 'required',
            'location' => 'required',
            'color' => 'required',
            'price' => 'required|numeric',
            'rental_period' => 'required',
            'rental_option' => 'required',
            'images.*'=>'mimes:jpeg,png,jpg,gif,svg',
            'images' => 'required',
            'description' => 'required',
        ],
        [
            'body_type.required' => 'Please choose body type',
            'transmission_type.required' => 'Please choose transmission type',
            'year.required' => 'Please enter year',
            'year.numeric' => 'Please enter numbers only',
            'engine_capacity.required' => 'Please choose engine capacity',
            'fuel_type.required' => 'Please choose fuel type',
            'location.required' => 'Please enter location',
            'color.required' => 'Please choose color',
            'price.required' => 'PLease enter price',
            'price.numeric' => 'Please enter numbers only',
            'rental_period.required' => 'Please choose rental period',
            'rental_option.required' => 'Please choose rental option',
            'images.required' => 'Please insert photos',
            'images.*.mimes' => 'Photo type only can be jpg,png,jpeg,gif,svg',
            'description.required' => 'Please write a description',
        ]
    );
        //multiple photos
        $images=array();
        $files = $request->file('images');
        foreach($files as $file){
        $name_gen2 = hexdec(uniqid());
        $img_ext2 = strtolower($file->getClientOriginalExtension());
        $img_names = $name_gen2.'.'.$img_ext2;
        $up_location2 = 'images/rentCarImages/';
        $last_images = $up_location2.$img_names;
        $file->move($up_location2,$img_names);
        $images[]=$last_images;
        }

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
    $rent['images'] = implode('|',$images);
    $rent['rental_option'] = $request->rental_option;
    $rent['rental_period'] = $request->rental_period;
    $rent['price'] = $request->price;
    $rent['description'] = $request->description;
    $rent['created_at'] = Carbon::now();
    DB::table('rent_ads')->insert($rent);
    return Redirect()->back()->with('success','Success!');
    }

    //this is tboa page inserting code
    public function insertTboaAds ($modelName,Request $request) {
        $validated = $request->validate([
            'type' => 'required',
            'condition' => 'required',
            'location' => 'required',
            'price' => 'required|numeric',
            'images.*'=>'mimes:jpeg,png,jpg,gif,svg',
            'images' => 'required',
            'description' => 'required',
        ],
        [
            'type.required' => 'Please choose type',
            'condition.required' => 'Please choose condition',
            'location.required' => 'Please enter location',
            'price.required' => 'Please enter price',
            'price.numeric' => 'Please enter numbers only',
            'images.required' => 'Please insert photos',
            'images.*.mimes' => 'Photo type only can be jpg,png,jpeg,gif,svg',
            'description.required' => 'Please write a description',
        ]
    );

        // multiphotos
        $images=array();
        $files = $request->file('images');
        foreach($files as $file){
        $name_gen2 = hexdec(uniqid());
        $img_ext2 = strtolower($file->getClientOriginalExtension());
        $img_names = $name_gen2.'.'.$img_ext2;
        $up_location2 = 'images/tboaImages/';
        $last_images = $up_location2.$img_names;
        $file->move($up_location2,$img_names);
        $images[]=$last_images;
        }

    $tboa = array();
    $tboa['user_name'] = $request->user_name;
    $tboa['type'] = $request->type;
    $tboa['brand'] = $request->brand;
    $tboa['car_model'] = $request->car_model;
    $tboa['condition'] = $request->condition;
    $tboa['location'] = $request->location;
    $tboa['images'] = implode('|',$images);
    $tboa['price'] = $request->price;
    $tboa['description'] = $request->description;
    $tboa['created_at'] = Carbon::now();
    DB::table('tboa_ads')->insert($tboa);
    return Redirect()->back()->with('success','Success!');
    }

    //this is spareparts page inserting code
    public function insertSparepartsAds ($modelName,Request $request) {
        $validated = $request->validate([
            'type' => 'required',
            'condition' => 'required',
            'location' => 'required',
            'price' => 'required|numeric',
            'images.*'=>'mimes:jpeg,png,jpg,gif,svg',
            'images' => 'required',
            'description' => 'required',
        ],
        [
            'type.required' => 'Please choose type',
            'condition.required' => 'Please choose condition',
            'location.required' => 'Please enter location',
            'price.required' => 'Please enter price',
            'price.numeric' => 'Please enter numbers only',
            'images.required' => 'Please insert photos',
            'images.*.mimes' => 'Photo type only can be jpg,png,jpeg,gif,svg',
            'description.required' => 'Please write a description',
        ]
    );
        // multiphotos
        $images=array();
        $files = $request->file('images');
        foreach($files as $file){
        $name_gen2 = hexdec(uniqid());
        $img_ext2 = strtolower($file->getClientOriginalExtension());
        $img_names = $name_gen2.'.'.$img_ext2;
        $up_location2 = 'images/sparepartsImages/';
        $last_images = $up_location2.$img_names;
        $file->move($up_location2,$img_names);
        $images[]=$last_images;
        }

        $spareparts = array();
        $spareparts['user_name'] = $request->user_name;
        $spareparts['type'] = $request->type;
        $spareparts['brand'] = $request->brand;
        $spareparts['car_model'] = $request->car_model;
        $spareparts['condition'] = $request->condition;
        $spareparts['location'] = $request->location;
        $spareparts['images'] = implode('|',$images);
        $spareparts['price'] = $request->price;
        $spareparts['description'] = $request->description;
        $spareparts['created_at'] = Carbon::now();
        DB::table('spareparts_ads')->insert($spareparts);
        return Redirect()->back()->with('success','Success!');
        }

    //this is sell car page inserting code
    public function sellCarAds ($modelName,Request $request) {
        $validated = $request->validate([
            'ad_type' => 'required',
            'body_type' => 'required',
            'transmission_type' => 'required',
            'year' => 'required|numeric',
            'engine_capacity' => 'required',
            'fuel_type' => 'required',
            'condition' => 'required',
            'location' => 'required',
            'color' => 'required',
            'price' => 'required|numeric',
            'payment_method' => 'required',
            'images.*'=>'mimes:jpeg,png,jpg,gif,svg',
            'images' => 'required',
            'description' => 'required',
        ],
        [
            'ad_type.required' => 'Please choose AD type',
            'body_type.required' => 'Please choose body type',
            'transmission_type.required' => 'Please choose transmission type',
            'year.required' => 'Please enter year',
            'year.numeric' => 'Please enter numbers only',
            'engine_capacity.required' => 'Please choose engine capacity',
            'fuel_type.required' => 'Please choose fuel type',
            'condition.required' => 'Please choose condition',
            'location.required' => 'Please enter location',
            'color.required' => 'Please choose color',
            'price.required' => 'PLease enter price',
            'price.numeric' => 'Please enter numbers only',
            'payment_method.required' => 'Please choose payment method',
            'images.required' => 'Please insert photos',
            'images.*.mimes' => 'Photo type only can be jpg,png,jpeg,gif,svg',
            'description.required' => 'Please write a description',
        ]    
    );
        // multiphotos
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
        DB::table('sellcar_ads')->insert($sellCar);
        return Redirect()->back()->with('success','Success!');
        }

        //favorite
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
                return back(); 
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
                DB::table('favorites')->insert($favorite);
                return back();  
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
                    return back(); 
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
                DB::table('favorites')->insert($favorite);
                return back();  
                }
                }
    
    

}
