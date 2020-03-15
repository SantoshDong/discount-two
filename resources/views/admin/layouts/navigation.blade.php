
        <!-- Left Panel -->

        <aside id="left-panel" class="left-panel">
       
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{ url('/admin') }}"> <h4 style="color:white">merodiscount.com</h4>  </a>
                <a class="navbar-brand hidden" href="./"><img src="{{ asset('assets/images/logo2.png') }}" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                   
                    <li class="active">
                        <a href="{{ url('/admin') }}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>

                    <li class="active">
                        <a href="{{ route('category.index') }}"> <i class="menu-icon fa fa-dashboard"></i>Categories </a>
                    </li>

                    <li class="active">
                        <a href="{{ route('product.index') }}"> <i class="menu-icon fa fa-dashboard"></i>Top Category Products </a>
                    </li>
                     
                    <li class="active">
                        <a href="{{ route('recent.index') }}"> <i class="menu-icon fa fa-dashboard"></i>Recent products</a>
                    </li>
                    <li class="active">
                        <a href="{{ route('productlocation.index') }}"> <i class="menu-icon fa fa-dashboard"></i>Products locations</a>
                    </li>
 
                 <li class="active">
                        <a href="{{ route('coverage.index')}}"> <i class="menu-icon fa fa-dashboard"></i>Media Coverages</a>
                    </li> 

                    <li class="active">
                        <a href="{{ route('client.index') }}"> <i class="menu-icon fa fa-dashboard"></i>Client's testimonal</a>
                    </li>
                    
                    <li class="active">
                        <a href="{{ route('brand.index') }}"> <i class="menu-icon fa fa-dashboard"></i>Brands </a>
                    </li>
                    <li class="active">
                        <a href="{{ route('travel.index') }}"> <i class="menu-icon fa fa-dashboard"></i>Travel's offer </a>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Manage users</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="">add users</a></li>
                            <li><i class="fa fa-table"></i><a href="">view users</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="kj.html" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Roles and permission</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="">view permission</a></li>
                            <li><i class="fa fa-table"></i><a href="">view roles</a></li>
                        </ul>
                    </li>
                         
                    <li class="active">
                        <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> <i class="menu-icon fa fa-dashboard"></i>logout</a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                  
                
                   
                  
                  
                  
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>

    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
