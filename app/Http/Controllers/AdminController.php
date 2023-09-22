<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\sparepartsAds;
use App\Models\rentAds;
use App\Models\tboaAds;
use App\Models\sellcarAds;
use App\Models\maintenance;
use App\Models\carInfo;
use App\Models\tire;
use App\Models\battery;
use App\Models\belt;
use App\Models\assistan;
use Illuminate\Support\Carbon;
use App\Models\carInfoNew;
use App\Models\oilmotor;
use App\Models\views;
use App\Models\users;
use App\Models\auc;






class AdminController extends Controller
{
    public function home() {
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        
        $numberofviews = views::get();
        $N_active_auction = count(auc::where('ad_state' , '=' , "approved")->get());
        $N_active_newads = count(DB::table('sellcar_ads')->where('condition' , '=' , 'new')->get());
        $N_active_usedads = count(DB::table('sellcar_ads')->where('condition' , '=' , 'used')->get());
        $N_active_rentads = count(DB::table('rent_ads')->get());
        $N_active_alluser = count(users::get());
        $N_active_user = count(users::where('UserType' , '=' , 'user')->get());
        $N_active_allworkshop = count(users::where('UserType' , '=' , "workshop")->get());
        return view('admin.index' , compact('numberofviews' , 'N_active_auction' , 'N_active_newads' , 'N_active_usedads' , 'N_active_rentads' , 'N_active_alluser' , 'N_active_user' , 'N_active_allworkshop') , $data);
    }

    public function vadd() {
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        return view('admin.addads' , $data);
    }

    public function sadd(Request $request) 
    {
        // $validated = $request->validate([
        //     'brand_name' => 'required',
        //     'm_c_image' => 'required',
        // ]);
        
        $brand_image=$request->file('photo');
        

        $name_gen = hexdec(uniqid());
        $img_ext=strtolower($brand_image->getClientOriginalExtension());
        $img_name=$name_gen.'.'.$img_ext;
        $up__location='images/carnew/';
        $last_img= $up__location.$img_name;
        $brand_image->move($up__location,$img_name);



        $data = array();
        $data['title'] = $request->title;
        $data['describtion'] = $request->describtion;
        $data['link'] = $request->link;
        $data['photo']=$last_img;
        DB::table('payment_ads')->insert($data);
     
        return Redirect()->back()->with('success','add successfull');
    }






    // car maintenance controller >>>>>>>>>>>>>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<

    public function voilbreak() {
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        return view('admin.oilbreak' , $data);
    }
    public function soilbreak(Request $request) {
       
        $data = array();
        $data['brand'] = $request->brand;
        DB::table('oilbreaks')->insert($data);
     
        return Redirect()->back()->with('success','add successfull');

    }

    public function voilmotor() {
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        return view('admin.oilmotor' , $data);
    }
    public function soilmotor(Request $request) {
       
        $data = array();
        $data['brand'] = $request->brand;
        $data['model'] = $request->model;
        $data['viscosity'] = $request->viscosity;
        $data['km'] = $request->km;
        DB::table('oilmotors')->insert($data);
     
        return Redirect()->back()->with('success','add successfull');

    }

    public function voiltrans() {
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        return view('admin.oiltrans' , $data);
    }
    public function soiltrans(Request $request) {
       
        $data = array();
        $data['brand'] = $request->brand;
        $data['type_trans'] = $request->trans;
        DB::table('oiltransmissions')->insert($data);
     
        return Redirect()->back()->with('success','add successfull');

    }

    public function vbelts() {
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        return view('admin.belts' , $data);
    }
    public function sbelts(Request $request) {
       
        $data = array();
        $data['brand'] = $request->brand;
        $data['km'] = $request->km;
        DB::table('belts')->insert($data);
     
        return Redirect()->back()->with('success','add successfull');

    }


    public function vbattery() {
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        return view('admin.battery' , $data);
    }
    public function sbattery(Request $request) {
       
        $data = array();
        $data['brand'] = $request->brand;
        $data['ampare'] = $request->ampare;
        $data['live_time'] = $request->livetime;
        DB::table('batteries')->insert($data);
     
        return Redirect()->back()->with('success','add successfull');

    }

    public function vtire() {
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        return view('admin.tires' , $data);
    }
    public function stire(Request $request) {
       
        $data = array();
        $data['brand'] = $request->brand;
        $data['model'] = $request->model;
        $data['size'] = $request->size;
        $data['km'] = $request->km;
        DB::table('tires')->insert($data);
     
        return Redirect()->back()->with('success','add successfull');

    }
    




    //ADS Controller

