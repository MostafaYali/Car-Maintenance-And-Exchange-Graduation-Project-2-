<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\carInfoNew;
use Carbon\Carbon;
use App\Models\users;

class NewCarController extends Controller
{
    public function new () {
        $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
        $newcars =carInfoNew::all();
        return view ('admin.AddNewCar',compact('newcars') , $data);
        
    }
    
    
    public function store(Request $request) 
    {
        $validated = $request->validate([
            
            'car_image' => 'required|mimes:jpg.jpeg,png   car_image|max:255',
           // 'man_image' => 'required|mimes:jpg.jpeg,png   man_photo|max:255',
            'n_c_man' => 'required',
            'n_c_model' => 'required',
            'n_c_year' => 'required',
            'n_c_class' => 'required',
            'modelA' => 'required',
            'n_c_w_y' => 'required',
            'n_c_w_km' => 'required',
            'n_c_cc' => 'required',
            'n_c_hp' => 'required',
            'n_c_transmission_type' => 'required',
            'price' => 'required',
        ],
        [
                'car_image.min'=>'photo longer than 3 characters',
             //   'man_image.min'=>'photo longer than 3 characters',
                'n_c_man.required'=>'please enter',
                'n_c_model.required'=>'please enter',
                'n_c_year.required'=>'please enter',
                'category.required'=>'please enter',
                'n_c_class.required'=>'please enter',
                'modelA.required'=>'please enter',
                'n_c_w_y.required'=>'please enter',
                'n_c_w_km.required'=>'please enter',
                'n_c_cc.required'=>'please enter',
                'n_c_hp.required'=>'please enter',
                'n_c_transmission_type.required'=>'please enter',
                'price.required'=>'please enter',
        ]);


        $brand_image=$request->file('car_image');
      //  $brand_image1=$request->file('man_image');

        $name_gen = hexdec(uniqid());
        $img_ext=strtolower($brand_image->getClientOriginalExtension());
        $img_name=$name_gen.'.'.$img_ext;
        $up_location='images/carnew/';
        $last_img= $up_location.$img_name;
        $brand_image->move($up_location,$img_name);

        // $name_gen1 = hexdec(uniqid());
        // $img_ext1=strtolower($brand_image1->getClientOriginalExtension());
        // $img_name1=$name_gen1.'.'.$img_ext1;
        // $up_location1='images/carnew/man';
        // $last_img1= $up_location1.$img_name1;
        // $brand_image1->move($up_location1,$img_name1);

        
            carInfoNew::insert([
            'car_image'=>$request->car_image,
            //'man_photo'=>$request->brand_image1,
            'car_man'=>$request->n_c_man,
            'car_model'=>$request->n_c_model,
            'car_year'=>$request->n_c_year,
            'car_cat'=>$request->category,
            'car_model_arabic'=>$request->modelA,
            'car_class' => $request->n_c_class,
            'warranty'=>$request->n_c_w_y,
            'warrantykm'=>$request->n_c_w_km,
            'cc'=>$request->n_c_cc,
            'hp'=>$request->n_c_hp,
            'transmissiontype'=>$request->n_c_transmission_type,
            'price'=>$request->price,
            'created_at'=>Carbon::now()
    
            ]);
            return Redirect()->back()->with('success','add successfull');
        }

        public function Enew($id){
            $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
            $newcars=carInfoNew::find($id);
            return view('admin.Cpage.editnew',compact('newcars') , $data);
        }

        public function Unew(Request $request,$id){
            $update=carInfoNew::find($id)->update([
            'car_image' => $request ->car_image,
            'car_man'=>$request->n_c_man,
            'car_model'=>$request->n_c_model,
            'car_year'=>$request->n_c_year,
            'car_cat'=>$request->category,
            'car_model_arabic'=>$request->modelA,
            'car_class' => $request->n_c_class,
            'warranty'=>$request->n_c_w_y,
            'warrantykm'=>$request->n_c_w_km,
            'cc'=>$request->n_c_cc,
            'hp'=>$request->n_c_hp,
            'transmissiontype'=>$request->n_c_transmission_type,
            'price'=>$request->price,

            ]);

            return Redirect()->route('admin.AddNewCar')->with('success','add successfull');
        }
}
