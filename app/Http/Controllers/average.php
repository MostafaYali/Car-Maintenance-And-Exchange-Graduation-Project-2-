<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\users;
use App\Models\oildata;

class average extends Controller
{
    public function averageview(Request $request)
    {
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        foreach($data as $usercardata)
        {
            if($usercardata->CarMan != NULL && $usercardata->CarModel != NULL){
                if(Session('AuthUser') != null)
                {
                    $logged = "ok";
                }
                elseif(Session('AuthUser') == null)
                {
                    $logged = "no";
                }
                $echo = "disabled";
                $enter = "";
                $man = $usercardata->CarMan;
                $model = $usercardata->CarModel;
                return view('average' , $data , compact('echo' , 'enter' , 'man' , 'model' , 'usercardata' , 'logged'));
            }
            else if($usercardata->CarMan == NULL && $usercardata->CarModel == NULL){
                if(Session('AuthUser') != null)
                {
                    $logged = "ok";
                }
                elseif(Session('AuthUser') == null)
                {
                    $logged = "no";
                }
                $enter = "Please Enter Your Car Data";
                $echo = "";
                $man = "";
                $model = "";
                return view('average' , $data , compact('echo' , 'enter' , 'man' , 'model' , 'usercardata' , 'logged'));
            }
        }
    }

    public function cardataupdate(Request $request)
    {
        $validatedData = $request->validate
        (
            [
                'usercar_man' => 'required',
                'usercar_model' => 'required',
            ],

            [
                'usercar_man.required' => 'This Feild Connot Be Empty',
                'usercar_model.required' => 'This Feild Connot Be Empty',
            ]
        );
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        $man = $request->usercar_man;
        $model = $request->usercar_model;
        foreach($data as $usercardata)
        {
            if($usercardata->CarMan === $man && $usercardata->CarModel === $model)
            {
                return back()->with('error' , 'you already entered a car data');
            }
            else if($usercardata->CarMan != $man && $usercardata->CarModel != $model)
            {
                $data2 = users::where('id' , '=' , Session('AuthUser'))->first();
                $userid = users::find($data2);
                            foreach($userid as $id){
                                users::where('id', $id->id)
                                    ->update(['CarMan' => $man , 'CarModel' => $model]);
                            }
                return redirect('/auth/user/average/main');
            }
        }
    }
    public function oilview()
    {
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        $oildata = oildata::where('user_id' , '=' , Session('AuthUser'))->get();
        
        if(count($oildata) > 0)
        {
            foreach($oildata as $oiluserdata)
            {
                if(Session('AuthUser') != null)
                {
                    $logged = "ok";
                }
                elseif(Session('AuthUser') == null)
                {
                    $logged = "no";
                }
                
                $average_km = $oiluserdata->average_km_per_day;
                $km_changed_at = $oiluserdata->km_that_oil_changed_at;
                $km_of_oil = $oiluserdata->km_for_oil;
                $not_at = $oiluserdata->not_date;
                $disable = "disabled";
                $message = "You Will Need To Change Oil At";

                return view('average2Oil' , $data , compact( 'logged' , 'average_km' , 'km_changed_at' , 'km_of_oil' , 'not_at' , 'disable' , 'oildata' , 'message'));

            }
        }
        else
        {
                if(Session('AuthUser') != null)
                {
                    $logged = "ok";
                }
                elseif(Session('AuthUser') == null)
                {
                    $logged = "no";
                }
            $average_km = "";
            $km_changed_at = "";
            $km_of_oil = "";
            $not_at = ""; 
            $disable = "";
            $message = "";

            return view('average2Oil' , $data , compact('logged' , 'average_km' , 'km_changed_at' , 'km_of_oil' , 'not_at' , 'disable' , 'oildata' , 'message'));
        }
    }


    public function averageOil(Request $request)
    {
        $validatedData = $request->validate
        (
            [
                'averagekmday' => 'required',
                'kmthatoilchangedat' => 'required',
                'kmoftheoil' => 'required',
            ],

            [
                'averagekmday.required' => 'This Feild Connot Be Empty',
                'kmthatoilchangedat.required' => 'This Feild Connot Be Empty',
                'kmoftheoil.required' => 'This Feild Connot Be Empty',
            ]
        );
        $start_Date = Carbon::now()->addHours(3);
        $KmInDay = (float)$request->averagekmday;
        $kmoftheoil = (float)$request->kmoftheoil;
        $kminchange = (float)$request->kmthatoilchangedat;

       
        $indays = $kmoftheoil - 1000;
        $newdays = $indays/$KmInDay;
        $start_Date = Carbon::now()->addHours(3);
        $end_Date = Carbon::now()->addHours(3)->addDays($newdays);
        $end_km = $kminchange + $indays;



        $idforuser = users::where('id' , '=' , Session('AuthUser'))->first();
        $userid = users::find($idforuser);
        foreach($userid as $id)
        {       
            oildata::insert([
                'user_id' => $id->id,
                'logemail'	=> $id->logemail,
                'average_km_per_day' => $KmInDay,
                'km_for_oil' => $kmoftheoil,
                'date_oil_changed' => Carbon::now()->addHours(3),
                'estimated_time_to_change' => 15000,
                'km_that_oil_changed_at' => $kminchange,	
                'km_at_change' => $end_km,
                'not_date'	=> $end_Date,
                'created_at' => Carbon::now()->addHours(3),
                'updated_at' => Carbon::now()->addHours(3),
            ]);
        }
        return redirect('/auth/user/average/oil');
    }

    public function partsview()
    {
        if(Session('AuthUser') != null)
                {
                    $logged = "ok";
                }
                elseif(Session('AuthUser') == null)
                {
                    $logged = "no";
                }
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        return view('average3Parts' , $data , compact('logged'));
    }
}
