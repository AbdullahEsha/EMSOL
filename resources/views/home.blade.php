<!DOCTYPE html>
<html lang="en">


<!-- molla/index-19.html  22 Nov 2019 10:00:58 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Molla - Bootstrap eCommerce Template</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <link rel="icon" href="{{asset('img/favicon.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('common/assets/icons/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('common/assets/images/icons/site.html')}}">
    <link rel="mask-icon" href="{{asset('common/assets/images/icons/safari-pinned-tab.svg')}}" color="#666666">
    <link rel="icon" href="{{asset('img/favicon.png')}}">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="{{asset('common/assets/images/icons/browserconfig.xml')}}">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet"
        href="{{asset('common/assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css')}}">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{asset('common/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('common/assets/css/plugins/owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('common/assets/css/plugins/magnific-popup/magnific-popup.css')}}">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{asset('common/assets/css/skins/skin-demo-19.css')}}">
    <link rel="stylesheet" href="{{asset('common/assets/css/demos/demo-19.css')}}">
    <link rel="stylesheet" href="{{asset('common/assets/css/style.css')}}">
</head>

<body>
    <div class="page-wrapper">
        <div class="wrap-container">
            <header class="header header-intro-clearance header-3">
                <div class="header-top">
                    <div class="container">
                        <div class="header-left">
                            <a href="tel:#"><i class="icon-phone"></i>Call: +0123 456 789</a>
                        </div><!-- End .header-left -->

                        <div class="header-right">

                            <ul class="top-menu">
                                <li>
                                    <a href="#">Links</a>
                                    <ul>
                                        <li><a href="#signin-modal" data-toggle="modal">Sign in / Sign up</a></li>
                                    </ul>
                                </li>
                            </ul><!-- End .top-menu -->
                        </div><!-- End .header-right -->

                    </div><!-- End .container -->
                </div><!-- End .header-top -->

                <div class="header-middle">
                    <div class="container">
                        <div class="header-left">
                            <button class="mobile-menu-toggler">
                                <span class="sr-only">Toggle mobile menu</span>
                                <i class="icon-bars"></i>
                            </button>

                            <a href="index.html" class="logo">
                                <img src="{{asset('img/emsolLogo.png')}}" alt="Molla Logo" width="180px" height="50px">
                            </a>
                        </div><!-- End .header-left -->

                        <div class="header-center">
                            <div class="header-search header-search-extended header-search-visible d-none d-lg-block">
                                <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                                <form action="#" method="get">
                                    <div class="header-search-wrapper search-wrapper-wide">
                                        <label for="q" class="sr-only">Search</label>
                                        <button class="btn btn-primary" type="submit"><i
                                                class="icon-search"></i></button>
                                        <input type="search" class="form-control" name="q" id="q"
                                            placeholder="Search product ..." required>
                                    </div><!-- End .header-search-wrapper -->
                                </form>
                            </div><!-- End .header-search -->
                        </div>

                        <div class="header-right">
                            <div class="header-dropdown-link">
                                <div class="account">
                                    <a href="dashboard.html" title="My account">
                                        <div class="icon">
                                            <i class="icon-user"></i>
                                        </div>
                                        <p>Account</p>
                                    </a>
                                </div><!-- End .compare-dropdown -->

                                <div class="wishlist">
                                    <a href="wishlist.html" title="Wishlist">
                                        <div class="icon">
                                            <i class="icon-heart-o"></i>
                                            <span class="wishlist-count badge">3</span>
                                        </div>
                                        <p>Wishlist</p>
                                    </a>
                                </div><!-- End .compare-dropdown -->

                                <div class="dropdown cart-dropdown">
                                    <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false" data-display="static">
                                        <div class="icon">
                                            <i class="icon-shopping-cart"></i>
                                            <span class="cart-count">2</span>
                                        </div>
                                        <p>Cart</p>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <div class="dropdown-cart-products">
                                            <div class="product">
                                                <div class="product-cart-details">
                                                    <h4 class="product-title">
                                                        <a href="product.html">Beige knitted elastic runner shoes</a>
                                                    </h4>

                                                    <span class="cart-product-info">
                                                        <span class="cart-product-qty">1</span>
                                                        x $84.00
                                                    </span>
                                                </div><!-- End .product-cart-details -->

                                                <figure class="product-image-container">
                                                    <a href="product.html" class="product-image">
                                                        <img src="{{asset('common/assets/images/products/cart/product-1.jpg')}}"
                                                            alt="product">
                                                    </a>
                                                </figure>
                                                <a href="#" class="btn-remove" title="Remove Product"><i
                                                        class="icon-close"></i></a>
                                            </div><!-- End .product -->

                                            <div class="product">
                                                <div class="product-cart-details">
                                                    <h4 class="product-title">
                                                        <a href="product.html">Blue utility pinafore denim dress</a>
                                                    </h4>

                                                    <span class="cart-product-info">
                                                        <span class="cart-product-qty">1</span>
                                                        x $76.00
                                                    </span>
                                                </div><!-- End .product-cart-details -->

                                                <figure class="product-image-container">
                                                    <a href="product.html" class="product-image">
                                                        <img src="{{asset('common/assets/images/products/cart/product-2.jpg')}}"
                                                            alt="product">
                                                    </a>
                                                </figure>
                                                <a href="#" class="btn-remove" title="Remove Product"><i
                                                        class="icon-close"></i></a>
                                            </div><!-- End .product -->
                                        </div><!-- End .cart-product -->

                                        <div class="dropdown-cart-total">
                                            <span>Total</span>

                                            <span class="cart-total-price">$160.00</span>
                                        </div><!-- End .dropdown-cart-total -->

                                        <div class="dropdown-cart-action">
                                            <a href="cart.html" class="btn btn-primary">View Cart</a>
                                            <a href="checkout.html"
                                                class="btn btn-outline-primary-2"><span>Checkout</span><i
                                                    class="icon-long-arrow-right"></i></a>
                                        </div><!-- End .dropdown-cart-total -->
                                    </div><!-- End .dropdown-menu -->
                                </div><!-- End .cart-dropdown -->
                            </div>
                        </div><!-- End .header-right -->
                    </div><!-- End .container -->
                </div><!-- End .header-middle -->

                <!-- End .header-bottom -->
            </header><!-- End .header -->
        </div>
        <div class="wrap-container">
            <main class="main">
                <div class="mb-2"></div><!-- End .mb-2 -->

                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 d-none d-xl-block">
                            <nav class="side-nav">
                                <!-- End .sidenav-title -->
                                <ul class="menu-vertical sf-arrows">
                                    <li>
                                        <a href="product.html" class="sf-with-ul">Playstation</a>

                                        <div class="megamenu megamenu-sm">
                                            <div class="row no-gutters">
                                                <div class="col-md-6">
                                                    <div class="menu-col">
                                                        <div class="menu-title">Games Software</div>
                                                        <!-- End .menu-title -->
                                                        <ul>
                                                            <li><a href="#">Action</a></li>
                                                            <li><a href="#">Adventure</a></li>
                                                            <li><a href="#">Sports</a></li>
                                                            <li><a href="#">Strategy</a></li>
                                                            <li><a href="#">Role-Playing Game</a></li>
                                                            <li><a href="#">Action-Adventure</a></li>
                                                            <li><a href="#">Stealth</a></li>
                                                            <li><a href="#">Shooter</a></li>
                                                        </ul>
                                                    </div><!-- End .menu-col -->
                                                </div><!-- End .col-md-6 -->

                                                <div class="col-md-6">
                                                    <div class="banner banner-overlay">
                                                        <a href="category.html">
                                                            <img src="{{asset('common/assets/images/demos/demo-19/menu/banner-2.jpg')}}"
                                                                alt="Banner">
                                                        </a>
                                                    </div><!-- End .banner -->
                                                </div><!-- End .col-md-6 -->
                                            </div><!-- End .row -->
                                        </div><!-- End .megamenu megamenu-sm -->
                                    </li>
                                    <li class="megamenu-container">
                                        <a href="category.html" class="sf-with-ul">XBOX</a>

                                        <div class="megamenu">
                                            <div class="row no-gutters">
                                                <div class="col-md-8">
                                                    <div class="menu-col">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="menu-title">Games Software</div>
                                                                <!-- End .menu-title -->
                                                                <ul>
                                                                    <li><a href="#">Action</a></li>
                                                                    <li><a href="#">Adventure</a></li>
                                                                    <li><a href="#">Music</a></li>
                                                                    <li><a href="#">Racing</a></li>
                                                                    <li><a href="#">Sports</a></li>
                                                                    <li><a href="#">Strategy</a></li>
                                                                    <li><a href="#">Role-Playing Game</a></li>
                                                                    <li><a href="#">Action-Adventure</a></li>
                                                                    <li><a href="#">Stealth</a></li>
                                                                    <li><a href="#">Shooter</a></li>
                                                                    <li><a href="#">Horror</a></li>
                                                                </ul>
                                                            </div><!-- End .col-md-6 -->

                                                            <div class="col-md-6">
                                                                <div class="menu-title">Game Console & Accessories</div>
                                                                <!-- End .menu-title -->
                                                                <ul>
                                                                    <li><a href="#">Console</a></li>
                                                                    <li><a href="#">Headsets</a></li>
                                                                    <li><a href="#">Collectibles</a></li>
                                                                    <li><a href="#">Gaming Chairs</a></li>
                                                                    <li><a href="#">Controller</a></li>
                                                                    <li><a href="#">Digital</a></li>
                                                                </ul>
                                                            </div><!-- End .col-md-6 -->
                                                        </div><!-- End .row -->
                                                    </div><!-- End .menu-col -->
                                                </div><!-- End .col-md-8 -->

                                                <div class="col-md-4">
                                                    <div class="banner banner-overlay">
                                                        <a href="category.html" class="banner banner-menu">
                                                            <img src="{{asset('common/assets/images/demos/demo-19/menu/banner-1.jpg')}}"
                                                                alt="Banner">
                                                        </a>
                                                    </div><!-- End .banner banner-overlay -->
                                                </div><!-- End .col-md-4 -->
                                            </div><!-- End .row -->
                                        </div><!-- End .megamenu -->
                                    </li>
                                    <li><a href="#">Nindendo</a></li>
                                    <li><a href="#">PC Gaming</a></li>
                                    <li><a href="#">Phones & Tablets</a></li>
                                    <li><a href="#">Pre-owned</a></li>
                                    <li><a href="#">Deals</a></li>
                                    <li><a href="#">Coming Soon</a></li>
                                    <li><a href="#">Accessories</a></li>
                                    <li><a href="#">Accessories</a></li>
                                </ul><!-- End .menu -->
                            </nav><!-- End .side-nav -->
                        </div>
                        <!-- End .col-lg-3 -->

                        <div class="col-lg-8 col-xl-6">
                            <div class="banner banner-overlay banner-lg  content-left">
                                <a href="#">
                                    <img src="{{asset('common/assets/images/demos/demo-19/banners/banner-1.jpg')}}"
                                        alt="Banner">
                                </a>
                                <div class="banner-content">
                                    <h4 class="banner-subtitle">Pre-order now</h4>
                                    <img src="{{asset('common/assets/images/demos/demo-19/banners/banner-1-title.png')}}"
                                        alt="Banner 1 Title" width="217" height="54" class="mb-1">
                                    <a href="#" class="banner-link size-lg">Pre-Order Now<i
                                            class="icon-long-arrow-right"></i></a>
                                </div>
                            </div><!-- End .banner -->
                        </div><!-- End .col-lg-6 -->

                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="banner banner-overlay banner-sm content-right">
                                <a href="#">
                                    <img src="{{asset('common/assets/images/demos/demo-19/banners/banner-2.jpg')}}"
                                        alt="Banner">
                                </a>
                                <div class="banner-content text-right">
                                    <h4 class="banner-subtitle">Weekend Offer</h4>
                                    <img class="banner-title-img"
                                        src="{{asset('common/assets/images/demos/demo-19/banners/banner-2-title.png')}}"
                                        alt="Banner-2">
                                    <h4 class="banner-price">Save<span class="price">$19,99</span></h4>
                                    <a href="#" class="banner-link">Buy Now<i class="icon-long-arrow-right"></i></a>
                                </div>
                            </div><!-- End .banner -->

                            <div class="banner banner-overlay d-none d-lg-block banner-sm content-right align-center">
                                <a href="#">
                                    <img src="{{asset('common/assets/images/demos/demo-19/banners/banner-3.jpg')}}"
                                        alt="Banner">
                                </a>
                                <div class="banner-content text-right">
                                    <img class="banner-title-img"
                                        src="{{asset('common/assets/images/demos/demo-19/banners/banner-3-title.png')}}"
                                        alt="Banner-3">
                                    <h5 class="text-white">35% OFF</h5>
                                    <a href="#" class="banner-link">Buy Now<i class="icon-long-arrow-right"></i></a>
                                </div>
                            </div><!-- End .banner -->
                        </div><!-- End .col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="banner banner-overlay banner-sm content-right align-center">
                                <a href="#">
                                    <img src="{{asset('common/assets/images/demos/demo-19/banners/banner-4.jpg')}}"
                                        alt="Banner">
                                </a>
                                <div class="banner-content" style="left: auto; right: 3rem; align-items: flex-start;">
                                    <h4 class="banner-subtitle">Weekend Sale</h4>
                                    <img class="banner-title-img"
                                        src="{{asset('common/assets/images/demos/demo-19/banners/banner-4-title.png')}}"
                                        alt="Banner-4">
                                    <h4 class="banner-price"><span class="off">25% off</span></h4>
                                    <a href="#" class="banner-link">Buy Now<i class="icon-long-arrow-right"></i></a>
                                </div>
                            </div><!-- End .banner -->
                        </div><!-- End .col-lg-3 -->

                        <div class="col-lg-9">
                            <div class="banner banner-overlay banner-lg">
                                <a href="#">
                                    <img src="{{asset('common/assets/images/demos/demo-19/banners/banner-5.jpg')}}"
                                        alt="Banner">
                                </a>
                                <div class="banner-content">
                                    <h4 class="banner-subtitle">Amazing Value</h4>
                                    <img class="banner-title-img mb-1"
                                        src="{{asset('common/assets/images/demos/demo-19/banners/banner-5-title.png')}}"
                                        alt="Banner-5">
                                    <a href="#" class="banner-link">Pre-Order Now<i
                                            class="icon-long-arrow-right"></i></a>
                                </div>
                            </div><!-- End .banner -->
                        </div><!-- End .col-lg-9 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
                <br />
                <div class="container">
                    <div class="heading heading-flex mb-2 mb-lg-3">
                        <div class="heading-left">
                            <h2 class="title mb-0">Catagories</h2><!-- End .title -->
                        </div><!-- End .heading-left -->
                    </div><!-- End .heading -->

                    <div class="icon-boxes-container icon-boxes-separator bg-transparent">
                        <div class="container" align="center">
                            <div class="row">
                                <div class="col-sm-6 col-md-2 card-color-one">
                                    <div id="catagory-icon-card">
                                        <div class="icon-container" align="center">
                                            <img src="https://cdn-icons-png.flaticon.com/512/2904/2904190.png" alt=""
                                                height="100px">
                                            <br />
                                            <h6>
                                                <a href="/product">Mask</a>
                                            </h6><!-- End .entry-title -->
                                        </div><!-- End .entry-meta -->
                                    </div><!-- End .entry-body -->
                                </div>
                                <div class="col-sm-6 col-md-2 card-color-two">
                                    <div id="catagory-icon-card">
                                        <div class="icon-container" align="center">
                                            <img src="https://cdn-icons-png.flaticon.com/512/2877/2877907.png" alt=""
                                                height="100px">
                                            <br />
                                            <h6>
                                                <a href="/product">Disinfect Spray</a>
                                            </h6><!-- End .entry-title -->
                                        </div><!-- End .entry-meta -->
                                    </div><!-- End .entry-body -->
                                </div>
                                <div class="col-sm-6 col-md-2 card-color-one">
                                    <div id="catagory-icon-card">
                                        <div class="icon-container" align="center">
                                            <img src="https://cdn-icons-png.flaticon.com/512/3952/3952978.png" alt=""
                                                height="100px">
                                            <br />
                                            <h6>
                                                <a href="/product">Heart Monitor</a>
                                            </h6><!-- End .entry-title -->
                                        </div><!-- End .entry-meta -->
                                    </div><!-- End .entry-body -->
                                </div>
                                <div class="col-sm-6 col-md-2 card-color-two">
                                    <div id="catagory-icon-card">
                                        <div class="icon-container" align="center">
                                            <img src="https://cdn-icons-png.flaticon.com/512/883/883407.png" alt=""
                                                height="100px">
                                            <br />
                                            <h6>
                                                <a href="/product">Medicine Supply</a>
                                            </h6><!-- End .entry-title -->
                                        </div><!-- End .entry-meta -->
                                    </div><!-- End .entry-body -->
                                </div>
                                <div class="col-sm-6 col-md-2 card-color-one">
                                    <div id="catagory-icon-card">
                                        <div class="icon-container" align="center">
                                            <img src="https://cdn-icons-png.flaticon.com/512/4465/4465221.png" alt=""
                                                height="100px">
                                            <br />
                                            <h6>
                                                <a href="/product">Medical Bed</a>
                                            </h6><!-- End .entry-title -->
                                        </div><!-- End .entry-meta -->
                                    </div><!-- End .entry-body -->
                                </div>
                                <div class="col-sm-6 col-md-2 card-color-two">
                                    <div id="catagory-icon-card">
                                        <div class="icon-container" align="center">
                                            <img src="https://cdn-icons-png.flaticon.com/512/3481/3481172.png" alt=""
                                                height="100px">
                                            <br />
                                            <h6>
                                                <a href="/product">Emergency Support</a>
                                            </h6><!-- End .entry-title -->
                                        </div><!-- End .entry-meta -->
                                    </div><!-- End .entry-body -->
                                </div>
                            </div>
                        </div><!-- End .container -->
                    </div><!-- End .icon-boxes-container -->
                </div><!-- End .container -->



                <div class="bg-light pt-3 pb-5 mb-5">
                    <div class="container">
                        <ul class="nav nav-pills nav-big nav-border-anim justify-content-center mb-5" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="products-trending-link" data-toggle="tab"
                                    href="#products-trending-tab" role="tab" aria-controls="products-trending-tab"
                                    aria-selected="true">Now Trending</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="products-new-link" data-toggle="tab" href="#products-new-tab"
                                    role="tab" aria-controls="products-new-tab" aria-selected="false">New Releases</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="products-best-link" data-toggle="tab" href="#products-best-tab"
                                    role="tab" aria-controls="products-best-tab" aria-selected="false">Best-Rated</a>
                            </li>
                        </ul>
                        <div class="tab-content tab-content-carousel">
                            <div class="tab-pane p-0 fade show active" id="products-trending-tab" role="tabpanel"
                                aria-labelledby="products-trending-link">
                                <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow"
                                    data-toggle="owl" data-owl-options='{
                                        "nav": false, 
                                        "dots": true,
                                        "margin": 20,
                                        "loop": false,
                                        "responsive": {
                                            "0": {
                                                "items":2
                                            },
                                            "480": {
                                                "items":2
                                            },
                                            "768": {
                                                "items":3
                                            },
                                            "992": {
                                                "items":4
                                            },
                                            "1200": {
                                                "items":5,
                                                "nav": true
                                            }
                                        }
                                    }'>
                                    <div class="product">
                                        <figure class="product-media">
                                            <span class="product-label label-sale">Sale</span>
                                            <a href="product.html">
                                                <img src="{{asset('common/assets/images/demos/demo-19/products/product-1.jpg')}}"
                                                    alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to Wishlist"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Shooter</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Call of Duty <br>WWII -
                                                    Gold Edition</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                <span class="new-price">$24.00</span>
                                                <span class="old-price">Was $59.99</span>
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->

                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="{{asset('common/assets/images/demos/demo-19/products/product-2.jpg')}}"
                                                    alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to Wishlist"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Shooter</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">World War Z</a></h3>
                                            <!-- End .product-title -->
                                            <div class="product-price">
                                                $39.99
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->

                                    <div class="product">
                                        <figure class="product-media">
                                            <span class="product-label label-top">Top</span>
                                            <a href="product.html">
                                                <img src="{{asset('common/assets/images/demos/demo-19/products/product-3.jpg')}}"
                                                    alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to Wishlist"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Shooter</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Borderlands: <br>The
                                                    Handsome Collection</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $59.99
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->

                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="{{asset('common/assets/images/demos/demo-19/products/product-4.jpg')}}"
                                                    alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to Wishlist"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Action & adventure</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">The Witcher 3: Wild
                                                    Hunt</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $39.99
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->

                                    <div class="product">
                                        <figure class="product-media">
                                            <span class="product-label label-sale">Sale</span>
                                            <a href="product.html">
                                                <img src="{{asset('common/assets/images/demos/demo-19/products/product-5.jpg')}}"
                                                    alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to Wishlist"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Action & adventure</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">GTA Online: Criminal
                                                    Enterprise Starter Pack</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                <span class="new-price">$19.49</span>
                                                <span class="old-price">Was $24.49</span>
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->

                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="{{asset('common/assets/images/demos/demo-19/products/product-6.jpg')}}"
                                                    alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to Wishlist"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Shooter</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Tom Clancy’s <br>Ghost
                                                    Recon Wildlands</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $49.99
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .owl-carousel -->
                            </div><!-- .End .tab-pane -->
                            <div class="tab-pane p-0 fade" id="products-new-tab" role="tabpanel"
                                aria-labelledby="products-new-link">
                                <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow"
                                    data-toggle="owl" data-owl-options='{
                                        "nav": false, 
                                        "dots": true,
                                        "margin": 20,
                                        "loop": false,
                                        "responsive": {
                                            "0": {
                                                "items":2
                                            },
                                            "480": {
                                                "items":2
                                            },
                                            "768": {
                                                "items":3
                                            },
                                            "992": {
                                                "items":4
                                            },
                                            "1200": {
                                                "items":5,
                                                "nav": true
                                            }
                                        }
                                    }'>
                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="{{asset('common/assets/images/demos/demo-19/products/product-6.jpg')}}"
                                                    alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to Wishlist"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Shooter</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Tom Clancy’s <br>Ghost
                                                    Recon Wildlands</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $49.99
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->

                                    <div class="product">
                                        <figure class="product-media">
                                            <span class="product-label label-sale">Sale</span>
                                            <a href="product.html">
                                                <img src="{{asset('common/assets/images/demos/demo-19/products/product-5.jpg')}}"
                                                    alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to Wishlist"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Action & adventure</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">GTA Online: Criminal
                                                    Enterprise Starter Pack</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                <span class="new-price">$19.49</span>
                                                <span class="old-price">Was $24.49</span>
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->

                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="{{asset('common/assets/images/demos/demo-19/products/product-2.jpg')}}"
                                                    alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to Wishlist"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Shooter</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">World War Z</a></h3>
                                            <!-- End .product-title -->
                                            <div class="product-price">
                                                $39.99
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->

                                    <div class="product">
                                        <figure class="product-media">
                                            <span class="product-label label-sale">Sale</span>
                                            <a href="product.html">
                                                <img src="{{asset('common/assets/images/demos/demo-19/products/product-1.jpg')}}"
                                                    alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to Wishlist"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Shooter</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Call of Duty <br>WWII -
                                                    Gold Edition</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                <span class="new-price">$24.00</span>
                                                <span class="old-price">Was $59.99</span>
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->

                                    <div class="product">
                                        <figure class="product-media">
                                            <span class="product-label label-top">Top</span>
                                            <a href="product.html">
                                                <img src="{{asset('common/assets/images/demos/demo-19/products/product-3.jpg')}}"
                                                    alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to Wishlist"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Shooter</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Borderlands: <br>The
                                                    Handsome Collection</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $59.99
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->

                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="{{asset('common/assets/images/demos/demo-19/products/product-4.jpg')}}"
                                                    alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to Wishlist"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Action & adventure</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">The Witcher 3: Wild
                                                    Hunt</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $39.99
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .owl-carousel -->
                            </div><!-- .End .tab-pane -->
                            <div class="tab-pane p-0 fade" id="products-best-tab" role="tabpanel"
                                aria-labelledby="products-best-link">
                                <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow"
                                    data-toggle="owl" data-owl-options='{
                                        "nav": false, 
                                        "dots": true,
                                        "margin": 20,
                                        "loop": false,
                                        "responsive": {
                                            "0": {
                                                "items":2
                                            },
                                            "480": {
                                                "items":2
                                            },
                                            "768": {
                                                "items":3
                                            },
                                            "992": {
                                                "items":4
                                            },
                                            "1200": {
                                                "items":5,
                                                "nav": true
                                            }
                                        }
                                    }'>
                                    <div class="product">
                                        <figure class="product-media">
                                            <span class="product-label label-top">Top</span>
                                            <a href="product.html">
                                                <img src="{{asset('common/assets/images/demos/demo-19/products/product-3.jpg')}}"
                                                    alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to Wishlist"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Shooter</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Borderlands: <br>The
                                                    Handsome Collection</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $59.99
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->

                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="{{asset('common/assets/images/demos/demo-19/products/product-2.jpg')}}"
                                                    alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to Wishlist"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Shooter</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">World War Z</a></h3>
                                            <!-- End .product-title -->
                                            <div class="product-price">
                                                $39.99
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->

                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="{{asset('common/assets/images/demos/demo-19/products/product-4.jpg')}}"
                                                    alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to Wishlist"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Action & adventure</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">The Witcher 3: Wild
                                                    Hunt</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $39.99
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->

                                    <div class="product">
                                        <figure class="product-media">
                                            <span class="product-label label-sale">Sale</span>
                                            <a href="product.html">
                                                <img src="{{asset('common/assets/images/demos/demo-19/products/product-5.jpg')}}"
                                                    alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to Wishlist"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Action & adventure</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">GTA Online: Criminal
                                                    Enterprise Starter Pack</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                <span class="new-price">$19.49</span>
                                                <span class="old-price">Was $24.49</span>
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->

                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="{{asset('common/assets/images/demos/demo-19/products/product-6.jpg')}}"
                                                    alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to Wishlist"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Shooter</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Tom Clancy’s <br>Ghost
                                                    Recon Wildlands</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $49.99
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .owl-carousel -->
                            </div><!-- .End .tab-pane -->
                        </div><!-- End .tab-content -->
                    </div><!-- End .container -->
                </div><!-- End .bg-light pt-4 pb-4 -->

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-6 col-md-4">
                            <div class="banner banner-overlay banner-sm banner-ad content-left align-center">
                                <a href="#">
                                    <img src="{{asset('common/assets/images/demos/demo-19/banners/banner-6.jpg')}}"
                                        alt="Banner">
                                </a>
                                <div class="banner-content">
                                    <h4 class="banner-subtitle">Weekend Offer</h4>
                                    <img class="banner-title-img"
                                        src="{{asset('common/assets/images/demos/demo-19/banners/banner-6-title.png')}}"
                                        alt="Banner-6">
                                    <h4 class="banner-price"><span class="off" style="font-weight: 600;">Save <span
                                                class="price">$19.99</span></span></h4>
                                    <a href="#" class="banner-link">Buy Now<i class="icon-long-arrow-right"></i></a>
                                </div>
                            </div><!-- End .banner -->
                        </div><!-- End .col-md-4 -->

                        <div class="col-sm-6 col-md-4">
                            <div class="banner banner-overlay banner-sm banner-ad content-left align-center">
                                <a href="#">
                                    <img src="{{asset('common/assets/images/demos/demo-19/banners/banner-7.jpg')}}"
                                        alt="Banner">
                                </a>
                                <div class="banner-content">
                                    <h4 class="banner-subtitle" style="letter-spacing: 0.1em;">Amazing Deal on an</h4>
                                    <h2 class="banner-title mb-0" style="font-size: 3rem;">XBOX ONE</h2>
                                    <h4 class="banner-price"><span class="off" style="font-weight: 600;">Save $50</span>
                                    </h4>
                                    <a href="#" class="banner-link">Buy Now<i class="icon-long-arrow-right"></i></a>
                                </div>
                            </div><!-- End .banner -->
                        </div><!-- End .col-md-4 -->

                        <div class="col-sm-6 col-md-4">
                            <div class="banner banner-overlay banner-sm banner-ad content-left align-center">
                                <a href="#">
                                    <img src="{{asset('common/assets/images/demos/demo-19/banners/banner-8.jpg')}}"
                                        alt="Banner">
                                </a>
                                <div class="banner-content">
                                    <h4 class="banner-price text-white mb-1">Save $29.00</h4>
                                    <img class="banner-title-img mb-2"
                                        src="{{asset('common/assets/images/demos/demo-19/banners/banner-8-title.png')}}"
                                        alt="Banner-8">
                                    <a href="#" class="banner-link">Buy Now<i class="icon-long-arrow-right"></i></a>
                                </div>
                            </div><!-- End .banner -->
                        </div><!-- End .col-md-4 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->

                <div class="container">
                    <hr class="mt-0 mb-4">
                </div><!-- End .container -->

                <div class="container">
                    <div class="heading heading-flex mb-2 mb-lg-3">
                        <div class="heading-left">
                            <h2 class="title mb-0">Games Coming Soon</h2><!-- End .title -->
                        </div><!-- End .heading-left -->

                        <div class="heading-right">
                            <a href="category.html" class="title-link">View more products <i
                                    class="icon-long-arrow-right"></i></a>
                        </div><!-- End .heading-right -->
                    </div><!-- End .heading -->

                    <div class="games-soon">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="products">
                                    <div class="row">
                                        <div class="col-6 col-md-4">
                                            <div class="product">
                                                <figure class="product-media">
                                                    <a href="product.html">
                                                        <img src="{{asset('common/assets/images/demos/demo-19/products/product-6.jpg')}}"
                                                            alt="Product image" class="product-image">
                                                    </a>

                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-wishlist"
                                                            title="Add to Wishlist"><span>add to wishlist</span></a>
                                                    </div><!-- End .product-action-vertical -->

                                                    <div class="product-action">
                                                        <a href="#" class="btn-product btn-cart"><span>add to
                                                                cart</span></a>
                                                    </div><!-- End .product-action -->
                                                </figure><!-- End .product-media -->

                                                <div class="product-body">
                                                    <div class="product-cat">
                                                        <a href="#">Shooter</a>
                                                    </div><!-- End .product-cat -->
                                                    <h3 class="product-title"><a href="product.html">Tom Clancy’s
                                                            <br>Ghost Recon Wildlands</a></h3>
                                                    <!-- End .product-title -->
                                                    <div class="product-price">
                                                        $49.99
                                                    </div><!-- End .product-price -->
                                                </div><!-- End .product-body -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-sm-6 col-md-4 -->

                                        <div class="col-6 col-md-4">
                                            <div class="product">
                                                <figure class="product-media">
                                                    <a href="product.html">
                                                        <img src="{{asset('common/assets/images/demos/demo-19/products/product-7.jpg')}}"
                                                            alt="Product image" class="product-image">
                                                    </a>

                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-wishlist"
                                                            title="Add to Wishlist"><span>add to wishlist</span></a>
                                                    </div><!-- End .product-action-vertical -->

                                                    <div class="product-action">
                                                        <a href="#" class="btn-product btn-cart"><span>add to
                                                                cart</span></a>
                                                    </div><!-- End .product-action -->
                                                </figure><!-- End .product-media -->

                                                <div class="product-body">
                                                    <div class="product-cat">
                                                        <a href="#">Sport</a>
                                                    </div><!-- End .product-cat -->
                                                    <h3 class="product-title"><a href="product.html">NBA 2K19 450,000
                                                            VC</a></h3><!-- End .product-title -->
                                                    <div class="product-price">
                                                        $74.99
                                                    </div><!-- End .product-price -->
                                                </div><!-- End .product-body -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-sm-6 col-md-4 -->

                                        <div class="col-6 col-md-4">
                                            <div class="product">
                                                <figure class="product-media">
                                                    <a href="product.html">
                                                        <img src="{{asset('common/assets/images/demos/demo-19/products/product-8.jpg')}}"
                                                            alt="Product image" class="product-image">
                                                    </a>

                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-wishlist"
                                                            title="Add to Wishlist"><span>add to wishlist</span></a>
                                                    </div><!-- End .product-action-vertical -->

                                                    <div class="product-action">
                                                        <a href="#" class="btn-product btn-cart"><span>add to
                                                                cart</span></a>
                                                    </div><!-- End .product-action -->
                                                </figure><!-- End .product-media -->

                                                <div class="product-body">
                                                    <div class="product-cat">
                                                        <a href="#">Shooter</a>
                                                    </div><!-- End .product-cat -->
                                                    <h3 class="product-title"><a href="product.html">STAR WARS
                                                            Battlefront II</a></h3><!-- End .product-title -->
                                                    <div class="product-price">
                                                        $24.99
                                                    </div><!-- End .product-price -->
                                                </div><!-- End .product-body -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-sm-6 col-md-4 -->

                                        <div class="col-6 col-md-4">
                                            <div class="product">
                                                <figure class="product-media">
                                                    <a href="product.html">
                                                        <img src="{{asset('common/assets/images/demos/demo-19/products/product-9.jpg')}}"
                                                            alt="Product image" class="product-image">
                                                    </a>

                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-wishlist"
                                                            title="Add to Wishlist"><span>add to wishlist</span></a>
                                                    </div><!-- End .product-action-vertical -->

                                                    <div class="product-action">
                                                        <a href="#" class="btn-product btn-cart"><span>add to
                                                                cart</span></a>
                                                    </div><!-- End .product-action -->
                                                </figure><!-- End .product-media -->

                                                <div class="product-body">
                                                    <div class="product-cat">
                                                        <a href="#">Shooter</a>
                                                    </div><!-- End .product-cat -->
                                                    <h3 class="product-title"><a href="product.html">Call of Duty: Black
                                                            Ops 4 Spectre Rising Edition</a></h3>
                                                    <!-- End .product-title -->
                                                    <div class="product-price">
                                                        $39.99
                                                    </div><!-- End .product-price -->
                                                </div><!-- End .product-body -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-sm-6 col-md-4 -->

                                        <div class="col-6 col-md-4">
                                            <div class="product">
                                                <figure class="product-media">
                                                    <a href="product.html">
                                                        <img src="{{asset('common/assets/images/demos/demo-19/products/product-10.jpg')}}"
                                                            alt="Product image" class="product-image">
                                                    </a>

                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-wishlist"
                                                            title="Add to Wishlist"><span>add to wishlist</span></a>
                                                    </div><!-- End .product-action-vertical -->

                                                    <div class="product-action">
                                                        <a href="#" class="btn-product btn-cart"><span>Pre-order
                                                                Now</span></a>
                                                    </div><!-- End .product-action -->
                                                </figure><!-- End .product-media -->

                                                <div class="product-body">
                                                    <div class="product-cat">
                                                        <a href="#">Role playing</a>
                                                    </div><!-- End .product-cat -->
                                                    <h3 class="product-title"><a href="product.html">Diablo III:
                                                            <br>Eternal Collection</a></h3><!-- End .product-title -->
                                                    <div class="product-price">
                                                        $19.99
                                                    </div><!-- End .product-price -->
                                                </div><!-- End .product-body -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-sm-6 col-md-4 -->

                                        <div class="col-6 col-md-4">
                                            <div class="product">
                                                <figure class="product-media">
                                                    <a href="product.html">
                                                        <img src="{{asset('common/assets/images/demos/demo-19/products/product-11.jpg')}}"
                                                            alt="Product image" class="product-image">
                                                    </a>

                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-wishlist"
                                                            title="Add to Wishlist"><span>add to wishlist</span></a>
                                                    </div><!-- End .product-action-vertical -->

                                                    <div class="product-action">
                                                        <a href="#" class="btn-product btn-cart"><span>add to
                                                                cart</span></a>
                                                    </div><!-- End .product-action -->
                                                </figure><!-- End .product-media -->

                                                <div class="product-body">
                                                    <div class="product-cat">
                                                        <a href="#">Role playing</a>
                                                    </div><!-- End .product-cat -->
                                                    <h3 class="product-title"><a href="product.html">Tom Clancy's
                                                            <br>The Division 2</a></h3><!-- End .product-title -->
                                                    <div class="product-price">
                                                        $24.99
                                                    </div><!-- End .product-price -->
                                                </div><!-- End .product-body -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-sm-6 col-md-4 -->
                                    </div><!-- End .row -->
                                </div><!-- End .products -->
                            </div><!-- End .col-lg-7 -->

                            <div class="col-lg-5 order-lg-first">
                                <div class="games-banners-slider owl-carousel owl-simple" data-toggle="owl"
                                    data-owl-options='{
                                        "nav": false, 
                                        "dots": true,
                                        "margin": 0,
                                        "loop": false,
                                        "items":1
                                    }'>
                                    <div class="banner banner-overlay product-banner">
                                        <a href="#">
                                            <img src="{{asset('common/assets/images/demos/demo-19/banners/banner-9.jpg')}}"
                                                alt="Banner">
                                        </a>
                                        <div class="banner-content align-items-center center">
                                            <img class="banner-title-img mb-1"
                                                src="{{asset('common/assets/images/demos/demo-19/banners/banner-9-title.png')}}"
                                                alt="Banner-9">
                                            <h4 class="banner-price mb-2" style="font-weight: 600;">$29.99</h4>
                                            <a href="#" class="banner-link size-lg">Pre-Order Now<i
                                                    class="icon-long-arrow-right"></i></a>
                                        </div>
                                    </div><!-- End .banner -->

                                    <div class="banner banner-overlay product-banner">
                                        <a href="#">
                                            <img src="{{asset('common/assets/images/demos/demo-19/banners/banner-10.jpg')}}"
                                                alt="Banner">
                                        </a>
                                        <div class="banner-content align-items-center">
                                            <h4 class="banner-subtitle" style="letter-spacing: 0.1em;">Out 14 May 2019
                                            </h4>
                                            <img class="banner-title-img mb-1"
                                                src="{{asset('common/assets/images/demos/demo-19/banners/banner-10-title.png')}}"
                                                alt="Banner-10">
                                            <a href="#" class="banner-link size-lg">Pre-Order Now<i
                                                    class="icon-long-arrow-right"></i></a>
                                        </div>
                                    </div><!-- End .banner -->

                                </div><!-- End .owl-carousel -->
                            </div><!-- End .col-lg-5 -->
                        </div><!-- End .row -->
                    </div><!-- End .games-soon -->
                </div><!-- End .container -->

                <div class="mb-3"></div><!-- End .mb-3 -->

                <div class="container">
                    <div class="cta cta-horizontal cta-horizontal-box bg-image mb-4"
                        style="background-image: url('{{asset('common/assets/images/demos/demo-19/bg-2.jpg')}}');">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <h3 class="cta-title text-primary">Join Our Newsletter</h3><!-- End .cta-title -->
                                <p class="cta-desc text-light">Subcribe to get information about products and coupons
                                </p><!-- End .cta-desc -->
                            </div><!-- End .col-lg-5 -->

                            <div class="col-lg-7 d-flex justify-content-lg-end">
                                <form action="#">
                                    <div class="input-group">
                                        <input type="email" class="form-control form-control-white"
                                            placeholder="Enter your Email Address" aria-label="Email Adress" required>
                                        <div class="input-group-append">
                                            <button class="btn btn-primary-white btn-rounded"
                                                type="submit"><span>Subscribe</span><i
                                                    class="icon-long-arrow-right"></i></button>
                                        </div><!-- .End .input-group-append -->
                                    </div><!-- .End .input-group -->
                                </form>
                            </div><!-- End .col-lg-8 -->
                        </div><!-- End .row -->
                    </div><!-- End .cta -->
                </div><!-- End .container -->

                <div class="container">
                    <div class="heading heading-flex mb-2">
                        <div class="heading-left">
                            <h2 class="title mb-5">Consoles & Accessories</h2><!-- End .title -->
                        </div><!-- End .heading-left -->

                        <div class="heading-right">
                            <a href="category.html" class="title-link">View more products <i
                                    class="icon-long-arrow-right"></i></a>
                        </div><!-- End .heading-right -->
                    </div><!-- End .heading -->

                    <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                        data-owl-options='{
                            "nav": false, 
                            "dots": true,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":2
                                },
                                "480": {
                                    "items":2
                                },
                                "768": {
                                    "items":3
                                },
                                "992": {
                                    "items":4
                                },
                                "1200": {
                                    "items":5,
                                    "nav": true
                                }
                            }
                        }'>
                        <div class="product">
                            <figure class="product-media">
                                <span class="product-label label-new">New</span>
                                <a href="product.html">
                                    <img src="{{asset('common/assets/images/demos/demo-19/products/product-12.jpg')}}"
                                        alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to Wishlist"><span>add
                                            to wishlist</span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="product.html">Microsoft - Xbox Elite Wireless
                                        Controller</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $149.99
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->

                        <div class="product">
                            <figure class="product-media">
                                <span class="product-label label-top">Top</span>
                                <a href="product.html">
                                    <img src="{{asset('common/assets/images/demos/demo-19/products/product-13.jpg')}}"
                                        alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to Wishlist"><span>add
                                            to wishlist</span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="product.html">Sony - PlayStation 4 1TB Console -
                                        Black</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $299.99
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->

                        <div class="product">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{asset('common/assets/images/demos/demo-19/products/product-14.jpg')}}"
                                        alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to Wishlist"><span>add
                                            to wishlist</span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="product.html">Nintendo - Switch 32GB Console</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    $149.99
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->

                        <div class="product">
                            <figure class="product-media">
                                <span class="product-label label-top">Top</span>
                                <a href="product.html">
                                    <img src="{{asset('common/assets/images/demos/demo-19/products/product-15.jpg')}}"
                                        alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to Wishlist"><span>add
                                            to wishlist</span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="product.html">HyperX - Cloud Alpha Wired Stereo
                                        Gaming Headset</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $99.99
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->

                        <div class="product">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{asset('common/assets/images/demos/demo-19/products/product-16.jpg')}}"
                                        alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to Wishlist"><span>add
                                            to wishlist</span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="product.html">Logitech - G502 HERO Wired Optical
                                        Gaming Mouse Pack</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $59.99
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .owl-carousel -->

                    <div class="mb-5"></div><!-- End .mb-4 -->
                </div><!-- End .container -->

                <div class="blog-posts bg-light pt-4 pb-5">
                    <div class="container">
                        <div class="heading heading-flex mb-2">
                            <div class="heading-left">
                                <h2 class="title mb-0">From Our Blog</h2><!-- End .title -->
                            </div><!-- End .heading-left -->

                            <div class="heading-right">
                                <a href="blog.html" class="title-link">View more articles <i
                                        class="icon-long-arrow-right"></i></a>
                            </div><!-- End .heading-right -->
                        </div><!-- End .heading -->

                        <div class="owl-carousel owl-simple carousel-equal-height" data-toggle="owl" data-owl-options='{
                                "nav": false, 
                                "dots": true,
                                "items": 3,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":1
                                    },
                                    "600": {
                                        "items":2
                                    },
                                    "992": {
                                        "items":3
                                    },
                                    "1200": {
                                        "items":4,
                                        "nav": true
                                    }
                                }
                            }'>
                            <article class="entry">
                                <figure class="entry-media">
                                    <a href="single.html">
                                        <img src="{{asset('common/assets/images/demos/demo-19/blog/post-1.jpg')}}"
                                            alt="image desc">
                                    </a>
                                </figure><!-- End .entry-media -->

                                <div class="entry-body">
                                    <div class="entry-meta">
                                        <a href="#">Nov 22, 2018</a>, 0 Comments
                                    </div><!-- End .entry-meta -->

                                    <h3 class="entry-title">
                                        <a href="single.html">Morbi in sem quis dui placerat mauris sit ornare.</a>
                                    </h3><!-- End .entry-title -->
                                </div><!-- End .entry-body -->
                            </article><!-- End .entry -->

                            <article class="entry">
                                <figure class="entry-media">
                                    <a href="single.html">
                                        <img src="{{asset('common/assets/images/demos/demo-19/blog/post-2.jpg')}}"
                                            alt="image desc">
                                    </a>
                                </figure><!-- End .entry-media -->

                                <div class="entry-body">
                                    <div class="entry-meta">
                                        <a href="#">Dec 12, 2018</a>, 0 Comments
                                    </div><!-- End .entry-meta -->

                                    <h3 class="entry-title">
                                        <a href="single.html">Aliquam porttitor mauris sit ametorci.</a>
                                    </h3><!-- End .entry-title -->
                                </div><!-- End .entry-body -->
                            </article><!-- End .entry -->

                            <article class="entry">
                                <figure class="entry-media">
                                    <a href="single.html">
                                        <img src="{{asset('common/assets/images/demos/demo-19/blog/post-3.jpg')}}"
                                            alt="image desc">
                                    </a>
                                </figure><!-- End .entry-media -->

                                <div class="entry-body">
                                    <div class="entry-meta">
                                        <a href="#">Dec 19, 2018</a>, 2 Comments
                                    </div><!-- End .entry-meta -->

                                    <h3 class="entry-title">
                                        <a href="single.html">Cras ornare tristique elit.</a>
                                    </h3><!-- End .entry-title -->
                                </div><!-- End .entry-body -->
                            </article><!-- End .entry -->

                            <article class="entry">
                                <figure class="entry-media">
                                    <a href="single.html">
                                        <img src="{{asset('common/assets/images/demos/demo-19/blog/post-4.jpg')}}"
                                            alt="image desc">
                                    </a>
                                </figure><!-- End .entry-media -->

                                <div class="entry-body">
                                    <div class="entry-meta">
                                        <a href="#">Dec 19, 2018</a>, 2 Comments
                                    </div><!-- End .entry-meta -->

                                    <h3 class="entry-title">
                                        <a href="single.html">Donec consectetuer ligula vulputate sem cursus.</a>
                                    </h3><!-- End .entry-title -->
                                </div><!-- End .entry-body -->
                            </article><!-- End .entry -->

                            <article class="entry">
                                <figure class="entry-media">
                                    <a href="single.html">
                                        <img src="{{asset('common/assets/images/demos/demo-19/blog/post-1.jpg')}}"
                                            alt="image desc">
                                    </a>
                                </figure><!-- End .entry-media -->

                                <div class="entry-body">
                                    <div class="entry-meta">
                                        <a href="#">Nov 22, 2018</a>, 0 Comments
                                    </div><!-- End .entry-meta -->

                                    <h3 class="entry-title">
                                        <a href="single.html">Morbi in sem quis dui placerat mauris sit ornare.</a>
                                    </h3><!-- End .entry-title -->
                                </div><!-- End .entry-body -->
                            </article><!-- End .entry -->
                        </div><!-- End .owl-carousel -->
                    </div><!-- End .container -->
                </div><!-- End .blog-posts -->
            </main><!-- End .main -->

            <footer class="footer footer-dark">
                <div class="footer-middle">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-lg-3">
                                <div class="widget widget-about">
                                    <img src="{{asset('common/assets/images/demos/demo-19/logo-footer.png')}}"
                                        class="footer-logo" alt="Footer Logo" width="105" height="25">
                                    <p>Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, eu
                                        vulputate magna eros eu erat. </p>

                                    <div class="social-icons">
                                        <a href="#" class="social-icon" title="Facebook" target="_blank"><i
                                                class="icon-facebook-f"></i></a>
                                        <a href="#" class="social-icon" title="Twitter" target="_blank"><i
                                                class="icon-twitter"></i></a>
                                        <a href="#" class="social-icon" title="Instagram" target="_blank"><i
                                                class="icon-instagram"></i></a>
                                        <a href="#" class="social-icon" title="Youtube" target="_blank"><i
                                                class="icon-youtube"></i></a>
                                        <a href="#" class="social-icon" title="Pinterest" target="_blank"><i
                                                class="icon-pinterest"></i></a>
                                    </div><!-- End .soial-icons -->
                                </div><!-- End .widget about-widget -->
                            </div><!-- End .col-sm-6 col-lg-3 -->

                            <div class="col-sm-6 col-lg-3">
                                <div class="widget">
                                    <h4 class="widget-title">Useful Links</h4><!-- End .widget-title -->

                                    <ul class="widget-list">
                                        <li><a href="about.html">About Molla</a></li>
                                        <li><a href="#">How to shop on Molla</a></li>
                                        <li><a href="#">FAQ</a></li>
                                        <li><a href="contact.html">Contact us</a></li>
                                        <li><a href="login.html">Log in</a></li>
                                    </ul><!-- End .widget-list -->
                                </div><!-- End .widget -->
                            </div><!-- End .col-sm-6 col-lg-3 -->

                            <div class="col-sm-6 col-lg-3">
                                <div class="widget">
                                    <h4 class="widget-title">Customer Service</h4><!-- End .widget-title -->

                                    <ul class="widget-list">
                                        <li><a href="#">Payment Methods</a></li>
                                        <li><a href="#">Money-back guarantee!</a></li>
                                        <li><a href="#">Returns</a></li>
                                        <li><a href="#">Shipping</a></li>
                                        <li><a href="#">Terms and conditions</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                    </ul><!-- End .widget-list -->
                                </div><!-- End .widget -->
                            </div><!-- End .col-sm-6 col-lg-3 -->

                            <div class="col-sm-6 col-lg-3">
                                <div class="widget">
                                    <h4 class="widget-title">My Account</h4><!-- End .widget-title -->

                                    <ul class="widget-list">
                                        <li><a href="#">Sign In</a></li>
                                        <li><a href="cart.html">View Cart</a></li>
                                        <li><a href="#">My Wishlist</a></li>
                                        <li><a href="#">Track My Order</a></li>
                                        <li><a href="#">Help</a></li>
                                    </ul><!-- End .widget-list -->
                                </div><!-- End .widget -->
                            </div><!-- End .col-sm-6 col-lg-3 -->
                        </div><!-- End .row -->
                    </div><!-- End .container -->
                </div><!-- End .footer-middle -->

                <div class="footer-bottom">
                    <div class="container">
                        <p class="footer-copyright">Copyright © 2019 Molla Store. All Rights Reserved.</p>
                        <!-- End .footer-copyright -->
                        <figure class="footer-payments">
                            <img src="{{asset('common/assets/images/payments.png')}}" alt="Payment methods" width="272"
                                height="20">
                        </figure><!-- End .footer-payments -->
                    </div><!-- End .container -->
                </div><!-- End .footer-bottom -->
            </footer><!-- End .footer -->
        </div><!-- End .wrap-container -->
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-close"></i></span>

            <form action="#" method="get" class="mobile-search">
                <label for="mobile-search" class="sr-only">Search</label>
                <input type="search" class="form-control" name="mobile-search" id="mobile-search"
                    placeholder="Search in..." required>
                <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
            </form>

            <ul class="nav nav-pills-mobile nav-border-anim" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="mobile-menu-link" data-toggle="tab" href="#mobile-menu-tab"
                        role="tab" aria-controls="mobile-menu-tab" aria-selected="true">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="mobile-cats-link" data-toggle="tab" href="#mobile-cats-tab" role="tab"
                        aria-controls="mobile-cats-tab" aria-selected="false">Categories</a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="mobile-menu-tab" role="tabpanel"
                    aria-labelledby="mobile-menu-link">
                    <nav class="mobile-nav">
                        <ul class="mobile-menu">
                            <li class="active">
                                <a href="index.html">Home</a>

                                <ul>
                                    <li><a href="index-1.html">01 - furniture store</a></li>
                                    <li><a href="index-2.html">02 - furniture store</a></li>
                                    <li><a href="index-3.html">03 - electronic store</a></li>
                                    <li><a href="index-4.html">04 - electronic store</a></li>
                                    <li><a href="index-5.html">05 - fashion store</a></li>
                                    <li><a href="index-6.html">06 - fashion store</a></li>
                                    <li><a href="index-7.html">07 - fashion store</a></li>
                                    <li><a href="index-8.html">08 - fashion store</a></li>
                                    <li><a href="index-9.html">09 - fashion store</a></li>
                                    <li><a href="index-10.html">10 - shoes store</a></li>
                                    <li><a href="index-11.html">11 - furniture simple store</a></li>
                                    <li><a href="index-12.html">12 - fashion simple store</a></li>
                                    <li><a href="index-13.html">13 - market</a></li>
                                    <li><a href="index-14.html">14 - market fullwidth</a></li>
                                    <li><a href="index-15.html">15 - lookbook 1</a></li>
                                    <li><a href="index-16.html">16 - lookbook 2</a></li>
                                    <li><a href="index-17.html">17 - fashion store</a></li>
                                    <li><a href="index-18.html">18 - fashion store (with sidebar)</a></li>
                                    <li><a href="index-19.html">19 - games store</a></li>
                                    <li><a href="index-20.html">20 - book store</a></li>
                                    <li><a href="index-21.html">21 - sport store</a></li>
                                    <li><a href="index-22.html">22 - tools store</a></li>
                                    <li><a href="index-23.html">23 - fashion left navigation store</a></li>
                                    <li><a href="index-24.html">24 - extreme sport store</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="category.html">Shop</a>
                                <ul>
                                    <li><a href="category-list.html">Shop List</a></li>
                                    <li><a href="category-2cols.html">Shop Grid 2 Columns</a></li>
                                    <li><a href="category.html">Shop Grid 3 Columns</a></li>
                                    <li><a href="category-4cols.html">Shop Grid 4 Columns</a></li>
                                    <li><a href="category-boxed.html"><span>Shop Boxed No Sidebar<span
                                                    class="tip tip-hot">Hot</span></span></a></li>
                                    <li><a href="category-fullwidth.html">Shop Fullwidth No Sidebar</a></li>
                                    <li><a href="product-category-boxed.html">Product Category Boxed</a></li>
                                    <li><a href="product-category-fullwidth.html"><span>Product Category Fullwidth<span
                                                    class="tip tip-new">New</span></span></a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="#">Lookbook</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="product.html" class="sf-with-ul">Product</a>
                                <ul>
                                    <li><a href="product.html">Default</a></li>
                                    <li><a href="product-centered.html">Centered</a></li>
                                    <li><a href="product-extended.html"><span>Extended Info<span
                                                    class="tip tip-new">New</span></span></a></li>
                                    <li><a href="product-gallery.html">Gallery</a></li>
                                    <li><a href="product-sticky.html">Sticky Info</a></li>
                                    <li><a href="product-sidebar.html">Boxed With Sidebar</a></li>
                                    <li><a href="product-fullwidth.html">Full Width</a></li>
                                    <li><a href="product-masonry.html">Masonry Sticky Info</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Pages</a>
                                <ul>
                                    <li>
                                        <a href="about.html">About</a>

                                        <ul>
                                            <li><a href="about.html">About 01</a></li>
                                            <li><a href="about-2.html">About 02</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="contact.html">Contact</a>

                                        <ul>
                                            <li><a href="contact.html">Contact 01</a></li>
                                            <li><a href="contact-2.html">Contact 02</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="faq.html">FAQs</a></li>
                                    <li><a href="404.html">Error 404</a></li>
                                    <li><a href="coming-soon.html">Coming Soon</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="blog.html">Blog</a>

                                <ul>
                                    <li><a href="blog.html">Classic</a></li>
                                    <li><a href="blog-listing.html">Listing</a></li>
                                    <li>
                                        <a href="#">Grid</a>
                                        <ul>
                                            <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>
                                            <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>
                                            <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>
                                            <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Masonry</a>
                                        <ul>
                                            <li><a href="blog-masonry-2cols.html">Masonry 2 columns</a></li>
                                            <li><a href="blog-masonry-3cols.html">Masonry 3 columns</a></li>
                                            <li><a href="blog-masonry-4cols.html">Masonry 4 columns</a></li>
                                            <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Mask</a>
                                        <ul>
                                            <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                            <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Single Post</a>
                                        <ul>
                                            <li><a href="single.html">Default with sidebar</a></li>
                                            <li><a href="single-fullwidth.html">Fullwidth no sidebar</a></li>
                                            <li><a href="single-fullwidth-sidebar.html">Fullwidth with sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="elements-list.html">Elements</a>
                                <ul>
                                    <li><a href="elements-products.html">Products</a></li>
                                    <li><a href="elements-typography.html">Typography</a></li>
                                    <li><a href="elements-titles.html">Titles</a></li>
                                    <li><a href="elements-banners.html">Banners</a></li>
                                    <li><a href="elements-product-category.html">Product Category</a></li>
                                    <li><a href="elements-video-banners.html">Video Banners</a></li>
                                    <li><a href="elements-buttons.html">Buttons</a></li>
                                    <li><a href="elements-accordions.html">Accordions</a></li>
                                    <li><a href="elements-tabs.html">Tabs</a></li>
                                    <li><a href="elements-testimonials.html">Testimonials</a></li>
                                    <li><a href="elements-blog-posts.html">Blog Posts</a></li>
                                    <li><a href="elements-portfolio.html">Portfolio</a></li>
                                    <li><a href="elements-cta.html">Call to Action</a></li>
                                    <li><a href="elements-icon-boxes.html">Icon Boxes</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav><!-- End .mobile-nav -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane fade" id="mobile-cats-tab" role="tabpanel" aria-labelledby="mobile-cats-link">
                    <nav class="mobile-cats-nav">
                        <ul class="mobile-menu">
                            <li>
                                <a href="#">Playstation</a>
                                <ul>
                                    <li>
                                        <a href="#">Games Software</a>

                                        <ul>
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Adventure</a></li>
                                            <li><a href="#">Music</a></li>
                                            <li><a href="#">Racing</a></li>
                                            <li><a href="#">Sports</a></li>
                                            <li><a href="#">Strategy</a></li>
                                            <li><a href="#">Role-Playing Game</a></li>
                                            <li><a href="#">Action-Adventure</a></li>
                                            <li><a href="#">Stealth</a></li>
                                            <li><a href="#">Shooter</a></li>
                                            <li><a href="#">Horror</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">XBOX</a>
                                <ul>
                                    <li>
                                        <a href="#">Nindendo</a>

                                        <ul>
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Adventure</a></li>
                                            <li><a href="#">Music</a></li>
                                            <li><a href="#">Racing</a></li>
                                            <li><a href="#">Sports</a></li>
                                            <li><a href="#">Strategy</a></li>
                                            <li><a href="#">Role-Playing Game</a></li>
                                            <li><a href="#">Action-Adventure</a></li>
                                            <li><a href="#">Stealth</a></li>
                                            <li><a href="#">Shooter</a></li>
                                            <li><a href="#">Horror</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Game Console & Accessories</a>

                                        <ul>
                                            <li><a href="#">Console</a></li>
                                            <li><a href="#">Headsets</a></li>
                                            <li><a href="#">Collectibles</a></li>
                                            <li><a href="#">Gaming Chairs</a></li>
                                            <li><a href="#">Controller</a></li>
                                            <li><a href="#">Digital</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Nindendo</a></li>
                            <li><a href="#">PC Gaming</a></li>
                            <li><a href="#">Phones & Tablets</a></li>
                            <li><a href="#">Pre-owned</a></li>
                            <li><a href="#">Deals</a></li>
                            <li><a href="#">Coming Soon</a></li>
                            <li><a href="#">Accessories</a></li>
                        </ul>
                    </nav><!-- End .mobile-cats-nav -->
                </div><!-- .End .tab-pane -->
            </div><!-- End .tab-content -->

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

    <!-- Sign in / Register Modal -->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="icon-close"></i></span>
                    </button>

                    <div class="form-box">
                        <div class="form-tab">
                            <ul class="nav nav-pills nav-fill nav-border-anim" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin"
                                        role="tab" aria-controls="signin" aria-selected="true">Sign In</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab"
                                        aria-controls="register" aria-selected="false">Register</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="tab-content-5">
                                <div class="tab-pane fade show active" id="signin" role="tabpanel"
                                    aria-labelledby="signin-tab">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="singin-email">Username or email address *</label>
                                            <input type="text" class="form-control" id="singin-email"
                                                name="singin-email" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="singin-password">Password *</label>
                                            <input type="password" class="form-control" id="singin-password"
                                                name="singin-password" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>LOG IN</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="signin-remember">
                                                <label class="custom-control-label" for="signin-remember">Remember
                                                    Me</label>
                                            </div><!-- End .custom-checkbox -->

                                            <a href="#" class="forgot-link">Forgot Your Password?</a>
                                        </div><!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">or sign in with</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    Login With Google
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    Login With Facebook
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="register-email">Your email address *</label>
                                            <input type="email" class="form-control" id="register-email"
                                                name="register-email" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="register-password">Password *</label>
                                            <input type="password" class="form-control" id="register-password"
                                                name="register-password" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>SIGN UP</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="register-policy"
                                                    required>
                                                <label class="custom-control-label" for="register-policy">I agree to the
                                                    <a href="#">privacy policy</a> *</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">or sign in with</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    Login With Google
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login  btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    Login With Facebook
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                            </div><!-- End .tab-content -->
                        </div><!-- End .form-tab -->
                    </div><!-- End .form-box -->
                </div><!-- End .modal-body -->
            </div><!-- End .modal-content -->
        </div><!-- End .modal-dialog -->
    </div><!-- End .modal -->

    <!-- <div class="container newsletter-popup-container mfp-hide" id="newsletter-popup-form">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row no-gutters bg-white newsletter-popup-content">
                    <div class="col-xl-3-5col col-lg-7 banner-content-wrap">
                        <div class="banner-content text-center">
                            <img src="{{asset('common/assets/images/popup/newsletter/logo.png')}}" class="logo"
                                alt="logo" width="60" height="15">
                            <h2 class="banner-title">get <span>25<light>%</light></span> off</h2>
                            <p>Subscribe to the Molla eCommerce newsletter to receive timely updates from your favorite
                                products.</p>
                            <form action="#">
                                <div class="input-group input-group-round">
                                    <input type="email" class="form-control form-control-white"
                                        placeholder="Your Email Address" aria-label="Email Adress" required>
                                    <div class="input-group-append">
                                        <button class="btn" type="submit"><span>go</span></button>
                                    </div> .End .input-group-append -->
    </div><!-- .End .input-group -->
    </form>
    <!-- <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="register-policy-2" required>
        <label class="custom-control-label" for="register-policy-2">Do not show this popup
            again</label>
    </div>End .custom-checkbox -->
    </div>
    </div>
    <!-- <div class="col-xl-2-5col col-lg-5 ">
        <img src="{{asset('common/assets/images/popup/newsletter/img-1.jpg')}}" class="newsletter-img" alt="newsletter">
    </div> -->
    </div>
    </div>
    </div>
    </div>
    <!-- Plugins JS File -->
    <script src="{{asset('common/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('common/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('common/assets/js/jquery.hoverIntent.min.js')}}"></script>
    <script src="{{asset('common/assets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('common/assets/js/superfish.min.js')}}"></script>
    <script src="{{asset('common/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('common/assets/js/bootstrap-input-spinner.js')}}"></script>
    <script src="{{asset('common/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Main JS File -->
    <script src="{{asset('common/assets/js/main.js')}}"></script>
    <script src="{{asset('common/assets/js/demos/demo-19.js')}}"></script>
</body>


<!-- molla/index-19.html  22 Nov 2019 10:01:15 GMT -->

</html>