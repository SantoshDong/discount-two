<?php

namespace App\Http\Controllers\Admin;

use App\Travel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TravelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $i=1;
        $travels=Travel::all();
        return view('admin.Travel.index',compact('i','travels'));

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Travel.create');
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
            "title"=> "required",
             "logo"=> "required|image|mimes:jpeg,png,jpg,gif",
               ]);
   
           $logo=$request->logo->store('posts');
                Travel::create([
               "title" => $request->title,
               "logo" => $logo 
               ]);  
           session()->flash('success','Travel offers  data sucesfully added');
           return redirect( route('travel.index') );
         
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
        $travel=Travel::findorfail($id);
        return view('admin.Travel.edit',compact('travel'));
        
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Travel $travel)
    {
        $this->validate(request(),[
            "title"=> "required"
             ]);
       
             $data=$request->only(['title']);
             if($request->hasfile('logo')){
                 $logo=$request->logo->store('posts');
                  Storage::delete($travel->logo);
                  $data['logo'] = $logo;
                  }
  
             $travel->update($data);
             session()->flash('success','Travel offers data  sucesfully updated');
             return redirect( route('travel.index') );
     
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Travel $travel)
    {
        $travel->delete();
        session()->flash('warn','Travel offers data  sucesfully deleted');
        return redirect(route('travel.index'));

        //
    }
}
