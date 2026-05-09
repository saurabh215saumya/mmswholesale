<?php //echo "<pre>"; print_r($produictDetails); die; 
if($this->session->userdata('front_logged_in')){
    $userId = $this->session->userdata('front_logged_in')['id'];
    $userType = $this->session->userdata('front_logged_in')['user_type'];
} else {
    $userId = "";
    $userType = "";
}
if(file_exists(UPLOAD_PRODUCT_PATH.$produictDetails['image'])) {
  $img = SHOW_PRODUCT_PATH.$produictDetails['image'];
} else {
  $img = UPLOAD_PRODUCT_NO_IMAGE;
}
?>
<div role="main" class="main">

<section class="page-header mb-lg">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>">Home</a></li>

            <li><a href="javaScript:Void(0);">Product</a></li>
            <li class="active"><?php echo $produictDetails['product_name']; ?></li>
        </ul>
    </div>
</section>


<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="product-view">
                <div class="product-essential">
                    <div class="row">
                        <div class="product-img-box col-sm-5">
                            <div class="product-img-box-wrapper">
                                <div class="product-img-wrapper">
                                    <img id="product-zoom" src="<?php echo $img; ?>" data-zoom-image="<?php echo $img; ?>" alt="<?php echo $produictDetails['image_alt_1']; ?>">
                                </div>

                                <a href="#" class="product-img-zoom" title="Zoom">
                                    <span class="glyphicon glyphicon-search"></span>
                                </a>
                            </div>

                            <div class="owl-carousel manual" id="productGalleryThumbs">
                                <?php if($produictDetails['image']) { 
                                    if(file_exists(UPLOAD_PRODUCT_PATH.$produictDetails['image'])) {
                                      $img = SHOW_PRODUCT_PATH.$produictDetails['image'];
                                    } else {
                                      $img = UPLOAD_PRODUCT_NO_IMAGE;
                                    }
                                ?>
                                    <div class="product-img-wrapper">
                                    <a href="#" data-image="<?php echo $img; ?>" data-zoom-image="<?php echo $img; ?>" class="product-gallery-item">
                                        <img src="<?php echo $img; ?>" alt="<?php echo $produictDetails['image_alt_1']; ?>">
                                    </a>
                                </div>
                                <?php } ?>
                                <?php if($produictDetails['image_1']) { 
                                    if(file_exists(UPLOAD_PRODUCT_PATH.$produictDetails['image_1'])) {
                                      $img1 = SHOW_PRODUCT_PATH.$produictDetails['image_1'];
                                    } else {
                                      $img1 = UPLOAD_PRODUCT_NO_IMAGE;
                                    }
                                ?>
                                    <div class="product-img-wrapper">
                                    <a href="#" data-image="<?php echo $img1; ?>" data-zoom-image="<?php echo $img1; ?>" class="product-gallery-item">
                                        <img src="<?php echo $img1; ?>" alt="<?php echo $produictDetails['image_alt_1']; ?>">
                                    </a>
                                </div>
                                <?php } ?>
                                <?php if($produictDetails['image_2']) { 
                                    if(file_exists(UPLOAD_PRODUCT_PATH.$produictDetails['image_2'])) {
                                      $img2 = SHOW_PRODUCT_PATH.$produictDetails['image_2'];
                                    } else {
                                      $img2 = UPLOAD_PRODUCT_NO_IMAGE;
                                    }
                                ?>
                                    <div class="product-img-wrapper">
                                    <a href="#" data-image="<?php echo $img2; ?>" data-zoom-image="<?php echo $img2; ?>" class="product-gallery-item">
                                        <img src="<?php echo $img2; ?>" alt="<?php echo $produictDetails['image_alt_2']; ?>">
                                    </a>
                                </div>
                                <?php } ?>
                                <?php if($produictDetails['image_3']) { 
                                    if(file_exists(UPLOAD_PRODUCT_PATH.$produictDetails['image_3'])) {
                                      $img3 = SHOW_PRODUCT_PATH.$produictDetails['image_3'];
                                    } else {
                                      $img3 = UPLOAD_PRODUCT_NO_IMAGE;
                                    }
                                ?>
                                    <div class="product-img-wrapper">
                                    <a href="#" data-image="<?php echo $img3; ?>" data-zoom-image="<?php echo $img3; ?>" class="product-gallery-item">
                                        <img src="<?php echo $img3; ?>" alt="<?php echo $produictDetails['image_alt_3']; ?>">
                                    </a>
                                </div>
                                <?php } ?>
                                <?php if($produictDetails['image_4']) { 
                                    if(file_exists(UPLOAD_PRODUCT_PATH.$produictDetails['image_4'])) {
                                      $img4 = SHOW_PRODUCT_PATH.$produictDetails['image_4'];
                                    } else {
                                      $img4 = UPLOAD_PRODUCT_NO_IMAGE;
                                    }
                                ?>
                                    <div class="product-img-wrapper">
                                    <a href="#" data-image="<?php echo $img4; ?>" data-zoom-image="<?php echo $img4; ?>" class="product-gallery-item">
                                        <img src="<?php echo $img4; ?>" alt="<?php echo $produictDetails['image_alt_4']; ?>">
                                    </a>
                                </div>
                                <?php } ?>
                                <?php if($produictDetails['image_5']) { 
                                    if(file_exists(UPLOAD_PRODUCT_PATH.$produictDetails['image_5'])) {
                                      $img5 = SHOW_PRODUCT_PATH.$produictDetails['image_5'];
                                    } else {
                                      $img5 = UPLOAD_PRODUCT_NO_IMAGE;
                                    }
                                ?>
                                    <div class="product-img-wrapper">
                                    <a href="#" data-image="<?php echo $img5; ?>" data-zoom-image="<?php echo $img5; ?>" class="product-gallery-item">
                                        <img src="<?php echo $img5; ?>" alt="<?php echo $produictDetails['image_alt_5']; ?>">
                                    </a>
                                </div>
                                <?php } ?>
                            </div>
                        </div>

                        <div class="product-details-box col-sm-7">
                            <!-- <div class="product-nav-container">
                                <div class="product-nav product-nav-prev">
                                    <a href="#" title="Previous Product">
                                        <i class="fa fa-chevron-left"></i>
                                    </a>

                                    <div class="product-nav-dropdown">
                                        <img src="img/demos/shop/products/product1.jpg" alt="Product">
                                        <h4>Blue Denim Dress</h4>
                                    </div>
                                </div>
                                <div class="product-nav product-nav-next">
                                    <a href="#" title="Next Product">
                                        <i class="fa fa-chevron-right"></i>
                                    </a>

                                    <div class="product-nav-dropdown">
                                        <img src="img/demos/shop/products/product2.jpg" alt="Product">
                                        <h4>Black Woman Shirt</h4>
                                    </div>
                                </div>
                            </div> -->
                            <h1 class="product-name">
                                <?php echo $produictDetails['product_name']; ?>
                            </h1>

                            <div class="product-rating-container">
                                <!-- <div class="product-ratings">
                                    <div class="ratings-box">
                                        <div class="rating" style="width:60%"></div>
                                    </div>
                                </div>
                                <div class="review-link">
                                    <a href="#" class="review-link-in" rel="nofollow"> <span class="count">1</span> customer review</a> | 
                                    <a href="#" class="write-review-link" rel="nofollow">Add a review</a>
                                </div> -->
                            </div>

                            <div class="product-short-desc">
                                <?php echo $produictDetails['description']; ?>
                            </div>

                            <div class="product-detail-info">
                                <div class="product-price-box">
                                    <span class="old-price">$99.00</span>
                                    <span class="product-price">
                                        <?php 
                                          if($userType == 1){
                                              echo CURRENCY_SYMBOL. " ".$produictDetails['wholesale_price'];
                                          } else if($userType == 2){
                                              echo CURRENCY_SYMBOL. " ".$produictDetails['retailer_price'];
                                          } else {
                                              echo CURRENCY_SYMBOL. " ".$produictDetails['price'];
                                          }
                                        ?>
                                    </span>
                                </div>
                                <p class="availability">
                                    <span class="font-weight-semibold">Availability:</span>
                                    <?php 
                                        if($produictDetails['quantity'] > 0){ 
                                            echo "In Stock"; 
                                        } else { 
                                            echo "Out of Stock"; 
                                        } 
                                    ?>
                                </p>
                                <!-- <p class="email-to-friend"><a href="#">Email to a Friend</a></p> -->
                            </div>

                            <div class="product-actions">
                                <div class="product-detail-qty">
                                    <input type="text" value="1" class="vertical-spinner" id="product-vqty">
                                </div>
                                <?php 
                                $productExist = checkUserProductInCart($produictDetails['id'], $produictDetails['category_id'], $produictDetails['sub_cat_id'], $userId); 
                                if(empty($productExist)){
                                ?>
                                <a href="javaScript:void(0);" onclick="return addCartProductQuantity('<?php echo $produictDetails['id']; ?>', '<?php echo $produictDetails['category_id']; ?>', '<?php echo $produictDetails['sub_cat_id']; ?>');" class="addtocart" title="Add to Cart">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>Add to Cart</span>
                                </a>
                                <?php } else { ?>
                                    <a href="<?php echo base_url('cart-list'); ?>" class="addtocart" title="Add to Cart">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>Item in Cart</span>
                                </a>
                                <?php } ?>
                                
                                <div class="actions-right">
                                    <a href="#" class="addtowishlist" title="Add to Wishlist">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                    <!-- <a href="#" class="comparelink" title="Add to Compare">
                                        <i class="glyphicon glyphicon-signal"></i>
                                    </a> -->
                                </div>
                            </div>

                            <div class="product-share-box">
                                <div class="addthis_inline_share_toolbox"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tabs product-tabs">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#product-desc" data-toggle="tab">Description</a>
                        </li>
                        <li>
                            <a href="#product-add" data-toggle="tab">Additional</a>
                        </li>
                        <li>
                            <a href="#product-tags" data-toggle="tab">Tags</a>
                        </li>
                        <li>
                            <a href="#product-reviews" data-toggle="tab">Reviews</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="product-desc" class="tab-pane active">
                            <div class="product-desc-area">
                                <?php echo $produictDetails['long_description']; ?>
                            </div>
                        </div>
                        <div id="product-add" class="tab-pane">
                            <table class="product-table">
                                <tbody>
                                    <tr>
                                        <td class="table-label">Color</td>
                                        <td>Black</td>
                                    </tr>
                                    <tr>
                                        <td class="table-label">Size</td>
                                        <td>16mx24mx18m</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="product-tags" class="tab-pane">
                            <div class="product-tags-area">
                                <form action="#">
                                    <div class="form-group">
                                        <label>Add Your Tags:</label>
                                        <div class="clearfix">
                                            <input type="text" class="form-control pull-left" required>
                                            <input type="submit" class="btn btn-primary" value="Add Tags">
                                        </div>
                                    </div>
                                </form>
                                <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
                            </div>
                        </div>
                        <div id="product-reviews" class="tab-pane">
                            <div class="collateral-box">
                                <ul class="list-unstyled">
                                    <li>Be the first to review this product</li>
                                </ul>
                            </div>

                            <div class="add-product-review">
                                <h3 class="text-uppercase heading-text-color font-weight-semibold">WRITE YOUR OWN REVIEW</h3>
                                <p>How do you rate this product? *</p>

                                <form action="#">
                                    <table class="ratings-table">
                                        <thead>
                                            <tr>
                                                <th>&nbsp;</th>
                                                <th>1 star</th>
                                                <th>2 stars</th>
                                                <th>3 stars</th>
                                                <th>4 stars</th>
                                                <th>5 stars</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Quality</td>
                                                <td>
                                                    <input type="radio" name="ratings[1]" id="Quality_1" value="1" class="radio">
                                                </td>
                                                <td>
                                                    <input type="radio" name="ratings[1]" id="Quality_2" value="2" class="radio">
                                                </td>
                                                <td>
                                                    <input type="radio" name="ratings[1]" id="Quality_3" value="3" class="radio">
                                                </td>
                                                <td>
                                                    <input type="radio" name="ratings[1]" id="Quality_4" value="4" class="radio">
                                                </td>
                                                <td>
                                                    <input type="radio" name="ratings[1]" id="Quality_5" value="5" class="radio">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Value</td>
                                                <td>
                                                    <input type="radio" name="value[1]" id="Value_1" value="1" class="radio">
                                                </td>
                                                <td>
                                                    <input type="radio" name="value[1]" id="Value_2" value="2" class="radio">
                                                </td>
                                                <td>
                                                    <input type="radio" name="value[1]" id="Value_3" value="3" class="radio">
                                                </td>
                                                <td>
                                                    <input type="radio" name="value[1]" id="Value_4" value="4" class="radio">
                                                </td>
                                                <td>
                                                    <input type="radio" name="value[1]" id="Value_5" value="5" class="radio">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Price</td>
                                                <td>
                                                    <input type="radio" name="price[1]" id="Price_1" value="1" class="radio">
                                                </td>
                                                <td>
                                                    <input type="radio" name="price[1]" id="Price_2" value="2" class="radio">
                                                </td>
                                                <td>
                                                    <input type="radio" name="price[1]" id="Price_3" value="3" class="radio">
                                                </td>
                                                <td>
                                                    <input type="radio" name="price[1]" id="Price_4" value="4" class="radio">
                                                </td>
                                                <td>
                                                    <input type="radio" name="price[1]" id="Price_5" value="5" class="radio">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <div class="form-group">
                                        <label>Nickname<span class="required">*</span></label>
                                        <input type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Summary of Your Review<span class="required">*</span></label>
                                        <input type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group mb-xlg">
                                        <label>Review<span class="required">*</span></label>
                                        <textarea cols="5" rows="6" class="form-control"></textarea>
                                    </div>

                                    <div class="text-right">
                                        <input type="submit" class="btn btn-primary" value="Submit Review">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            

            
        </div>
        <aside class="col-md-3 sidebar product-sidebar">
            <div class="feature-box feature-box-style-3">
                <div class="feature-box-icon">
                    <i class="fa fa-truck"></i>
                </div>
                <div class="feature-box-info">
                    <h4>FREE SHIPPING</h4>
                    <p class="mb-none">Free shipping on all orders over $99.</p>
                </div>
            </div>

            <div class="feature-box feature-box-style-3">
                <div class="feature-box-icon">
                    <i class="fa fa-dollar"></i>
                </div>
                <div class="feature-box-info">
                    <h4>MONEY BACK GUARANTEE</h4>
                    <p class="mb-none">100% money back guarantee.</p>
                </div>
            </div>

            <div class="feature-box feature-box-style-3">
                <div class="feature-box-icon">
                    <i class="fa fa-support"></i>
                </div>
                <div class="feature-box-info">
                    <h4>ONLINE SUPPORT 24/7</h4>
                    <p class="mb-none">Lorem ipsum dolor sit amet.</p>
                </div>
            </div>

            <hr class="mt-xlg">

            <hr>
        </aside>
    </div>