    public function ads() {
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        $sellcarAds =sellcarAds::all();
        $tboaAds =tboaAds::all();
        $rentAds =rentAds::all();
        $sparepartsAds =sparepartsAds::all();
        return view('admin.ads',compact('sellcarAds','tboaAds','rentAds','sparepartsAds') , $data);
    }
    public function D1($id){ 
        $deleted= DB::table('tboa_ads')->where('id',$id)->delete();
        return Redirect()->route('admin.ads')->with('success','Delete successfull');
    }
    public function D2($id){
        $deleted= DB::table('rent_ads')->where('id',$id)->delete();
        return Redirect()->route('admin.ads')->with('success','Delete successfull');
    }
    public function D3($id){ 
        $deleted= DB::table('sellcar_ads')->where('id',$id)->delete();
        return Redirect()->route('admin.ads')->with('success','Delete successfull');

    }

    public function D4($id){
        $deleted= DB::table('spareparts_ads')->where('id',$id)->delete();
        return Redirect()->route('admin.ads')->with('success','Delete successfull');

    }





    //brand controller 
    public function addbrand() {
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        $brands =DB::table('brands')->latest()->get();
        return view('admin.AddBrandPhoto',compact('brands') , $data);
    }

    public function sbrand(Request $request) 
    {
        $validated = $request->validate([
            'brand_name' => 'required',
            'm_c_image' => 'required',
        ]);
        
        $brand_image=$request->file('m_c_image');
        

        $name_gen = $request->brand_name;
        $img_ext=strtolower($brand_image->getClientOriginalExtension());
        $img_name=$name_gen.'.'.$img_ext;
        $up__location='images/carnew/';
        $last_img= $up__location.$img_name;
        $brand_image->move($up__location,$img_name);



        $data = array();
        $data['brand'] = strtoupper($request->brand_name);
        $data['image']=$last_img;
        DB::table('brands')->insert($data);
     
        return Redirect()->back()->with('success','add successfull');
    }
    public function Ebrand($id){
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
                $brands =DB::table('brands')->where('id',$id)->first();
                
                return view ('admin.Cpage.editbrand',compact('brands') , $data);
            }
        
    public function Ubrand(Request $request , $id){
        $brand_image=$request->file('m_c_image');
        $name_gen = strtoupper($request->brand_name);
        $img_ext=strtolower($brand_image->getClientOriginalExtension());
        $img_name=$name_gen.'.'.$img_ext;
        $up__location='images/carnew/';
        $last_img= $up__location.$img_name;
        $brand_image->move($up__location,$img_name);

        
                $data=array();
                $data['image']=$last_img;
                $data['brand'] = $request->brand_name;
                
                DB::table('brands')->where('id',$id)->update($data);
                return Redirect()->route('admin.AddBrandPhoto')->with('success','Update successfull');
           }

    public function Dbrand($id){
        
        $deleted = DB::table('brands')->where('id',$id)->delete();
        return Redirect()->route('admin.AddBrandPhoto')->with('success','Delete successfull');

    }






    //account controller

    public function acc() {
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        $users =DB::table('users')->get();
        return view('admin.accounts',compact('users') , $data);

        
    }
    public function Edit($id){
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        $users =DB::table('users')->where('id',$id)->first();
        
        return view ('admin.Cpage.editaccount',compact('users') , $data);
    }

    public function Update(Request $request , $id){
        $data=array();
        $data['activity'] = $request->activity;
        
        DB::table('users')->where('id',$id)->update($data);
        return Redirect()->route('admin.accounts')->with('success','Update successfull');


   }
    public function Delete($id){
        
        $deleted = DB::table('users')->where('id',$id)->delete();
        return Redirect()->route('admin.accounts')->with('success','Delete successfull');

    }
    public function UserProfile($id) {
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        $users =DB::table('users')->where('id',$id)->first();
        
        return view ('admin.UserProfile',compact('users') , $data);
    }




    //miantenance controller

