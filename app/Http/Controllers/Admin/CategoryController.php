<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $i=1;
        $categories=Category::all();
        return view('admin.category.index',compact('i','categories'));

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
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
         "categoryname"=> "required",
          "logo"=> "required|image|mimes:jpeg,png,jpg,gif",
            ]);

        $logo=$request->logo->store('posts');
        Category::create([
            "category_name" => $request->categoryname,
            "logo" => $logo 
            ]);  
        session()->flash('success','Category  data sucesfully added');
        return redirect( route('category.index') );
      
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
        $category=Category::findorfail($id);
        return view('admin.category.edit',compact('category'));
        
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Category $category)
    {
       
           $this->validate(request(),[
            "categoryname"=> "required"
             ]);
       
             $data=$request->only(['category_name']);
             if($request->hasfile('logo')){
                 $logo=$request->logo->store('posts');
                  Storage::delete($category->logo);
                  $data['logo'] = $logo;
                  }
  
             $category->update($data);
             session()->flash('success','Category data  sucesfully updated');
             return redirect( route('category.index') );
     
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        session()->flash('warn','Category data  sucesfully deleted');
        return redirect(route('category.index'));

        //
    }
}
