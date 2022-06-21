<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\time;
use Illuminate\Http\Request;

class TimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // index page
        $data['times']=time::paginate(10);
        
        
        return view('Admin.times.index')->with($data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.times.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $times=$request->validate([
            'name'=>'required|string|max:20|min:3'
        ]);
        time::create($times);
        return redirect(route('Admin.times.index')); 

        
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $data['times']=time::findORFail($id);

        return view('Admin.times.edit')->with($data);
    }

    public function update(Request $requst)

    {

       
        $data=$requst->validate([
            'name'=>'required|string|max:20|min:3',
         


        ]);
        
       $times=time::find($requst->id);
       $times->update($data);

        

        return redirect(route('Admin.times.index')); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $times=time::find($id);
        $times->delete();
        return back();

        
    }
}
