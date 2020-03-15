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
            <strong class="card-title">Add Recent's data</strong>
        </div>
        <div class="card-body">
          <!-- Credit Card -->
          <div id="pay-invoice">
              <div class="card-body">
               
                  <form action="{{ route('recent.store')  }}" method="post" novalidate="novalidate" enctype="multipart/form-data">
                     @csrf
                      <div class="form-group">

                          <label for="cc-payment" class="control-label mb-1">Title</label>
                          <input id="title" value="{{ old('title') }}" name="title" type="text" class="form-control" placeholder="Enter the Title" aria-required="true" aria-invalid="false" required>
                      
                      </div>
                    
                      <div class="form-group">
                       <label for="content">Address</label>
             <textarea class="form-control" cols="2" rows="3" name="address" placeholder="Enter the address" required>{{ old('address') }}</textarea>
                      </div>

                      <div class="form-group">
                          <label for="cc-payment" class="control-label mb-1">Contact number</label>
                          <input id="title" placeholder="Enter the phone number" value="{{ old('contactnbr') }}" name="contactnbr" type="number" class="form-control" aria-required="true" aria-invalid="false" required>
                      </div>
                    

                    
                      <div class="form-group has-success">
                          <label for="cc-name" class="control-label mb-1">Logo:</label>
                          <input id="image"  value="{{ old('logo') }}" name="logo" type="file" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" required>
                          <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                      </div>

                   
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

<script>
$(document).ready(function(){
$("#type").click(function(){
$("$image").hide();

});

});

</script>
@endsection
