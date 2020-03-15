<?php

namespace App\Http\Controllers\Admin;

use App\Location;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $i=1;
        $locations=Location::all();
        return view('admin.location.index',compact('i','locations'));

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.location.create');
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
     
            "placename"=> "required|min:6"
            
       ]);
        Location::create([
            "place_name" => $request->placename
        
            ]);  
        session()->flash('success','Location data sucesfully added');
        return redirect( route('location.index') );
      
     
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
        $location=Location::findorfail($id);
        return view('admin.location.edit',compact('location'));
        
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Location $location)
    {
            $this->validate(request(),[
            "placename"=> "required|min:6"       
       ]);

        $location->place_name=$request->placename;
        $location->save();
        session()->flash('success','Location data sucesfully updated');
        return redirect( route('location.index') );
        
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {
        $location->delete();
        session()->flash('warn','Location data  sucesfully deleted');
        return redirect(route('location.index'));

        //
    }
}
