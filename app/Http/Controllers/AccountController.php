<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\users;

class AccountController extends Controller
{
    public function acc() {
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        $users =DB::table('users')->get();
        return view('admin.accounts',compact('users') , $data);
    }
}
