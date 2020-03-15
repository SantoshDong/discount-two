
    
    <!--Start the footer content-->
    <div class="container-fluid" style="margin-top:2em;background-color:#000000;color:#ffffff;">
        <div class="row footer-content" style="padding-top:10px;padding-bottom:10px;">
            <div class="col-md-2 __s_icon text-center" >
                <div class="row">
                    <div class="col-md-5 col-4"></div>
                    <div class="col-md-3 col-3">
                        <a href="#" class="fa fa-facebook" style="font-size:16px;"></a>
                    </div>
                    <div class="col-md-3 col-3">
                        <a href="#" class="fa fa-whatsapp" style="font-size:30px;"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-2" style="padding-top:8px;">
                <!--<a href="{{url('/about-us')}}">-->
                    Become Member
                <!--</a>-->
            </div>
            <div class="col-md-2" style="padding-top:8px;">
                <!--<a href="{{url('/contact-us')}}">-->
                    Get Our Franchis
                <!--</a>-->
            </div>
            <div class="col-md-2" style="padding-top:8px;">
                <!--<a href="{{url('/tnc')}}">-->
                    Sales
                <!--</a>-->
            </div>
            <div class="col-md-4 text-center" style="padding-top:8px;">
                <!--<a href="{{url('/work')}}">-->
                    <!--How it works-->
                <!--</a>-->
                  <p style="color:#ffffff;">Copyrights © 2020 - All rights reserved</p>
            </div>
            <!--<div class="col-md-2">-->
                <!--<a href="{{url('/why-us')}}">-->
                    <!--Why Us?-->
                <!--</a>-->
            <!--</div>-->
        </div>
    </div>
    <!--end of footer-->
    <!--<div class="container-fluid bottom-footer bg-dark pt-2">-->
    <!--    <div class="row">-->
    <!--        <div class="col-12 text-center" style="color:white;">-->
    <!--            <p>Copyrights © 2020 - All rights reserved</p>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
    </script>
    
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
    <script src="{{ asset('js/caurosell.js') }}"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>