<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\users;

class ReportController extends Controller
{
    public function rep() {
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        $users =DB::table('users')->get();
        return view('admin.reports',compact('user') , $data);
    }
}
