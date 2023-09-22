<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    public function ads() {
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        $users =users::all();
        return view('admin.ads',compact('users') , $data);
    }
}
