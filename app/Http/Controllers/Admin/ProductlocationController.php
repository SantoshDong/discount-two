<?php

namespace App\Http\Controllers\Admin;

use App\Productlocation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductlocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $i=1;
        $productlocations=Productlocation::all();
        return view('admin.productlocation.index',compact('i','productlocations'));

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('admin.productlocation.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),[
            "product_location"=> "required"
             ]);

                  Productlocation::create([
                  "product_location" => $request->product_location
               ]);  

           session()->flash('success','Product location  data sucesfully added');
           return redirect( route('productlocation.index') );
         
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
        $productlocation=Productlocation::findorfail($id);
        return view('admin.productlocation.edit',compact('productlocation'));
        
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate(request(),[
            "product_location"=> "required"
          ]);

        $productlocation=Productlocation::find($id);
        $productlocation->product_location=$request->product_location;
        $productlocation->save();
  
        session()->flash('success','Product location data sucesfully updated');
        return redirect( route('productlocation.index') );
        
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Productlocation $productlocation)
    {
        $productlocation->delete();
        session()->flash('warn','Product location data  sucesfully deleted');
        return redirect(route('productlocation.index'));

        //
    }
}
