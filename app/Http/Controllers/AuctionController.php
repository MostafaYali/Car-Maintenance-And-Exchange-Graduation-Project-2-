<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use App\Models\auc;
use App\Models\chats;
use Illuminate\Support\Carbon;

class AuctionController extends Controller
{
    
    public function auctionview()
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
        $all = auc::where('ad_state' , '=' , 'approved')->get();
        $chat = chats::get();
        
        $mytime = Carbon::now();
        $now = $mytime->toDateTimeString();

        
        
        foreach($all as $allads)
        {
            chats::where('ad_id' , '=' , $allads->id)
            ->delete();


            auc::where('ends_at' , '<' , Carbon::now()->addDays(1))
            ->orwhere('ends_at' , '=' , Carbon::now()->addDays(1))
            ->where('manufacturer' , '=' , $allads->manufacturer)
            ->where('model' , '=' , $allads->model)
            ->delete();
        }

        return view('auctions' , $data , compact('all' , 'now' , 'logged'));
    }

    public function auctionaddview()
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
        return view('AddAuction' , $data , compact('logged'));
    }

    public function auctionadd(Request $request)
    {
        $validatedData = $request->validate
        (
            [
                'manifutiuner' => 'required',
                'model' => 'required',
                'year' => 'required',
                'startprice' => 'required',
                'description' => 'required',
                'AuctionEndsAt' => 'required',
            ],

            [
                'manifutiuner.required' => 'This Feild Connot Be Empty',
                'model.required' => 'This Feild Connot Be Empty',
                'year.required' => 'This Feild Connot Be Empty',
                'startprice.required' => 'This Feild Connot Be Empty',
                'description.required' => 'This Feild Connot Be Empty',
                'AuctionEndsAt' => 'This Feild Cannot Be Empty',
            ]
        );
        $images=array();
        $files = $request->file('images');
        foreach($files as $file){
            $name_gen2 = hexdec(uniqid());
            $img_ext2 = strtolower($file->getClientOriginalExtension());
            $img_names = $name_gen2.'.'.$img_ext2;
            $up_location2 = 'images/auctionImages/';
            $last_images = $up_location2.$img_names;
            $file->move($up_location2,$img_names);
            $images[]=$last_images;
        }

        $id_for_chat = mt_rand(1 , 9999);

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
                    return Redirect()->back()->with('error' , "Invalid EndDate");
                }
                return Redirect('auction/add/main')->with('ok' , "Auction Now Wait For Approve");
            }
            else
            {
                return Redirect('auction/add/main')->with('error' , "No User With That Id");
            }
    }

    public function creditview($id)
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
        $data2 = users::select('CardNumber')->where('id' , '=' , $id)->first();
        $data3 = users::select('Ccv')->where('id' , '=' , $id)->first();
        $data4 = users::select('ExpireDate')->where('id' , '=' , $id)->first();
        $data5 = users::select('Balance')->where('id' , '=' , $id)->first();

        return view('CreditCard' , $data , compact('data2' , 'data3' , 'data4' , 'data5' , 'logged'));
    }

    public function creditadd(Request $request)
    {
        $validatedData = $request->validate
        (
            [
                'creditnumber' => 'required|min:16',
                'ccv' => 'required',
                'year' => 'required',
                'month' => 'required',
                'balance' => 'required',
            ],

            [
                'creditnumber.required' => 'This Feild Connot Be Empty',
                'creditnumber.min' => 'The Min Is 16 Number',
                'ccv.required' => 'This Feild Connot Be Empty',
                'year.required' => 'This Feild Connot Be Empty',
                'month.required' => 'This Feild Connot Be Empty',
                'balance.required' => 'This Feild Connot Be Empty',
            ]
        );

       
            $idforuser = users::where('id' , '=' , Session('AuthUser'))->first();
                        $userid = users::find($idforuser);
                        foreach($userid as $id){
                            users::where('id', $id->id)
                                ->update(['CardNumber' => $request->creditnumber , 'Ccv' => $request->ccv , 'ExpireDate' => $request->year/$request->month , 'Balance' => $request->balance]);
                        }

        return back()->with('ok' , "Data Added Successfully");
    }

    public function auctiondetailsview($id)
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
        $auctiondetails = auc::where('id' , '=' , $id)->get();
        foreach($auctiondetails as $auctiondetails1)
        {
            return view('auctiondetails' , $data , compact('auctiondetails' , 'logged'));
        }
    }

    public function bidadd(Request $request , $id)
    {
        $validatedData = $request->validate
        (
            [
                'bid' => 'required',
            ],

            [
                'bid.required' => 'This Feild Connot Be Empty',
            ]
        );


        $auctiondetails = auc::where('id' , '=' , $id)->get();
    

        foreach($auctiondetails as $auctiondetails1)
        {
            $ResultOfBidsNumber = $auctiondetails1->number_of_pids + 1;

            $ResultOfPrice = $auctiondetails1->price + $request->input('bid');

            $limit = $auctiondetails1->users->bid_limit + $request->bid;

            if($auctiondetails1->users->bid_limit + $request->bid > $auctiondetails1->users->Balance)
            {
                return redirect()->back()->with('error' , 'You Reached To Your Limit');
            }
            else
            {
                if($auctiondetails1->users->Balance <= $auctiondetails1->users->bid_limit)
                {
                    return redirect()->back()->with('error' , 'You Reached To Your Limit');
                }
                else
                {
                    if($auctiondetails1->users->CardNumber == NULL || $auctiondetails1->users->Ccv == NULL || $auctiondetails1->users->Balance == NULL)
                    { 
                        return redirect()->back()->with('error' , 'You Need To Enter Visa Card Data To Save A Balance');
                    }
                    else
                    {
                        if($request->bid <= $auctiondetails1->users->Balance)
                        {
                            if($request->bid < 1000)
                            {
                                return redirect()->back()->with('error' , 'You Can\'t Make A Bid Less Than ( 1000 LE )');
                            }
                            else
                            {
                                $query = auc::where('id', $id)
                                ->update(['price' => $ResultOfPrice , 'number_of_pids' => $ResultOfBidsNumber , 'last_user_make_apid' => $auctiondetails1->users->logusername]);

                                $query2 = users::where('id', $auctiondetails1->user_id)
                                ->update(['bid_limit' => $limit]);
                                return redirect()->back()->with('ok' , 'Bid Made Done');
                            }
                        }
                        else if($request->bid > $auctiondetails1->users->Balance)
                        {
                            return redirect()->back()->with('error' , 'Your Balance Below This Bid');
                        }
                    }
                }
            }
            
        }
    }
}
