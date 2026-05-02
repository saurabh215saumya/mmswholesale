<div id="subtitle-wrapper" class="lazyload" data-bg="<?php echo base_url('assets/front/images/subtitle-wrapper01.jpg'); ?>">
    <div class="subtitle-wrapper-img lazyload" data-bg="<?php echo base_url('assets/front/images/home-images/common_banner.jpg'); ?>">
        <div class="container container-fluid-xl">
            <div class="tt-breadcrumbs">
                <ul>
                    <li><a href="<?php echo base_url(); ?>">Home</a></li>
                    <li>Billing Address</li>
                </ul>
            </div>
            <h1 class="subtitle__title">Billing Address</h1>
        </div>
        <div class="bubbleContainer">
            <div class="bubble-1"></div>
            <div class="bubble-2"></div>
            <div class="bubble-3"></div>
            <div class="bubble-4"></div>
            <div class="bubble-5"></div>
            <div class="bubble-6"></div>
            <div class="bubble-7"></div>
            <div class="bubble-8"></div>
            <div class="bubble-9"></div>
            <div class="bubble-10"></div>
        </div>
    </div>
</div>

<main id="tt-pageContent">
    <div class="section-inner">
        <div class="container container-fluid-lg">
            <div class="row">
                <div class="col-md-3">
                    <aside class="sidebar">
                        <ul class="nav nav-list">
                            <!-- <li class="active"><a href="#">Account Dashboard</a></li> -->
                            <li><a href="<?php echo base_url('my-account'); ?>">Account Information</a></li>
                            <li class="active"><a href="<?php echo base_url('billing-address'); ?>">Address Book</a></li>
                            <li><a href="<?php echo base_url('my-order'); ?>">My Orders</a></li>
                            <li><a href="<?php echo base_url('appuser/logout'); ?>">Sign Out</a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-md-9">
                    <div class="featured-box featured-box-primary align-left mt-sm shop" style="">
                        <div class="box-content">
                            <div class="panel-box">
                                <div class="panel-box-title">
                                    <h3>ADDRESS BOOK</h3>
                                    <a href="#" class="panel-box-edit">Manage Addresses</a>
                                </div>

                                <div class="panel-box-content">
                                    <div class="row">
                                        <?php if(!empty($userBillingInfo)){
                                            $i=0;
                                            foreach($userBillingInfo as $row){
                                        ?>
                                        <div class="col-sm-6">
                                            <?php if($i==0){ ?>
                                                <h4 class="h5 heading-text-color font-weight-semibold mb-xs">Pickup Address</h4>
                                            <?php } else { ?>
                                                <h4 class="h5 heading-text-color font-weight-semibold mb-xs">Delivery Address</h4>
                                            <?php } ?>
                                            
                                            <address>
                                                <?php echo $row['first_name']." ".$row['last_name']; ?><br>
                                                  <?php echo $row['email']; ?><br>
                                                  <?php echo $row['contact']; ?><br>
                                                  <?php echo $row['address_1']." ".$row['address_2']; ?><br>
                                                  <?php echo $row['city']; ?><br>
                                                  <?php echo $row['postal_code']; ?><br>
                                            </address>
                                            <div class="tt-btn tt-btn__wide buttonBackground">
                                                <span class="mask">Edit</span>
                                                <button  data-toggle="modal" data-target="#editAddress_<?php echo $row['id']; ?>" class="button">Edit</button>
                                            </div>
                                        </div>
                                        <?php $i++; } } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>