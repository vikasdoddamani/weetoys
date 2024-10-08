    <!DOCTYPE html>
    <html>

    <head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

    <title>Giftos</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />
    </head>

    <body>
    <div class="hero_area">
        <!-- Header section -->
        @include('home.header')
        <!-- End header section -->
    </div>
    <!-- End hero area -->

    <!-- Shop section -->
    <section class="shop_section layout_padding">
        <div class="container">
        <div class="heading_container heading_center">
            <h2>Our Products</h2>
        </div>
        <div class="row">
            @foreach($products as $product) <!-- Renamed for clarity -->
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="box">
                        <a href="{{ url('product_details', $product->id) }}">
                            <div class="img-box">
                                <img src="{{ asset('product/'.$product->images) }}" alt="{{ $product->title }}">
                            </div>
                            <div class="detail-box">
                                <h6>{{$product->title}}</h6>
                                <h6><span>&#8377; {{$product->price}}</span></h6>
                            </div>
                        </a>
                        <div style="padding:15px;">
                            <a class="btn btn-danger" href="{{ url('product_details', $product->id) }}">Details</a>
                            <a class="btn btn-primary" href="{{ url('add_cart', $product->id) }}">Add to cart</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        </div>
    </section>
    <!-- End shop section -->

    <!-- Info section -->
    <section class="info_section layout_padding2-top">
        <div class="social_container">
        <div class="social_box">
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
        </div>
        </div>
        <div class="info_container">
        <div class="container">
            <div class="row">
            <div class="col-md-6 col-lg-3">
                <h6>ABOUT US</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="info_form">
                <h5>Newsletter</h5>
                <form action="#">
                    <input type="email" placeholder="Enter your email">
                    <button>Subscribe</button>
                </form>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <h6>NEED HELP</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="col-md-6 col-lg-3">
                <h6>CONTACT US</h6>
                <div class="info_link-box">
                <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><span> Gb road 123 london Uk </span></a>
                <a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span>+01 12345678901</span></a>
                <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><span> demo@gmail.com</span></a>
                </div>
            </div>
            </div>
        </div>
        </div>
        <!-- Footer section -->
        <footer class="footer_section">
        <div class="container">
            <p>&copy; <span id="displayYear"></span> All Rights Reserved By <a href="https://html.design/">Free Html Templates</a></p>
        </div>
        </footer>
        <!-- End footer section -->
    </section>
    <!-- End info section -->

    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    </body>

    </html>
