<?php

namespace App\Http\Controllers;

use App\Models\Cheef;
use App\Models\Orders;
use App\Models\Team;
use App\Models\Meal;
use App\Models\time;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){

        $date['time']=time::get();
        $date['cheef']=Cheef::paginate(4);
        $date['meal']=Meal::paginate(10);

        return view('Front.index')->with($date);
    }
    public function contact(){

        $date['time']=time::get();

        return view('Front.conect')->with($date);
    }
    public function teams(){

        $date['team']=Team::get();

        return view('Front.teams')->with($date);
    }
    public function menus(){

        $date['meal']=Meal::paginate(12);

        return view('Front.menu')->with($date);
    }
    public function cheefs(){

        $date['cheef']=Cheef::paginate(3);

        return view('Front.cheefs')->with($date);
    }
    public function about(){


        return view('Front.about');
    }

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
             
     
             return redirect(route('Front.index')); 
 
     }


}
