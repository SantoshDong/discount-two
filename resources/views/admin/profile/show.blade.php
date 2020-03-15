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
            <strong class="card-title">My Profile</strong>
         <a href="{{ url('/admin') }}"><button type="button" class="btn btn-primary" style="float:right">Back</button></a>
        </div>
        <div class="card-body">
          <!-- Credit Card -->
          <div id="pay-invoice">
              <div class="card-body">
                               
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                  <form action="{{ url('admin/profile/update',$user->id) }}" method="post" novalidate="novalidate" enctype="multipart/form-data">
                     
                     @csrf
                      
                   
                     <div class="form-group">
                          <label for="cc-payment" class="control-label mb-1">Name</label>
                          <input id="title" name="name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{ $user->name }}">
                      </div>
                     
                      <div class="form-group">
                          <label for="cc-payment" class="control-label mb-1">Email</label>
                          <input id="title" name="email" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{ $user->email }}">
                      </div>

                      <div class="form-group">
                          <label for="cc-payment" class="control-label mb-1">Password</label>
                          <input id="title" name="password" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{ $user->password }}">
                      </div>
                     
                      <div class="form-group">
                      <button type="submit" class="btn btn-success">Update profile</button>
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
