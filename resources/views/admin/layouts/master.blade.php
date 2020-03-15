@include('admin.layouts.top')
<body>

@include('admin.layouts.navigation')
@include('admin.layouts.header')

@auth()
@yield('content')
@else

@endauth
      



       


</div>
       
    </div><!-- /#right-panel -->



    <!-- Right Panel -->
@include('admin.layouts.bottom')
