<!DOCTYPE html>
<html>
<head>
	<title>listing site</title>
	 <link rel="shortcut icon" type="image/png" href="{{ asset('img/sitelogo.png') }}">
	<link rel="stylesheet" href="{{ ('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{ asset('css/bootstrap-grid.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">


<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">

<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

<script src="{{ asset('js/jquery.min1.js') }}"></script>

<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
 


</head>



    <style>

  owl-nav button {
  position: absolute;
  top: 50%;
  background-color: #000;
  color: #fff;
  margin: 333px;
  transition: all 0.3s ease-in-out;
}

.owl-nav button.owl-prev {
  margin-top:-18px;
  color:red;
  left: 0;
}
.owl-nav button.owl-next {
    margin-top:-18px;
  right: 0;
}

.owl-dots {
  text-align: center;
  padding-top: 15px;
}
.owl-dots button.owl-dot {
  width: 15px;
  height: 15px;
  border-radius: 50%;
  display: inline-block;
  background: #ccc;
  margin: 0 3px;
}
.owl-dots button.owl-dot.active {
  background-color:blue;
}
.owl-dots button.owl-dot:focus {
  outline: none;
}
.owl-nav button {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(255, 255, 255, 0.38) !important;
}
 {
    font-size: 70px;    
    position: relative;
    top: -5px;
}

span {
  
    font-size: 50px;    
    position: relative;
    top: -5px;
}   
    </style>



</head>
<body>
	<div class="maindiv">
	
  		  <div class="row menu">
		    <div class="col-md-4 menu-logo">
		      
		      	<a href="{{url('/')}}"><img src="{{ asset('img/s1.png') }}" width="200" height="50"></a>
		      
		    </div>

		    <div class="col-md-4 menu-text">
		      <h5> Welcome To Big Directory Platform </h5> 
		    </div>
		    <div class="col-md-4 ">
		    	<div class="voucher">
		    		
		    		<img src="{{ asset('img/discount.jpg') }}" alt="discount voucher card" height="50" width="100" class="discount-img">
		      		<img src="{{ asset('img/discount.jpg') }}" alt="Purchase cash voucher"height="50" width="100" class="discount-img">
		    	  </div>

		    	 <div class="col-sm mobile-size-display login-button">
		    		<img src="{{ asset('img/login.png') }}" height="">
		    		<h3 class="btn btn-default">Login</h3>
		    	</div>
		    </div>
  		 </div>
  		 <!----------menu Button -------------->

  		 <div class="row searh-row p-3">
		       <div class="col-md-4 " >
		    	<div class="row d-flex categories-box"  style="margin:5px;">
			    	<div class="catagory-icon">
				       <img src="{{ asset('img/catagory.png') }}">
	  				</div>
	  				<div class="catagory-text dropdown flex-grow-1">
	  				 				<select id="category"  class="form-control select2" style="border:none; width: 100%;background-color: transparent;">
                                    <option class="first" value="0">Select Catagory</option>
                                   @foreach(App\Category::all() as $category)
								   <option value="{{ $category->id }}" class="select2">{{ $category->category_name }}</option>
								   @endforeach
                                </select>
	  				</div>
  				</div>
		    	</div>

		    <div class="col-md-4">
		      <div class="row d-flex categories-box" style="margin:5px;">
		      		<div class="catagory-icon">
		      			<img src="{{ asset('img/location.png') }}" height="20px;" width="20px;">
		      		</div>
		      		<div class="catagory-text flex-grow-1">
	  					<select id="" class="form-control select3 " style="border:none; width: 100%;background-color: transparent;">
                                    <option class="first" value="0" >Select location</option>
                                    @foreach(App\Productlocation::all() as $location)
									<option class="">{{ $location->product_location }}</option>
                                   @endforeach
                        </select>
	  				</div>
		      </div>
		    </div>

		    <div class="col-md-4">
		     	<div class="d-flex flex-nowrap" style=" background-color: #ffffff; border:2px solid #111111; margin:5px;" >
				  <div class="order-1 ">
				  <form method="get" action="{{ url('/') }}">
				  		 <img src="{{ asset('img/texticon.png') }}" class="search-text" >
				  </div>
				  <div class="order-2 flex-grow-1 search-input">
				  	<input type="text" name="search" class="search" placeholder="what do you want to search?" style="border:none; width: 100%;background-color: transparent;">
				  </div>
				  <div class="order-3">
				<button type="submit"><img src="{{ asset('img/search.png') }}" class="search-icon"></button>
				  </div>
				  </form>
			 	</div>
			 </div>
  		</div>	
		  
		
					@yield('content')



				
				<!--Footer start -->
     <div class="container-fluid" style="width:100%">
      
					<div class="row p-3" style="background: #6B6B6B;">
					    <div class="col-md-2" style="text-align: right;">
					    <a href=""> <img src="{{ asset('img/fb.png') }}" height="30px;" width="30px;" padding="10px;"  margin="10px;"></a>
					      <a href=""><img src="{{ asset('img/whatsapp.png') }}" height="30px;" width="30px;" padding="10px;"></a>
					    </div>
					    <div class="col-md-7">
					     <div class="d-flex">
					     	<div class="footer-text"> <a href="{{url('/about-us')}}" style="color:white">About Us</a></div>
					     	<div class="footer-text"> <a href="{{url('/contact-us')}}" style="color:white">Contact US</a></div>
					     	<div class="footer-text"> <a href="{{url('/term')}}" style="color:white">Term & Conditions</a>  </div>
					     	<div class="footer-text"> <a href="{{url('/how-it-work')}}" style="color:white"> How it work</a> </div>
					     	<div class="footer-text"> <a href="{{url('/why-us')}}" style="color:white"> Why Us</a></div>
					     </div>
					    </div>
					    <div class="col-md-3">
					      <div class="footer-text" style="color:white">@Copy Right</div>
					    </div>
				  </div>
				</div>
					<!--End footer start-->
	

	

