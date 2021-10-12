<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Vvveb">
    <!-- base href="/app/public/themes/default/" -->
    <base href="">
    <link rel="icon" href="{{asset('frontend/../../favicon.ico')}}">

    <title>ITI PROJECT</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('frontend/css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/css/stylesheet.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">

</head>

<body>
<div class="page-container">

    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <a class="navbar-brand" href="#">
            <!-- <img src="img/logo.png" width="120px"> -->
            <span>Event</span><span>awy</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainnav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="mainnav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item" active="">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Shop</a>
                </li>


            </ul>

        </div>
    </nav>

    @yield('home')

    <footer class="bg-faded text-muted py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5>Information</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Delivery Information</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms &amp; Conditions</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Customer Service</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Returns</a></li>
                        <li><a href="#">Site Map</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Extras</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Brands</a></li>
                        <li><a href="#">Gift Certificates</a></li>
                        <li><a href="#">Affiliate</a></li>
                        <li><a href="#">Specials</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>My Account</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Order History</a></li>
                        <li><a href="#">Wish List</a></li>
                        <li><a href="#">Newsletter</a></li>
                    </ul>
                </div>
            </div>
            <p class="float-right">
                <a href="#">Back to top</a>
            </p>
        </div>
    </footer>
</div>



<div class="alert alert-light alert-dismissible fade alert-top" role="alert">
    <div class="container">

        <div class="message">
            Product was added to cart.
        </div>


        <button type="button" class="close"  aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script -->
<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
<!-- script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script -->
<script src="{{asset('frontend/js/popper.min.js')}}"></script>
<script src="{{asset('frontend/js/main.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>

<script>
    $('.owl-carousel').owlCarousel({
        loop:true,
        navRewind:true,
        margin:10,
        nav:true,
        dots:false,
        navText: ['<i class="la la-angle-left"></i>','<i class="la la-angle-right"></i> '],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })
</script>
</body>
</html>