    public function main(){
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        $re=maintenance::get();

        if(Session('AuthUser') != null)
        {
            $logged = "ok";
        }
        elseif(Session('AuthUser') == null)
        {
            $logged = "no";
        }
       return view('page.infomaintance' , $data , compact('logged'));
    }

    

    
    public function oil( Request $request){
        
    $action = $request->input('submit');

    switch ($action) {
        case 'oil':
            $UserCheck =maintenance::where('brand_car' , '=' , $request->brandcar) 
        ->where('model_car' , '=' , $request->modelcar)
        ->where('car_year' , '=' , $request->yearcar)
        ->where('oil_km' , '=' , $request->kmoil)
        ->where('km_to' , '<=' , $request->km_car)
        ->get();

        if($UserCheck){
        $titles = DB::table('maintenances')->pluck('oil');
 
        foreach ($titles as $title) {
           return Redirect()->back()->with('message','we recommended to add '.$title.' for engieen 70% and up ') ;
        }
    }
            break;
        case 'battery':
            $UserCheck =maintenance::where('brand_car' , '=' , $request->brandcar) 
            ->where('model_car' , '=' , $request->modelcar)
            ->where('car_year' , '=' , $request->yearcar)
            ->where('oil_km' , '=' , $request->kmoil)
            ->where('km_to' , '<=' , $request->km_car)
            ->get();
    
            if($UserCheck){
            $titles = DB::table('maintenances')->pluck('battery');
     
            foreach ($titles as $title) {
               return Redirect()->back()->with('message','we recommended to add '.$title.' for engieen 70% and up ') ;
            }
        }
            break;
        case 'tire':
            $UserCheck =maintenance::where('brand_car' , '=' , $request->brandcar) 
            ->where('model_car' , '=' , $request->modelcar)
            ->where('car_year' , '=' , $request->yearcar)
            ->where('oil_km' , '=' , $request->kmoil)
            ->where('km_to' , '<=' , $request->km_car)
            ->get();
    
            if($UserCheck){
            $titles = DB::table('maintenances')->pluck('tire');
     
            foreach ($titles as $title) {
               return Redirect()->back()->with('message','we recommended to add '.$title.' for engieen 70% and up ') ;
            }
        }
            break;
        case 'asisstan':
            $UserCheck =maintenance::where('brand_car' , '=' , $request->brandcar) 
            ->where('model_car' , '=' , $request->modelcar)
            ->where('car_year' , '=' , $request->yearcar)
            ->where('oil_km' , '=' , $request->kmoil)
            ->where('km_to' , '<=' , $request->km_car)
            ->get();
    
            if($UserCheck){
            $titles = DB::table('maintenances')->pluck('asisstan');
     
            foreach ($titles as $title) {
               return Redirect()->back()->with('message','we recommended to add '.$title.' for engieen 70% and up ') ;
            }
        }else{
            return ' something is wroing';
        }
            break;
        default:
            // handle invalid action
            break;
    }      
        
    }

    
    public function sugg() {
        $vars =carInfo::all();
        $oils =oilmotor::all();
        $tires =tire::all();
        $batterys =battery::all();
        $asisstans =assistan::all();
        $mybelts =belt::all();
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        return view('admin.suggestion',compact('vars','oils','tires','batterys','asisstans','mybelts') , $data);
        
    }
    public function tables() {
        $shows =maintenance::latest()->get();
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        return view('admin.table',compact('shows') , $data);
        
    }
    
    public function smiantenance(Request $request) 
    {
        $validated = $request->validate([
            
            
            'brand' => 'required|in:',
            'model' => 'required|in:',
            'km_from' => 'required',
            'km_to' => 'required',
            'foil' => 'required|in:',
            'oil_km' => 'required|in:',
            'fbattrey' => 'required|in:',
            'battrey_live' => 'required|in:',
            'ftire' => 'required|in:',
            'tire_model' => 'required|in:',
            'fassis' => 'required|in:',
            'fbelte' => 'required|in:',
            'belts_from' => 'required|in:',
            'belts_to' => 'required|in:',
            'years' => 'required|in:',
        ]);


            maintenance::insert([
            'brand_car'=>$request->brand,
            'model_car'=>$request->model,
            'km_from'=> $request->km_from,
            'km_to'=> $request->km_to,
            'oil'=> $request->foil,
            'oil_km'=> $request->oil_km,
            'battery'=>$request->fbattrey,
            'battery_time'=> $request->battrey_live,
            'tire'=>$request->ftire,
            'tire_model'=>$request->tire_model,
            'asisstan'=>$request->fassis,
            'belts' => $request->fbelte,
            'belts_km_from' => $request->belts_from,
            'belts_km_to' => $request->belts_to,
            'belts_km_to' => $request->years,
            'created_at'=>Carbon::now(),
    
            ]);
            return Redirect()->back()->with('success','add successfull');
        }


        public function Esugg($id){
            $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
            $shows=maintenance::find($id);
            return view('admin.Cpage.editnew',compact('shows') , $data);
        }

        public function Usugg(Request $request,$id){
            $update=maintenance::find($id)->update([
                'brand_car'=>$request->brand,
                'model_car'=>$request->model,
                'km_from'=> $request->km_from,
                'km_to'=> $request->km_to,
                'oil'=> $request->foil,
                'oil_km'=> $request->oil_km,
                'battery'=>$request->fbattrey,
                'battery_time'=> $request->battrey_live,
                'tire'=>$request->ftire,
                'tire_model'=>$request->tire_model,
                'asisstan'=>$request->fassis,
                'belts' => $request->fbelte,
                'belts_km_from' => $request->belts_from,
                'belts_km_to' => $request->belts_to,
                'belts_km_to' => $request->years,

            ]);

            return Redirect()->route('admin.suggestion')->with('success','add successfull');
        }




        //newcar controller 

