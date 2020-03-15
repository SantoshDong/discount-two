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
            <strong class="card-title">Edit Category's data</strong>
        </div>
        <div class="card-body">
          <!-- Credit Card -->
          <div id="pay-invoice">
              <div class="card-body">
               
                  <form action="{{ route('category.update',$category->id)  }}" method="post" novalidate="novalidate" enctype="multipart/form-data">
                     @csrf
                      @method('PUT')

                      <div class="form-group">
                          <label for="cc-payment" class="control-label mb-1">Category name</label>
                          <input id="title" name="categoryname"  placeholder="Enter the category name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{ $category->category_name }}">
                      </div>
                     
                      
                      <div class="form-group">
                          <label for="cc-payment" class="control-label mb-1">Image</label>
                          <input id="file"  name="logo" placeholder="" type="file" class="form-control" aria-required="true" aria-invalid="false" required>
                      <img src="/storage/{{ $category->logo }}" height="60px" width="70px">
                      </div>
                     
                     
 
                      <div class="form-group">
                      <button type="submit" class="btn btn-success">update</button>
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
