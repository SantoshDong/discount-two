<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;


class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    



    public function index()
    {
        $i=1;
        $permissions=Permission::all();
        return view('admin.permission.index',compact('i','permissions'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd('hy');
        return view('admin.permission.create');
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
        Permission::create([
        "name" => $request->name,
            ]);
          session()->flash('success','Permission  data sucesfully added');
            return redirect( route('permission.index') );
         
    
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
    public function edit($permission)
    {
      

       $permission=Permission::find($permission);
        return view('admin.permission.edit',compact('permission'));

        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Permission $permission)
    {
      
        $permission->name=$request->name;
        $permission->save();

        session()->flash('success','Permission  data sucesfully added');
        return redirect( route('permission.index') );
     
      
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();
        session()->flash('warn','Permission testimonal sucesfully deleted');
        return redirect(route('permission.index'));
        //
    }
}
