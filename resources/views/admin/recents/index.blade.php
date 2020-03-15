@extends('admin.layouts.master')
@section('content')
  
<link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

   
 

  
    <link rel="stylesheet" href="{{ asset('assets/css/lib/datatable/dataTables.bootstrap.min.css') }}">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="{{ asset('assets/scss/style.css') }}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>







<div class="animated fadeIn">

<div class="row">
                <div class="col-md-12">
                

                @if(session()->has('success'))
                

             <div class="alert alert-success alert-dismissible">
           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>{{ session()->get('success') }}</strong> 
             </div>
                            
                 
                 @endif

                 @if(session()->has('warn'))
<div class="alert alert-danger alert-dismissible">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<strong>{{ session()->get('warn') }}</strong> 
</div>
                 @endif

            <a href="{{ route('recent.create')  }}" ><button type="button" class="btn btn-success btn-md"  style="float:right">Add Recent data
                </button></a>
                </div>
                </div>

                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title"<h4>list of recents data</h4></strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                      <th>SN</th>
                      <th>Title</th>            
                        <!-- <th>Address</th>         
                        <th>Contact number</th> -->
                        <!-- <th>logo</th> -->
                       
                       
                        <th>Operation</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($recents as $recent)
                      <tr>
                    
                        <td>{{ $i++ }}</td>
                        <td>{{ $recent->title }}</td>
                       
                        <!-- <td>{{ $recent->address }}</td>
                            <td>{{ $recent->contact_nbr }}</td> -->
<!--                     
                        <td><img src="/storage/{{ $recent->logo }}" height="40px"></td>
                        <br>
                        
                       -->

                        <td>
                        <a href="{{ route('recent.edit',$recent->id) }}" data-toggle="tooltip" title="Edit"><button type="button" class="btn btn-success">
                             edit </button></a>

                             <a href="{{ url('admin/recent/view',$recent->id) }}" data-toggle="tooltip" title="View"><button type="button" class="btn btn-primary btn-sm">View
                          </button></a>
                                      
                             <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal" onclick="handleDelete({{ $recent->id }})">
                                 Delete
                                  </button>
                        
                         
                        
                      
                        
                        
                        
                        </td>
                        
                       
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>


                </div>
            </div>
            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
  
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Are you sure want to delete this ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="post" action="" id="deleteCategoryForm">
   @method('DELETE')
   @csrf
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal" style="color:white;padding:5px;width:10%">No</button>
        <button type="submit" class="btn btn-danger" id="deleteBtn">Yes</button>
      </div>
    </div>
</form>
  </div>
</div> 

<script>
 function handleDelete(id){
   console.log('deleted.',id);
   var form=document.getElementById('deleteCategoryForm')
   form.action='/admin/recent/' + id
   console.log('deleted.',form);
   $("#deleteModal").modal('show');
 }
 </script>


            <script src="{{ asset('assets/js/vendor/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>


    <script src="{{ asset('assets/js/lib/data-table/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/datatables-init.js') }}"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>




@endsection