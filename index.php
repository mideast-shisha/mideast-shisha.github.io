<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/plugins/animate.css/animate.min.css">
</head>
<body>
    
    <!-- Nav Menu On Small Devices -->
    <div class="h-100 nav-fixed bg-dasar hidden" id="navbarToggleExternalContent">
        <div class="bg-umum p-4 h-100">
            <div class="row">
                <div class="col-12 col-sm-12">
                    <div class="text-white x-text text-right" onclick="closeNav()">
                        &times;
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12">
                    <div class="text-center">
                        <img src="assets/images/remake.png" class="brand-logo-image-nav" alt="mideast logo" srcset="" >
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-sm-8 offset-sm-2 col-8 offset-2">
                    <div class="menu-nav text-white text-center">
                        <div class="menu-item-nav">
                            About Us
                        </div>
                        <div class="menu-item-nav">
                            Our Menu
                        </div>
                        <div class="menu-item-nav">
                            Our Shisha
                        </div>
                        <div class="menu-item-nav">
                            Reservation
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-sm-8 offset-sm-2 col-8 offset-2">
                    <div class="social-media-nav text-center">
                        <a href="" class="social-media-text">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="" class="social-media-text">
                            <i class="fab fa-twitter"></i>
                        </a>
                        
                        <a href="" class="social-media-text">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Nav Menu On Small Devices -->

    <!-- Nav bar on SM and SMALL Devices -->
    <div class="pos-f-t d-md-none" id="nav-bar">
        <div class="brand-logo-div text-center">
            <a class="navbar-brand" href="#" >
                <img src="assets/images/remake.png" class="brand-logo-image" alt="mideast logo" srcset="" >
            </a>
        </div>
        <nav class="navbar justify-content-center navbar-div bg-black navbar-dark" style="padding-bottom: 0; padding-top:0;">
            <button class="navbar-toggler text-center" type="button" onclick="openNav()" >
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </div>
    <!-- End Nav bar on SM and SMALL Devices -->

    <!-- Nav bar on MD LG And XL -->
    <nav class="d-md-block navbar navbar-expand-md fixed-top navbar-dark" id="mainNav" style="padding-top: 0px;padding-bottom: 0px;">
        <!--  Use flexbox utility classes to change how the child elements are justified  -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarToggle">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link nav-link js-scroll-trigger active menu-name " href="#about">About Us <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-name js-scroll-trigger" href="#ourmenu">Our Menu</a>
                </li>
            </ul>
            <!--   Show this only lg screens and up   -->
            <a class="navbar-brand d-none d-md-block brand-logo-div" href="#">
                <img src="assets/images/remake.png" class="brand-logo-image" alt="mideast logo" srcset="" >
            </a>
            
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link menu-name js-scroll-trigger" href="#ourshisha">Our Shisha</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-name js-scroll-trigger" href="#reservation">Reservation</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navbar on MD LG XL -->
    <!-- Start Header Banner -->
        <header>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                    <div class="carousel-item active">
                        <img src="assets/images/banner/2.jpg" alt="" srcset="" width="100%">
                        <div class="carousel-caption  text-left">
                            <h2 class="caption-title-slider">First Slide</h2>
                            <p class="caption-desctiption-slider">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum explicabo laboriosam deserunt alias dicta? Accusantium fuga libero deserunt aperiam totam quod quidem, animi mollitia praesentium. Earum consectetur quaerat dignissimos magnam!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/banner/3.jpg" alt="" srcset="" width="100%">
                        <div class="carousel-caption  text-left">
                            <h2 class="caption-title-slider">Second Slide</h2>
                            <p class="caption-desctiption-slider">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, delectus. Sapiente, dolorum harum dolor quia, aspernatur iste alias animi culpa et labore fugiat aliquam. Vero quos molestias neque! Excepturi, tempore.</p>
                        </div>
                    </div>
                    
                    <div class="carousel-item">
                        <img src="assets/images/banner/4.jpg" alt="" srcset="" width="100%">
                        <div class="carousel-caption  text-right ">
                            <h2 class="caption-title-slider">Third Slide</h2>
                            <p class="caption-desctiption-slider">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia facilis consequuntur minus numquam perferendis, error, aut aspernatur mollitia ab labore, quaerat dolore repellat iste velit sequi ex laborum itaque vero!.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/banner/5.jpg" alt="" srcset="" width="100%">
                        <div class="carousel-caption  text-center">
                            <h2 class="caption-title-slider">Four Slide</h2>
                            <p class="caption-desctiption-slider">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem consectetur commodi rerum esse. At a quidem harum. Quos nesciunt vitae molestias optio veritatis minima eaque saepe dicta, repellat exercitationem tempore.</p>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    <!-- End Header Banner -->
    <!-- Start Section About Home -->
        <section class="page-section" id="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="about-us-home-title">
                                    Welcome to Mideast <br> Shisha Bar and Lounge
                                    <hr class="border border-umum float-left">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="about-us-home-description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus sit inventore nostrum magni, doloribus sapiente magnam, odit qui rem debitis perspiciatis enim provident, dolor perferendis. Beatae adipisci quis vitae ratione. <a href="#">Read More >>> </a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-12 d-md-none d-sm-block d-block">
                                <div class="row align-items-center">
                                    <div class="col-sm-6 col-6">
                                        <div class="about-us-home-operation-icon text-center">
                                            <i class="fas fa-hourglass-half"></i>
                                        </div>
                                        <div class="about-us-home-operation-description text-center mt-2">
                                            <strong>Hour Of Operation</strong>
                                            <div class="text-black-50">
                                                9 AM to 8 PM Daily
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6  col-6 ">
                                        <div class="about-us-home-location-icon text-center ">
                                            <i class="fas fa-compass"></i>
                                        </div>
                                        <div class="about-us-home-location-description text-center mt-2">
                                            <strong>Location</strong>
                                            <div class="text-black-50">
                                                Jl. Sancang No.8, Bogor
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center mt-2">
                                    <div class="col-sm-6 col-6 offset-sm-3 offset-3 mx-auto">
                                        <div class="form-group text-center">
                                            <button class="btn btn-outline-primary">
                                                <i class="fab fa-waze  waze-icon"></i>
                                            </button>
                                            <button class="btn btn-outline-primary">
                                                <i class="fas fa-map-marked-alt waze-icon"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 d-md-block d-sm-none d-none">
                                <div class="row">
                                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2">
                                        <div class="about-us-home-operation-icon text-left">
                                            <i class="fas fa-hourglass-half"></i>
                                        </div>
                                    </div>
                                    <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10">
                                        <div class="about-us-home-operation-description text-left mt-2">
                                            <strong>Hour Of Operation</strong>
                                            <div class="text-black-50">
                                                9 AM to 8 PM Daily
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2">
                                        <div class="about-us-home-location-icon text-left ">
                                            <i class="fas fa-compass"></i>
                                        </div>
                                    </div>
                                    <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10">
                                        <div class="about-us-home-location-description text-left mt-2">
                                            <strong>Location</strong>
                                            <div class="text-black-50">
                                                Jl. Sancang No.8, Bogor
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <button class="btn btn-outline-primary">
                                                <i class="fab fa-waze  waze-icon"></i>
                                            </button>
                                            <button class="btn btn-outline-primary">
                                                <i class="fas fa-map-marked-alt waze-icon"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-4 mx-auto d-md-block d-none">
                        <img src="assets/images/banner/bg-about-us-home.jpg" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
    <!-- End Section About Home -->
    
    <!-- Start Section Our Best Menu -->
    <section class="page-section paralsec" style="background-image: url('assets/images/banner/bg-parallax.jpg');" id="ourmenu">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="our-menu-home-title-icon text-center">
                        <i class="flaticon-022-tray"></i>
                    </div>
                    <div class="our-menu-home-title-text">
                        <div class="fancy">
                            <span>Our Menu</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <ul class="nav nav-pills  justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#appetizer" role="tab" aria-controls="pills-appetizer" aria-selected="true">Appetizer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#main-course" role="tab" aria-controls="pills-main-course" aria-selected="false">Main Course</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#dessert" role="tab" aria-controls="pills-dessert" aria-selected="false">Dessert</a>
                        </li>
                    </ul>
                    <div class="tab-content mt-3">
                        <div class="tab-pane fade show active" id="appetizer" role="tabpanel" aria-labelledby="appetizer-tab">
                            <div class="row text-white">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="menu-item">
                                        <h5>Fruit saladi 
                                            <sup class="icon-kecil">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-ribbon"></i>
                                            </sup>
                                        </h5> 
                                        <div class="mi-meta">
                                            <p class="text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                            <div class="menu-price">$9.00</div>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <h5>Pumkin Soup With Crouton</h5>
                                        <div class="mi-meta">
                                            <p class="text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                            <div class="menu-price">$19.00</div>
                                        </div>
                                    </div>
                                    
                                    <div class="menu-item">
                                        <h5>Corn Cream Soup Garlic Bread</h5>
                                        <div class="mi-meta">
                                            <p class="text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                            <div class="menu-price">$19.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="menu-item">
                                        <h5>Fruit salad</h5>
                                        <div class="mi-meta">
                                            <p class="text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                            <div class="menu-price">$9.00</div>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <h5>Pumkin Soup With Crouton</h5>
                                        <div class="mi-meta">
                                            <p class="text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                            <div class="menu-price">$19.00</div>
                                        </div>
                                    </div>
                                    
                                    <div class="menu-item">
                                        <h5>Corn Cream Soup Garlic Bread</h5>
                                        <div class="mi-meta">
                                            <p class="text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                            <div class="menu-price">$19.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="main-course" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row text-white">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="menu-item">
                                        <h5>Chicken Parmigiana</h5>
                                        <div class="mi-meta">
                                            <p class="text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                            <div class="menu-price">$19.00</div>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <h5>Beed Bourguignon</h5>
                                        <div class="mi-meta">
                                            <p class="text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                            <div class="menu-price">$29.00</div>
                                        </div>
                                    </div>
                                    
                                    <div class="menu-item">
                                        <h5>Australian Sirloin Steak</h5>
                                        <div class="mi-meta">
                                            <p class="text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                            <div class="menu-price">$19.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="menu-item">
                                        <h5>Chicken Parmigiana</h5>
                                        <div class="mi-meta">
                                            <p class="text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                            <div class="menu-price">$19.00</div>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <h5>Beed Bourguignon</h5>
                                        <div class="mi-meta">
                                            <p class="text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                            <div class="menu-price">$29.00</div>
                                        </div>
                                    </div>
                                    
                                    <div class="menu-item">
                                        <h5>Australian Sirloin Steak</h5>
                                        <div class="mi-meta">
                                            <p class="text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                            <div class="menu-price">$19.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="dessert" role="tabpanel" aria-labelledby="dessert-tab">
                            <div class="row text-white">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="menu-item">
                                        <h5>Crème Brulee</h5>
                                        <div class="mi-meta">
                                            <p class="text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                            <div class="menu-price">$9.00</div>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <h5>
                                            Biskvitena Torta
                                            <sup class="icon-kecil">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-ribbon"></i>
                                            </sup>
                                        </h5>
                                        
                                        <div class="mi-meta">
                                            <p class="text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                            <div class="menu-price">$19.00</div>
                                        </div>
                                    </div>
                                    
                                    <div class="menu-item">
                                        <h5>Dobos Torta</h5>
                                        <div class="mi-meta">
                                            <p class="text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                            <div class="menu-price">$19.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="menu-item">
                                        <h5>Crème Brulee</h5>
                                        <div class="mi-meta">
                                            <p class="text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                            <div class="menu-price">$9.00</div>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <h5>Biskvitena Torta</h5>
                                        <div class="mi-meta">
                                            <p class="text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                            <div class="menu-price">$19.00</div>
                                        </div>
                                    </div>
                                    
                                    <div class="menu-item">
                                        <h5>
                                            Dobos Torta
                                            <sup class="icon-kecil">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-ribbon"></i>
                                            </sup>
                                        </h5>
                                        
                                        <div class="mi-meta">
                                            <p class="text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                            <div class="menu-price">$19.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 offset-xl-3 offset-lg-3 offset-md-3 ">
                    <button class="btn btn-outline-light form-control button-see-more-menu">See More</button>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section bg-white" id="ourshisha">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="our-shisha-home-title-icon text-center">
                        <img src="assets/fonts/shisha.png" alt="shisha icon" class="icon-shisha">
                    </div>
                    <div class="our-shisha-home-title-text">
                        <div class="fancy">
                            <span>Our Shisha</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <ul class="nav nav-pills  justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#tabbaco" role="tab" aria-controls="pills-tabbaco" aria-selected="true">Hookah Tabbaco</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#pipes" role="tab" aria-controls="pills-pipes" aria-selected="false">Hookah Pipes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#coal" role="tab" aria-controls="pills-coal" aria-selected="false">Hookah Coal</a>
                        </li>
                    </ul>
                    <div class="tab-content mt-3 border border-primary">
                        <div class="tab-pane  fade show active" id="tabbaco" role="tabpanel" aria-labelledby="tabbaco-tab">
                            <div class="container">
                                <div class="row text-white mt-2">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 mt-sm-2 mt-2">
                                        <div class="card bg-shisha">
                                            <img src="assets/images/shisha/1.png" class="card-img-top" alt="shisha 1">
                                            <div class="card-body">
                                                <p class="card-text text-dark">
                                                    <div class="shisha-description text-center">
                                                        Kairo Hokkah Inferno Tower
                                                    </div>
                                                    <div class="shisha-price text-center mt-3 text-primary">
                                                       $20.00 - $30.00
                                                    </div>
                                                </p>
                                            </div>
                                          </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 mt-sm-2 mt-2">
                                        <div class="card bg-shisha">
                                            <img src="assets/images/shisha/1.png" class="card-img-top" alt="shisha 1">
                                            <div class="card-body">
                                                <p class="card-text text-dark">
                                                    <div class="shisha-description text-center">
                                                        Kairo Hokkah Inferno Tower
                                                    </div>
                                                    <div class="shisha-price text-center mt-3 text-primary">
                                                       $20.00 - $30.00
                                                    </div>
                                                </p>
                                            </div>
                                          </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 mt-sm-2 mt-2">
                                        <div class="card bg-shisha">
                                            <img src="assets/images/shisha/1.png" class="card-img-top" alt="shisha 1">
                                            <div class="card-body">
                                                <p class="card-text text-dark">
                                                    <div class="shisha-description text-center">
                                                        Kairo Hokkah Inferno Tower
                                                    </div>
                                                    <div class="shisha-price text-center mt-3 text-primary">
                                                       $20.00 - $30.00
                                                    </div>
                                                </p>
                                            </div>
                                          </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 mt-sm-2 mt-2">
                                        <div class="card bg-shisha">
                                            <img src="assets/images/shisha/1.png" class="card-img-top" alt="shisha 1">
                                            <div class="card-body">
                                                <p class="card-text text-dark">
                                                    <div class="shisha-description text-center">
                                                        Kairo Hokkah Inferno Tower
                                                    </div>
                                                    <div class="shisha-price text-center mt-3 text-primary">
                                                       $20.00 - $30.00
                                                    </div>
                                                </p>
                                            </div>
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane  fade show " id="pipes" role="tabpanel" aria-labelledby="pipes-tab">
                            <div class="container">
                                <div class="row text-white mt-2">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 mt-sm-2 mt-2">
                                        <div class="card bg-shisha">
                                            <img src="assets/images/shisha/1.png" class="card-img-top" alt="shisha 1">
                                            <div class="card-body">
                                                <p class="card-text text-dark">
                                                    <div class="shisha-description text-center">
                                                        Kairo Hokkah Inferno Tower
                                                    </div>
                                                    <div class="shisha-price text-center mt-3 text-primary">
                                                       $20.00 - $30.00
                                                    </div>
                                                </p>
                                            </div>
                                          </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 mt-sm-2 mt-2">
                                        <div class="card bg-shisha">
                                            <img src="assets/images/shisha/1.png" class="card-img-top" alt="shisha 1">
                                            <div class="card-body">
                                                <p class="card-text text-dark">
                                                    <div class="shisha-description text-center">
                                                        Kairo Hokkah Inferno Tower
                                                    </div>
                                                    <div class="shisha-price text-center mt-3 text-primary">
                                                       $20.00 - $30.00
                                                    </div>
                                                </p>
                                            </div>
                                          </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 mt-sm-2 mt-2">
                                        <div class="card bg-shisha">
                                            <img src="assets/images/shisha/1.png" class="card-img-top" alt="shisha 1">
                                            <div class="card-body">
                                                <p class="card-text text-dark">
                                                    <div class="shisha-description text-center">
                                                        Kairo Hokkah Inferno Tower
                                                    </div>
                                                    <div class="shisha-price text-center mt-3 text-primary">
                                                       $20.00 - $30.00
                                                    </div>
                                                </p>
                                            </div>
                                          </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 mt-sm-2 mt-2">
                                        <div class="card bg-shisha">
                                            <img src="assets/images/shisha/1.png" class="card-img-top" alt="shisha 1">
                                            <div class="card-body">
                                                <p class="card-text text-dark">
                                                    <div class="shisha-description text-center">
                                                        Kairo Hokkah Inferno Tower
                                                    </div>
                                                    <div class="shisha-price text-center mt-3 text-primary">
                                                       $20.00 - $30.00
                                                    </div>
                                                </p>
                                            </div>
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane  fade show " id="coal" role="tabpanel" aria-labelledby="coal-tab">
                            <div class="container">
                                <div class="row text-white mt-2">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 mt-sm-2 mt-2">
                                        <div class="card bg-shisha">
                                            <img src="assets/images/shisha/1.png" class="card-img-top" alt="shisha 1">
                                            <div class="card-body">
                                                <p class="card-text text-dark">
                                                    <div class="shisha-description text-center">
                                                        Kairo Hokkah Inferno Tower
                                                    </div>
                                                    <div class="shisha-price text-center mt-3 text-primary">
                                                       $20.00 - $30.00
                                                    </div>
                                                </p>
                                            </div>
                                          </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 mt-sm-2 mt-2">
                                        <div class="card bg-shisha">
                                            <img src="assets/images/shisha/1.png" class="card-img-top" alt="shisha 1">
                                            <div class="card-body">
                                                <p class="card-text text-dark">
                                                    <div class="shisha-description text-center">
                                                        Kairo Hokkah Inferno Tower
                                                    </div>
                                                    <div class="shisha-price text-center mt-3 text-primary">
                                                       $20.00 - $30.00
                                                    </div>
                                                </p>
                                            </div>
                                          </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 mt-sm-2 mt-2">
                                        <div class="card bg-shisha">
                                            <img src="assets/images/shisha/1.png" class="card-img-top" alt="shisha 1">
                                            <div class="card-body">
                                                <p class="card-text text-dark">
                                                    <div class="shisha-description text-center">
                                                        Kairo Hokkah Inferno Tower
                                                    </div>
                                                    <div class="shisha-price text-center mt-3 text-primary">
                                                       $20.00 - $30.00
                                                    </div>
                                                </p>
                                            </div>
                                          </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 mt-sm-2 mt-2">
                                        <div class="card bg-shisha">
                                            <img src="assets/images/shisha/1.png" class="card-img-top" alt="shisha 1">
                                            <div class="card-body">
                                                <p class="card-text text-dark">
                                                    <div class="shisha-description text-center">
                                                        Kairo Hokkah Inferno Tower
                                                    </div>
                                                    <div class="shisha-price text-center mt-3 text-primary">
                                                       $20.00 - $30.00
                                                    </div>
                                                </p>
                                            </div>
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3" style="margin-bottom: 20px;">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 offset-xl-3 offset-lg-3 offset-md-3 offset-sm-3 offset-3 ">
                                <button class="btn btn-outline-dark form-control button-see-more-menu">See More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section paralsec" style="background-image: url('assets/images/banner/bg-parallax-2.jpg');" id="reservation">
        <div class="container">
            <div class="row d-md-flex d-none">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.447915837721!2d106.80455581419726!3d-6.591116066263138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5d20fb3e1b5%3A0x34e8e299d1f6928b!2sMid%20East%20Shisha%20Lounge!5e0!3m2!1sid!2sid!4v1602162612468!5m2!1sid!2sid" 
                        height="500px" 
                        width="100%"
                        frameborder="0" 
                        style="border:0;" 
                        allowfullscreen="" 
                        aria-hidden="false" 
                        tabindex="0"></iframe>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="reservation-title">
                        Book Your Table
                    </div>
                    <hr class="border border-white w-50 float-left">
                    <br>
                    <br>
                    <form>
                        <div class="form-group">
                            <label for="fullname" class="label-text">Fullname</label>
                            <input type="text" class="form-control" id="fullname" aria-describedby="fullnameHelp" placeholder="Fill with your fullname">
                        </div>
                        
                        <div class="form-group">
                            <label for="phoneNumber" class="label-text">Phone Number</label>
                            <input type="text" class="form-control" id="phoneNumber" aria-describedby="phoneNumberHelp" placeholder="Fill with your Phone Number">
                            <small id="phoneNumberHelp" class="form-text text-muted">We'll never share your phone number with anyone else.</small>
                        </div>
                        
                        <div class="form-group">
                            <label for="dateTime" class="label-text">Date & Time</label>
                            <input type="datetime-local" class="form-control" id="dateTime" aria-describedby="dateTimeHelp" placeholder="Fill with your booking date">
                        </div>
                        
                        <div class="form-group">
                            <label for="numberOfGuest" class="label-text">Number of guest</label>
                            <input type="number" class="form-control" id="numberOfGuest" aria-describedby="numberOfGuestHelp" max="50" min="1">
                        </div>
                        <button type="submit" class="btn btn-primary form-control">Submit</button>
                    </form>
                </div>
            </div>
            <div class="row d-block d-md-none">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="reservation-title">
                        Book Your Table
                    </div>
                    <hr class="border border-white w-50 float-left">
                    <br>
                    <br>
                    <form>
                        <div class="form-group">
                            <label for="fullname" class="label-text">Fullname</label>
                            <input type="text" class="form-control" id="fullname" aria-describedby="fullnameHelp" placeholder="Fill with your fullname">
                        </div>
                        
                        <div class="form-group">
                            <label for="phoneNumber" class="label-text">Phone Number</label>
                            <input type="text" class="form-control" id="phoneNumber" aria-describedby="phoneNumberHelp" placeholder="Fill with your Phone Number">
                            <small id="phoneNumberHelp" class="form-text text-muted">We'll never share your phone number with anyone else.</small>
                        </div>
                        
                        <div class="form-group">
                            <label for="dateTime" class="label-text">Date & Time</label>
                            <input type="datetime-local" class="form-control" id="dateTime" aria-describedby="dateTimeHelp" placeholder="Fill with your booking date">
                        </div>
                        
                        <div class="form-group">
                            <label for="numberOfGuest" class="label-text">Number of guest</label>
                            <input type="number" class="form-control" id="numberOfGuest" aria-describedby="numberOfGuestHelp" max="50" min="1">
                        </div>
                        <button type="submit" class="btn btn-primary form-control">Submit</button>
                      </form>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mt-4">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.447915837721!2d106.80455581419726!3d-6.591116066263138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5d20fb3e1b5%3A0x34e8e299d1f6928b!2sMid%20East%20Shisha%20Lounge!5e0!3m2!1sid!2sid!4v1602162612468!5m2!1sid!2sid" 
                        width="100%" 
                        height="500px" 
                        frameborder="0" 
                        style="border:0;" 
                        allowfullscreen="" 
                        aria-hidden="false" 
                        tabindex="0"></iframe>
                </div>
                
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container mt-3">
            <div class="row d-none d-md-flex" style="margin-bottom: 20px;">
                <div class="col-xl-7 col-lg-7 col-md-7 col-12 col-sm-12">
                    <div class="copyright">
                        &copy; Copyright 2020 Mideast Shisha And Lounge. <br> All Right Reserved
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-5 col-12 col-sm-12">
                    <div class="text-right">
                        <i class="fab fa-instagram icon-footer"></i>
                        <i class="fab fa-whatsapp icon-footer"></i>
                        <i class="fab fa-twitter icon-footer"></i>
                        <i class="fas fa-phone icon-footer"></i>
                    </div>
                </div>
            </div>
            
            <div class="row d-block d-md-none" style="margin-bottom: 20px;">
                <div class="col-xl-6 col-lg-6 col-md-6 col-12 col-sm-12">
                    <div class="text-center">
                        <i class="fab fa-instagram icon-footer"></i>
                        <i class="fab fa-whatsapp icon-footer"></i>
                        <i class="fab fa-twitter icon-footer"></i>
                        <i class="fas fa-phone icon-footer"></i>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-12 col-sm-12">
                    <div class="copyright text-center">
                        &copy; Copyright 2020 Mideast Shisha And Lounge <br> All Right Reserved
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        function openNav() 
        {
            $('#navbarToggleExternalContent').removeClass('animate__animated animate__slideOutUp');
            $('#navbarToggleExternalContent').addClass('nav-fixed');
            $('#navbarToggleExternalContent').addClass('animate__animated animate__slideInDown');
            $('#navbarToggleExternalContent').removeClass('hidden');
            
        }
        function closeNav() 
        {
            $('#navbarToggleExternalContent').removeClass('nav-fixed');
            $('#navbarToggleExternalContent').removeClass('animate__animated animate__slideInDown');
            $('#navbarToggleExternalContent').addClass('animate__animated animate__slideOutUp');
            setTimeout(function() {
                $('#navbarToggleExternalContent').addClass('hidden');
            }, 700);
        }
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>

    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <!-- Core theme JS-->
    <script src="assets/js/scripts.js"></script>
</body>
</html>