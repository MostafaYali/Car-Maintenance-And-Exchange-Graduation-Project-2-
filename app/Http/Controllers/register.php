<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use App\Models\users;
use App\Models\otp;
use Illuminate\Support\Facades\DB;
use Mail;
use App\Mail\forgetpassword;

class register extends Controller
{
    public function start()
    {
        return view('login-register');
    }
    public function adduser(Request $request)
    {
        $validatedData = $request->validate
        (
            [
                'logusername' => 'required|unique:users',
                'logname' => 'required',
                'logemail' => 'required|unique:users',
                'logpass' => 'required|min:8',
                'logphone' => 'required|max:11',
                'logaddr' => 'required',
                'logtype' => 'required',
                
            ],

            [
                'logname.required' => 'This Feild Connot Be Empty',
                'logusername.required' => 'This Feild Connot Be Empty',
                'logusername.unique' => 'This User Already Exist',
                'logemail.required' => 'This Feild Connot Be Empty',
                'logemail.unique' => 'This Email Already Have An Account',
                'logpass.required' => 'This Feild Connot Be Empty',
                'logpass.min' => 'Cannot Enter Password Less Than 8 Characters',
                'logphone.required' => 'This Feild Connot Be Empty',
                'logaddr.required' => 'This Feild Connot Be Empty',
                'logtype' => 'This Feild Connot Be Empty',
            ]
        );
        if($request->logtype === "user"){
            users::insert([
                'image' => "users_logos/1760269297176366.png",
                'logusername' => $request->logusername,
                'name' => $request->logname,
                'logemail' => $request->logemail,
                'password' => Hash::make($request->logpass),
                'phone' => $request->logphone,
                'address' => $request->logaddr,
                'UserType' => "user",
                'activity' => "active",
                'route' => "logged.main",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        return Redirect('/auth/user/view')->with('registered' , 'Your Account Registered Success');
        }elseif($request->logtype === "workshop"){
            users::insert([
                'image' => "users_logos/1760267785262649.png",
                'logusername' => $request->logusername,
                'name' => $request->logname,
                'logemail' => $request->logemail,
                'password' => Hash::make($request->logpass),
                'phone' => $request->logphone,
                'address' => $request->logaddr,
                'UserType' => "workshop",
                'activity' => "active",
                'route' => "workshop.main",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            return Redirect('/auth/user/workshop')->with('registered' , 'Your Account Registered Success');
        }
    }


    public function checkuser(Request $request){
        $validatedData = $request->validate
        (
            [
                'logemail_username' => 'required',
                'logpass1' => 'required|min:8',
            ],

            [
                'logemail_username.required' => 'This Feild Connot Be Empty',
                'logpass1.required' => 'This Feild Connot Be Empty',
                'logpass1.min' => 'Cannot Enter Password Less Than 8 Characters',
            ]
        );

        $UserCheck = users::where('logusername' , '=' , $request->logemail_username)
        ->orwhere('logemail' , '=' , $request->logemail_username)
        ->first();

        if(!$UserCheck)
        {
            return back()->with('error' , 'This UserName Does Not Have An Account');
        }else{
            
            if(Hash::check($request->logpass1 , $UserCheck->password))
            {
                $activity = users::select('activity')->where('logusername', $request->logemail_username)
                ->orwhere('logemail', $request->logemail_username)
                ->get();
                
                
                foreach ($activity as $ActivityCheck) {
                    if($ActivityCheck->activity == "notactive")
                    {
                        return back()->with('error' , 'This User Is Not Active Please Contact Support');
                    }
                    else{
                        $CheckUser = users::select('UserType')->where('logusername', $request->logemail_username)
                        ->orwhere('logemail', $request->logemail_username)
                        ->get();
                        foreach($CheckUser as $check){
                            if($ActivityCheck->activity == "active" && $check->UserType == "user")
                            {
                                $request->Session()->put('AuthUser', $UserCheck->id);
                                return Redirect('/auth');
                            }
                            elseif($ActivityCheck->activity == "active" && $check->UserType == "workshop")
                            {
                                $request->Session()->put('AuthUser', $UserCheck->id);
                                return Redirect('/auth/user/workshop');
                            }
                            elseif($ActivityCheck->activity == "active" && $check->UserType == "admin")
                            {
                                $request->Session()->put('AuthUser', $UserCheck->id);
                                return Redirect('/admin');
                            }
                        }
                    }
                }
            }
            else
            {
                return back()->with('error' , 'InCorrect Password');
            }
        }
    }

    public function home(Request $request){
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        return view('loged' , $data);
    }

    // logout function 
    public function logout(Request $request){
        if(Session()->has('AuthUser')){
            Session()->pull('AuthUser');
            return redirect('/login');
        }
    }

    //profile view

    public function checkuserview(Request $request)
    {
        $users = users::where('logusername' , '=' , $request->logemail_username)->get();
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        return view('profile' , $data , compact('users'));
    }

    //email update function for user profile
    public function emailupdate(Request $request)
    {
        $CheckUser = users::select('logemail')->get();
        foreach($CheckUser as $check){
            if($request->emailforupdate === $check->logemail)
            {
                return Redirect('/auth/user/view')->with('error' , 'This the same email Enter diffrent Email To Update It');
            }
            else
            {
                $idforuser = users::where('id' , '=' , Session('AuthUser'))->first();
                    $userid = users::find($idforuser);
                    foreach($userid as $id){
                        users::where('id', $id->id)
                            ->update(['logemail' => $request->emailforupdate]);
                    }
                    return Redirect('/auth/user/view')->with('ok' , "Email Updated Success");
            }
        }
    }

    // image update for user profile

    public function userimageupdate(Request $request)
    {
        $validatedData = $request->validate
        (
            [
                'userlogo' => 'required|mimes:jpg,jpeg,png',
            ],

            [
                'userlogo.required' => 'This Feild Connot Be Empty',
                'userlogo.mimes' => 'The Supported Type Of Files Is ( jpg , jpeg , png )'
            ],
        );

        $user_image = $request->file('userlogo');

        $name_gen = hexdec(uniqid());

        $img_ext = strtolower($user_image->getClientOriginalExtension());

        $img_name = $name_gen.'.'.$img_ext;

        $up_location = 'users_logos/';

        $last_image = $up_location.$img_name;

        $user_image->move($up_location,$img_name);

        $idforuser = users::where('id' , '=' , Session('AuthUser'))->first();
                    $userid = users::find($idforuser);
                    foreach($userid as $id){
                        users::where('id', $id->id)
                            ->update(['image' => $last_image]);
                    }
        return Redirect('/auth/user/view')->with('ok' , "Image Updated Success");
    }

    //password update for user profile

    public function updatepassword()
    {
        $validatedData = $request->validate
        (
            [
                'OldPassword' => 'required|min:8',
                'NewPassword' => 'required|min:8',
                'ConfirmPassword' => 'required|min:8',
            ],

            [
                'OldPassword.min' => 'Password Must Be At Least 8 character',
                'NewPassword.min' => 'Password Must Be At Least 8 character',
                'ConfirmPassword.min' => 'Password Must Be At Least 8 character',

                'OldPassword.required' => 'This Feild Connot Be Empty',
                'NewPassword.required' => 'This Feild Connot Be Empty',
                'ConfirmPassword.required' => 'This Feild Connot Be Empty',
            ],
        );
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        foreach($data as $pass){
            if(Hash::check($request->OldPassword , $pass->password))
            {
                return Redirect('/auth/user/view')->with('ok' , 'Password Not Updated,This Is The Same Saved Password');
            }
            else
            {
                if($request->input('NewPassword') === $request->input('ConfirmPassword'))
                {
                    $idforuser = users::where('id' , '=' , Session('AuthUser'))->first();
                            $userid = users::find($idforuser);
                            foreach($userid as $id){
                                users::where('id', $id->id)
                                    ->update(['password' => Hash::make($request->input('ConfirmPassword'))]);
                            }
                    return Redirect('/auth/user/view')->with('ok' , 'Password Updated');
                }
                else
                {
                    return Redirect('/auth/user/view')->with('error' , 'Password Not Updated,The New And Confrim Password Does Not Matched');
                }
            }
        }
    }

    public function forgetpasswordview()
    {
        return view('ForgetPasswordView');
    }

    public function forgetpassword(Request $request)
    {
        $validatedData = $request->validate
        (
            [
                'forget_email' => 'required'
            ],

            [
                'forget_email.required' => 'This Feild Cnnot Be Empty',
            ],
        );

        $UserEmail = users::where('logemail', $request->forget_email)->get();
        if(count($UserEmail) > 0)
        {
            foreach($UserEmail as $email)
            {
                if($email->logemail == $request->forget_email)
                {
                    $hasedusername = substr_replace($email->logusername , '***' , -3);
                    $otp = mt_rand(100000 , 999999);
                    otp::insert([
                        'code' => $otp,
                        'mail' => $request->forget_email,
                        'end_in' => Carbon::now()->addDays(1)->addHours(3),
                    ]);

                    $data = [
                        'name'=>$email->name,
                        'code'=>$otp
                    ];


                    Mail::to($request->forget_email)
                    ->send(new forgetpassword($data));

                    return redirect('/forget/main')->with('Sent' , 'Email Sent To '. $email->logemail .' That Associated With UserName '. $hasedusername);
                }
                else if($data->logemail != $request->forget_email)
                {
                    return redirect('/forget/main')->with('SentError' , 'This Email Does Not Associated With Any UserName');
                }
            }
        }
        else
        {
            return redirect('/forget/main')->with('SentError' , 'This Email Does Not Have An Account');
        }
    }

    public function forgetpasswordresetview()
    {
        return view('ForgetReset');
    }

    public function forgetpasswordreset(Request $request)
    {
        $validatedData = $request->validate
        (
            [

                'NewPassword' => 'required|min:8',
                'otpforreset' => 'required|min:6',
                'ConfirmPassword' => 'required|min:8',
            ],

            [
                'NewPassword.required' => 'This Field Connot Be Empty',
                'NewPassword.min' => 'Cannot Enter Password Less Than 8 Characters',
                'otpforreset.required' => 'This Field Connot Be Empty',
                'otpforreset.min' => 'Otp Must Be 6 Characters',
                'ConfirmPassword.required' => 'This Field Connot Be Empty',
                'ConfirmPassword.min' => 'Cannot Enter Password Less Than 8 Characters',
            ]
        );

        $code_data = otp::where('code' , '=' , $request->otpforreset)->get();
        if(count($code_data) > 0)
        {
            foreach($code_data as $codewithdata)
            {
                if($codewithdata->code == $request->otpforreset)
                {
                    if($codewithdata->expiration == 'ok' && $codewithdata->end_in > Carbon::now()->addHours(3))
                    {
                        if($request->input('NewPassword') === $request->input('ConfirmPassword'))
                        {
                            users::where('logemail' , '=' , $codewithdata->mail)
                            ->update(['password' => Hash::make($request->input('ConfirmPassword'))]);

                            otp::where('code' , '=' , $request->otpforreset)
                            ->update(['expiration' => 'expired']);
                            return Redirect('/forget/password/reset')->with('passwordstate' , 'Password Updated');
                        }
                        else
                        {
                            return Redirect('/forget/password/reset')->with('passworderror' , 'Password Not Updated,The New And Confrim Password Does Not Matched');
                        }
                    }
                    else
                    {
                        return Redirect('/forget/password/reset')->with('passworderror' , 'This Otp Is Expired Please Try Again');
                    }
                }
                else
                {
                    return Redirect('/forget/password/reset')->with('passworderror' , 'This otp does not exist');
                }
            }
        }
        else
        {
            return Redirect('/forget/password/reset')->with('passworderror' , 'Please Request A New Otp This One Expired Or Incorrect');
        }
    }
}
