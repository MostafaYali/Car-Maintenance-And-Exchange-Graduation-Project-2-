<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class PasswordUpdate extends Controller
{
    public function updateuser(Request $request){
        $validatedData = $request->validate
        (
            [
                'NewPassword' => 'required',
                'OldPassword' => 'required|min:8',
                'ConfirmPassword' => 'required|min:8',
            ],

            [
                'NewPassword.required' => 'This Field Connot Be Empty',
                'OldPassword.required' => 'This Field Connot Be Empty',
                'ConfirmPassword.required' => 'This Field Connot Be Empty',
                'OldPassword.min' => 'Cannot Enter Password Less Than 8 Characters',
                'ConfirmPassword.min' => 'Cannot Enter Password Less Than 8 Characters',
            ]
        );

        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        foreach($data as $pass){
            if(Hash::check($request->OldPassword , $pass->password)){
                if(Hash::check($request->ConfirmPassword , $pass->password))
                {
                    return Redirect('/auth/user/view')->with('passwordstate' , 'This The Same Saved Password Enter New One To Update It');
                }
                else
                {
                    if($request->NewPassword == $request->ConfirmPassword)
                    {
                        $idforuser = users::where('id' , '=' , Session('AuthUser'))->first();
                        $userid = users::find($idforuser);
                        foreach($userid as $id){
                            users::where('id', $id->id)
                                ->update(['password' => Hash::make($request->ConfirmPassword)]);
                        }
                        return Redirect('/auth/user/logout')->with('passwordstate' , 'Password Updated, Please Login Again');
                    }
                    else
                    {
                        return Redirect('/auth/user/view')->with('passwordstate' , 'New Password Feild Not Matching Old Password Feild...!');
                    }
                }
            }
            else
            {
                return Redirect('/auth/user/view')->with('passwordstate' , 'Incorrect Old Password');
            }
        }
    }

    public function updateworkshop(Request $request){
        $validatedData = $request->validate
        (
            [
                'NewPassword' => 'required',
                'OldPassword' => 'required|min:8',
                'ConfirmPassword' => 'required|min:8',
            ],

            [
                'NewPassword.required' => 'This Field Connot Be Empty',
                'OldPassword.required' => 'This Field Connot Be Empty',
                'ConfirmPassword.required' => 'This Field Connot Be Empty',
                'OldPassword.min' => 'Cannot Enter Password Less Than 8 Characters',
                'ConfirmPassword.min' => 'Cannot Enter Password Less Than 8 Characters',
            ]
        );

        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        foreach($data as $pass){
            if(Hash::check($request->OldPassword , $pass->password)){
                if($request->NewPassword == $request->ConfirmPassword)
                {
                    $idforuser = users::where('id' , '=' , Session('AuthUser'))->first();
                    $userid = users::find($idforuser);
                    foreach($userid as $id){
                        users::where('id', $id->id)
                            ->update(['password' => Hash::make($request->ConfirmPassword)]);
                    }
                    return Redirect('/auth/user/workshop/edit/pass/main')->with('passwordstate' , 'Password Updated');
                }
                else
                {
                    return Redirect('/auth/user/workshop/edit/pass/main')->with('passworderror' , 'New Password Feild Not Matching Old Password Feild...!');
                }
            }
            else
            {
                return Redirect('/auth/user/workshop/edit/pass/main')->with('passworderror' , 'Incorrect Old Password');
            }
        }
    }

    public function updateworkshopview()
    {
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        return view('ChangePassword' , $data);
    }
}