<script>
jQuery("#carousel").owlCarousel({
  autoplay: true,
  lazyLoad: true,
  loop: true,
  margin: 20,
   /*
  animateOut: 'fadeOut',
  animateIn: 'fadeIn',
  */
  responsiveClass: true,
  autoHeight: true,
  autoplayTimeout: 1500,
  smartSpeed: 1000,
  nav: true,
  responsive: {
    0: {
      items: 11
    },

    600: {
      items: 11
    },

    1024: {
      items: 11
    },

    1366: {
      items: 11
    }
  }
});
  </script>



<script>
jQuery("#carousel1").owlCarousel({
  autoplay: true,
  lazyLoad: true,
  loop: true,
  margin: 20,
   /*
  animateOut: 'fadeOut',
  animateIn: 'fadeIn',
  */
  responsiveClass: true,
  autoHeight: true,
  autoplayTimeout: 1000,
  smartSpeed: 900,
  nav: true,
  responsive: {
    0: {
      items: 10
    },

    600: {
      items: 10
    },

    1024: {
      items: 10
    },

    1366: {
      items: 10
    }
  }
});
  </script>

<script>
jQuery("#carousel2").owlCarousel({
  autoplay: true,
  lazyLoad: true,
  loop: true,
  margin: 20,
   /*
  animateOut: 'fadeOut',
  animateIn: 'fadeIn',
  */
  responsiveClass: true,
  autoHeight: true,
  autoplayTimeout: 7000,
  smartSpeed: 800,
  nav: true,
  responsive: {
    0: {
      items: 3
    },

    600: {
      items: 3
    },

    1024: {
      items: 3
    },

    1366: {
      items: 3
    }
  }
});
  </script>




 <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
   <script type="text/javascript" src="{{ asset('js/bootstrap-3.1.1.min.js') }}"></script>
 <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
</body>
</html>