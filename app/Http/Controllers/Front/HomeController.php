<?php

namespace App\Http\Controllers\Front;

use App\Category;
use App\Brand;
use App\Client;
use App\Location;
use App\Product;
use App\Recent;
use App\CategoryProduct;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
 



      //  public function productselect($categoryid){ 
      //   // $products = Product::simplePaginate(9, ['*'], 'paidproduct');

      //   $recents = Recent::simplePaginate(3, ['*'], 'recentlyadded');
      //   $category=Category::findorfail($categoryid);

      //   $product=$category->products()->simplePaginate(9); 

      //     $search=request()->query('search');
      //      if($search){
      //      $products= Product::where('name','LIKE','%'.$search.'%')->simplePaginate(9);
      //       }else{
      //       $products = Product::simplePaginate(9, ['*'], 'paidproduct');    
      //      }
   
      //       return view('product',compact('product','category','recents'));       
          
      //     }

//       public function dash($category,$location){      
//        $catagory_id=$category;
//         $products= Product::select("*")
//            ->with("has_catagory")
//               ->when(!empty($location), function($q) use($location){
//                 return $q->where("location", "Like", '%'. $location ."%");
//               })
//               ->when(!empty($catagory_id), function($q) use($catagory_id){
//                   return $q->whereHas("has_catagory", function($q) use($catagory_id){
//                                 return $q->where("category_id",$catagory_id);
//                             });
//               })
//               ->get();

//                     $output="";

//                     if(!$products < 0){
//       foreach ($products as $key => $product){
//             $output.='<div class="col-md-4" style="padding:10px;">'.
// '<div  class="wrappr-item d-flex" style="background-color: #ffffff">'.
//                      ' <img src="/storage/'.$product->logo.' " alt="" height="100px" width="100px">'.
//                         '<div class="location-content ml-3">'.
//                            '<h6 style="margin:0px; font-size: 13px;">'.$product->name.'</h6>'.
//                              '<p style="margin:0px; font-size: 13px;"><i class="fas fa-map-marker-alt"></i>'.$product->address.' </p>'.
//                              '<p style="margin:0px; font-size: 13px;"> <img src="img/telephone.png" height="15px" width="15px;"> 9840186295</p>'.
//                              '<div class="col-md-12 discount-text" style="">
//                               <p>Mero Card: 10% Discount on All Items
//                                 <img src="img/discount.jpg" height="20px">
//                               </p>
//                              </div>'.
//                         '</div>'.
//                     '</div>'.
//                   '</div>';

//                     }                  
//  }else{
//   $output.='<div class="col-sm-12">'.
//             '<div class="alert alert-danger" style="float:right">
//       No results,found'.
//   '</div>';       
// }
//   return Response($output);
//       }




  
     // return json_encode($products);

    
       

           public function index(){ 
          return view('front.home.index');    
               }


                public function productsearch(Request $request){ 
                    
            
                  $location= str_replace('+', ' ', $request->get("location"));
                  $name= str_replace('+', ' ', $request->get("name"));
                  $category = str_replace("_"," " , $request->get('category'));
                
                //   if(!empty($category)){
                //    $category =  Category::where('category_name', $category)->first();
                //   }


          
                  $products = Product::select('*')
                  ->when(!empty($name), function($q) use($name){
                    return $q->where("name", "Like", '%'. $name ."%");
                  })
                  ->when(!empty($location), function($q) use($location){
                    return $q->where("location", "Like", '%'. $location ."%");
                  })
                  ->when(!empty($category), function($q) use($category){
                    return $q->whereHas("has_catagory",function($query) use($category){
                        return $query->where('category_id', $category);
                    });
                  })->get();
            
                  return view('front.home.categorysearch',compact('products','location','name'));     
              
      
                }

    public function categoryview($category_name){  


        $category_name = str_replace('-', ' ', $category_name);
        $category = Category::where('category_name','Like','%'. $category_name .'%')->firstOrFail();

        $category=Category::find($category->id);
        $products=$category->products()->get();

        $name = $category_name;
        
        return view('front.home.categorysearch',compact('products','name'));  
    }

      public function categorysearch($categoryid){  
        $category=Category::find($categoryid);
        $products=$category->products()->get();
        $output="";

         
    foreach ($products as $key => $product){
    $output.=
    '<div class="col-md-3 col-sm-6 col-6" style="margin-bottom:14px;">'.
    '<div class="card" style="margin-bottom:10px;width:100%;margin:.5%;height:275px">'.
    '<img class="card-img-top" style="height:8em;width:60%;margin:0 auto;" src="/storage/'.$product->logo.'" alt="Card image cap">'.
     '<div class="card-body">'.
    '<div class="row name">'.
        '<div class="col-2">'.
            '<i class="fa fa-user" style="font-size:20px"></i>'.
        '</div>'.
        '<div class="col-9">'.
            '<span class="__card-overflow">'.$product->name.'</span>'.
        '</div>'.
    '</div>'.
    '<div class="row place">'.
       '<div class="col-2">'.
            '<i class="fa fa-address-book" style="font-size:20px"></i>'.
       '</div>'.
        '<div class="col-9">'.
            '<span class="__card-overflow">'.$product->address.'</span>'.
        '</div>'.
    '</div>'.
    '<div class="row phone-no">'.
        '<div class="col-2">'.
            '<i class="fa fa-phone" style="font-size:20px"></i>'.
        '</div>'.
        '<div class="col-9">'.
            '<span class="__card-overflow">'.$product->contact_nbr.'</span>'.
        '</div>'.
    '</div>'.
'</div>'.
'</div>'.
'</div>';


}   

   
 
   return $output;
   
 
 
 

                
              }
  

    //
}
