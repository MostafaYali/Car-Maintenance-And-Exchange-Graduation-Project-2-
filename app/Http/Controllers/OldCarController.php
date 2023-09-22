<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\carInfo;
use App\Models\carInfoNew;
use Carbon\Carbon;
use App\Models\users;

class OldCarController extends Controller
{
    public function old() {
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        $oldcars =carInfo::all();
        return view('admin.AddOldCar' , compact('oldcars') , $data);
    }

   

    public function store(Request $request) 
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
    
}
