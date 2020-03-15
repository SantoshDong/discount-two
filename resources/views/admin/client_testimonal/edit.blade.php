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
            <strong class="card-title">Edit Client's Testimonal</strong>
        </div>
        <div class="card-body">
          <!-- Credit Card -->
          <div id="pay-invoice">
              <div class="card-body">
               
                  <form action="{{ route('client.update',$client->id)  }}" method="post" novalidate="novalidate" enctype="multipart/form-data">
                    @method('PUT')
                     @csrf
                      <div class="form-group">

                          <label for="cc-payment" class="control-label mb-1">Name:</label>
                          <input id="title" placeholder="Enter the name" name="name" type="text" class="form-control" aria-required="true" aria-invalid="false" value=" {{ $client->name }} ">
                      
                      </div>

                      <div class="form-group">
                       <label for="content">Description</label>
        <textarea class="form-control" cols="5" placeholder="Enter the description" rows="7" name="description">{{ $client->description }}</textarea>
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
