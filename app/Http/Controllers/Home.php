<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\users;
use App\Models\views;
use App\Models\otp;
use App\Models\auc;
use App\Models\oildata;
use Mail;
use App\Mail\AverageUserMail;

class Home extends Controller
{
    public function HomeView()
    {
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        if(Session('AuthUser') != null)
        {
            $logged = "ok";
            $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        }
        elseif(Session('AuthUser') == null)
        {
            $logged = "no";
        }
        $code = otp::get();
        if(count($code) > 0)
        {
            foreach($code as $expdelet)
            {
                if(Carbon::now() < $expdelet->end_in)
                {
                    if($expdelet->end_in < Carbon::now()->addHours(3))
                    {
                        if(Session('AuthUser') != null)
                        {
                            $logged = "ok";
                        }
                        elseif(Session('AuthUser') == null)
                        {
                            $logged = "no";
                        }
                        otp::where('expiration' , '=' , 'ok')
                        ->where('end_in' , '<' , Carbon::now()->addHours(3))
                        ->update(['expiration' => 'expired']);


                        otp::where('expiration' , '=' , 'expired')
                        ->delete();


                        views::increment('NumberOfViews');
                       $average = oildata::get();
                        foreach($average as $averagedata)
                        {
                            if($averagedata->not_date < Carbon::now()->addHours(3) || $averagedata->not_date == Carbon::now()->addHours(3))
                            {
                                $data = [
                                    'email'=>$averagedata->logemail,
                                    'date'=>$averagedata->not_date
                                ];

                                Mail::to($averagedata->logemail)
                                ->send(new AverageUserMail($data));

                                oildata::where('not_date' , '<' , Carbon::now())
                                ->delete();
                            }
                        }
                        return view('home' , compact('logged') , $data);
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
                        otp::where('expiration' , '=' , 'expired')
                        ->delete();

                        views::increment('NumberOfViews');

                        $average = oildata::get();
                        foreach($average as $averagedata)
                        {
                            if($averagedata->not_date < Carbon::now()->addHours(3) || $averagedata->not_date == Carbon::now()->addHours(3))
                            {
                                
                                $data = [
                                    'email'=>$averagedata->logemail,
                                    'date'=>$averagedata->not_date
                                ];

                                Mail::to($averagedata->logemail)
                                ->send(new AverageUserMail($data));

                                oildata::where('not_date' , '<' , Carbon::now())
                                ->delete();
                            }
                        }
                        return view('home' , compact('logged') , $data);
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
                    otp::where('expiration' , '=' , 'expired')
                    ->delete();

                    views::increment('NumberOfViews');

                    $average = oildata::get();
                        foreach($average as $averagedata)
                        {
                            if($averagedata->not_date < Carbon::now()->addHours(3) || $averagedata->not_date == Carbon::now()->addHours(3))
                            {
                                

                                $data = [
                                    'email'=>$averagedata->logemail,
                                    'date'=>$averagedata->not_date
                                ];

                                Mail::to($averagedata->logemail)
                                ->send(new AverageUserMail($data));

                                oildata::where('not_date' , '<' , Carbon::now())
                                ->delete();
                            }
                        }
                    return view('home' , compact('logged') , $data);
                }
            }
        }
        else if(count($code) <= 0)
        {
            if(Session('AuthUser') != null)
            {
                $logged = "ok";
            }
            elseif(Session('AuthUser') == null)
            {
                $logged = "no";
            }
            views::increment('NumberOfViews');

            $average = oildata::get();
                        foreach($average as $averagedata)
                        {
                            if($averagedata->not_date < Carbon::now()->addHours(3) || $averagedata->not_date == Carbon::now()->addHours(3))
                            {
                                $data = [
                                    'email'=>$averagedata->logemail,
                                    'date'=>$averagedata->not_date
                                ];

                                Mail::to($averagedata->logemail)
                                ->send(new AverageUserMail($data));

                                oildata::where('not_date' , '<' , Carbon::now())
                                ->delete();
                            }
                        }
            return view('home' , compact('logged') , $data);
        }
        
    }

    public function HomeLoggedView()
    {
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        if(Session('AuthUser') != null)
        {
            $logged = "ok";
        }
        elseif(Session('AuthUser') == null)
        {
            $logged = "no";
        }
        return view('homelgged' , $data , compact('logged'));
    }
}
