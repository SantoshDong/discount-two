
@extends('front.layouts.master',['title'=>'Mero Discount'])
@section('content')
    <!--first navbar content ends here-->
    <div class="container-fluid tab-container mobile-container" style="margin-top:5px;">
        <div class="container">
            <div class="row" style="background-color:#fff;">
                <div class="col-lg-4 col-md-5 col-sm-6 __for-checkout" style="padding-left:0px;background-color:#32CD32;">
                    <div class="checkout-progress-sidebar ">
                        <div class="panel-group">
                            <div class="panel panel-default" style="padding: 19px 15px;">
                                <div>
                                    <h4 class="unicase-checkout-title"
                                        style="color: #ffffff; font-weight: 700; text-align: center;letter-spacing:.1rem;">
                                        Benefits !</h4>
                                </div>
                                <div class="">
                                    <ul class="nav nav-checkout-progress list-unstyled inlist">
                                        <li><span>1</span> Nepal's Fastest Growing Hidden Discount Deals on Offline
                                            &amp; Online Shopping.</li>
                                        <li><span>2</span> Nepal's First Money Saving Discount Card With Highest
                                            Merchant Partners</li>
                                        <li><span>3</span> Start Saving Money Right From Today Itself, Become Our
                                            Premium Member</li>
                                        <li><span>4</span> Get Access To Thousands Of Multicuisine Restaurants, Beauty, SPA's, GYM's &amp; More</li>
                                            <li><span>5</span> Get Started Right Form Now By Saving Money Using Our Discount Card</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 col-sm-6 __for-slider-img" style="padding-right:0px;">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="img-fluid _f-s-img" src="{{ asset('images/hero-san.jpg') }}"
                                    alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid _f-s-img" src="{{ asset('images/hero-san.jpg') }}"
                                    alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid _f-s-img" src="{{ asset('images/hero-san.jpg') }}"
                                    alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
   <div class="__for-m-s">
        <!--Top Categories Starts Here-->
       
        <div class="container" style="overflow:hidden;margin-top:3em;margin-bottom:5em;">
            <div class="row __for-heading" style="margin-bottom:.3rem;">
                <h4 class="txt20">top categories</h4>
            </div>
            <div class="row owl-carousel1 owl-theme">
                @foreach(App\Category::all() as $category)
                <a href="{{url('product/'.str_replace(' ','-',$category->category_name))}}" style="text-decoration:none;"> 
                <div class="item" style="background:#ffffff">
                     <div class="row c1-r1">
                         <div class="__forallimg text-center">
                             <img src="/images/top-cat.png">
                         </div>
                         <div>
                             <span class="category-text text-center">{{ $category->category_name }}</span>
                         </div>
                     </div>
                 </div>
                </a>
               @endforeach
              
       
            </div>
        </div>
        <!--Our Top Catogories Ends Here-->
       
       <!--Best Travel Offer Starts Here-->
       
       <div class="container" style="overflow:hidden;margin-top:3em;">
        <div class="row __for-heading" style="margin-bottom:.3rem;">
            <h4 class="txt20">We Offer Nepal's Best Discount Deals</h4>
        </div>
       
        <div class="row owl-carousel1 owl-theme">
            @foreach(App\Travel::all() as $travel)
                <div class="item" style="background:#ffffff">
                    <div class="row">
                        <div class="col-12 __forallimg text-center">
                            <img  src="/images/logo.png">
                        </div>
                        <div class="col-12">
                            <span class="travel-text text-center">{{ $travel->title }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
            
       
        </div>
    </div>
    <!--Best Travel Offer Ends Here-->
        
        <!--recently Deals Starts Here-->
        <div class="container" style="overflow:hidden;margin-top:3em;">
            <div class="row __for-heading" style="margin-bottom:.3rem;">
                <h4 class="txt20">Recently Deals</h4>
            </div>
            <div class="row owl-Recently owl-theme">
                @foreach(App\Recent::all() as $recent)
                            <div class="card" style="margin-bottom:10px;">
                                <img class="card-img-top" src="/images/media.jpeg" alt="Card image cap">
                                <div class="card-body" style="padding-bottom:10px;">
                                    <a href="#">
                                        <div class="row name">
                                            <div class="col-1">
                                            </div>
                                            <div class="col-11" style="display:flex;justify-content:center;">
                                                <span class="txt-t-rec">{{ $recent->title }}</span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="row place">
                                       <div class="col-1">
                                            <i class="fa fa-map-marker"></i>
                                       </div>
                                        <div class="col-9">
                                            <span class="txt-t-rec2">{{ $recent->address }}</span>
                                        </div>
                                    </div>
                                    <div class="row phone-no">
                                        <div class="col-1">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="col-9">
                                            <span class="txt-t-rec2">{{ $recent->contact_nbr }}</span>
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
                            @endforeach
       
            </div>
        </div>
        <!--recently Deals Ends Here-->
          
        <!--Our Brands Section Starts Here-->
       
        <div class="container" style="overflow:hidden;margin-top:3em;margin-bottom:5em;">
            <div class="row __for-heading" style="margin-bottom:.3rem;">
                <h4 class="txt20">Recent Merchants</h4>
            </div>
            <div class="row owl-brand1 owl-theme">
                @foreach(App\Brand::all() as $brand)
                <div class="item" style="background:#ffffff;">
                    <div class="row" style="padding:0px;">
                        <div class="col-12" style="width:50%;text-align:center;height:9em;">
                            <img style="border-radius:50%;height:9em;" class="img-fluid" src="/images/brand-logo.jpeg">
                        </div>
                    </div>
                </div>
                 @endforeach
              
       
            </div>
        </div>
        <!--Our Brnds Section Ends Here-->
        <!--1 million like start here-->
        <div class="container" style="overflow:hidden">
            <div class="row __for-heading" style="margin-bottom:.3rem;">
                <h4 class="txt20">Why 1 Million People Like US?</h4>
            </div>
            <div class="row owl-like owl-theme">
                <div class="item">
                    <div class="row">
                        <div class="col-12 like-img" style="text-align:center;padding-top:5px;">
                             <img style="height:125px;width:125px;border-radius:50%;" src="{{ asset('images/listing1.jpg') }}">
                        </div>
                        <div class="col-12 like-heading text-center">
                             <h5>Popularity</h5>
                        </div>
                        <div class="col-12 like-description text-center">
                             <p>we are popular all over the world!</p>
                        </div>
                 </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-12 like-img" style="text-align:center;padding-top:5px;">
                            <img style="height:125px;width:125px;border-radius:50%;" src="{{ asset('images/listing1.jpg') }}">
                        </div>
                        <div class="col-12 like-heading text-center">
                             <h5>Branch world wide</h5>
                        </div>
                        <div class="col-12 like-description text-center">
                             <p>we are popular all over the world!</p>
                        </div>
                 </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-12 like-img" style="text-align:center;padding-top:5px;">
                            <img style="height:125px;width:125px;border-radius:50%;" src="{{ asset('images/listing1.jpg') }}">
                        </div>
                        <div class="col-12 like-heading text-center">
                             <h5>Trust</h5>
                        </div>
                        <div class="col-12 like-description text-center">
                             <p>we are popular all over the world!</p>
                        </div>
                 </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-12 like-img" style="text-align:center;padding-top:5px;">
                            <img style="height:125px;width:125px;border-radius:50%;" src="{{ asset('images/listing1.jpg') }}">
                        </div>
                        <div class="col-12 like-heading text-center">
                             <h5>Huge Discount</h5>
                        </div>
                        <div class="col-12 like-description text-center">
                             <p>we are popular all over the world!</p>
                        </div>
                 </div>
                </div>
                
                
       
            </div>
        </div>
        <!--1 million like ends here-->
        <!--Testimonial Starts Here-->
       
        <div class="container" style="overflow:hidden;margin-top:3em;">
            <div class="row __for-heading" style="margin-bottom:.3rem;">
                <h4 class="txt20">Testimonial</h4>
            </div>
           
            <div class="row owl-testimonial owl-theme">
                @foreach(App\Client::all() as $client)
                <div class="item" style="background-color:#ffffff">
                    <div class="row" style="padding:0px;margin:0px;">
                        <div class="col-12" style="width:50%;text-align:center;padding:2em;">
                            <p class="__for-overflow">{{ $client->description }}
                                </p>
                            <h5 style="text-align:center;">- {{ $client->name }}</h5>
                        </div>
                    </div>
                </div>
               @endforeach
                
       
            </div>
        </div>
        <!--Testimonial Ends Here-->
        <!--media coverage Starts here-->
        <div class="container" style="overflow:hidden;margin-top:3em;">
            <div class="row __for-heading" style="margin-bottom:.3rem;">
                <h4 class="txt20">Media coverage</h4>
            </div>
            <div class="row owl-media owl-theme">
                @foreach(App\Coverage::all() as $mediacovergae)
                <div class="item" style="padding:10px;">
                    <div class="row" style="background-color:beige;margin-left:1px;margin-right:1px;">
                        <div class="col-md-5 col-12 __media-img">
                            <img class="img-fluid" src="/images/media.jpeg">
                        </div>
                        <div class="col-md-7 col-12">
                            <h4 class="__text-lim-h">{{ $mediacovergae->title }}</h4>
                            <!-- <p>2Lorem ipsum dolor sit, amet consectetur adipisicing elitosam quis!</p> -->
                            <p class="__text-limit">
       
                                {{ $mediacovergae->description }}   
                                  </p>
                        </div>
                    </div>
                    <div class="row ml-0">
                       <a href="{{ $mediacovergae->url }}"><button type="button" class="btn" style="background:#fdb515;">Read Topics<button></a>
                    </div>
                </div>
                    @endforeach
       
            </div>
        </div>
        <!--end of media coverage-->
   </div>
@endsection