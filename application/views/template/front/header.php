<?php 
// $pageSlug = $this->uri->segment('1');
// $metaDataArr = getSeoPageMetaData($pageSlug);
?>

<!DOCTYPE html>
<html>

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php echo SITE_NAME; ?></title>


    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/front/images/favicon.ico'); ?>" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?php echo base_url('assets/front/images/apple-touch-icon.png'); ?>">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light"
        rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/animate/animate.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/simple-line-icons/css/simple-line-icons.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/owl.carousel/assets/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/owl.carousel/assets/owl.theme.default.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/magnific-popup/magnific-popup.min.css'); ?>">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/theme.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/theme-elements.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/theme-blog.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/theme-shop.css'); ?>">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/rs-plugin/css/settings.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/rs-plugin/css/layers.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/rs-plugin/css/navigation.css'); ?>">

    <!-- Skin CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/skins/skin-shop-5.css'); ?>">

    <!-- Demo CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/demos/demo-shop-5.css'); ?>">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css'); ?>">

    <!-- Head Libs -->
    <script src="<?php echo base_url('assets/vendor/modernizr/modernizr.min.js'); ?>"></script>

</head>

<div class="body">
        <header id="header"
            data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": false, "stickyStartAt": 155, "stickySetTop": "-155px", "stickyChangeLogo": false}'>
            <div class="header-body">
                <div class="header-top">
                    <div class="container">
                        <div class="dropdowns-container">

                            <!-- <div class="compare-dropdown">
                                <a href="#"><i class="fa fa-retweet"></i> Compare (2)</a>

                                <div class="compare-dropdownmenu">
                                    <div class="dropdownmenu-wrapper">
                                        <ul class="compare-products">
                                            <li class="product">
                                                <a href="#" class="btn-remove" title="Remove Product"><i
                                                        class="fa fa-times"></i></a>
                                                <h4 class="product-name"><a href="product-details.html">White top</a>
                                                </h4>
                                            </li>
                                            <li class="product">
                                                <a href="#" class="btn-remove" title="Remove Product"><i
                                                        class="fa fa-times"></i></a>
                                                <h4 class="product-name"><a href="product-details.html">Blue Women
                                                        Shirt</a></h4>
                                            </li>
                                        </ul>

                                        <div class="compare-actions">
                                            <a href="#" class="action-link">Clear All</a>
                                            <a href="#" class="btn btn-primary">Compare</a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="header-column">
                            <div class="header-logo">
                                <a href="demo-shop-5.html">
                                    <img alt="FragX" width="111" height="51" src="<?php echo base_url('assets/images/img/demos/shop/logo-shop.png'); ?>">
                                </a>
                            </div>
                        </div>
                        </div>

                        <div class="top-menu-area">
                            <a href="#">Links <i class="fa fa-caret-down"></i></a>
                            <ul class="top-menu">
                                <li><a href="<?php echo base_url('my-account'); ?>">My Account</a></li>
                                <!-- <li><a href="#">Daily Deal</a></li> -->
                                <li><a href="<?php echo base_url('category'); ?>">My Wishlist</a></li>
                                <!-- <li><a href="demo-shop-5-blog.html">Blog</a></li> -->
                                <li><a href="<?php echo base_url('sign-in'); ?>">Log in</a></li>
                                <li><a href="<?php echo base_url('sign-in'); ?>">Log in</a></li>
                                <li><i class="fa fa-phone"></i>
                                        <span>+44 7459302113</span></li>
                                        <div class="cart-dropdown">
                                        <a href="#" class="cart-dropdown-icon">
                                            <i class="minicart-icon"></i>
                                            <span class="cart-info">
                                                <span class="cart-qty">2</span>
                                                <span class="cart-text">item(s)</span>
                                            </span>
                                        </a>

                                        <div class="cart-dropdownmenu right">
                                            <div class="dropdownmenu-wrapper">
                                                <div class="cart-products">
                                                    <div class="product product-sm">
                                                        <a href="#" class="btn-remove" title="Remove Product">
                                                            <i class="fa fa-times"></i>
                                                        </a>
                                                        <figure class="product-image-area">
                                                            <a href="product-details.html" title="Product Name"
                                                                class="product-image">
                                                                <img src="<?php echo base_url('assets/images/img/demos/shop/products/thumbs/cart-product1.jpg'); ?>"
                                                                    alt="Product Name">
                                                            </a>
                                                        </figure>
                                                        <div class="product-details-area">
                                                            <h2 class="product-name"><a href="product-details.html"
                                                                    title="Product Name">Blue Women Top</a></h2>

                                                            <div class="cart-qty-price">
                                                                1 X
                                                                <span class="product-price">$65.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product product-sm">
                                                        <a href="#" class="btn-remove" title="Remove Product">
                                                            <i class="fa fa-times"></i>
                                                        </a>
                                                        <figure class="product-image-area">
                                                            <a href="product-details.html" title="Product Name"
                                                                class="product-image">
                                                                <img src="<?php echo base_url('assets/images/img/demos/shop/products/thumbs/cart-product2.jpg'); ?>"
                                                                    alt="Product Name">
                                                            </a>
                                                        </figure>
                                                        <div class="product-details-area">
                                                            <h2 class="product-name"><a href="product-details.html"
                                                                    title="Product Name">Black Utility Top</a></h2>

                                                            <div class="cart-qty-price">
                                                                1 X
                                                                <span class="product-price">$39.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="cart-totals">
                                                    Total: <span>$104.00</span>
                                                </div>

                                                <div class="cart-actions">
                                                    <a href="demo-shop-5-cart.html" class="btn btn-primary">View
                                                        Cart</a>
                                                    <a href="demo-shop-5-checkout.html"
                                                        class="btn btn-primary">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </ul>
                        </div>
                        <p class="welcome-msg">DEFAULT WELCOME MSG!</p>
                    </div>
                </div>
                <div class="header-container container">
                    <div class="header-row">
                        <!-- <div class="header-column">
                            <div class="header-logo">
                                <a href="demo-shop-5.html">
                                    <img alt="FragX" width="111" height="51" src="<?php echo base_url('assets/images/img/demos/shop/logo-shop.png'); ?>">
                                </a>
                            </div>
                        </div> -->
                        <div class="header-column">
                            <div class="row">
                                <div class="cart-area">
                                    <div class="custom-block">
                                        <i class="fa fa-phone"></i>
                                        <!-- <span>+44 7459302113</span>
                                        <span class="split"></span> -->
                                        <!-- <a href="#">CONTACT US</a> -->
                                    </div>

                                    <!-- <div class="cart-dropdown">
                                        <a href="#" class="cart-dropdown-icon">
                                            <i class="minicart-icon"></i>
                                            <span class="cart-info">
                                                <span class="cart-qty">2</span>
                                                <span class="cart-text">item(s)</span>
                                            </span>
                                        </a>

                                        <div class="cart-dropdownmenu right">
                                            <div class="dropdownmenu-wrapper">
                                                <div class="cart-products">
                                                    <div class="product product-sm">
                                                        <a href="#" class="btn-remove" title="Remove Product">
                                                            <i class="fa fa-times"></i>
                                                        </a>
                                                        <figure class="product-image-area">
                                                            <a href="product-details.html" title="Product Name"
                                                                class="product-image">
                                                                <img src="<?php echo base_url('assets/images/img/demos/shop/products/thumbs/cart-product1.jpg'); ?>"
                                                                    alt="Product Name">
                                                            </a>
                                                        </figure>
                                                        <div class="product-details-area">
                                                            <h2 class="product-name"><a href="product-details.html"
                                                                    title="Product Name">Blue Women Top</a></h2>

                                                            <div class="cart-qty-price">
                                                                1 X
                                                                <span class="product-price">$65.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product product-sm">
                                                        <a href="#" class="btn-remove" title="Remove Product">
                                                            <i class="fa fa-times"></i>
                                                        </a>
                                                        <figure class="product-image-area">
                                                            <a href="product-details.html" title="Product Name"
                                                                class="product-image">
                                                                <img src="<?php echo base_url('assets/images/img/demos/shop/products/thumbs/cart-product2.jpg'); ?>"
                                                                    alt="Product Name">
                                                            </a>
                                                        </figure>
                                                        <div class="product-details-area">
                                                            <h2 class="product-name"><a href="product-details.html"
                                                                    title="Product Name">Black Utility Top</a></h2>

                                                            <div class="cart-qty-price">
                                                                1 X
                                                                <span class="product-price">$39.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="cart-totals">
                                                    Total: <span>$104.00</span>
                                                </div>

                                                <div class="cart-actions">
                                                    <a href="demo-shop-5-cart.html" class="btn btn-primary">View
                                                        Cart</a>
                                                    <a href="demo-shop-5-checkout.html"
                                                        class="btn btn-primary">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>

                                <!-- <div class="header-search">
                                    <a href="#" class="search-toggle"><i class="fa fa-search"></i></a>
                                    <form action="#" method="get">
                                        <div class="header-search-wrapper">
                                            <input type="text" class="form-control" name="q" id="q"
                                                placeholder="Search..." required>
                                            <select id="cat" name="cat">
                                                <option value="">All Categories</option>
                                                <option value="4">Fashion</option>
                                                <option value="12">- Women</option>
                                                <option value="13">- Men</option>
                                                <option value="66">- Jewellery</option>
                                            </select>
                                            <button class="btn btn-default" type="submit"><i
                                                    class="fa fa-search"></i></button>
                                        </div>
                                    </form>
                                </div> -->

                                <a href="#" class="mmenu-toggle-btn" title="Toggle menu">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-container header-nav">
                    <div class="container">
                        <div class="header-nav-main">
                            <nav>
                                <ul class="nav nav-pills" id="mainNav">
                                    <li class="dropdown active">
                                        <a href="">
                                            Home
                                        </a>
                                    </li>
                                    <li>
                                        <a href="about-us.html">
                                            About Us
                                        </a>
                                    </li>
                                    <li class="dropdown dropdown-mega-small">
                                        <a href="demo-shop-5-category-4col.html" class="dropdown-toggle">
                                            Makeup <span class="tip tip-new">New</span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="dropdown-mega-content dropdown-mega-content-small">
                                                    <div class="row">
                                                        <div class="col-md-7">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <a href="#"
                                                                        class="dropdown-mega-sub-title">Women</a>
                                                                    <ul class="dropdown-mega-sub-nav">
                                                                        <li><a href="demo-shop-5-category-4col.html">Top
                                                                                &amp; Blouses</a></li>
                                                                        <li><a
                                                                                href="demo-shop-5-category-4col.html">Accessories</a>
                                                                        </li>
                                                                        <li><a href="demo-shop-5-category-4col.html">Dresses
                                                                                &amp; Skirts</a></li>
                                                                        <li><a href="demo-shop-5-category-4col.html">Shoes
                                                                                &amp; Boots</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <a href="demo-shop-5-category-4col.html"
                                                                        class="dropdown-mega-sub-title">Men</a>
                                                                    <ul class="dropdown-mega-sub-nav">
                                                                        <li><a
                                                                                href="demo-shop-5-category-4col.html">Accessories</a>
                                                                        </li>
                                                                        <li><a href="demo-shop-5-category-4col.html">Watch
                                                                                Fashion<span
                                                                                    class="tip tip-new">New</span></a>
                                                                        </li>
                                                                        <li><a href="demo-shop-5-category-4col.html">Tees,
                                                                                Knits &amp; Polos</a></li>
                                                                        <li><a href="demo-shop-5-category-4col.html">Pants
                                                                                &amp; Denim</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-5 mega-banner-bg">
                                                            <img src="<?php echo base_url('assets/images/img/demos/shop/menu-bg.png'); ?>" alt="Banner bg">
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown dropdown-mega">
                                        <a href="demo-shop-5-category-4col.html" class="dropdown-toggle">
                                            Fragrance
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="dropdown-mega-content">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <a href="#" class="cat-img"><img
                                                                            src="<?php echo base_url('assets/images/img/demos/shop/cat-tv.png'); ?>"
                                                                            alt="Category Name"></a>

                                                                    <a href="#" class="dropdown-mega-sub-title">Smart
                                                                        Tvs</a>
                                                                    <ul class="dropdown-mega-sub-nav">
                                                                        <li><a href="demo-shop-5-category-4col.html">TV,
                                                                                Audio</a></li>
                                                                        <li><a href="demo-shop-5-category-4col.html">Computers
                                                                                &amp; Tablets</a></li>
                                                                        <li><a href="demo-shop-5-category-4col.html">Home
                                                                                Office Equipments</a></li>
                                                                        <li><a href="demo-shop-5-category-4col.html">GPS
                                                                                Navigation</a></li>
                                                                        <li><a href="demo-shop-5-category-4col.html">Car
                                                                                Video, Audio &amp; GPS</a></li>
                                                                        <li><a href="demo-shop-5-category-4col.html">Radios
                                                                                &amp; Clock Radios</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <a href="#" class="cat-img"><img
                                                                            src="<?php echo base_url('assets/images/img/demos/shop/cat-camera.png'); ?>"
                                                                            alt="Category Name"></a>
                                                                    <a href="#"
                                                                        class="dropdown-mega-sub-title">Cameras</a>
                                                                    <ul class="dropdown-mega-sub-nav">
                                                                        <li><a href="demo-shop-5-category-4col.html">Cell
                                                                                Phones &amp; Accessories</a></li>
                                                                        <li><a href="demo-shop-5-category-4col.html">Cameras
                                                                                &amp; Photo</a></li>
                                                                        <li><a href="demo-shop-5-category-4col.html">Photo
                                                                                Accessories</a></li>
                                                                        <li><a href="demo-shop-5-category-4col.html">IP
                                                                                Phones</a></li>
                                                                        <li><a href="demo-shop-5-category-4col.html">Samsung
                                                                                Galaxy Phones</a></li>
                                                                        <li><a href="demo-shop-5-category-4col.html">iPad
                                                                                &amp; Android Tablets</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <a href="#" class="cat-img"><img
                                                                            src="<?php echo base_url('assets/images/img/demos/shop/cat-game.png'); ?>"
                                                                            alt="Category Name"></a>
                                                                    <a href="#"
                                                                        class="dropdown-mega-sub-title">Games</a>
                                                                    <ul class="dropdown-mega-sub-nav">
                                                                        <li><a href="demo-shop-5-category-4col.html">e-Book
                                                                                Readers</a></li>
                                                                        <li><a href="demo-shop-5-category-4col.html">Video
                                                                                Games &amp; Consolers</a></li>
                                                                        <li><a href="demo-shop-5-category-4col.html">Printers
                                                                                &amp; Scanners</a></li>
                                                                        <li><a href="demo-shop-5-category-4col.html">Digital
                                                                                Picture Frames</a></li>
                                                                        <li><a href="demo-shop-5-category-4col.html">3D
                                                                                Fashion Games</a></li>
                                                                        <li><a href="demo-shop-5-category-4col.html">Game
                                                                                Machine &amp; Devices</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="menu-banner-area">
                                                                <img src="<?php echo base_url('assets/images/img/demos/shop/menu-cat.png'); ?>"
                                                                    alt="Menu Banner">
                                                                <div class="menu-banner-header">
                                                                    <h3>Shop Now <span
                                                                            class="font-weight-bold">3D</span> <span
                                                                            class="font-weight-extra-bold">Tv's</span>
                                                                    </h3>
                                                                    <a href="#" class="btn btn-primary">View now <i
                                                                            class="fa fa-caret-right"></i></a>
                                                                </div>
                                                                <p>This is a custom block. You can add any images or
                                                                    links here</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pull-right">
                                        <a href="demo-shop-5-contact-us.html">
                                            Contact Us <span class="tip tip-hot">Hot!</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="mobile-nav">
            <div class="mobile-nav-wrapper">
                <ul class="mobile-side-menu">
                    <li><a href="demo-shop-5.html">Home</a></li>
                    <li>
                        <span class="mmenu-toggle"></span>
                        <a href="#">Fashion <span class="tip tip-new">New</span></a>

                        <ul>
                            <li>
                                <span class="mmenu-toggle"></span>
                                <a href="#">Women</a>
                                <ul>
                                    <li>
                                        <a href="#">Tops &amp; Blouses</a>
                                    </li>
                                    <li>
                                        <a href="#">Accessories</a>
                                    </li>
                                    <li>
                                        <a href="#">Dresses &amp; Skirts</a>
                                    </li>
                                    <li>
                                        <a href="#">Shoes &amp; Boots</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <span class="mmenu-toggle"></span>
                                <a href="#">Men</a>

                                <ul>
                                    <li>
                                        <a href="#">Accessories</a>
                                    </li>
                                    <li>
                                        <a href="#">Watch &amp; Fashion <span class="tip tip-new">New</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Tees, Knits &amp; Polos</a>
                                    </li>
                                    <li>
                                        <a href="#">Pants &amp; Denim</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <span class="mmenu-toggle"></span>
                                <a href="#">Jewellery <span class="tip tip-hot">Hot</span></a>

                                <ul>
                                    <li>
                                        <a href="#">Sweaters</a>
                                    </li>
                                    <li>
                                        <a href="#">Heels &amp; Sandals</a>
                                    </li>
                                    <li>
                                        <a href="#">Jeans &amp; Shorts</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <span class="mmenu-toggle"></span>
                                <a href="#">Kids Fashion</a>

                                <ul>
                                    <li>
                                        <a href="#">Casual Shoes</a>
                                    </li>
                                    <li>
                                        <a href="#">Spring &amp; Autumn</a>
                                    </li>
                                    <li>
                                        <a href="#">Winter Sneakers</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <span class="mmenu-toggle"></span>
                        <a href="#">Pages <span class="tip tip-hot">Hot!</span></a>

                        <ul>
                            <li>
                                <span class="mmenu-toggle"></span>
                                <a href="#">Category</a>
                                <ul>
                                    <li>
                                        <a href="demo-shop-5-category-2col.html">2 Columns</a>
                                    </li>
                                    <li>
                                        <a href="demo-shop-5-category-3col.html">3 Columns</a>
                                    </li>
                                    <li>
                                        <a href="demo-shop-5-category-4col.html">4 Columns</a>
                                    </li>
                                    <li>
                                        <a href="demo-shop-5-category-5col.html">5 Columns</a>
                                    </li>
                                    <li>
                                        <a href="demo-shop-5-category-6col.html">6 Columns</a>
                                    </li>
                                    <li>
                                        <a href="demo-shop-5-category-7col.html">7 Columns</a>
                                    </li>
                                    <li>
                                        <a href="demo-shop-5-category-8col.html">8 Columns</a>
                                    </li>
                                    <li>
                                        <a href="demo-shop-5-category-right-sidebar.html">Right Sidebar</a>
                                    </li>
                                    <li>
                                        <a href="demo-shop-5-category-list.html">Category List</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <span class="mmenu-toggle"></span>
                                <a href="#">Category Banners</a>
                                <ul>
                                    <li>
                                        <a href="demo-shop-5-category-banner-boxed-slider.html">Boxed slider</a>
                                    </li>
                                    <li>
                                        <a href="demo-shop-5-category-banner-boxed-image.html">Boxed Image</a>
                                    </li>
                                    <li>
                                        <a href="demo-shop-5-category-banner-fullwidth.html">Fullwidth</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <span class="mmenu-toggle"></span>
                                <a href="#">Product Details</a>
                                <ul>
                                    <li>
                                        <a href="demo-shop-5-product-details.html">Product Details 1</a>
                                    </li>
                                    <li>
                                        <a href="demo-shop-5-product-details2.html">Product Details 2</a>
                                    </li>
                                    <li>
                                        <a href="demo-shop-5-product-details3.html">Product Details 3</a>
                                    </li>
                                    <li>
                                        <a href="demo-shop-5-product-details4.html">Product Details 4</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="demo-shop-5-cart.html">Shopping Cart</a>
                            </li>
                            <li>
                                <a href="demo-shop-5-checkout.html">Checkout</a>
                            </li>
                            <li>
                                <span class="mmenu-toggle"></span>
                                <a href="#">Loign &amp; Register</a>
                                <ul>
                                    <li>
                                        <a href="<a href="<?php echo base_url('sign-in'); ?>">Login</a>
                                    </li>
                                    <li>
                                        <a href="<a href="<?php echo base_url('sign-up'); ?>">Register</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <span class="mmenu-toggle"></span>
                                <a href="#">Dashboard</a>
                                <ul>
                                    <li>
                                        <a href="demo-shop-5-dashboard.html">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="<a href="<?php echo base_url('my-account'); ?>">My Account</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="demo-shop-5-about-us.html">About Us</a>
                    </li>
                    <li>
                        <span class="mmenu-toggle"></span>
                        <a href="#">Blog</a>
                        <ul>
                            <li><a href="demo-shop-5-blog.html">Blog</a></li>
                            <li><a href="demo-shop-5-blog-post.html">Blog Post</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="demo-shop-5-contact-us.html">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>

        <div id="mobile-menu-overlay"></div>