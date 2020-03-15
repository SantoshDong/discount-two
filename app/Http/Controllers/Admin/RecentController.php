<?php

namespace App\Http\Controllers\Admin;

use App\Recent;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RecentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $i=1;
        $recents=Recent::all();
        return view('admin.recents.index',compact('recents','i'));

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.recents.create');
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
            "title"=> "required|min:6",
            "address"=> "required",
            "contactnbr"=> "required|max:10",
            "logo"=> "required|image|mimes:jpeg,png,jpg,gif",    
          ]);

        $logo=$request->logo->store('posts');

        Recent::create([
         "title" => $request->title,
         "address" => $request->address,
         "contact_nbr" => $request->contactnbr, 
         "logo" => $logo, 
        ]); 

   session()->flash('success','Recent data  sucesfully added');
   return redirect(route('recent.index'));

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
    public function edit($recent)
    {
        $recent=Recent::findorfail($recent);
        return view('admin.recents.edit',compact('recent'));
       
        //
        //
    }
    public function view($recent)
    {
        $recent=Recent::findorfail($recent);
        return view('admin.recents.view',compact('recent'));
       
        //
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Recent $recent)
    {
        $data=$request->only(['title','address','contactnbr']);
    
        if($request->hasfile('logo')){
            $logo=$request->logo->store('posts');
            Storage::delete($recent->logo);
            $data['logo'] = $logo;
        }
        
        $recent->update($data);
        session()->flash('success','Recent data  sucesfully updated');
        return redirect( route('recent.index') );
   

        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recent $recent)
    {
        Storage::delete($recent->logo);
        $recent->delete();
        session()->flash('warn','Recent data sucesfully deleted');
        return redirect(route('recent.index'));

        //
    }
}
