<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Cat;
use App\Models\Meal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MealController extends Controller

   {

   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // index page
        $data['Meals']=Meal::paginate(10);
        
        
        return view('Admin.Meals.index')->with($data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data['cats']=Cat::get();


        return view('Admin.Meals.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $requst)
    {

         
    
            $Meal=$requst->validate([
                'name'=>'required|string|max:40|min:3',
                
                'img'=>'required|image|mimes:jpg,png,jpeg',
                'cat_id'=>'required',
                'price'=>'required|string|max:5',
                'desc'=>'required',
            ]);


            // save img
            $img=$requst->file('img');
            $img_name=$img->getClientOriginalName();
            $img_extension=$img->getClientOriginalExtension();
            $path=public_path('uploads/Meal');
            $requst->img->move($path,$img_name);
            $Meal['img']=$img_name;


           Meal::create($Meal);
            
    
            return redirect(route('Admin.Meals.index')); 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['Meal']=Meal::findOrFail($id);
        return view('Admin.Meals.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data['cats']=Cat::get();

        $data['Meal']=Meal::findORFail($id);

        return view('Admin.Meals.edit')->with($data);
    }

    public function update(Request $requst)

    {

       
        $Meal=$requst->validate([
            'name'=>'required|string|max:40|min:3',
            
            'cat_id'=>'required',
            'price'=>'required|max:5',
            'desc'=>'required',
        ]);


          
            Meal::findOrFail($requst->id)->update($Meal);
            
    

        

        return redirect(route('Admin.Meals.index')); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Meal=Meal::find($id);
        $path= 'uploads/Meal/'.$Meal->img;
           if(File::exists($path))
           {
               File::delete($path);
           }
        $Meal->delete();
        return redirect(route('Admin.Meals.index'));

        
    }
}