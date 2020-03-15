<?php

namespace App\Http\Controllers\Admin;

use App\Brand;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $i=1;
        $brands=Brand::all();
        return view('admin.brands.index',compact('i','brands'));

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brands.create');
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
                "brandlogo"=> "required|image|mimes:jpeg,png,jpg,gif",
             ]); 

        $brandlogo=$request->brandlogo->store('posts'); 
            Brand::create([
              "brand_logo" => $brandlogo,      
           ]); 

        session()->flash('success','Brand data  sucesfully added');
        return redirect(route('brand.index'));
 
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
        $brand=Brand::findorfail($id);
        return view('admin.brands.edit',compact('brand'));
        
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Brand $brand)
    {
        

        $data=$request->only(['status']);

        if($request->hasfile('brandlogo')){
           $brandlogo=$request->brandlogo->store('posts');
               Storage::delete($brand->logo);
               $data['brand_logo'] = $brandlogo;
        }

        $brand->update($data);
        session()->flash('success','Brand data  sucesfully updated');
        return redirect( route('brand.index') );
   


        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        Storage::delete($brand->logo);
        $brand->delete();
        session()->flash('warn','Brand  sucesfully deleted');
        return redirect(route('brand.index'));

        //
    }
}