        public function new () {
            $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
            $newcars =carInfoNew::all();
            return view ('admin.AddNewCar',compact('newcars') , $data);
            
        }
        
        
        public function store(Request $request) 
        {
            $validated = $request->validate([
                
                'car_image' => 'required|mimes:jpg.jpeg,png   car_image|max:255',
               // 'man_image' => 'required|mimes:jpg.jpeg,png   man_photo|max:255',
                'n_c_man' => 'required',
                'n_c_model' => 'required',
                'n_c_year' => 'required',
                'n_c_class' => 'required',
                'modelA' => 'required',
                'n_c_w_y' => 'required',
                'n_c_w_km' => 'required',
                'n_c_cc' => 'required',
                'n_c_hp' => 'required',
                'n_c_transmission_type' => 'required',
                'price' => 'required',
            ],
            [
                    'car_image.min'=>'photo longer than 3 characters',
                 //   'man_image.min'=>'photo longer than 3 characters',
                    'n_c_man.required'=>'please enter',
                    'n_c_model.required'=>'please enter',
                    'n_c_year.required'=>'please enter',
                    'category.required'=>'please enter',
                    'n_c_class.required'=>'please enter',
                    'modelA.required'=>'please enter',
                    'n_c_w_y.required'=>'please enter',
                    'n_c_w_km.required'=>'please enter',
                    'n_c_cc.required'=>'please enter',
                    'n_c_hp.required'=>'please enter',
                    'n_c_transmission_type.required'=>'please enter',
                    'price.required'=>'please enter',
            ]);
    
    
            $brand_image=$request->file('car_image');
          //  $brand_image1=$request->file('man_image');
    
            $name_gen = hexdec(uniqid());
            $img_ext=strtolower($brand_image->getClientOriginalExtension());
            $img_name=$name_gen.'.'.$img_ext;
            $up_location='images/carnew/';
            $last_img= $up_location.$img_name;
            $brand_image->move($up_location,$img_name);
    
            // $name_gen1 = hexdec(uniqid());
            // $img_ext1=strtolower($brand_image1->getClientOriginalExtension());
            // $img_name1=$name_gen1.'.'.$img_ext1;
            // $up_location1='images/carnew/man';
            // $last_img1= $up_location1.$img_name1;
            // $brand_image1->move($up_location1,$img_name1);
    
            
                carInfoNew::insert([
                'car_image'=>$request->car_image,
                //'man_photo'=>$request->brand_image1,
                'car_man'=>$request->n_c_man,
                'car_model'=>$request->n_c_model,
                'car_year'=>$request->n_c_year,
                'car_cat'=>$request->category,
                'car_model_arabic'=>$request->modelA,
                'car_class' => $request->n_c_class,
                'warranty'=>$request->n_c_w_y,
                'warrantykm'=>$request->n_c_w_km,
                'cc'=>$request->n_c_cc,
                'hp'=>$request->n_c_hp,
                'transmissiontype'=>$request->n_c_transmission_type,
                'price'=>$request->price,
                'created_at'=>Carbon::now()
        
                ]);
                return Redirect()->back()->with('success','add successfull');
            }
    
            public function Enew($id){
                $newcars=carInfoNew::find($id);
                $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
                return view('admin.Cpage.editnew',compact('newcars') , $data);
            }
    
            public function Unew(Request $request,$id){
                $update=carInfoNew::find($id)->update([
                'car_image' => $request ->car_image,
                'car_man'=>$request->n_c_man,
                'car_model'=>$request->n_c_model,
                'car_year'=>$request->n_c_year,
                'car_cat'=>$request->category,
                'car_model_arabic'=>$request->modelA,
                'car_class' => $request->n_c_class,
                'warranty'=>$request->n_c_w_y,
                'warrantykm'=>$request->n_c_w_km,
                'cc'=>$request->n_c_cc,
                'hp'=>$request->n_c_hp,
                'transmissiontype'=>$request->n_c_transmission_type,
                'price'=>$request->price,
    
                ]);
    
                return Redirect()->route('admin.AddNewCar')->with('success','add successfull');
            }





            //old car controller
            public function old() {
                $oldcars =carInfo::all();
                $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
                return view('admin.AddOldCar',compact('oldcars') , $data);
            }
        
           
        
            public function sold(Request $request) 
            {
               
        
        
                 carInfo::insert([
                    
                    'man_name'=>$request->manfucturer,
                    'model'=>$request->omodel,
                    'year_from'=>$request->year_from,
                    'year_to'=>$request->year_to,
                    'category'=>$request->category,
                    'car_name_arabic'=>$request->modela,
                    'created_at'=>Carbon::now()
            
                    ]);
                
                return Redirect()->back()->with('success','add successfull');
            }
        





            // reports controller 
            public function rep() {
                $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
                $users =DB::table('users')->get();
                return view('admin.reports',compact('users') , $data);
            }





    
}
