<!DOCTYPE html>
<html>
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Doze Cafe</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('food_assets/css/bootstrap.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('food_assets/css/style.css')}}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('food_assets/css/responsive.css')}}">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('food_assets/images/fevicon.png')}}" type="image/gif" />
    <!-- font css -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('food_assets/css/jquery.mCustomScrollbar.min.css')}}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
</head>
<body>
    <div class="header_section">
        <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand"href="index.html"><img src="{{ asset('food_assets/images/logo.png')}}"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        {{-- <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="coffees.html">Coffees</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shop.html">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.html">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li> --}}
                        </ul>
                @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else                    
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"><span class="user_icon"><i class="fa fa-user" aria-hidden="true"></i></span>Log in</a>                        
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"><span class="user_icon"><i class="fa fa-user" aria-hidden="true"></i></span>Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            </div>
        </nav>
        </div>
        <!-- banner section start --> 
        <div class="banner_section layout_padding">
        <div class="container">
            <div id="banner_slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="banner_img"><img src="{{ asset('food_assets/images/banner-img.png')}}"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="banner_taital_main">
                                <h1 class="banner_taital">coffee</h1>
                                <h5 class="tasty_text">Tasty Of DozeCafe</h5>
                                <p class="banner_text">more-or-less normal distribution of letters, as opposed to using </p>
                                <div class="btn_main">
                                <div class="about_bt"><a href="#">About Us</a></div>
                                <div class="callnow_bt active"><a href="#">Call Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="banner_img"><img src="{{ asset('food_assets/images/banner-img.png')}}"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="banner_taital_main">
                                <h1 class="banner_taital">coffee</h1>
                                <h5 class="tasty_text">Tasty Of DozeCafe</h5>
                                <p class="banner_text">more-or-less normal distribution of letters, as opposed to using </p>
                                <div class="btn_main">
                                <div class="about_bt"><a href="#">About Us</a></div>
                                <div class="callnow_bt active"><a href="#">Call Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="banner_img"><img src="{{ asset('food_assets/images/banner-img.png')}}"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="banner_taital_main">
                                <h1 class="banner_taital">coffee</h1>
                                <h5 class="tasty_text">Tasty Of DozeCafe</h5>
                                <p class="banner_text">more-or-less normal distribution of letters, as opposed to using </p>
                                <div class="btn_main">
                                <div class="about_bt"><a href="#">About Us</a></div>
                                <div class="callnow_bt active"><a href="#">Call Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#banner_slider" role="button" data-slide="prev">
                <i class="fa fa-arrow-left"></i>
                </a>
                <a class="carousel-control-next" href="#banner_slider" role="button" data-slide="next">
                <i class="fa fa-arrow-right"></i>
                </a>
            </div>
        </div>
        </div>
        <!-- banner section end -->
    </div>
    <!-- header section end -->
    <!-- coffee section start -->
    <div class="coffee_section layout_padding">
        <div class="container">
        <div class="row">
            <h1 class="coffee_taital">OUR Coffee OFFER</h1>
            <div class="bulit_icon"><img src="{{ asset('food_assets/images/bulit-icon.png')}}"></div>
        </div>
        </div>
        <div class="coffee_section_2">
        <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="coffee_img"><img src="{{ asset('food_assets/images/img-1.png')}}"></div>
                            <h3 class="types_text">TYPES OF COFFEE</h3>
                            <p class="looking_text">looking at its layout. The point of</p>
                            <div class="read_bt"><a href="#">Order Now</a></div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="coffee_img"><img src="{{ asset('food_assets/images/img-2.png')}}"></div>
                            <h3 class="types_text">BEAN VARIETIES</h3>
                            <p class="looking_text">looking at its layout. The point of</p>
                            <div class="read_bt"><a href="#">Order Now</a></div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="coffee_img"><img src="{{ asset('food_assets/images/img-3.png')}}"></div>
                            <h3 class="types_text">COFFEE & PASTRY</h3>
                            <p class="looking_text">looking at its layout. The point of</p>
                            <div class="read_bt"><a href="#">Order Now</a></div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="coffee_img"><img src="{{ asset('food_assets/images/img-4.png')}}"></div>
                            <h3 class="types_text">COFFEE TO GO</h3>
                            <p class="looking_text">looking at its layout. The point of</p>
                            <div class="read_bt"><a href="#">Order Now</a></div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="coffee_img"><img src="{{ asset('food_assets/images/img-1.png')}}"></div>
                            <h3 class="types_text">TYPES OF COFFEE</h3>
                            <p class="looking_text">looking at its layout. The point of</p>
                            <div class="read_bt"><a href="#">Order Now</a></div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="coffee_img"><img src="{{ asset('food_assets/images/img-2.png')}}"></div>
                            <h3 class="types_text">BEAN VARIETIES</h3>
                            <p class="looking_text">looking at its layout. The point of</p>
                            <div class="read_bt"><a href="#">Order Now</a></div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="coffee_img"><img src="{{ asset('food_assets/images/img-3.png')}}"></div>
                            <h3 class="types_text">COFFEE & PASTRY</h3>
                            <p class="looking_text">looking at its layout. The point of</p>
                            <div class="read_bt"><a href="#">Order Now</a></div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="coffee_img"><img src="{{ asset('food_assets/images/img-4.png')}}"></div>
                            <h3 class="types_text">COFFEE TO GO</h3>
                            <p class="looking_text">looking at its layout. The point of</p>
                            <div class="read_bt"><a href="#">Order Now</a></div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="coffee_img"><img src="{{ asset('food_assets/images/img-1.png')}}"></div>
                            <h3 class="types_text">TYPES OF COFFEE</h3>
                            <p class="looking_text">looking at its layout. The point of</p>
                            <div class="read_bt"><a href="#">Order Now</a></div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="coffee_img"><img src="{{ asset('food_assets/images/img-2.png')}}"></div>
                            <h3 class="types_text">BEAN VARIETIES</h3>
                            <p class="looking_text">looking at its layout. The point of</p>
                            <div class="read_bt"><a href="#">Order Now</a></div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="coffee_img"><img src="{{ asset('food_assets/images/img-3.png')}}"></div>
                            <h3 class="types_text">COFFEE & PASTRY</h3>
                            <p class="looking_text">looking at its layout. The point of</p>
                            <div class="read_bt"><a href="#">Order Now</a></div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="coffee_img"><img src="{{ asset('food_assets/images/img-4.png')}}"></div>
                            <h3 class="types_text">COFFEE TO GO</h3>
                            <p class="looking_text">looking at its layout. The point of</p>
                            <div class="read_bt"><a href="#">Order Now</a></div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i class="fa fa-arrow-left"></i>
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i class="fa fa-arrow-right"></i>
            </a>
        </div>
        </div>
    </div>
    <!-- coffee section end -->

    <!-- Food section start -->
    <div class="coffee_section layout_padding">
        <div class="container">
        <div class="row">
            <h1 class="coffee_taital">OUR FOOD's OFFER</h1>
            <div class="bulit_icon"><img src="{{ asset('food_assets/images/bulit-icon.png')}}"></div>
        </div>
        </div>
        <div class="coffee_section_2">
        <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="coffee_img"><img src="{{ asset('food_assets/images/food-1.jpg')}}"></div>
                            <h3 class="types_text">TYPES OF COFFEE</h3>
                            <p class="looking_text">looking at its layout. The point of</p>
                            <div class="read_bt"><a href="#">Order Now</a></div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="coffee_img"><img src="{{ asset('food_assets/images/food-2.jpg')}}"></div>
                            <h3 class="types_text">BEAN VARIETIES</h3>
                            <p class="looking_text">looking at its layout. The point of</p>
                            <div class="read_bt"><a href="#">Order Now</a></div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="coffee_img"><img src="{{ asset('food_assets/images/food-3.jpg')}}"></div>
                            <h3 class="types_text">COFFEE & PASTRY</h3>
                            <p class="looking_text">looking at its layout. The point of</p>
                            <div class="read_bt"><a href="#">Order Now</a></div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="coffee_img"><img src="{{ asset('food_assets/images/food-4.jpg')}}"></div>
                            <h3 class="types_text">COFFEE TO GO</h3>
                            <p class="looking_text">looking at its layout. The point of</p>
                            <div class="read_bt"><a href="#">Order Now</a></div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="coffee_img"><img src="{{ asset('food_assets/images/food-1.jpg')}}"></div>
                            <h3 class="types_text">TYPES OF COFFEE</h3>
                            <p class="looking_text">looking at its layout. The point of</p>
                            <div class="read_bt"><a href="#">Order Now</a></div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="coffee_img"><img src="{{ asset('food_assets/images/food-2.jpg')}}"></div>
                            <h3 class="types_text">BEAN VARIETIES</h3>
                            <p class="looking_text">looking at its layout. The point of</p>
                            <div class="read_bt"><a href="#">Order Now</a></div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="coffee_img"><img src="{{ asset('food_assets/images/food-3.jpg')}}"></div>
                            <h3 class="types_text">COFFEE & PASTRY</h3>
                            <p class="looking_text">looking at its layout. The point of</p>
                            <div class="read_bt"><a href="#">Order Now</a></div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="coffee_img"><img src="{{ asset('food_assets/images/food-4.jpg')}}"></div>
                            <h3 class="types_text">COFFEE TO GO</h3>
                            <p class="looking_text">looking at its layout. The point of</p>
                            <div class="read_bt"><a href="#">Order Now</a></div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="coffee_img"><img src="{{ asset('food_assets/images/food-1.jpg')}}"></div>
                            <h3 class="types_text">TYPES OF COFFEE</h3>
                            <p class="looking_text">looking at its layout. The point of</p>
                            <div class="read_bt"><a href="#">Order Now</a></div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="coffee_img"><img src="{{ asset('food_assets/images/food-2.jpg')}}"></div>
                            <h3 class="types_text">BEAN VARIETIES</h3>
                            <p class="looking_text">looking at its layout. The point of</p>
                            <div class="read_bt"><a href="#">Order Now</a></div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="coffee_img"><img src="{{ asset('food_assets/images/food-3.jpg')}}"></div>
                            <h3 class="types_text">COFFEE & PASTRY</h3>
                            <p class="looking_text">looking at its layout. The point of</p>
                            <div class="read_bt"><a href="#">Order Now</a></div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="coffee_img"><img src="{{ asset('food_assets/images/food-4.jpg')}}"></div>
                            <h3 class="types_text">COFFEE TO GO</h3>
                            <p class="looking_text">looking at its layout. The point of</p>
                            <div class="read_bt"><a href="#">Order Now</a></div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i class="fa fa-arrow-left"></i>
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i class="fa fa-arrow-right"></i>
            </a>
        </div>
        </div>
    </div>
    <!-- foods section end -->

    <!-- footer section start -->
    <div class="footer_section layout_padding mt-7">
        {{-- <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="address_text">Address</h1>
                <p class="footer_text">here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use </p>
                <div class="location_text">
                    <ul>
                    <li>
                        <a href="#">
                        <i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left_10">+01 1234567890</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left_10">demo@gmail.com</span>
                        </a>
                    </li>
                    </ul>
                </div>
                <div class="form-group">
                    <textarea class="update_mail" placeholder="Your Email" rows="5" id="comment" name="Your Email"></textarea>
                    <div class="subscribe_bt"><a href="#"><img src="{{ asset('food_assets/images/teligram-icon.png')}}"></a></div>
                </div>
            </div>
        </div>
        </div> --}}
    </div>
    <!-- footer section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
        <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <p class="copyright_text">2020 All Rights Reserved. Design by <a href="#">Free Html Templates</a></p>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="footer_social_icon">
                    <ul>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- copyright section end -->
    <!-- Javascript files-->
    <script src="{{ asset('food_assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('food_assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('food_assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('food_assets/js/jquery-3.0.0.min.js')}}"></script>
    <script src="{{ asset('food_assets/js/plugin.js')}}"></script>
    <!-- sidebar -->
    <script src="{{ asset('food_assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{ asset('food_assets/js/custom.js')}}"></script>
</body>
</html>