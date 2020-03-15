<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Product;
use App\Location;
use App\Brand;
use App\Client;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
         $user=User::all();
         return view('admin.layouts.master',compact('user'));

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
      return view('admin.profile.show')->with('user',auth()->user());
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
    }

    public function view(){
      $clients=Client::all();
      $brands=Brand::all();
      $locations=Location::all();
      $products=Product::all();
      $categories=Category::all();
      return view('admin.dashboard.index',compact('clients','brands','locations','products','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateprofile(Request $request,User $user)
    {

        $user->name=$request->name;
        $user->email=$request->email;
        $user->password = Hash::make(request('password'));
        $user->save();
        session()->flash('success','User information updated sucesfully added');
        return redirect()->back();
        
      
     

        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
 




    
}
