<?php 
// echo "<pre>"; print_r($this->session->userdata('front_logged_in'));
$pageSlug = $this->uri->segment('1');
$metaDataArr = getSeoPageMetaData($pageSlug);
// $pageSlug_1 = $this->uri->segment('2');
if($this->session->userdata('front_logged_in')){
    $userId = $this->session->userdata('front_logged_in')['id'];
} else {
    $userId = "";
}
$cartProductArr = getUserCartProduct($userId); 
// $isActiveCategories = getAllCategory();
// echo "<pre>"; print_r($isActiveCategories); die;
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
                        <div class="header-column">
                            <div class="header-logo">
                                <a href="demo-shop-5.html">
                                    <img alt="MMS Wholesale Template" width="111" height="51" src="<?php echo base_url('assets/images/img/demos/shop/logo-shop.png'); ?>">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="top-menu-area">
                        <a href="#">Links <i class="fa fa-caret-down"></i></a>
                        <ul class="top-menu">
                        <?php if($this->session->userdata('front_logged_in')){ ?>
                            <li><a href="<?php echo base_url('my-account'); ?>">My Account</a></li>
                            <li><a href="<?php echo base_url('category'); ?>">My Wishlist</a></li>
                            <li><a href="<?php echo base_url('appuser/logout'); ?>">Log Out</a></li>
                        <?php } else { ?>
                            <li><a href="<?php echo base_url('sign-in'); ?>">Log in</a></li>
                        <?php } ?>
                            <li><i class="fa fa-phone"></i><span>+44 7447446059</span></li>
                            <div class="cart-dropdown">
                                <a href="#" class="cart-dropdown-icon">
                                    <i class="minicart-icon"></i>
                                    <span class="cart-info">
                                        <span class="cart-qty"><?php echo count($cartProductArr); ?></span>
                                        <span class="cart-text">item(s)</span>
                                    </span>
                                </a>
                            </div>
                        </ul>
                    </div>
                    <p class="welcome-msg">DEFAULT WELCOME MSG!</p>
                </div>
            </div>

            <div class="header-container container">
                <div class="header-row">
                    <div class="header-column">
                        <div class="row">
                            <div class="cart-area">
                                <div class="custom-block">
                                    <i class="fa fa-phone" style="display: none;"></i>
                                </div>
                            </div>

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
                                    <a href="<?php echo base_url(); ?>">Home</a>
                                </li>
                            <?php 
                            if(!empty($isActiveCategories)){
                            foreach($isActiveCategories as $activeCategory){ ?>
                                <li class="dropdown dropdown-mega">
                                    <a href="<?php echo $activeCategory->category_slug; ?>" class="dropdown-toggle"><?php echo $activeCategory->category_name; ?></a>

                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="dropdown-mega-content">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <ul class="dropdown-mega-sub-nav">
                                                                <?php 
                                                                $isActiveSubCategories = getAllSubCategory($activeCategory->id);
                                                                if(!empty($isActiveSubCategories)){
                                                                foreach($isActiveSubCategories as $activeSubCategories){ ?>
                                                                <li><a href="<?php echo $activeSubCategories->sub_category_slug; ?>"><?php echo $activeSubCategories->sub_category_name; ?></a></li>
                                                                <?php } } ?>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            <?php } } ?>

                            <!-- <li class="pull-right">
                            <a href="<?php echo base_url('contact-us'); ?>">Contact Us </a>
                            </li> -->
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
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <?php if(!empty($isActiveCategories)){
                foreach($isActiveCategories as $activeCategory){ ?>
                    <li>
                    <span class="mmenu-toggle"></span>
                    <a href="<?php echo $activeCategory->category_slug; ?>"><?php echo $activeCategory->category_name; ?></a>

                    <ul>
                        <?php 
                        $isActiveSubCategories = getAllSubCategory($activeCategory->id);
                        if(!empty($isActiveSubCategories)){
                        foreach($isActiveSubCategories as $activeSubCategories){ ?>
                            <li>
                                <a href="<?php echo $activeSubCategories->sub_category_slug; ?>"><?php echo $activeSubCategories->sub_category_name; ?></a>
                            </li>
                        <?php } } ?>
                    </ul>
                    </li>
                <?php }} ?>
                <li>
                    <a href="<?php echo base_url('contact-us'); ?>">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>

<div id="mobile-menu-overlay"></div>