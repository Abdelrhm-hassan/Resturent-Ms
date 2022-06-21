<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Cat;
use App\Models\Orders;
use App\Models\time;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class orderController extends Controller
{

    /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function index()
     {
         // index page
         $data['booking']=Orders::
         paginate(10);
         
         
         return view('Admin.Reservations.index')->with($data);
 
     }
 
     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
         //
         $data['time']=time::get();
 
 
         return view('Admin.Reservations.create')->with($data);
     }
 
     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(Request $requst)
     {
 
          
     
             $booking=$requst->validate([
                 'name'=>'required|string|max:40|min:3',
                 'email'=>'required',
                 'phone'=>'required',
                 'date'=>'required',
                 'time_id'=>'required',
                 'gest_number'=>'required|string|max:5',
                 'message'=>'required',
             ]);
             
 
 
 
            Orders::create($booking);
             
     
             return redirect(route('Admin.Reservations.index')); 
 
     }
 
     /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function show($id)
     {
         $data['booking']=Orders::findOrFail($id);
         return view('Admin.Reservations.show')->with($data);
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
         $data['cats']=Orders::get();
 
         $data['booking']=Orders::findORFail($id);
 
         return view('Admin.Reservations.edit')->with($data);
     }
 
     public function update(Request $requst)
 
     {
 
        
         $booking=$requst->validate([
             'name'=>'required|string|max:40|min:3',
             
             'cat_id'=>'required',
             'price'=>'required|max:5',
             'desc'=>'required',
         ]);
 
 
           
             Orders::findOrFail($requst->id)->update($booking);
             
     
 
         
 
         return redirect(route('Admin.Reservations.index')); 
     }
 
     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
         $booking=Orders::find($id);
         $path= 'uploads/booking/'.$booking->img;
            if(File::exists($path))
            {
                File::delete($path);
            }
         $booking->delete();
         return redirect(route('Admin.Reservations.index'));
 
         
     }
 }
