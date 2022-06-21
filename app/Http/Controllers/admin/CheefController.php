<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Cheef;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CheefController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // index page
        $data['Cheefs']=Cheef::paginate(10);
        
        
        return view('Admin.Cheefs.index')->with($data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.Cheefs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $requst)
    {

         
    
            $Cheef=$requst->validate([
                'name'=>'required|string|max:20|min:3',
                
                'img'=>'required|image|mimes:jpg,png,jpeg',
                'spec'=>'required|string|max:30',
                'phone'=>'required|string|max:11',
                'email'=>'required|email',
                'address'=>'required|string|max:190',
            ]);


            // save img
            $img=$requst->file('img');
            $img_name=$img->getClientOriginalName();
            $img_extension=$img->getClientOriginalExtension();
            $path=public_path('uploads/Cheefs');
            $requst->img->move($path,$img_name);
            $Cheef['img']=$img_name;


           Cheef::create($Cheef);
            
    
            return redirect(route('Admin.Cheefs.index')); 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['Cheef']=Cheef::findOrFail($id);
        return view('Admin.Cheefs.show')->with($data);
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
        $data['Cheefs']=Cheef::findORFail($id);

        return view('Admin.Cheefs.edit')->with($data);
    }

    public function update(Request $requst)

    {

       
    
            $Cheef=$requst->validate([
                'name'=>'required|string|max:20|min:3',
            
                'spec'=>'required|string|max:30',
                'phone'=>'required|string|max:11',
                'email'=>'required|email',
                'address'=>'required|string|max:190',
            ]);


          
            Cheef::findOrFail($requst->id)->update($Cheef);
            
    

        

        return redirect(route('Admin.Cheefs.index')); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Cheefs=Cheef::find($id);
        $path= 'uploads/Cheefs/'.$Cheefs->img;
           if(File::exists($path))
           {
               File::delete($path);
           }
        $Cheefs->delete();
        return redirect(route('Admin.Cheefs.index')); 

        
    }
}
