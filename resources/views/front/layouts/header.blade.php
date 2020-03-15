<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/png" href="{{asset('images/logo.png')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta property="og:image" content="{{ asset('images/logo.png') }}">
    <link rel="stylesheet" type="css/text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>
    @if(isset($title))
        {{$title}}
    @else
        Mero Discount
    @endif
    </title>
    <style type="text/css">
        .__for-location select {
            -webkit-appearance: none;
              -moz-appearance: none;
              background: transparent;
              background-image: url("data:image/svg+xml;utf8,<svg fill='black' height='24' viewBox='0 0 24 24' width='24' xmlns='http://www.w3.org/2000/svg'><path d='M7 10l5 5 5-5z'/><path d='M0 0h24v24H0z' fill='none'/></svg>");
              background-repeat: no-repeat;
              background-position-x: 100%;
              background-position-y: 2px;
            
        }
    </style>

</head>

<body>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i style="color:#ffffff;" class="arrow-up"></i></button>
    <div class="navbar-expand-md navbar-dark fixed-top" style="background-color:#32CD32;">
        <div class="container">
            <div class="row">
                <div class="col-md-1 col-3 __logo-div">
                    <img class="img-fluid" src="{{ asset('images/logo.png') }}">
                </div>

                <div class="col-md-6 col-9 __location-div">
                    <div class="row" style="margin-top:1em;">
                        <div class="col-md-6 col-6 catagory-text">
                            <div class="row ___location-div">
                                <div class="col-md-2 col-2">
                                    <i style="" class="fa fa-map-marker"
                                        aria-hidden="true"></i>
                                </div>
                            
                                <div class="col-md-9 col-9 __for-location">
                                     <form method="get" action="">
                                    <select id="location" class="location form-control">
                                        <option class="first" value="0">Select location</option>
                                       @foreach(App\Productlocation::all() as $location)
                                        <option value="{{ $location->product_location }}">{{ $location->product_location }}</option>
                                      @endforeach
                                   
                                    </select>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-5 wrap-search">
                            <div class="row">
                                <div class="col-md-10 col-10 __for-input" style="padding-right:0px;">
                                    <input  type="text" placeholder=" Search.." class="search">
                                </div>
                                <div class="col-md-2 col-2 __fa-search"
                                    style="padding-left:0px;">
                        
               <button type="button" class="btn bbtn" onclick="search()"><i class="fa fa-search"></i></button>
                    </div>
                    </form>
                      
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-9 __form-div">
                    <div class="row __form-div-row" style="margin-top:20px">
                        <div class="col-md-6 col-6">
                            <div class="row __input-tx-d">
                                <div class="col-md-2 col-2" style="padding-left:5px;padding-right:0px;">
                                    <i class="fa fa-user-circle-o"></i>
                                </div>
                                <div class="col-md-10 col-10 for-textbox1" style="padding-right:0px;padding-left:4px;">
                                    <input type="text" placeholder="username" style="width:100%;">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-6">
                            <div class="row"
                                style="border-bottom:1px solid black;padding:0px;margin-left:0px;margin-right:0px;">
                                <div class="col-md-2 col-2" style="padding-left:5px;padding-right:0px;">
                                    <i class="fa fa-lock"></i>
                                </div>
                                <div class="col-md-10 col-10 for-textbox1" style="padding-right:0px;padding-left:0px;">
                                    <input type="text" placeholder="password" style="width:100%;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-1 col-1 __button-div" style="padding:0px;margin-top:1em;">
                    <span class="btn login-button btn-success">Login</span>
                </div>
            </div>

        </div>
    </div>
    <div class="container-fluid tab-container mobile-container jumbotron for-navbar-nav"
        style="padding:0px;margin-top:60px;background-color:#000000;border-radius:0px;">
        <div class="container">
            <div class="row" style="text-align: center;">
                <nav class="navbar navbar11 navbar-expand-md navbar-light bg-light" style="padding:0px;">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav" style="background-color:#b3b3b3;">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="nav-item">
                              <a class=" nav-link" href="{{ url('about-us') }}">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('contact-us') }}">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('tnc') }}">Terms and Conditions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('work') }}">How it's works</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('why-us') }}">Why us?</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>



    <script>

    function search(){

        $location=$(".location").val();
        $name=$(".search").val()
        window.location.href="{{ url('/search') }}" + "?location=" + $location.replace(/\s+/g, '+') + "&name=" +$name.replace(/\s+/g, '+');
    }

    </script>
