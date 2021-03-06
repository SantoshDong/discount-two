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
            <strong class="card-title">Edit Product's data</strong>
        </div>
        <div class="card-body">
          <!-- Credit Card -->
          <div id="pay-invoice">
              <div class="card-body">
               
                  <form action="{{ route('product.update',$product->id) }}" method="post" novalidate="novalidate" enctype="multipart/form-data">
                    @method('PUT')
                     @csrf
                     <div class="form-group">
                         <label for="cc-payment" class="control-label mb-1"> Product name:</label>
                          <input id="title" name="name" placeholder="Enter the Product name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{ $product->name }}">      
                      </div>
                    
                      <div class="form-group">
                       <label for="content">Body</label>
        <textarea class="form-control" cols="5" rows="7" placeholder="Enter the description" name="body">{{ $product->body }}</textarea>                  
                         </div>
                     
                         <div class="form-group">
                         <label for="cc-payment" class="control-label mb-1">Location:</label>
                          <input id="title" placeholder="Enter the Location" value="{{ $product->location }}" name="location" type="text" class="form-control" aria-required="true" aria-invalid="false">      
                      </div>

                      <div class="form-group">
                       <label for="content">Address</label>
                    <textarea class="form-control" placeholder="Enter the address" cols="5" rows="7" name="address">{{ $product->address }}</textarea>                  
                         </div>

                        <div class="form-group">
                        <label for="cc-payment" class="control-label mb-1">Extra field:</label>
                        <input id="title" placeholder="Enter the Extra things" value="{{ $product->remark }}" name="extrafield" type="text" class="form-control" aria-required="true" aria-invalid="false">      
                      </div>
                      
                      <div class="form-group">
                        <label for="cc-payment" class="control-label mb-1">Contact numbers:</label>
                        <input id="text" value="{{ $product->contact_nbr }}" placeholder="Enter the Extra Things" name="contact_nbr" type="number" class="form-control" aria-required="true" aria-invalid="false" required>      
                      </div>


                      <div class="form-group has-success">
                        <select name="categorys[]" class="form-control" multiple>
                        <option>Select category</option>
                        @foreach($categories as $category)

              <option value="{{ $category->id }}
              @if(isset($product))
       

              @endif
              
              ">{{ $category->category_name }}</option>
                     
                     
                     
                        @endforeach
                         </div>
                     

                      <div class="form-group has-success">
                          <label for="cc-name" class="control-label mb-1">Product logo:</label>
                          <input id="image" name="productlogo" type="file" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                          <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                      <img src="/storage/{{ $product->logo }}" height="50px" width="60px">
                      </div>

                     
                      <div class="form-group">
                      <button type="submit" class="btn btn-success">Update</button>
                      </div>
                      
                      <div>


                      </div>

                   


                  </form>
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
