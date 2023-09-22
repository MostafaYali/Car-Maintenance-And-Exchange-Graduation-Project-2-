<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Models\brandPhoto;
use App\Models\users;

class BrandController extends Controller
{
    public function addbrand() {
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        $brands =DB::table('brand_photos')->latest()->get();
        return view('admin.AddBrandPhoto',compact('brands') , $data);
    }

    public function store(Request $request) 
    {
        $validated = $request->validate([
            'brand_name' => 'required',
            'm_c_image' => 'required',
        ]);
        
        $brand_image=$request->file('m_c_image');
        

        $name_gen = hexdec(uniqid());
        $img_ext=strtolower($brand_image->getClientOriginalExtension());
        $img_name=$name_gen.'.'.$img_ext;
        $up__location='images/carnew/';
        $last_img= $up__location.$img_name;
        $brand_image->move($up__location,$img_name);



        $data = array();
        $data['name'] = $request->brand_name;
        $data['photo']=$last_img;
        DB::table('brand_photos')->insert($data);
     
        return Redirect()->back()->with('success','add successfull');
    }


    public function Ebrand($id){
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
                $brands =DB::table('brand_photos')->where('id',$id)->first();
                
                return view ('admin.Cpage.editbrand',compact('brands') , $data);
            }
        
            public function Ubrand(Request $request , $id){
                $data=array();
                $data['name'] = $request->brand_name;
                
                DB::table('brand_photos')->where('id',$id)->update($data);
                return Redirect()->route('admin.AddBrandPhoto')->with('success','Update successfull');
        
 
           }

    public function Dbrand($id){
        
        $deleted = DB::table('brand_photos')->where('id',$id)->delete();
        return Redirect()->route('admin.AddBrandPhoto')->with('success','Delete successfull');

    }
}














           




        

