<?php //echo "<pre>"; print_r($allBrands); die; ?>
<div class="container mb-xlg">
    <h2 class="slider-title">
        <span class="inline-title">FEATURED BRANDS</span>
        <span class="line"></span>
        <a href="#" class="view-all">View All</a>
    </h2>

    <div class="owl-carousel owl-theme manual clients-carousel owl-no-narrow">
        <?php 
            if(!empty($allBrands)){ 
            foreach($allBrands as $brands) { 
            if(file_exists(UPLOAD_BRAND_PATH.$brands->image)) {
              $brandsImg = SHOW_BRAND_PATH.$brands->image;
            }
        ?>
        <a href="<?php echo $brands->brand_slug; ?>" title="<?php echo $brands->brand_name; ?>" class="client">
            <img class="img-responsive" src="<?php echo $brandsImg; ?>" alt="<?php echo $brands->image_alt_1; ?>">
        </a>
        <?php }} ?>
    </div>
</div>