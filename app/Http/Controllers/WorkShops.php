<?php

namespace App\Http\Controllers;
use App\Models\users;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class WorkShops extends Controller
{
    public function WorkshopProfileView()
    {
        if(Session('AuthUser') != null)
        {
            $logged = "ok";
        }
        elseif(Session('AuthUser') == null)
        {
            $logged = "no";
        }
        $data2 = array('workshopaddpostview');
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        return view('workshopProfile' , $data , compact('data2' , 'logged'));
    }

    public function Workshopaddressupdate(Request $request)
    {
        $validatedData = $request->validate
        (
            [
                'password' => 'required',
                'newaddress' => 'required',
            ],

            [
                'password.required' => 'This Feild Connot Be Empty',
                'newaddress.required' => 'This Feild Connot Be Empty',
            ],
        );
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        foreach($data as $pass){
            if(Hash::check($request->input('password') , $pass->password))
            {
                $idforuser = users::where('id' , '=' , Session('AuthUser'))->first();
                    if($idforuser->address == $request->input('newaddress'))
                    {
                        return redirect('');
                    }
                    else
                    {
                        $userid = users::find($idforuser);
                        foreach($userid as $id){
                            users::where('address', $id->address)
                                ->update(['address' => $request->input('newaddress')]);
                        }
                    }
                return redirect('/auth/user/workshop')->with('ok' , 'Address Updated Succsess');
            }
            else
            {
                return redirect('/auth/user/workshop')->with('error' , 'Address Not Updated,Incorrect password');
            }
        }
    }

    public function Workshopphoneupdate(Request $request)
    {
        $validatedData = $request->validate
        (
            [
                'phoneforupdate' => 'required|max:10|min:10',
            ],

            [
                'phoneforupdate.required' => 'This Feild Connot Be Empty',
                'phoneforupdate.max' => 'Please Enter A Valid Phone Number Must Be (10 Numbers) (Remove The First " 0 " If In Number Zero)',
                'phoneforupdate.min' => 'Please Enter A Valid Phone Number Must Be (10 Numbers) (Remove The First " 0 " If In Number Zero)',
            ],
        );
        $CheckUser = users::select('phone')->get();
        foreach($CheckUser as $check){
            if($request->phoneforupdate == $check->phone)
            {
                return Redirect('/auth/user/workshop')->with('error' , 'This the same Phone Number Enter diffrent Number To Update It');
            }
            else
            {
                $idforuser = users::where('id' , '=' , Session('AuthUser'))->first();
                    $userid = users::find($idforuser);
                    foreach($userid as $id){
                        users::where('id', $id->id)
                            ->update(['phone' => $request->phoneforupdate]);
                    }
                    return Redirect('/auth/user/workshop')->with('ok' , " Phone Number Updated Success");
            }
        }
    }

    public function workshopimageupdate(Request $request)
    {
        $validatedData = $request->validate
        (
            [
                'workshoplogo' => 'required|mimes:jpg,jpeg,png',
            ],

            [
                'workshoplogo.required' => 'This Feild Connot Be Empty',
                'workshoplogo.mimes' => 'The Supported Type Of Files Is ( jpg , jpeg , png )'
            ],
        );

        $workshop_image = $request->workshoplogo;

        $name_gen = hexdec(uniqid());

        $img_ext = strtolower($workshop_image->getClientOriginalExtension());

        $img_name = $name_gen.'.'.$img_ext;

        $up_location = 'users_logos/';

        $last_image = $up_location.$img_name;

        $workshop_image->move($up_location,$img_name);

        $idforuser = users::where('id' , '=' , Session('AuthUser'))->first();
                    $userid = users::find($idforuser);
                    foreach($userid as $id){
                        users::where('id', $id->id)
                            ->update(['image' => $last_image]);
                    }
        return Redirect('/auth/user/workshop')->with('ok' , " Image Updated Success");
    }

    public function addpostview(){
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        if(Session('AuthUser') != null)
        {
            $logged = "ok";
        }
        elseif(Session('AuthUser') == null)
        {
            $logged = "no";
        }
        return view('AddPost', $data , compact('logged'));
    }

    public function addpost(Request $request){
        $validatedData = $request->validate
        (
            [
                'title' => 'required',
                'details' => 'required',
                'workshoplogo' => 'required|mimes:jpg,jpeg,png',
            ],

            [
                'title.required' => 'This Feild Connot Be Empty',
                'details.required' => 'This Feild Connot Be Empty',
                'workshoplogo.required' => 'This Feild Connot Be Empty',
                'workshoplogo.mimes' => 'This Type Is Not Supported => Supported Types( jpg , jpeg , png )',
            ],
        );


        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];

        foreach($data as $data_for_user)
        {
            $user_name = $data_for_user->name;
            $user_image = $data_for_user->image;
        }

            $workshop_image = $request->workshoplogo;

            $name_gen = hexdec(uniqid());

            $img_ext = strtolower($workshop_image->getClientOriginalExtension());

            $img_name = $name_gen.'.'.$img_ext;

            $up_location = 'users_logos/';

            $last_image = $up_location.$img_name;

            $workshop_image->move($up_location,$img_name);

            $idforuser = users::where('id' , '=' , Session('AuthUser'))->first();
            $userid = users::find($idforuser);
            foreach($userid as $id){
                Posts::insert([
                    'user_id' => $id->id,
                    'post_description' => $request->input('details'),
                    'post_image'=>$last_image,
                    'post_title'=>$request->input('title'),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }
            
        return Redirect('/auth/user/workshop/add/post/view')->with('ok' , 'Your Offer Added Successful');
    }

    public function workshoppostview()
    {
        

        
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        foreach($data as $id_for_user)
        {
            $user_id = $id_for_user->id;
        }
        $posts = Posts::all();


        
        
        if(count($posts) > 0)
        {
            if(Session('AuthUser') != null)
            {
                $logged = "ok";
            }
            elseif(Session('AuthUser') == null)
            {
                $logged = "no";
            }
            $user = users::find($user_id);
            $profile_name = ['name' => users::where('id' , '=' , Session('AuthUser'))->first()];
            $profile_image = ['image' => users::where('id' , '=' , Session('AuthUser'))->first()];

            $eh = "";
            
            return view('workshops' , $data , compact('user' , 'posts' , 'eh' , 'logged') , $profile_image , $profile_name);
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
            $user = users::find($user_id);
            $profile_name = ['name' => users::where('id' , '=' , Session('AuthUser'))->first()];
            $profile_image = ['image' => users::where('id' , '=' , Session('AuthUser'))->first()];

            $eh = "There Is No Offers Write Now...! Sorry Comeback Later";
            return view('workshops' , $data , compact('user' , 'posts' , 'eh' , 'logged') , $profile_image , $profile_name);
        }
    }

}
