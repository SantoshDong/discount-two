<?php

namespace App\Http\Controllers\Admin;

use App\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $i=1;
        $clients=Client::all();
        return view('admin.client_testimonal.index',compact('i','clients'));

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.client_testimonal.create');
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
            "name"=> "required|min:15",
            "description"=> "required"
         ]);

            Client::create([
               "name" => $request->name,
               "description" => $request->description
            ]);  

        session()->flash('success','Client Testimonal sucesfully added');
        return redirect( route('client.index') );
      
     
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
        $client=Client::findorfail($id);
        return view('admin.client_testimonal.edit',compact('client'));
        
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
    public function update(Request $request,Client $client)
    {
        $this->validate(request(),[
           "name"=> "required|min:15",
           "description"=> "required"
         ]);

        $client->name=$request->name;
        $client->description=$request->description;
        $client->save();
  
        session()->flash('success','Client sucesfully updated');
        return redirect( route('client.index') );
      

        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
        session()->flash('warn','Client testimonal succesfully deleted');
        return redirect(route('client.index'));

        //
    }
}