</div>

</div>



<input type="hidden" name="session_user_id" id="session_user_id" value="<?php echo $this->session->userdata('front_logged_in')['id']; ?>">
    <script type="text/javascript">
    function addCartProductQuantity(product_id, cat_id, sub_cat_id){
        // var value = parseInt(document.getElementById('product-vqty').value, 10);
        // value = isNaN(value) ? 0 : value;
        // value++;
        // document.getElementById('product-vqty').value = value;

        var user_id = $('#session_user_id').val();
        var quantity = $('#product-vqty').val();

        var reqUrl = '<?php echo base_url('product/addItemIntoCart'); ?>';

        if(quantity > 0){
            var saveData = $.ajax({
                type: "POST",
                url: reqUrl,
                data:"product_id="+product_id+"&user_id="+user_id+"&quantity="+quantity+"&cat_id="+cat_id+"&sub_cat_id="+sub_cat_id,
                dataType: "text",
                success: function(resultData){ // alert(resultData); return false;
                    if(resultData == "updated"){
                        // document.getElementById("quantity_"+id).innerHTML = quantity;
                        // document.getElementById("totPrice_"+id).innerHTML = totProPrice;
                    }
                    // alert("Cart updated successfully.");
                    window.location.href = "<?php echo base_url('cart-list/'); ?>";
                }       
            }); 
        } else {
            alert("Product quantity should be grater than 0.");
        }
    }
</script>