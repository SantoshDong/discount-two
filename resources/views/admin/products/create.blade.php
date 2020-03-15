@extends('admin.layouts.master')
@section('content')
<link href="vendor/select2/dist/css/select2.min.css" rel="stylesheet" />

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
  <div class="row">
<div class="col-sm-8">
                 
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

</div>
  </div>
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Add Product's data</strong>
        </div>
        <div class="card-body">
          <!-- Credit Card -->
          <div id="pay-invoice">
              <div class="card-body">
               
                  <form action="{{ route('product.store')  }}" method="post" novalidate="novalidate" enctype="multipart/form-data">
                     @csrf
                      <div class="form-group">
                         <label for="cc-payment" class="control-label mb-1">Product name:</label>
                          <input id="title" value="{{ old('name') }}" name="name" placeholder="Enter the product name" type="text" class="form-control" aria-required="true" aria-invalid="false" required>      
                      </div>
                    
                      <div class="form-group">
                       <label for="content">Body</label>
                  <textarea class="form-control" placeholder="Enter the description" cols="5" rows="7" name="body" required>{{ old('body') }}</textarea>                  
                         </div>
                     
                         <div class="form-group">
                         <label for="cc-payment" class="control-label mb-1">Location:</label>
                          <input id="title" placeholder="Enter the Location" value="{{ old('location') }}" name="location" type="text" class="form-control" aria-required="true" aria-invalid="false" required>      
                      </div>

                      <div class="form-group">
                       <label for="content">Address</label>
                       <textarea class="form-control" cols="5" rows="7"  placeholder="Enter the address" name="address" required>{{ old('address') }}</textarea>                  
                         </div>

                        <div class="form-group">
                        <label for="cc-payment" class="control-label mb-1">Remarks:</label>
                        <input id="title" placeholder="Enter the Extra Things" value="{{ old('remark') }}" name="remark" type="text" class="form-control" aria-required="true" aria-invalid="false" required>      
                      </div>

                      <div class="form-group">
                        <label for="cc-payment" class="control-label mb-1">Contact numbers:</label>

                        <input id="text"  placeholder="Enter the number"   value="{{ old('contact_nbr') }}" name="contact_nbr" type="number" class="form-control" aria-required="true" aria-invalid="false" required>      
                      </div>


                      <div class="form-group has-success">
                       
                       
                        <select name="categorys[]" value="{{ old('categorys') }}" class="form-control productselector" multiple>
                        <option>Select category</option>
                        @foreach($categories as $category)
                       <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                        @endforeach
                         </div>

<br>
<br>
                      <div class="form-group has-success">
                          <label for="cc-name" class="control-label mb-1">Product logo:</label>
                          <input id="image" value="{{ old('productlogo') }}" name="productlogo" type="file" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" required>
                          <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                      </div>

                    

<br>
<br>

                      <div class="form-group">
                      <button type="submit" class="btn btn-success">submit</button>
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

<script src="vendor/select2/dist/js/select2.min.js"></script>
<script>
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
@endsection
