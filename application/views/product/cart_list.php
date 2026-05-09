<?php //echo "<pre>"; print_r($allCartProducts); 
if($this->session->userdata('front_logged_in')){
    $userType = $this->session->userdata('front_logged_in')['user_type'];
} else {
    $userType = "";
}
?>
<div role="main" class="main">
      <div class="cart">
        <div class="container">
          <h1 class="h2 heading-primary mt-lg clearfix">
            <span>Shopping Cart</span>
            <?php if(!empty($allCartProducts)){ ?>
            <a href="<?php echo base_url('checkout'); ?>" class="btn btn-primary pull-right">Proceed to Checkout</a>
            <?php } ?>
          </h1>

          <div class="row">
            <div class="col-md-8 col-lg-9">
              <div class="cart-table-wrap">
                <table class="cart-table">
                  <thead>
                    <tr>
                      <th></th>
                      <th></th>
                      <th>Product Name</th>
                      <th>Unit Price</th>
                      <th>Qty</th>
                      <th>Subtotal</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if(!empty($allCartProducts)){
                      $subTotal = 0;
                      $i=1;
                      foreach($allCartProducts as $row){ 
                        if(file_exists(UPLOAD_PRODUCT_PATH.$row['proImage'])) {
                            $proImg = SHOW_PRODUCT_PATH.$row['proImage'];
                        } else {
                            $proImg = UPLOAD_PRODUCT_NO_IMAGE.'noimage.png';
                        }
                        $totPrice = $row['proPrice']*$row['quantity'];
                        $subTotal += $totPrice;
                    ?>
                    <tr>
                      <td class="product-action-td">
                        <a href="<?php echo base_url('product/delete_cart_list_product/').$row['cartId']; ?>" title="Remove product" class="btn-remove" onclick="return confirm('Are you want to delete this?')"><i
                            class="fa fa-times"></i></a>
                      </td>
                      <td class="product-image-td">
                        <a href="<?php echo base_url('product-details/'.$row['product_slug']); ?>" title="Product Name">
                          <img src="<?php echo $proImg; ?>"
                            alt="<?php echo $row['image_alt_1']; ?>">
                        </a>
                      </td>
                      <td class="product-name-td">
                        <h2 class="product-name"><a href="<?php echo base_url('product-details/'.$row['product_slug']); ?>" title="<?php echo $row['product_name']; ?>"><?php echo $row['product_name']; ?></a></h2>
                      </td>
                      <td>
                      <span id="proPrice_<?php echo $i; ?>" class="amount">
                        <?php 
                          if($userType == 1){
                              echo CURRENCY_SYMBOL. " ".$row['wholesale_price'];
                          } else if($userType == 2){
                              echo CURRENCY_SYMBOL. " ".$row['retailer_price'];
                          } else {
                              echo CURRENCY_SYMBOL. " ".$row['proPrice'];
                          }
                        ?>
                      </span>
                      </td>
                      <td>
                        <div class="qty-holder">
                          <a href="javaScript:void(0);" onclick="return removeCartProductQuantity('<?php echo $row['product_id']; ?>', '<?php echo $i; ?>', '<?php echo $row['cat_id']; ?>', '<?php echo $row['sub_cat_id']; ?>');" class="qty-dec-btn" title="Dec">-</a>
                          <input type="text" class="qty-input" id="quantity_<?php echo $i; ?>" value="<?php echo $row['quantity']; ?>">
                          <a href="javaScript:void(0);" onclick="return addCartProductQuantity('<?php echo $row['product_id']; ?>', '<?php echo $i; ?>', '<?php echo $row['cat_id']; ?>', '<?php echo $row['sub_cat_id']; ?>');" class="qty-inc-btn" title="Inc">+</a>
                          <!-- <a href="#" class="edit-qty"><i class="fa fa-pencil"></i></a> -->
                        </div>
                      </td>
                      <td>
                        <span class="text-primary" id="totPrice_<?php echo $i; ?>"><?php echo CURRENCY_SYMBOL." ".$row['amount']; ?></span>
                      </td>
                    </tr>
                    <?php $i++; } } ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan="6" class="clearfix">
                        <!-- <button class="btn btn-default hover-primary btn-continue">Continue
                          Shopping</button>
                        <button class="btn btn-default hover-primary btn-update">Update Shopping
                          Cart</button> -->
                          <a href="<?php echo base_url(); ?>"><button class="btn btn-default hover-primary btn-update">Continue
                          Shopping</button></a>
                          <?php if(!empty($allCartProducts)){ ?>
                          <a href="<?php echo base_url('product/delete_all_user_cart_list_product/').$row['user_id']; ?>" title="Remove product" onclick="return confirm('Are you want to delete all cart products?')"><button class="btn btn-default hover-primary btn-clear">Clear Shopping
                          Cart</button></a>
                        <?php } ?>

                      </td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>

            <aside class="col-md-4 col-lg-3 sidebar shop-sidebar">
              <div class="panel-group">
                <!-- <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a class="accordion-toggle collapsed" data-toggle="collapse"
                        href="#panel-cart-discount">
                        Discount Code
                      </a>
                    </h4>
                  </div>
                  <div id="panel-cart-discount" class="accordion-body collapse">
                    <div class="panel-body">
                      <p class="mb-sm">Enter your coupon code if you have one.</p>
                      <form action="#">
                        <div class="form-group">
                          <input type="text" class="form-control" required>
                        </div>
                        <input type="submit" class="btn btn-primary btn-block"
                          value="Apply Coupon">
                      </form>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a class="accordion-toggle collapsed" data-toggle="collapse"
                        href="#panel-cart-ship">
                        ESTIMATE SHIPPING AND TAX
                      </a>
                    </h4>
                  </div>
                  <div id="panel-cart-ship" class="accordion-body collapse">
                    <div class="panel-body">
                      <p class="mb-sm">Enter your destination to get a shipping estimate.</p>
                      <form action="#">
                        <div class="form-group">
                          <label>Contry <span class="required">*</span></label>
                          <select name="#" class="form-control">
                            <option value="United States">United States</option>
                            <option value="United Kingdon">United Kingdon</option>
                            <option value="China">China</option>
                            <option value="Russia">Russia</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>State/Province</label>
                          <select name="#" class="form-control">
                            <option value="United States">Please select region, state
                            </option>
                            <option value="Alabama">Alabama</option>
                            <option value="Alaska">Alaska</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Zip Code</label>
                          <input type="text" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-primary btn-block"
                          value="Get a Quote">
                      </form>
                    </div>
                  </div>
                </div> -->

                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a class="accordion-toggle" data-toggle="collapse" href="#panel-cart-total">
                        Cart Totals
                      </a>
                    </h4>
                  </div>
                  <div id="panel-cart-total" class="accordion-body collapse in">
                    <div class="panel-body">
                      <table class="totals-table">
                        <tbody>
                          <tr>
                            <td>Subtotal</td>
                            <td><?php echo CURRENCY_SYMBOL." ".number_format($subTotal, 2); ?></td>
                          </tr>
                          <tr>
                            <td>Grand Total</td>
                            <td><?php echo CURRENCY_SYMBOL." ".number_format($subTotal, 2); ?></td>
                          </tr>
                        </tbody>
                      </table>
                      <?php if(!empty($allCartProducts)){ ?>
                      <div class="totals-table-action">
                        <a href="#" class="btn btn-primary btn-block">Proceed to Checkout</a>
                        <!-- <a href="#" class="btn btn-link btn-block">Checkout with Multiple
                          Addresses</a> -->
                      </div>
                      <?php } ?>
                    </div>
                  </div>
                </div>
              </div>
            </aside>

          </div>

          
        </div>
      </div>

    </div>

    <input type="hidden" name="session_user_id" id="session_user_id" value="<?php echo $this->session->userdata('front_logged_in')['id']; ?>">
    <script type="text/javascript">
    function addCartProductQuantity(product_id, id, cat_id, sub_cat_id){
        var value = parseInt(document.getElementById('quantity_'+id).value, 10);
        value = isNaN(value) ? 0 : value;
        value++;
        document.getElementById('quantity_'+id).value = value;

        var user_id = $('#session_user_id').val();
        var quantity = $('#quantity_'+id).val();
        var proPrice = document.getElementById("proPrice_"+id).innerHTML;
        var totPrice = (proPrice*quantity);
        var totProPrice = totPrice.toFixed(2);

        var reqUrl = '<?php echo base_url('product/addItemIntoCart'); ?>';

        if(quantity > 0){
            var saveData = $.ajax({
                type: "POST",
                url: reqUrl,
                data:"product_id="+product_id+"&user_id="+user_id+"&quantity="+quantity+"&cat_id="+cat_id+"&sub_cat_id="+sub_cat_id,
                dataType: "text",
                success: function(resultData){ // alert(resultData); return false;
                    if(resultData == "updated"){
                        document.getElementById("quantity_"+id).innerHTML = quantity;
                        document.getElementById("totPrice_"+id).innerHTML = totProPrice;
                    }
                    // alert("Cart updated successfully.");
                    window.location.href = "<?php echo base_url('cart-list/'); ?>";
                }       
            }); 
        } else {
            alert("Product quantity should be grater than 0.");
        }
    }

    function removeCartProductQuantity(product_id, id, cat_id, sub_cat_id){
        var quantity = $("#quantity_"+id).val();
        var new_quantity = quantity-1;
        if(new_quantity>=1){
            document.getElementById("quantity_"+id).value = new_quantity;   

            var user_id = $('#session_user_id').val();
            var quantity = $('#quantity_'+id).val();
            var proPrice = document.getElementById("proPrice_"+id).innerHTML;
            var totPrice = (proPrice*quantity);
            var totProPrice = totPrice.toFixed(2);

            var reqUrl = '<?php echo base_url('product/addItemIntoCart'); ?>';

            if(quantity > 0){
                var saveData = $.ajax({
                    type: "POST",
                    url: reqUrl,
                    data:"product_id="+product_id+"&user_id="+user_id+"&quantity="+quantity+"&cat_id="+cat_id+"&sub_cat_id="+sub_cat_id,
                    dataType: "text",
                    success: function(resultData){
                        if(resultData == "updated"){
                            document.getElementById("quantity_"+id).innerHTML = quantity;
                            document.getElementById("totPrice_"+id).innerHTML = totProPrice;
                        }
                        // alert("Cart updated successfully.");
                        window.location.href = "<?php echo base_url('cart-list/'); ?>";
                    }       
                }); 
            } else {
                alert("Product quantity should be grater than 0.");
            }
        }
    }
</script>