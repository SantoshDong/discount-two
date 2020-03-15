<?php

namespace App\Http\Controllers\Admin;
use App\Coverage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class CoverageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $i=1;
        $coverages=Coverage::all();
        return view('admin.news.index',compact('i','coverages'));

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
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
            "title"=> "required|min:2",
            "description"=> "required",
            "url"=> "required|url",
            "logo"=> "required|image|mimes:jpeg,png,jpg,gif",
         ]); 

      
        $logo=$request->logo->store('posts'); 

        Coverage::create([
          "title" => $request->title,
          "description" => $request->description,
          "url" => $request->url, 
         "logo" => $logo 
        ]);  

   session()->flash('success','Media coverage data  sucesfully added');
   return redirect(route('coverage.index'));

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
    public function edit($coverage)
    {
        $coverage=Coverage::findorfail($coverage);
        return view('admin.news.edit',compact('coverage'));
       
        //
    }
    public function view($coverage)
    {
        $coverage=Coverage::findorfail($coverage);
        return view('admin.news.view',compact('coverage'));
       
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Coverage $coverage)
    {
       

           $this->validate(request(),[
             "title"=> "required|min:2",
              "description"=> "required",
              "url"=> "required|url"
            ]); 


        $data=$request->only(['title','description','url']);

           if($request->hasfile('logo')){
               $logo=$request->logo->store('posts');
                Storage::delete($coverage->logo);
                $data['logo'] = $logo;
                }

           $coverage->update($data);
           session()->flash('success','Media coverage data  sucesfully updated');
           return redirect( route('coverage.index') );
   
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coverage $coverage)
    {
        Storage::delete($coverage->logo);
        $coverage->delete();

        session()->flash('warn','Coverage data sucesfully deleted');
        return redirect(route('coverage.index'));

        //
    }
}
