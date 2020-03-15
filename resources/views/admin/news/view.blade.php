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
            <strong class="card-title">View single Media data</strong>
        </div>
        <div class="card-body">
          <!-- Credit Card -->
          <div id="pay-invoice">
              <div class="card-body">
               
                  <form action="" method="" novalidate="novalidate" enctype="multipart/form-data">
                

                     <h5>Title:</h5>
                     <div class="card">
  <div class="card-body">
  {{ $coverage->title }}
  </div>
</div>

<h5>Url:</h5>
                     <div class="card">
  <div class="card-body">
  {{ $coverage->url }}
  </div>
</div>

<h5>Description:</h5>
                     <div class="card">
  <div class="card-body">
  {{ $coverage->description }}
  </div>
</div>




                  </form>
                  <div class="group">
               <a href="{{ route('coverage.index') }}"><button type="submit" class="btn btn-primary">Back</button></a>
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
