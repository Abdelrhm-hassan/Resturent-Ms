<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Cat;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $data['cats']=Cat::paginate(10);
        
        
        return view('Admin.cats.index')->with($data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.cats.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $cats=$request->validate([
            'name'=>'required|string|max:20|min:3'
        ]);
        Cat::create($cats);
        return redirect(route('Admin.cats.index')); 

        
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
        $data['cats']=Cat::findORFail($id);

        return view('Admin.cats.edit')->with($data);
    }

    public function update(Request $requst)

    {

       
        $data=$requst->validate([
            'name'=>'required|string|max:20|min:3',
         


        ]);
        
       $cats=Cat::find($requst->id);
       $cats->update($data);

        

        return redirect(route('Admin.cats.index')); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cats=Cat::find($id);
        $cats->delete();
        return back();

        
    }
    public function destroy2( Request $request)
    {
        

            $offer = Cat::find($request -> id);   // Offer::where('id','$offer_id') -> first();
    
            if (!$offer)
                return redirect()->back()->with(['error' => __('messages.offer not exist')]);
    
            $offer->delete();
    
            return response()->json([
                'status' => true,
                'msg' => 'تم الحذف بنجاح',
                'id' =>  $request -> id
            ]);
    
        
        
    }
}
