<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\sparepartsAds;
use App\Models\rentAds;
use App\Models\tboaAds;
use App\Models\sellcarAds;
use App\Models\maintenance;
use App\Models\carInfo;
use App\Models\tire;
use App\Models\battery;
use App\Models\belt;
use App\Models\assistan;
use Illuminate\Support\Carbon;
use App\Models\carInfoNew;
use App\Models\oilmotor;
use App\Models\views;
use App\Models\users;
use Illuminate\Support\Facades\DB;

class AdminAccountController extends Controller
{
        //admins account controller

    public function acc() {
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        $users =DB::table('users')->where('UserType' , '=' , 'admin')->get();
        return view('admin.adminaccounts',compact('users') , $data);

        
    }
    public function aEdit($id){
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        $users =DB::table('users')->where('id', $id)->first();
        
        return view ('admin.Cpage.editaa',compact('users') , $data);
    }

    public function aUpdate(Request $request , $id){
        $data=array();
        $data['activity'] = $request->activity;
        
        DB::table('users')->where('id', $id)->update($data);
        return Redirect()->route('admin.adminaccounts')->with('success','Update successfull');


   }
    public function aDelete($id){
        
        $deleted = DB::table('users')->where('id', $id)->delete();
        return Redirect()->route('admin.adminaccounts')->with('success','Delete successfull');

    }
    public function AdminProfile($id) {
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        $users =DB::table('users')->where('id', $id)->first();
        
        return view ('admin.adminaccounts',compact('users') , $data);
    }




    
}
