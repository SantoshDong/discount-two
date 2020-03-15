@extends('front.layouts.master', ['title' =>$name. ' - Mero Discount'])
@section('content')
<div class="container">
        <div class="row">
     
            <div class="col-lg-4 __cate">
            
              <div class="text-center" style="width:100%;padding:10px;background: #f1f1f1;">
                <label for="inputState" style="font-weight:600;font-size:1em;letter-spacing:.1em;">Categories</label>
              </div>
                <div class="form-group" style="background-color:#ffffff;padding: 20px 10px;">
                  <select id="hide" class="form-control categoryid" style="border:1px solid black;">
                    <option selected>Choose...</option>
                    @foreach(App\Category::all() as $category)

                    @if(strtolower($name) == strtolower($category->category_name))
                      <option value="{{ $category->id }}" selected="">{{ $category->category_name }}</option>
                    @else
                      <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endif
                  
                    @endforeach

                  </select>
                </div>
            </div>

            <div class="col-lg-8 bg-dark" style="padding-top:10px;padding-bottom:10px;">
                <div class="fl fw s_cat_r_d text-center">
                    <h1 id="categoryName_hd" class="hd_1">Discount Offers </h1>
                    <p id="categoryCoupons_text">Coupon Codes &amp; mero discount  (20) </p>
                </div>
            </div>
        </div>
    </div>
    <!--popularity div starts here-->
    <div class="container" style="margin-top:10px;margin-bottom: 60px;min-height:50vh;" id="product">

        @if($products->count() > 0)

          @if(isset($name) && isset($location))
            <div  class="ra">

             <h4 style="color:#111111;margin-top: 30px;">{{$products->count()}} Result Found for "{{$name}}" & "{{$location}}"</h4>
            </div>
           @endif
          <div class="__content wrapperdata" style="margin-top:4%;width:100%;display:flex;">
        
          @foreach($products  as $product)
            <div class="in-cata-det" style="width:20%;margin-left:10px;margin-right:10px;">
              <div class="card" style="margin-bottom:10px;width:100%;margin:.5%;height:275px">
                <img class="card-img-top" src="/images/media.jpeg" alt="Card image cap">
                <div class="card-body">
                    <div class="row name">
                      <div class="col-1">
                      </div>
                      <div class="col-11" style="display:flex;justify-content:center;">
                            <span class="txt-t-rec">{{ $product->name }}</span>
                        </div>
                    </div>
                    <div class="row place">
                      <div class="col-1">
                           <i class="fa fa-map-marker"></i>
                      </div>
                       <div class="col-9">
                            <span class="txt-t-rec">{{ $product->address }}</span>
                        </div>
                    </div>
                    <div class="row phone-no">
                      <div class="col-1">
                          <i class="fa fa-phone"></i>
                      </div>
                      <div class="col-9">
                            <span class="txt-t-rec">{{ $product->contact_nbr }}</span>
                        </div>
                    </div>
                    <div class="row name">
                      <div class="col-1">
                      </div>
                      <div class="col-11">
                         <mark class="txt-t-rec3">10% discount on all<mark>
                      </div>
                  </div>
                </div>
            </div>
            </div>
            
            @endforeach

        @else
          @if(isset($name) && isset($location))
          <div  class="ra">
             <h4 style="color:#111111;margin-top: 30px;"> No Result Found for "{{$name}}" & "{{$location}}"</h4>
          </div>
          else
          <div  class="ra">
             <h4 style="color:#111111;margin-top: 30px;"> No Result Found</h4>
          </div>
          @endif
        @endif
            
        </div>
    </div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script>
     $(document).ready(function(){
     $("#hide").change(function(){
      $categoryid=$(".categoryid").val();
      $.ajax({ 
      method:'GET',
      url:'{{ url("categoryproduct") }}'+"/"+$categoryid,
        success: function(data){    
      $(".wrapperdata").html(data);
      console.log(data);
     
       }
         });
      });
    });
</script>


@endsection