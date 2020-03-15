
@extends('front.layouts.master',['title'=>'Mero Discount'])
@section('content')
    <!--About Us Section Starts Here-->
    


            <div class="container" style="min-height:70vh;">
                <div class="row" style="background: #b3b3b3;margin-bottom:.3rem;">
                    <h3 style="margin:0 auto;padding:.3em 0em">About Us</h3>
                </div>
               <div class="row">
                <div class="col-md-3"></div>
                <div class="items_discouts_main col-md-6" style="text-align:center;">
                    <p>
                    <span style="font-size:14px;"><strong>CEO Message</strong></span><br>
                    <br>
                     <img style="height: 300px;width:300px;margin:0 auto;" class="img-fluid" src="{{ asset('images/ceo.png') }}">    
                   <p> "In today's world “Time Is Money” don't waste your time in seeking and pursuing bargains. You must avail the opportunity In your hand right now. Start saving today and enjoy plentiful."</p>
                    <br> <b>C.E.O, Mero Discount </b> 
                </div>
               </div>
            </div>
        </div>
    </div>
    @endsection