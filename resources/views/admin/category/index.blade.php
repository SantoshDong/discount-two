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

            <a href="{{ route('category.create')  }}" ><button type="button" class="btn btn-success btn-md"  style="float:right">Add Category
                </button></a>
                </div>
                </div>

                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title"><h4>List of categorys data</h4> </strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                      <th>SN</th>
                     
                        <th>Category name</th>
                        <th>image</th>
                       
                    
                        <th>Operation</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                      <tr>
                    
                        <td>{{ $i++ }}</td>
                        
                    
                       <td>{{ $category->category_name }}</td>
                        <td><img src="/storage/{{ $category->logo }}" height="50px" width="50px"></td>
                      
                        <td>
                        <a href="{{ route('category.edit',$category->id) }}" data-toggle="tooltip" title="Edit"><button type="button" class="btn btn-success"><i class="fas fa-edit"></i>
                             edit </button></a>
                              
                              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" onclick="handleDelete({{ $category->id }})">
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
   form.action='/admin/category/' + id
   console.log('deleted.',form);
   $("#deleteModal").modal('show');
 }
 </script> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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