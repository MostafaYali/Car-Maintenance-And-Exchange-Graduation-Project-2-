<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\maintenance;
use App\Models\carInfo;
use App\Models\oil;
use App\Models\tire;
use App\Models\battery;
use App\Models\belt;
use App\Models\assistan;
use Illuminate\Support\Carbon;
use App\Models\users;



    



class MaintenanceController extends Controller
{
    public function main()
    {
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        return view('page.infomaintance' , $data);
    }


    public function sugg() {
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        $vars =carInfo::all();
        $oils =oil::all();
        $tires =tire::all();
        $batterys =battery::all();
        $asisstans =assistan::all();
        $mybelts =belt::all();
        return view('admin.suggestion',compact('vars','oils','tires','batterys','asisstans','mybelts') , $data);
        
    }
    public function tables() {
        $shows =maintenance::latest()->get();
        return view('admin.table',compact('shows'));
        
    }
    
    public function store(Request $request) 
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
}















