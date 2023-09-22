<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use App\Models\views;
use App\Models\otp;
use App\Models\auc;
use App\Models\oildata;
use App\Models\posts;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Mail;
use App\Mail\forgetpassword;

class Ahmed_E_API extends Controller
{

    //*** Get ***//

    public function HomeLoggedView()
    {        
        $data = users::where('id' , '=' , Session('AuthUser'))->first();
        return Response()->json($data);
    }

    public function adduser(Request $request)
    {
        // if($request->logtype === "user"){
            $add = users::insert([
                'image' => "users_logos/1760269297176366.png",
                'logusername' => $request->logusername,
                'name' => $request->logname,
                'logemail' => $request->logemail,
                'password' => Hash::make($request->logpass),
                'phone' => $request->logphone,
                'address' => $request->logaddr,
                'UserType' => $request->logtype,
                'activity' => "active",
                'route' => "logged.main",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

                return Response()->Json($add);
        // }
        // elseif($request->logtype === "workshop")
        // {
        //     $add = users::insert([
        //         'image' => "users_logos/1760267785262649.png",
        //         'logusername' => $request->logusername,
        //         'name' => $request->logname,
        //         'logemail' => $request->logemail,
        //         'password' => Hash::make($request->logpass),
        //         'phone' => $request->logphone,
        //         'address' => $request->logaddr,
        //         'UserType' => "workshop",
        //         'activity' => "active",
        //         'route' => "workshop.main",
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //     ]);

        //         return Response()->Json($add);
        // }
    }

    public function checkuser(Request $request)
    {
        $UserCheck = users::where('logusername' , '=' , $request->logemail_username)
        ->orwhere('logemail' , '=' , $request->logemail_username)
        ->first();

        if(!$UserCheck)
        {
            return Response('This UserName Does Not Have An Account');
        }else{
            
            if(Hash::check($request->logpass1 , $UserCheck->password))
            {
                $activity = users::select('activity')->where('logusername', $request->logemail_username)
                ->orwhere('logemail', $request->logemail_username)
                ->get();
                
                
                foreach ($activity as $ActivityCheck) {
                    if($ActivityCheck->activity == "notactive")
                    {
                        return Response('This User Is Not Active Please Contact Support');
                    }
                    else
                    {
                        $CheckUser = users::select('UserType')->where('logusername', $request->logemail_username)
                        ->orwhere('logemail', $request->logemail_username)
                        ->get();
                        foreach($CheckUser as $check){
                            if($ActivityCheck->activity == "active" && $check->UserType == "user")
                            {
                                $data = $request->Session()->put('AuthUser', $UserCheck->id);
                            }
                            elseif($ActivityCheck->activity == "active" && $check->UserType == "workshop")
                            {
                                $data = $request->Session()->put('AuthUser', $UserCheck->id);
                            }
                            elseif($ActivityCheck->activity == "active" && $check->UserType == "admin")
                            {
                                $data = $request->Session()->put('AuthUser', $UserCheck->id);
                            }

                            return Response('loged' , 200);
                        }
                    }
                }
            }
            else
            {
                return Response('Incorrect Password');
            }
        }
    }

    public function updateuser(Request $request)
    {
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        foreach($data as $pass){
            if(Hash::check($request->OldPassword , $pass->password)){
                if(Hash::check($request->ConfirmPassword , $pass->password))
                {
                    return Response("This The Same Saved Password Enter New One To Update It");
                }
                else
                {
                    if($request->NewPassword == $request->ConfirmPassword)
                    {
                        $idforuser = users::where('id' , '=' , Session('AuthUser'))->first();
                        $userid = users::find($idforuser);
                        foreach($userid as $id){
                            $update = users::where('id', $id->id)
                                ->update(['password' => Hash::make($request->ConfirmPassword)]);
                        }

                        return Response("Password Updated" , 200);
                    }
                    else
                    {
                        return Response("New Password Feild Not Matching Old Password Feild...!");
                    }
                }
            }
            else
            {
                return Response("Incorrect Old Password");
            }
        }
    }

    public function updateworkshop(Request $request)
    {
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        foreach($data as $pass){
            if(Hash::check($request->OldPassword , $pass->password))
            {
                if($request->NewPassword == $request->ConfirmPassword)
                {
                    $idforuser = users::where('id' , '=' , Session('AuthUser'))->first();
                    $userid = users::find($idforuser);
                    foreach($userid as $id){
                        users::where('id', $id->id)
                            ->update(['password' => Hash::make($request->ConfirmPassword)]);
                    }
                    return Response('Password Updated' , 200);
                }
                else
                {
                    return Response("New Password Feild Not Matching Confirm Password Feild...!");
                }
            }
            else
            {
                return Response("Incorrect Old Password");
            }
        }
    }

    public function emailupdate(Request $request)
    {
        $CheckUser = users::select('logemail')->get();
        foreach($CheckUser as $check){
            if($request->emailforupdate === $check->logemail)
            {
                return Response("This the same email Enter diffrent Email To Update It");
            }
            else
            {
                $idforuser = users::where('id' , '=' , Session('AuthUser'))->first();
                    $userid = users::find($idforuser);
                    foreach($userid as $id){
                        users::where('id', $id->id)
                            ->update(['logemail' => $request->emailforupdate]);
                    }
                    return Response("Email Updated Success" , 200);
            }
        }
    }

    public function userimageupdate(Request $request)
    {
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

        return Response("Image Updated Success" , 200);
    }

    public function Workshopaddressupdate(Request $request)
    {
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        foreach($data as $pass){
            if(Hash::check($request->input('password') , $pass->password))
            {
                $idforuser = users::where('id' , '=' , Session('AuthUser'))->first();
                    if($idforuser->address == $request->input('newaddress'))
                    {
                        return Response("Address Not Updated,This Is The Same Saved Address");
                    }
                    else
                    {
                        $userid = users::find($idforuser);
                        foreach($userid as $id){
                            users::where('address', $id->address)
                                ->update(['address' => $request->input('newaddress')]);
                        }
                    }
                return Response("Address Updated Succsess" , 200);
            }
            else
            {
                return Response("Address Not Updated,Incorrect password");
            }
        }
    }

    public function Workshopphoneupdate(Request $request)
    {
        $CheckUser = users::select('phone')->get();
        foreach($CheckUser as $check){
            if($request->phoneforupdate == $check->phone)
            {
                return Response("This the same Phone Number Enter diffrent Number To Update It");
            }
            else
            {
                $idforuser = users::where('id' , '=' , Session('AuthUser'))->first();
                    $userid = users::find($idforuser);
                    foreach($userid as $id){
                        users::where('id', $id->id)
                            ->update(['phone' => $request->phoneforupdate]);
                    }
                    return Response("Phone Number Updated Success" , 200);
            }
        }
    }

    public function workshopimageupdate(Request $request)
    {
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
        return Response("Image Updated Success" , 200);
    }

    public function addpost(Request $request)
    {
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
                    'created_at' => Carbon::now()->addHours(3),
                    'updated_at' => Carbon::now()->addHours(3),
                ]);
            }
        return Response("Your Offer Added Successful" , 200);
    }

    public function workshoppostview()
    {
        $posts = Posts::all();

        
        if(count($posts) > 0)
        {

            return Response()->json($posts);
        }
        else
        {
            return Response("There Is No Offers Write Now...! Sorry Comeback Later");
        }
    }

    public function forgetpassword(Request $request)
    {
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

                    return Response("Email Sent To ". $email->logemail ." That Associated With UserName ". $hasedusername , 200);
                }
                else if($data->logemail != $request->forget_email)
                {
                    return Response("This Email Does Not Associated With Any UserName");
                }
            }
        }
        else
        {
            return Response("This Email Does Not Have An Account");
        }
    }

    public function forgetpasswordreset(Request $request)
    {
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

                            return Response("Password Updated" , 200);
                        }
                        else
                        {
                            return Response("Password Not Updated,The New And Confrim Password Does Not Matched");
                        }
                    }
                    else
                    {
                        return Response("This Otp Is Expired Please Try Again");
                    }
                }
                else
                {
                    return Response("This otp does not exist");
                }
            }
        }
        else
        {
            return Response("Please Request A New Otp This One Expired Or Incorrect");
        }
    }

     public function auctionview()
    {
        $all = auc::where('ad_state' , '=' , 'approved')->get();
        return Response()->Json($all);
    }

    public function auctionadd(Request $request)
    {
        $images=array();
        $files = $request->file('images');
        foreach($files as $file)
        {
            $name_gen2 = hexdec(uniqid());
            $img_ext2 = strtolower($file->getClientOriginalExtension());
            $img_names = $name_gen2.'.'.$img_ext2;
            $up_location2 = 'images/auctionImages/';
            $last_images = $up_location2.$img_names;
            $file->move($up_location2,$img_names);
            $images[]=$last_images;
        }

        $idforuser = users::where('id' , '=' , Session('AuthUser'))->first();
             $userid = users::find($idforuser);
            if($userid)
            {
                if($request->AuctionEndsAt >= Carbon::now()->addHours(3))
                {                
                    foreach($userid as $id){
                        auc::insert([
                            'user_id' => $id->id,
                            'auction_image' => implode('|',$images),
                            'model' => $request->model,
                            'manufacturer' => $request->manifutiuner,
                            'year' => $request->year,
                            'description' => $request->description,
                            'created_at' => Carbon::now()->addHours(3),
                            'ends_at' => $request->AuctionEndsAt,
                            'start_at' => Carbon::now()->addHours(3),
                            'price' => $request->startprice,
                            'price_start' => $request->startprice,
                        ]);
                    }
                }
                else
                {
                    return Response("Invalid EndDate");
                }
                return Response("Auction Now Wait For Approve" , 200);
            }
            else
            {
                return Response("No User With That Id");
            }
    }

    public function creditview($id)
    {
        $data = users::select('CardNumber' , 'Ccv' , 'ExpireDate' , 'Balance')->where('id' , '=' , $id)->first();

        return Response()->Json($data);
    }

    public function creditadd(Request $request)
    {
            $idforuser = users::where('id' , '=' , Session('AuthUser'))->first();
                        $userid = users::find($idforuser);
                        foreach($userid as $id){
                            users::where('id', $id->id)
                                ->update(['CardNumber' => $request->creditnumber , 'Ccv' => $request->ccv , 'ExpireDate' => $request->year/$request->month , 'Balance' => $request->balance]);
                        }
        return Response("Data Added Successfully" , 200);
    }

    public function auctiondetailsview($id)
    {
        $auctiondetails = auc::where('id' , '=' , $id)->get();
        foreach($auctiondetails as $auctiondetails1)
        {
            return Response()->Json($auctiondetails);
        }
    }

    public function bidadd(Request $request , $id)
    {
        $auctiondetails = auc::where('id' , '=' , $id)->get();
    

        foreach($auctiondetails as $auctiondetails1)
        {
            $ResultOfBidsNumber = $auctiondetails1->number_of_pids + 1;

            $ResultOfPrice = $auctiondetails1->price + $request->input('bid');

            $limit = $auctiondetails1->users->bid_limit + $request->bid;


            if($auctiondetails1->users->bid_limit + $request->bid > $auctiondetails1->users->Balance)
            {
                return Response("You Reached To Your Limit" , 500);
            }
            else
            {
                if($auctiondetails1->users->Balance <= $auctiondetails1->users->bid_limit)
                {
                    return Response("You Reached To Your Limit" , 500);
                }
                else
                {
                    if($auctiondetails1->users->CardNumber == NULL || $auctiondetails1->users->Ccv == NULL || $auctiondetails1->users->Balance == NULL)
                    { 
                        return Response("You Need To Enter Visa Card Data To Save A Balance");
                    }
                    else
                    {
                        if($request->bid <= $auctiondetails1->users->Balance)
                        {
                            if($request->bid < 1000)
                            {
                                return Response("You Can\'t Make A Bid Less Than ( 1000 LE )");
                            }
                            else
                            {
                                $query = auc::where('id', $id)
                                ->update(['price' => $ResultOfPrice , 'number_of_pids' => $ResultOfBidsNumber , 'last_user_make_apid' => $auctiondetails1->users->logusername]);

                                $query2 = users::where('id', $auctiondetails1->user_id)
                                ->update(['bid_limit' => $limit]);
                                return Response("Bid Made Done" , 200);
                            }
                        }
                        else if($request->bid > $auctiondetails1->users->Balance)
                        {
                            return Response("Your Balance Below This Bid");
                        }
                    }
                }
            }
        }
    }

     public function averageview(Request $request)
    {
        $data = ['Logged' => users::where('id' , '=' , session('AuthUser'))->first()];
        foreach($data as $usercardata)
        {
            if($usercardata->CarMan != NULL && $usercardata->CarModel != NULL){
                $car_data = users::select('CarMan' , 'CarModel')->where('id' , '=' , $usercardata->id)->get();
                return Response()->json($car_data);
            }
            else if($usercardata->CarMan == NULL && $usercardata->CarModel == NULL){
                return Response("Enter Your Car Data");
            }
        }
    }

    public function cardataupdate(Request $request)
    {
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        $man = $request->usercar_man;
        $model = $request->usercar_model;
        foreach($data as $usercardata)
        {
            if($usercardata->CarMan === $man && $usercardata->CarModel === $model)
            {
                return response("you already entered a car data");
            }
            else if($usercardata->CarMan != $man && $usercardata->CarModel != $model)
            {
                $data2 = users::where('id' , '=' , Session('AuthUser'))->first();
                $userid = users::find($data2);
                            foreach($userid as $id){
                                users::where('id', $id->id)
                                    ->update(['CarMan' => $man , 'CarModel' => $model]);
                            }
                            
                return response("Saved" , 200);
            }
        }
    }

    public function averageOil(Request $request)
    {
        $start_Date = Carbon::now()->addHours(3);
        $KmInDay = (float)$request->averagekmday;
        $kmoftheoil = (float)$request->kmoftheoil;
        $kminchange = (float)$request->kmthatoilchangedat;

       
        $indays = $kmoftheoil - 1000;
        $newdays = $indays/$KmInDay;
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
        return response('saved' , 200);
    }
}
