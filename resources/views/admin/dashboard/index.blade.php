@extends('admin.layouts.master')
@section('content')
  

<div class="animated fadeIn">


<div class="row">
 

<div class="col-sm-3 col-lg-3">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                           
                           
                        </div>
                        <h4 class="mb-0">
                            <span class="count">{{ $brands->count() }}</span>
                        </h4>
                        <p class="text-light"> Total Brands</p>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart1"></canvas>
                        </div>

                    </div>

                </div>
            </div>
            
            <div class="col-sm-3 col-lg-3">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                           
                           

                        </div>
                        <h4 class="mb-0">
                            <span class="count">{{ $clients->count() }}</span>
                        </h4>
                        <p class="text-light">Total clients</p>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart1"></canvas>
                        </div>

                    </div>

                </div>
            </div>

            <div class="col-sm-3 col-lg-3">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                           
                           
                        </div>
                        <h4 class="mb-0">
                            <span class="count">{{ $locations->count() }}</span>
                        </h4>
                        <p class="text-light">Total Locations</p>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart1"></canvas>
                        </div>

                    </div>

                </div>
            </div>  
</div>
<div class="row">
<div class="col-sm-3 col-lg-3">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                        
                            
                        </div>
                        <h4 class="mb-0">
                            <span class="count">{{ $products->count() }}</span>
                        </h4>
                        <p class="text-light">Total Products</p>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart1"></canvas>
                        </div>

                    </div>

                </div>
            </div>

   <div class="col-sm-3 col-lg-3">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                           
                           
                        </div>
                        <h4 class="mb-0">
                            <span class="count">{{ $categories->count() }}</span>
                        </h4>
                        <p class="text-light">Total Categories</p>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart1"></canvas>
                        </div>

                    </div>

                </div>
            </div>




</div>



</div>

<script>
$(document).ready(function(){
$("#type").click(function(){
$("$image").hide();

});

});

</script>
@endsection
