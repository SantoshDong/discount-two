
    <header id="header" class="header">

<div class="header-menu">

    <div class="col-sm-2">
   <p><strong> Date: {{ date('Y-m-d') }}</strong></p>
    </div>
    <div class="col-sm-2">
   <p><strong> Time: {{ date('H:i:s') }}</strong></p>
    </div>
    <div class="col-sm-8">
        <div class="user-area dropdown float-right">
  
         <!-- <img class="user-avatar rounded-circle" src="{{ asset('assets/images/admin.jpg') }}" alt="User Avatar"> -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->name }} 
            </a>



            <div class="user-menu dropdown-menu">
          
                    <a class="nav-link" href="{{ url('/admin/profile') }}"><i class="fa fa- user"></i>My Profile</a>
                 
                   



<!-- 
                    <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
 -->
 

 <a class="nav-link"  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        
                                 <i class="fa fa-power -off"></i>Logout</a>  
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>





            </div>


        </div>

        <div class="language-select dropdown" id="language-select">
            <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                <i class="flag-icon flag-icon-us"></i>
            </a>
            <div class="dropdown-menu" aria-labelledby="language" >
                <div class="dropdown-item">
                    <span class="flag-icon flag-icon-fr"></span>
                </div>
                <div class="dropdown-item">
                    <i class="flag-icon flag-icon-es"></i>
                </div>
                <div class="dropdown-item">
                    <i class="flag-icon flag-icon-us"></i>
                </div>
                <div class="dropdown-item">
                    <i class="flag-icon flag-icon-it"></i>
                </div>
            </div>
        </div>

    </div>
</div>

</header><!-- /header -->
<!-- Header-->


<div class="breadcrumbs">

            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>

            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>

        </div>

      

        <div class="content mt-3">

        


