<div id="subtitle-wrapper" class="lazyload" data-bg="<?php echo base_url('assets/front/images/subtitle-wrapper01.jpg'); ?>">
<div class="subtitle-wrapper-img lazyload" data-bg="<?php echo base_url('assets/front/images/home-images/common_banner.jpg'); ?>">
    <div class="container container-fluid-xl">
        <div class="tt-breadcrumbs">
            <ul>
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li>My Order</li>
            </ul>
        </div>
        <h1 class="subtitle__title">My Order</h1>
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
                        <li><a href="<?php echo base_url('billing-address'); ?>">Address Book</a></li>
                        <li class="active"><a href="<?php echo base_url('my-order'); ?>">My Orders</a></li>
                        <li><a href="<?php echo base_url('appuser/logout'); ?>">Sign Out</a></li>
                    </ul>
                </aside>
            </div>
            <div class="col-md-9">
                <div class="featured-box featured-box-primary align-left mt-sm shop" style="">
                    <div class="box-content">
                        <table class="shop_table cart">
                            <thead>
                                <tr>
                                    <th class="order-title">
                                        S.No
                                    </th>
                                    <th class="order-title">
                                        Txn. No
                                    </th>
                                    <th class="order-title">
                                        Order Date
                                    </th>
                                    <th class="order-title">
                                        Payment Mode
                                    </th>
                                    <th class="order-title">
                                        Status
                                    </th>
                                    <th class="order-title">
                                        Total
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($userOrderArr)){ 
                                    $i=1;
                                    foreach($userOrderArr as $userOrder){
                                        if($userOrder['payment_method'] == "1"){
                                            $paymentMethod = "COD";
                                        } else if($userOrder['payment_method'] == "2"){
                                            $paymentMethod = "Paypal";
                                        }
                                        /* else if($userOrder['payment_method'] == "3"){
                                            $paymentMethod = "Paypal";
                                        } else {
                                            $paymentMethod = "Bank Transfer";
                                        }*/

                                        if($userOrder['status'] == "0"){
                                            $paymentStatus = "Processing";
                                        } else if($userOrder['status'] == "1"){
                                            $paymentStatus = "Complete";
                                        } else if($userOrder['status'] == "2"){
                                            $paymentStatus = "Cancel";
                                        }
                                ?>
                                <tr class="cart_table_item">
                                    <td class="order-title">
                                        <?php echo $i; ?>
                                    </td>
                                    <td class="order-title">
                                        <?php echo $userOrder['transaction_no']; ?>
                                    </td>
                                    <td class="order-title">
                                        <?php echo date('M d Y', strtotime($userOrder['addedOn'])); ?>
                                    </td>
                                    <td class="order-title">
                                        <span class="amount"><?php echo $paymentMethod; ?></span>
                                    </td>
                                    <td class="order-title">

                                        <?php echo $paymentStatus; ?>

                                    </td>
                                    <td class="order-title">
                                        <strong><?php echo CURRENCY_SYMBOLE." ".$userOrder['total_amount']; ?></strong>
                                    </td>
                                </tr>
                                <?php $i++; } } else { ?>
                                    <span>No Record Found!</span>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>