<?php // echo "<pre>"; print_r($allCategoryProducts); die; 
if($this->session->userdata('front_logged_in')){
    $userId = $this->session->userdata('front_logged_in')['id'];
    $userType = $this->session->userdata('front_logged_in')['user_type'];
} else {
    $userId = "";
    $userType = "";
}
?>
<div role="main" class="main">
      <section class="page-header mb-lg">
        <div class="container">
          <ul class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>">Home</a></li>

            <li><a href="javaScript:void(0);">
              <?php 
                $pageSlug = $this->uri->segment('1');
                if($pageSlug === 'categories'){
                  echo "Category"; 
                } else { 
                  echo "Sub Category"; 
                }
              ?></a></li>
            <li class="active">
            <?php 
                $pageSlug = $this->uri->segment('1');
                $slug = $this->uri->segment('2');
                if($pageSlug === 'categories'){
                  echo getCategoryNameBySlug($slug); 
                } else { 
                  echo getSubCategoryNameBySlug($slug);
                }
              ?></li>
          </ul>
        </div>
      </section>

      <div class="container">
        <div class="row">
          <div class="col-md-9 col-md-push-3">
            <!-- <div class="toolbar mb-none">
              <div class="sorter">
                <div class="sort-by">
                  <label>Sort by:</label>
                  <select>
                    <option value="Position">Position</option>
                    <option value="Name">Name</option>
                    <option value="Price">Price</option>
                  </select>
                  <a href="#" title="Set Desc Direction">
                    <img src="img/demos/shop/i_asc_arrow.gif" alt="Set Desc Direction">
                  </a>
                </div>

                <div class="view-mode">
                  <span title="Grid">
                    <i class="fa fa-th"></i>
                  </span>
                  <a href="#" title="List">
                    <i class="fa fa-list-ul"></i>
                  </a>
                </div>

                <ul class="pagination">
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#"><i class="fa fa-caret-right"></i></a></li>
                </ul>

                <div class="limiter">
                  <label>Show:</label>
                  <select>
                    <option value="12">12</option>
                    <option value="24">24</option>
                    <option value="36">36</option>
                  </select>
                </div>
              </div>
            </div> -->

            <ul class="products-grid columns4">





              <?php if(!empty($allProductsByCategory)){ 
                $i=1;
                foreach($allProductsByCategory as $products){
                if(file_exists(UPLOAD_PRODUCT_PATH.$products['image'])) {
                  $img = SHOW_PRODUCT_PATH.$products['image'];
                } else {
                  $img = UPLOAD_PRODUCT_NO_IMAGE;
                }
                ?>
              <li>
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
                    <!-- <div class="product-label"><span class="discount">-10%</span></div> -->
                    <!-- <div class="product-label"><span class="new">New</span></div> -->
                  </figure>
                  <div class="product-details-area">
                    <h2 class="product-name"><a href="<?php echo base_url('product-details/'.$products['product_slug']); ?>" title="<?php echo $products['product_name']; ?>"><?php echo $products['product_name']; ?></a></h2>
                    <!-- <div class="product-ratings">
                      <div class="ratings-box">
                        <div class="rating" style="width:60%"></div>
                      </div>
                    </div> -->

                    <div class="product-price-box">
                      <!-- <span class="old-price">$99.00</span> -->
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
                      <a href="#" class="addtowishlist" title="Add to Wishlist">
                        <i class="fa fa-heart"></i>
                      </a>
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
                      <!-- <a href="#" class="comparelink" title="Add to Compare">
                        <i class="glyphicon glyphicon-signal"></i>
                      </a> -->
                    </div>
                  </div>
                </div>
              </li>
              <?php $i++; } } ?>

              
            </ul>

            <div class="toolbar-bottom">
              <div class="toolbar">
                <div class="sorter">
                  <ul class="pagination">
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#"><i class="fa fa-caret-right"></i></a></li>
                  </ul>

                  <div class="limiter">
                    <label>Show:</label>
                    <select>
                      <option value="12">12</option>
                      <option value="24">24</option>
                      <option value="36">36</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <aside class="col-md-3 col-md-pull-9 sidebar shop-sidebar">
            <div class="panel-group">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse"
                      href="#panel-filter-category">
                      Categories
                    </a>
                  </h4>
                </div>
                <div id="panel-filter-category" class="accordion-body collapse in">
                  <div class="panel-body">
                    <ul>
                      <?php 
                            if(!empty($isActiveCategories)){
                            foreach($isActiveCategories as $activeCategory){ ?>
                      <li><a href="<?php echo base_url('categories/'.$activeCategory->category_slug); ?>"><?php echo $activeCategory->category_name; ?></a></li>
                      <?php } } ?>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" href="#panel-filter-brand">
                      Brands
                    </a>
                  </h4>
                </div>
                <div id="panel-filter-brand" class="accordion-body collapse in">
                  <div class="panel-body">
                    <ul>
                      <li><a href="#">Nike</a></li>
                      <li><a href="#">Adidas</a></li>
                      <li><a href="#">Puma</a></li>
                    </ul>
                  </div>
                </div>
              </div> -->
            </div>

            <h4>Featured</h4>
            <div class="owl-carousel owl-theme"
              data-plugin-options='{"items":1, "margin": 5, "dots": false, "nav": true}'>
              <div>
                <div class="product product-sm">
                  <figure class="product-image-area">
                    <a href="demo-shop-5-product-details.html" title="Product Name"
                      class="product-image">
                      <img src="img/demos/shop/products/product13.jpg" alt="Product Name">
                      <img src="img/demos/shop/products/product13-2.jpg" alt="Product Name"
                        class="product-hover-image">
                    </a>
                  </figure>
                  <div class="product-details-area">
                    <h2 class="product-name"><a href="demo-shop-5-product-details.html"
                        title="Product Name">Diamond Ring - S</a></h2>
                    <div class="product-ratings">
                      <div class="ratings-box">
                        <div class="rating" style="width:0%"></div>
                      </div>
                    </div>

                    <div class="product-price-box">
                      <span class="product-price">$220.00</span>
                    </div>
                  </div>
                </div>

                <div class="product product-sm">
                  <figure class="product-image-area">
                    <a href="demo-shop-5-product-details.html" title="Product Name"
                      class="product-image">
                      <img src="img/demos/shop/products/product14.jpg" alt="Product Name">
                    </a>
                  </figure>
                  <div class="product-details-area">
                    <h2 class="product-name"><a href="demo-shop-5-product-details.html"
                        title="Product Name">Diamond Ring - XL</a></h2>
                    <div class="product-ratings">
                      <div class="ratings-box">
                        <div class="rating" style="width:80%"></div>
                      </div>
                    </div>

                    <div class="product-price-box">
                      <span class="product-price">$180.00</span>
                    </div>
                  </div>
                </div>

                <div class="product product-sm">
                  <figure class="product-image-area">
                    <a href="demo-shop-5-product-details.html" title="Product Name"
                      class="product-image">
                      <img src="img/demos/shop/products/product15.jpg" alt="Product Name">
                    </a>
                  </figure>
                  <div class="product-details-area">
                    <h2 class="product-name"><a href="demo-shop-5-product-details.html"
                        title="Product Name">Diamond Ring - 2XL</a></h2>
                    <div class="product-ratings">
                      <div class="ratings-box">
                        <div class="rating" style="width:0%"></div>
                      </div>
                    </div>

                    <div class="product-price-box">
                      <span class="product-price">$240.00</span>
                    </div>
                  </div>
                </div>
              </div>

              <div>
                <div class="product product-sm">
                  <figure class="product-image-area">
                    <a href="demo-shop-5-product-details.html" title="Product Name"
                      class="product-image">
                      <img src="img/demos/shop/products/product16.jpg" alt="Product Name">
                      <img src="img/demos/shop/products/product16-2.jpg" alt="Product Name"
                        class="product-hover-image">
                    </a>
                  </figure>
                  <div class="product-details-area">
                    <h2 class="product-name"><a href="demo-shop-5-product-details.html"
                        title="Product Name">Diamond Ring - 3XL</a></h2>
                    <div class="product-ratings">
                      <div class="ratings-box">
                        <div class="rating" style="width:60%"></div>
                      </div>
                    </div>

                    <div class="product-price-box">
                      <span class="product-price">$220.00</span>
                    </div>
                  </div>
                </div>

                <div class="product product-sm">
                  <figure class="product-image-area">
                    <a href="demo-shop-5-product-details.html" title="Product Name"
                      class="product-image">
                      <img src="img/demos/shop/products/product17.jpg" alt="Product Name">
                    </a>
                  </figure>
                  <div class="product-details-area">
                    <h2 class="product-name"><a href="demo-shop-5-product-details.html"
                        title="Product Name">Diamond Ring - M</a></h2>
                    <div class="product-ratings">
                      <div class="ratings-box">
                        <div class="rating" style="width:0%"></div>
                      </div>
                    </div>

                    <div class="product-price-box">
                      <span class="product-price">$180.00</span>
                    </div>
                  </div>
                </div>

                <div class="product product-sm">
                  <figure class="product-image-area">
                    <a href="demo-shop-5-product-details.html" title="Product Name"
                      class="product-image">
                      <img src="img/demos/shop/products/product13.jpg" alt="Product Name">
                    </a>
                  </figure>
                  <div class="product-details-area">
                    <h2 class="product-name"><a href="demo-shop-5-product-details.html"
                        title="Product Name">Diamond Ring - XL</a></h2>
                    <div class="product-ratings">
                      <div class="ratings-box">
                        <div class="rating" style="width:80%"></div>
                      </div>
                    </div>

                    <div class="product-price-box">
                      <span class="product-price">$240.00</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </aside>
        </div>
      </div>

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
</script>