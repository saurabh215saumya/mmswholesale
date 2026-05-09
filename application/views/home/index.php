<?php // echo "<pre>"; print_r($allCategoryProducts); die; ?>
<div role="main" class="main">
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
                    <!-- <div class="product-ratings">
                        <div class="ratings-box">
                            <div class="rating" style="width:60%"></div>
                        </div>
                    </div> -->

                    <div class="product-price-actions-row">
                        <div class="product-price-box">
                            <!-- <span class="old-price">$99.00</span> -->
                            <span class="product-price"><?php echo CURRENCY_SYMBOL. " ".$products['price']; ?></span>
                        </div>
                        <div class="product-actions">
                            <a href="#" class="addtocart" title="Add to Cart">
                                <i class="fa fa-shopping-cart"></i>
                                <span>Add to Cart</span>
                            </a>
                            <a href="#" class="addtowishlist" title="Add to Wishlist">
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

    <!-- <div class="container mb-xs">
        <h2 class="slider-title">
            <span class="inline-title">New PRODUCTS</span>
            <span class="line"></span>
        </h2>

        <div class="owl-carousel owl-theme manual new-products-carousel hide-addtolinks">
            <div class="product">
                <figure class="product-image-area">
                    <a href="demo-shop-5-product-details.html" title="Product Name" class="product-image">
                        <img src="<?php echo base_url('assets/images/img/demos/shop/products/product17.jpg'); ?>" alt="Product Name">
                    </a>

                    <a href="#" class="product-quickview">
                        <i class="fa fa-share-square-o"></i>
                        <span>Quick View</span>
                    </a>
                    <div class="product-label"><span class="discount">-10%</span></div>
                    <div class="product-label"><span class="new">New</span></div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="demo-shop-5-product-details.html" title="Product Name">Noa
                            Sheer Blouse</a></h2>
                    <div class="product-ratings">
                        <div class="ratings-box">
                            <div class="rating" style="width:60%"></div>
                        </div>
                    </div>

                    <div class="product-price-box">
                        <span class="old-price">$99.00</span>
                        <span class="product-price">$89.00</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtowishlist" title="Add to Wishlist">
                            <i class="fa fa-heart"></i>
                        </a>
                        <a href="#" class="addtocart" title="Add to Cart">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Cart</span>
                        </a>
                        <a href="#" class="comparelink" title="Add to Compare">
                            <i class="glyphicon glyphicon-signal"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="product">
                <figure class="product-image-area">
                    <a href="demo-shop-5-product-details.html" title="Product Name" class="product-image">
                        <img src="<?php echo base_url('assets/images/img/demos/shop/products/product13.jpg'); ?>" alt="Product Name">
                        <img src="<?php echo base_url('assets/images/img/demos/shop/products/product13-2.jpg'); ?>" alt="Product Name"
                            class="product-hover-image">
                    </a>

                    <a href="#" class="product-quickview">
                        <i class="fa fa-share-square-o"></i>
                        <span>Quick View</span>
                    </a>
                    <div class="product-label"><span class="discount">-25%</span></div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="demo-shop-5-product-details.html"
                            title="Product Name">Women Fashion Blouse</a></h2>
                    <div class="product-ratings">
                        <div class="ratings-box">
                            <div class="rating" style="width:0%"></div>
                        </div>
                    </div>

                    <div class="product-price-box">
                        <span class="old-price">$120.00</span>
                        <span class="product-price">$90.00</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtowishlist" title="Add to Wishlist">
                            <i class="fa fa-heart"></i>
                        </a>
                        <a href="#" class="addtocart" title="Add to Cart">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Cart</span>
                        </a>
                        <a href="#" class="comparelink" title="Add to Compare">
                            <i class="glyphicon glyphicon-signal"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="product">
                <figure class="product-image-area">
                    <a href="demo-shop-5-product-details.html" title="Product Name" class="product-image">
                        <img src="<?php echo base_url('assets/images/img/demos/shop/products/product14.jpg'); ?>" alt="Product Name">
                    </a>

                    <a href="#" class="product-quickview">
                        <i class="fa fa-share-square-o"></i>
                        <span>Quick View</span>
                    </a>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="demo-shop-5-product-details.html"
                            title="Product Name">Fashion Dress</a></h2>
                    <div class="product-ratings">
                        <div class="ratings-box">
                            <div class="rating" style="width:60%"></div>
                        </div>
                    </div>

                    <div class="product-price-box">
                        <span class="product-price">$70.00</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtowishlist" title="Add to Wishlist">
                            <i class="fa fa-heart"></i>
                        </a>
                        <a href="#" class="addtocart" title="Add to Cart">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Cart</span>
                        </a>
                        <a href="#" class="comparelink" title="Add to Compare">
                            <i class="glyphicon glyphicon-signal"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="product">
                <figure class="product-image-area">
                    <a href="demo-shop-5-product-details.html" title="Product Name" class="product-image">
                        <img src="<?php echo base_url('assets/images/img/demos/shop/products/product15.jpg'); ?>" alt="Product Name">
                    </a>

                    <a href="#" class="product-quickview">
                        <i class="fa fa-share-square-o"></i>
                        <span>Quick View</span>
                    </a>
                    <div class="product-label"><span class="discount">-20%</span></div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="demo-shop-5-product-details.html"
                            title="Product Name">Fashion Sweater</a></h2>
                    <div class="product-ratings">
                        <div class="ratings-box">
                            <div class="rating" style="width:80%"></div>
                        </div>
                    </div>

                    <div class="product-price-box">
                        <span class="old-price">$100.00</span>
                        <span class="product-price">$90.00</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtowishlist" title="Add to Wishlist">
                            <i class="fa fa-heart"></i>
                        </a>
                        <a href="#" class="addtocart" title="Add to Cart">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Cart</span>
                        </a>
                        <a href="#" class="comparelink" title="Add to Compare">
                            <i class="glyphicon glyphicon-signal"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="product">
                <figure class="product-image-area">
                    <a href="demo-shop-5-product-details.html" title="Product Name" class="product-image">
                        <img src="<?php echo base_url('assets/images/img/demos/shop/products/product16.jpg'); ?>" alt="Product Name">
                    </a>

                    <a href="#" class="product-quickview">
                        <i class="fa fa-share-square-o"></i>
                        <span>Quick View</span>
                    </a>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="demo-shop-5-product-details.html"
                            title="Product Name">Woman Shee Blouse</a></h2>
                    <div class="product-ratings">
                        <div class="ratings-box">
                            <div class="rating" style="width:0%"></div>
                        </div>
                    </div>

                    <div class="product-price-box">
                        <span class="product-price">$70.00</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtowishlist" title="Add to Wishlist">
                            <i class="fa fa-heart"></i>
                        </a>
                        <a href="#" class="addtocart" title="Add to Cart">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Cart</span>
                        </a>
                        <a href="#" class="comparelink" title="Add to Compare">
                            <i class="glyphicon glyphicon-signal"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="product">
                <figure class="product-image-area">
                    <a href="demo-shop-5-product-details.html" title="Product Name" class="product-image">
                        <img src="<?php echo base_url('assets/images/img/demos/shop/products/product17.jpg'); ?>" alt="Product Name">
                    </a>

                    <a href="#" class="product-quickview">
                        <i class="fa fa-share-square-o"></i>
                        <span>Quick View</span>
                    </a>
                    <div class="product-label"><span class="new">New</span></div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="demo-shop-5-product-details.html"
                            title="Product Name">Pink Woman Shirt</a></h2>
                    <div class="product-ratings">
                        <div class="ratings-box">
                            <div class="rating" style="width:80%"></div>
                        </div>
                    </div>

                    <div class="product-price-box">
                        <span class="product-price">$80.00</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtowishlist" title="Add to Wishlist">
                            <i class="fa fa-heart"></i>
                        </a>
                        <a href="#" class="addtocart" title="Add to Cart">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Cart</span>
                        </a>
                        <a href="#" class="comparelink" title="Add to Compare">
                            <i class="glyphicon glyphicon-signal"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->