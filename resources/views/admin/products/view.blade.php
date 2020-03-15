@extends('admin.layouts.master')
@section('content')
  

<div class="animated fadeIn">
<div class="row">
                <!-- <div class="col-md-1">
                </div> -->
                <div class="col-md-12">

       @if(session()->has('success'))

          <div class="alert alert-success alert-dismissible">
           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>{{ session()->get('success') }}</strong> 
             </div>


@endif
</div>
</div>

<div class="row">
  <div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">View single Product data</strong>
        </div>
        <div class="card-body">
          <!-- Credit Card -->
          <div id="pay-invoice">
              <div class="card-body">
               
                  <form action="" method="" novalidate="novalidate" enctype="multipart/form-data">
                

                     <h5>Product name:</h5>
                     <div class="card">
  <div class="card-body">
    {{ $product->name }}
  </div>
</div>

<h5>Body:</h5>
                     <div class="card">
  <div class="card-body">
  {{ $product->body }}
  </div>
</div>

<h5>Location:</h5>
                     <div class="card">
  <div class="card-body">
  {{ $product->location }}
  </div>
</div>

<h5>Address</h5>
                     <div class="card">
  <div class="card-body">
  {{ $product->address }}
  </div>
</div>

<h5>Remark:</h5>
                     <div class="card">
  <div class="card-body">
  {{ $product->remark }}
  </div>
</div>

<h5>Contact numbers:</h5>
                     <div class="card">
  <div class="card-body">
  {{ $product->contact_nbr }}
  </div>
</div>

<h5>Category name</h5>
                     <div class="card">
  <div class="card-body">
  @if(count($product['categories']) > 0)
                            @foreach($product['categories'] as $catagory)
                            {!! $catagory->category_name !!},
                            @endforeach
                            @endif
  </div>
</div>

<h5>Image:</h5>
<div class="card">
  <div class="card-body">
<img src="/storage/{{ $product->logo }}" height="60px" width="60px">
  </div>
  </div>


                   


                  </form>
                  <div class="group">
               <a href="{{ route('product.index') }}"><button type="submit" class="btn btn-primary">Back</button></a>
                      </div>
                      

              </div>
          </div>

        </div>






    </div> <!-- .card -->

  </div><!--/.col-->


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
