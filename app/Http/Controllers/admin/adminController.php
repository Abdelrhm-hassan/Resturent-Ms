<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // index page
        $data['admins']=User::paginate(10);
        
        
        return view('Admin.admins.index')->with($data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.admins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $requst)
    {

         
    
            $admin=$requst->validate([
                'name'=>'required|string|max:30|min:3',
                'img'=>'required|image|mimes:jpg,png,jpeg',
                'spec'=>'required|string|max:70',
                'email'=>'required|email',
                'password'=>'required|string',

            ]);

            $pass=bcrypt($requst->password);
            $admin['password']=$pass;

            // save img
            $img=$requst->file('img');
            $img_name=$img->getClientOriginalName();
            $img_extension=$img->getClientOriginalExtension();
            $path=public_path('uploads/admins');
            $requst->img->move($path,$img_name);
            $admin['img']=$img_name;


           User::create($admin);
            
    
            return redirect(route('Admin.admins.index')); 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['admin']=User::findOrFail($id);
        return view('Admin.admins.show')->with($data);
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
        $data['admins']=User::findORFail($id);

        return view('Admin.admins.edit')->with($data);
    }
   

    public function update(Request $requst)

    {

        $admin=$requst->validate([
            'name'=>'required|string|max:30|min:3',
            'spec'=>'required|string|max:70',
            'email'=>'required|email',
            'password'=>'required|string',

        ]);

        $pass=bcrypt($requst->password);
        $admin['password']=$pass;


          
            User::findOrFail($requst->id)->update($admin);
            
    

        

        return redirect(route('Admin.admins.index')); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admins=User::find($id);
        $path= 'uploads/admins/'.$admins->img;
           if(File::exists($path))
           {
               File::delete($path);
           }
        $admins->delete();
        return redirect(route('Admin.admins.index'));

        
    }
}