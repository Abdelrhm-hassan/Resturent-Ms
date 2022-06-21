<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // index page
        $data['Teams']=Team::paginate(10);
        
        
        return view('Admin.Teams.index')->with($data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.Teams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $requst)
    {

         
    
            $Team=$requst->validate([
                'name'=>'required|string|max:40|min:3',
                
                'img'=>'required|image|mimes:jpg,png,jpeg',
                'spec'=>'required|string|max:70',
                'phone'=>'required|string|max:11',
                'email'=>'required|email',
                'code'=>'required|string|max:20',
            ]);


            // save img
            $img=$requst->file('img');
            $img_name=$img->getClientOriginalName();
            $img_extension=$img->getClientOriginalExtension();
            $path=public_path('uploads/Teams');
            $requst->img->move($path,$img_name);
            $Team['img']=$img_name;


           Team::create($Team);
            
    
            return redirect(route('Admin.Teams.index')); 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['Team']=Team::findOrFail($id);
        return view('Admin.Teams.show')->with($data);
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
        $data['Teams']=Team::findORFail($id);

        return view('Admin.Teams.edit')->with($data);
    }

    public function update(Request $requst)

    {

       
    
            $Team=$requst->validate([
                'name'=>'required|string|max:20|min:3',
            
                'spec'=>'required|string|max:30',
                'phone'=>'required|string|max:11',
                'email'=>'required|email',
                'address'=>'required|string|max:190',
            ]);


          
            Team::findOrFail($requst->id)->update($Team);
            
    

        

        return redirect(route('Admin.Teams.index')); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Teams=Team::find($id);
        $path= 'uploads/Teams/'.$Teams->img;
           if(File::exists($path))
           {
               File::delete($path);
           }
        $Teams->delete();
        return redirect(route('Admin.Teams.index'));

        
    }
}