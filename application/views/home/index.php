<?php // echo "<pre>"; print_r($allCategoryProducts); die; 
if($this->session->userdata('front_logged_in')){
    $userId = $this->session->userdata('front_logged_in')['id'];
    $userType = $this->session->userdata('front_logged_in')['user_type'];
} else {
    $userId = "";
    $userType = "";
}
?>

    <div class="container mb-lg">
        <h2 class="slider-title">
            <span class="inline-title">OUR PRODUCTS</span>
            <span class="line"></span>
        </h2>
        <?php if(!empty($allCategoryProducts)){ ?>
                    
        <div class="owl-carousel owl-theme manual featured-products-carousel">
            <?php
            $i=1;
            foreach($allCategoryProducts as $products){
                if(file_exists(UPLOAD_PRODUCT_PATH.$products['image'])) {
                  $img = SHOW_PRODUCT_PATH.$products['image'];
                } else {
                  $img = UPLOAD_PRODUCT_NO_IMAGE;
                }
            ?>

                <div class="product">
                    <figure class="product-image-area">
                        <a href="<?php echo base_url('product-details/'.$products['product_slug']); ?>" title="<?php echo $products['product_name']; ?>" class="product-image">
                            <img src="<?php echo $img; ?>" alt="<?php echo $products['image_alt_1']; ?>">
                            <img src="<?php echo $img; ?>" alt="<?php echo $products['image_alt_2']; ?>"
                                class="product-hover-image">
                        </a>

                        <!-- <a href="#" class="product-quickview">
                            <i class="fa fa-share-square-o"></i>
                            <span>Quick View</span>
                        </a> -->
                        <!-- <div class="product-label"><span class="discount">-10%</span></div>
                        <div class="product-label"><span class="new">New</span></div> -->
                    </figure>
                    <div class="product-details-area">
                        <h2 class="product-name"><a href="<?php echo base_url('product-details/'.$products['product_slug']); ?>" title="<?php echo $products['product_name']; ?>"><?php echo $products['product_name']; ?></a></h2>


                        <div class="product-bottom-row">
                            <div class="product-price-box">
                                <span class="product-price">
                                <?php 
                                    if($userType == 1){
                                        echo CURRENCY_SYMBOL. " ".$products['wholesale_price'];
                                    } else if($userType == 2){
                                        echo CURRENCY_SYMBOL. " ".$products['retailer_price'];
                                    } else {
                                        echo CURRENCY_SYMBOL. " ".$products['price'];
                                    }
                                ?>
                                </span>
                            </div>
                            <div class="product-actions">
                                <?php 
                                $productExist = checkUserProductInCart($products['id'], $products['category_id'], $products['sub_cat_id'], $userId); 
                                if(empty($productExist)){
                                ?>
                                <a onclick="return addProductQuantity('<?php echo $products['category_id']; ?>', '<?php echo $products['sub_cat_id']; ?>', '<?php echo $products['id']; ?>');" class="addtocart" title="Add to Cart">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>Add to Cart</span>
                                </a>
                                <?php } else { ?>
                                <a href="<?php echo base_url('cart-list'); ?>" class="addtocart" title="Add to Cart">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>Item in Cart</span>
                                </a>
                                <?php } ?>
                                <a  onclick="return addProductInWishlist('<?php echo $products['id']; ?>');" class="addtowishlist addtowishlist-always" title="Add to Wishlist">
                                    <i class="fa fa-heart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <?php } ?>
    </div>




<input type="hidden" name="session_user_id" id="session_user_id" value="<?php echo $this->session->userdata('front_logged_in')['id']; ?>">

<script type="text/javascript">
    function addProductQuantity(cat_id, sub_cat_id, product_id){
        // Add item into cart
        var user_id = $('#session_user_id').val();
        // alert(user_id);
        var quantity = 1;
        var reqUrl = '<?php echo base_url('product/addItemIntoCart'); ?>';
        if(user_id != ""){
          if(quantity > 0){
            var saveData = $.ajax({
                type: "POST",
                url: reqUrl,
                data:"product_id="+product_id+"&user_id="+user_id+"&quantity="+quantity+"&cat_id="+cat_id+"&sub_cat_id="+sub_cat_id,
                dataType: "text",
                success: function(resultData){ 
                 // alert(resultData); return false;
                    if(resultData == "updated"){
                        alert("Cart updated successfully.");
                        window.location.href = "<?php echo base_url('cart-list/'); ?>";
                        //document.getElementById("quantity_"+sid+"_"+pid).innerHTML = quantity;
                        // document.getElementById("totPrice_"+id).innerHTML = totProPrice;
                        
                    } else {
                        alert("Cart updated successfully.");
                        window.location.href = "<?php echo base_url('cart-list/'); ?>";
                    }
                }       
            }); 
          } else {
              alert("Product quantity should be grater than 0.");
          }
        } else {
          window.location.href = "<?php echo base_url('/sign-in'); ?>";
        }
    }




    function addProductInWishlist(product_id){
        var user_id = $('#session_user_id').val();
        var reqUrl = '<?php echo base_url('product/addWishlistProduct'); ?>';
        if(user_id != ""){
        var saveData = $.ajax({
            type: "POST",
            url: reqUrl,
            data:"product_id="+product_id+"&user_id="+user_id,
            dataType: "text",
            success: function(resultData){ 
             // alert(resultData); return false;
                if(resultData == "added"){
                    alert("Product add into wishlist.");
                    window.location.href = "<?php echo base_url(); ?>";
                    //document.getElementById("quantity_"+sid+"_"+pid).innerHTML = quantity;
                    // document.getElementById("totPrice_"+id).innerHTML = totProPrice;
                    
                } else {
                    alert("Removed product from wishlist.");
                    window.location.href = "<?php echo base_url(); ?>";
                }
            }       
        }); 
        } else {
          window.location.href = "<?php echo base_url('/sign-in'); ?>";
        }
    }
</script>