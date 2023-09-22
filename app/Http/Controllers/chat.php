<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\users;
use Illuminate\Support\Carbon;
use App\Models\auc;
use App\Models\chats;

use Illuminate\Http\Request;

class chat extends Controller
{
    public function chatview($id)
    {
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        $user = auc::where('id' , '=' , $id)->get();
        if(Session('AuthUser') != null)
            {
                $logged = "ok";
            }
            elseif(Session('AuthUser') == null)
            {
                $logged = "no";
            }

        foreach($user as $users)
        {
            $chats = chats::where('ad_id' , '=' , $id)->get();
            $users_id = $users->users->name;

            $users_id_id = $users->id;

            return view('message' , $data , compact('users_id' , 'chats' , 'users_id_id' , 'logged'));
        }
    }

    public function addmessage(Request $request , $id)
    {
        $validatedData = $request->validate
        (
            [
                'message' => 'required',
            ],

            [
                'message.required' => 'This Feild Connot Be Empty',
            ]
        );
        
        $sender = users::select('id')->where('id' , '=' , Session('AuthUser'))->first();

        $user = auc::where('id' , '=' , $id)->get();
        foreach($user as $users)
        {
            chats::insert([
                    'sender_id' => $sender->id,
                    'reciver_id' => $users->users->id,
                    'ad_id' => $id,
                    'body' => $request->message,
                    'created_at' => Carbon::now()->addHours(3),
                    'updated_at' => Carbon::now()->addHours(3),
                ]);
        }
            
        return Redirect()->back();
    }
}
