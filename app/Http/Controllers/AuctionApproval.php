<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\auc;
use App\Models\users;
use Mail;
use App\Mail\PostRejected;

class AuctionApproval extends Controller
{
    public function auctionsadminview()
    {
        $data1 = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        $data = auc::where('ad_state' , '=' , 'notapproved')->get();
        return view('admin.auctionsadmin' , compact('data') ,$data1);
    }

    public function auctiondetailsview($id)
    {
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        $auctiondetails = auc::where('id' , '=' , $id)->get();
        return view('admin.auctiondetailsadmin' , compact('auctiondetails') , $data);
    }

    public function auctionsadminaccept($id)
    {
        $data = auc::where('ad_state' , '=' , 'notapproved')->get();
        $auctiondetails = auc::where('id' , '=' , $id)->get();
        foreach($auctiondetails as $details){    
            auc::where('id', $details->id)
                ->update(['ad_state' => 'approved']);
        }
        return Redirect('/auctions/approval')->with('ok' , 'AD Accepted');
    }

    public function DeleteAuction($id , $user)
    {
        $aucemail = auc::where('id' , '=' , $id)->get();
        foreach($aucemail as $post)
        {
            Mail::to($post->users->logemail)->send(new PostRejected());
            $deleted = auc::where('id',$id)->delete();
            if($deleted)
            {
                return Redirect('/auctions/approval')->with('ok','AD Deleted');
            }
            else
            {
                return Redirect('/auctions/approval')->with('error','Cannot Delete AD Know Try Again Or Conact Support');
            }
        }
    }
}
