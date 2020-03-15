<?php

namespace App\Http\Controllers\Admin;


use App\Product;
use App\Category;
use App\ProductHasCatagory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
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
        $products=Product::with('categories')->get();
        return view('admin.products.index',compact('i','products','categories'));
  
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        return view('admin.products.create',compact('categories'));
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
            "name"=> "required|min:2",
            "body"=> "required",
            "location"=> "required|min:6",
            "address"=> "required",
            "remark"=> "required",
            "contact_nbr"=> "required|min:10",
            "productlogo"=> "required|image|mimes:jpeg,png,jpg,gif",
          ]); 
    
        $logo=$request->productlogo->store('posts'); 
        
        $product = Product::create([
         "name" => $request->name,
         "body" => $request->body,
         "location" => $request->location, 
         "address" => $request->address,
         "contact_nbr"=> $request->contact_nbr,
         "remark" => $request->remark,
         "logo" => $logo,
        ]);
 
  if($request->categorys){
  $product->categories()->attach($request->categorys);
   }

    session()->flash('success','Products data  sucesfully added');
    return redirect(route('product.index'));

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
    public function edit($product)
    {
        $categories=Category::all();
        $product=Product::findorfail($product);
        return view('admin.products.edit',compact('product','categories'));    
        //
        //
    }


  public function view($product)
   {   
    $categories=Category::all();
    $product=Product::findorfail($product);
    return view('admin.products.view',compact('product','categories'));
   
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Product $product)
    {
 
        $data=$request->only(['name','body','location','address','contact_nbr','remark']);
       
        if($request->hasfile('productlogo')){
           $productlogo=$request->productlogo->store('posts');
           Storage::delete($product->logo);
           $data['logo'] = $productlogo;
            }

         $product->update($data);
         
         if($request->categorys){
            $product->categories()->sync($request->categorys);
             }
        session()->flash('success','Product data  sucesfully updated');
       return redirect( route('product.index') );
   
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        Storage::delete($product->logo);
        $product->delete();
        session()->flash('warn','Product data sucesfully deleted');
        return redirect(route('product.index'));

        //
    }
}
