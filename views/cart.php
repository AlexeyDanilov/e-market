

        <!-- Add your site or application content here -->

        <!-- HEADER-AREA START -->
        <?php include ROOT . '/views/layouts/header.php'; ?>
        <!-- HEADER AREA END -->
        <!-- START PAGE-CONTENT -->
        <section class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="page-menu">
                            <li><a href="index.html">Home</a></li>
                            <li class="active"><a href="#">Shopping Cart</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <!-- CATEGORY-MENU-LIST START -->
                        <div class="left-category-menu hidden-sm hidden-xs">
                            <div class="left-product-cat">
                                <div class="category-heading">
                                    <h2>categories</h2>
                                </div>
                                <div class="category-menu-list">
                                    <ul>
                                        <!-- Single menu start -->
                                        <?php foreach ($category as $key): ?>
                                            <li class="arrow-plus">
                                                <a href="<?php echo'/category/' . $key['id_category']; ?>"><?php echo $key['name_category'] ?></a>
                                                <!-- MEGA MENU END -->
                                            </li>
                                        <?php endforeach; ?>
                                        <!-- Single menu end -->

                                        <!-- MENU ACCORDION END -->
                                    </ul>
                                </div>
                            </div>
                        </div>	
                        <!-- END CATEGORY-MENU-LIST -->
                        <!-- START SMALL-PRODUCT-AREA -->
                        <div class="small-product-area carosel-navigation  hidden-sm hidden-xs">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="area-title">
                                        <h3 class="title-group gfont-1">Bestseller</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="active-bestseller sidebar">
                                    <div class="col-xs-12">
                                        <!-- Start Single-Product -->
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="/views/img/product/small/1.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Trid Palm</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$99.00</span>
                                                    <span class="old-price">$110.00</span>
                                                </div>
                                                <span class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- End Single-Product -->
                                        <!-- Start Single-Product -->
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="/views/img/product/small/2.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Various Versions</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$90.00</span>
                                                    <span class="old-price">$110.00</span>
                                                </div>
                                                <span class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- End Single-Product -->
                                        <!-- Start Single-Product -->
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="/views/img/product/small/3.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Trid Palm</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$99.00</span>
                                                    <span class="old-price">$110.00</span>
                                                </div>
                                                <span class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- End Single-Product -->
                                        <!-- Start Single-Product -->
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="/views/img/product/small/4.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$90.00</span>
                                                    <span class="old-price">$110.00</span>
                                                </div>
                                                <span class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- End Single-Product -->
                                    </div>
                                    <div class="col-xs-12">
                                        <!-- Start Single-Product -->
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="/views/img/product/small/5.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Trid Palm</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$99.00</span>
                                                    <span class="old-price">$110.00</span>
                                                </div>
                                                <span class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- End Single-Product -->
                                        <!-- Start Single-Product -->
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="/views/img/product/small/6.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Various Versions</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$90.00</span>
                                                    <span class="old-price">$110.00</span>
                                                </div>
                                                <span class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- End Single-Product -->
                                        <!-- Start Single-Product -->
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="/views/img/product/small/7.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Trid Palm</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$99.00</span>
                                                    <span class="old-price">$110.00</span>
                                                </div>
                                                <span class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- End Single-Product -->
                                        <!-- Start Single-Product -->
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="/views/img/product/small/8.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$90.00</span>
                                                    <span class="old-price">$110.00</span>
                                                </div>
                                                <span class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- End Single-Product -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END SMALL-PRODUCT-AREA -->
                    </div>
                    <div class="col-md-9">
                        <!-- START PRODUCT-BANNER -->
                        <div class="product-banner">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="banner">
                                        <a href="#"><img src="/views/img/banner/12.jpg" alt="Product Banner"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END PRODUCT-BANNER -->
                        <!-- Start Shopping-Cart -->
                        <div class="shopping-cart">
                            <div class="row">
                                <div class="col-md-12 send_form">
                                    <div class="cart-title">
                                        <h2 class="entry-title">Shopping Cart</h2>
                                    </div>
                                    <?php if(isset($mail)){
                                        if($mail){
                                            echo "<span class='thank'>";
                                            echo 'Thank! Our manager will contact you!';
                                            echo '</span>';
                                        }
                                    }    ?>
                                    <!-- Start Table -->
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <td class="text-center">Image</td>
                                                    <td class="text-left">Product Name</td>
                                                    <td class="text-left">Quantity</td>
                                                    <td class="text-right">Unit Price</td>
                                                    <td class="text-right">Total</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($productListInCart as $key): ?>
                                           
                                                    <tr>
                                                        <td class="text-center">
                                                            <a href="#"><img class="img-thumbnail" src="<?php echo $key['product_photo']; ?>" alt="#" /></a>
                                                        </td>
                                                        <td class="text-left">
                                                            <a href="#"><?php echo $key['product_name']; ?></a>
                                                        </td>

                                                        <td class="text-left">
                                                            <div class="btn-block cart-put">
                                                                <?php foreach ($productsNumberInCart as $productCount => $value): ?>
                                                                    <?php if ($key['id_product'] == $productCount): ?>
                                                                        <span class="form-control count<?php echo $key['id_product']; ?>"><?php echo $value; ?> </span>

                                                                        <div class="input-group-btn cart-buttons"> 
                                                                            <button class="btn btn-primary update" data-toggle="tooltip" title="Update">
                                                                                <i class="fa fa-refresh"></i>
                                                                            </button>
                                                                            <button class="btn btn-danger remove" data-toggle="tooltip" title="Remove" data-id="<?php echo $key['id_product']; ?>">
                                                                                <i class="fa fa-times-circle"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </td>                               
                                                                <td class="text-right">$<?php echo $key['price']; ?></td>
                                                                <td class="text-right">$<?php echo $key['price'] * $value; ?> </td>
                                                              
                                                                   
                                                                
                                                            <?php endif; ?>
                                                                
                                                        <?php endforeach; ?>


                                                    </tr>                                                  
                                              
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- End Table -->
                                    <h3 class="title-group-3 gfont-1">What would you like to do next?</h3>
                                    <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
                                    <!-- Accordion start -->
                                    <div class="accordion-cart">
                                        <div class="panel-group" id="accordion">
                                            <!-- Start Coupon -->
                                            <div class="panel panel_default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="accordion-trigger" data-toggle="collapse" data-parent="#accordion" href="#coupon">Use Coupon Code<i class="fa fa-caret-down"></i> </a>
                                                    </h4>
                                                </div>
                                                <div id="coupon" class="collapse in">
                                                    <div class="panel-body">
                                                        <div class="col-sm-2">
                                                            <p>Enter your coupon here</p>
                                                        </div>
                                                        <div class="input-group">
                                                            <input class="form-control" type="text" placeholder="Enter your coupon here" />
                                                            <button type="submit" class="btn btn-primary">Apply Coupon</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Coupon -->
                                            <!-- Start Voucher -->
                                            <div class="panel panel_default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="accordion-trigger collapsed" data-toggle="collapse" data-parent="#accordion" href="#voucher">Use Gift Voucher <i class="fa fa-caret-down"></i> </a>
                                                    </h4>
                                                </div>
                                                <div id="voucher" class="collapse">
                                                    <div class="panel-body">
                                                        <div class="col-sm-2">
                                                            <p>Enter your gift voucher code here</p>
                                                        </div>
                                                        <div class="input-group">
                                                            <input class="form-control" type="text" placeholder="Enter your gift voucher code here" />
                                                            <button type="submit" class="btn btn-primary">Apply Voucher</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Start Voucher -->
                                            <!-- Start Shipping -->
                                            <div class="panel panel_default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="accordion-trigger collapsed" data-toggle="collapse" data-parent="#accordion" href="#shipping">Estimate Shipping & Taxes <i class="fa fa-caret-down"></i> </a>
                                                    </h4>
                                                </div>
                                                <div id="shipping" class="collapse">
                                                    <div class="panel-body">
                                                        <div class="col-sm-12">
                                                            <p>Enter your destination to get a shipping estimate.</p>
                                                        </div>
                                                        <form method="POST" action="#" class="form-horizontal">
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label"><sup>*</sup>Country</label>
                                                                <div class="col-sm-10">
                                                                    <select name="choice_country" class="form-control">
                                                                        <option> <?php
                                                                        if(isset($regInfo)){
                                                                            echo $regInfo['country'];
                                                                        }
                                                                        else{
                                                                            echo '--- Please Select ---';
                                                                        }
                                                                        ?></option>
                                                                        <option value="1"> Bangladesh </option>
                                                                        <option value="2"> United States </option>
                                                                        <option value="3"> United Kingdom </option>
                                                                        <option value="4"> Canada </option>
                                                                        <option value="5"> Malaysia </option>
                                                                        <option value="6"> United Arab Emirates </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label"><sup>*</sup>Region / State</label>
                                                                <div class="col-sm-10">
                                                                    <select name="choice_region" class="form-control">
                                                                                                     <option> <?php
                                                                        if(isset($regInfo)){
                                                                            echo $regInfo['region'];
                                                                        }
                                                                        else{
                                                                            echo '--- Please Select ---';
                                                                        }
                                                                        ?></option>
                                                                        <option value="1"> Aberdeen </option>
                                                                        <option value="2"> Bedfordshire </option>
                                                                        <option value="3"> Caerphilly </option>
                                                                        <option value="4"> Denbighshire </option>
                                                                        <option value="5"> East Ayrshire </option>
                                                                        <option value="6"> Falkirk </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label"><sup>*</sup>Address</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="address" class="form-control" placeholder="Address" value="<?php echo (isset($regInfo))? $regInfo['address']:'';   ?>" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label"><sup>*</sup>Your name</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="user_name" class="form-control" placeholder="Your Name" value="<?php echo (isset($regInfo))? $regInfo['user_name']:'';   ?>" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label"><sup>*</sup>Your phone-number</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="user_phone" class="form-control" placeholder="Your phone-number" />
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-4 col-sm-offset-8">
                                                                    <table class="table table-bordered">
                                                                        <tbody>                  
                                                                            <tr>
                                                                                <td class="text-right">
                                                                                    <strong>Total:</strong>
                                                                                </td>
                                                                                <td class="text-right">$<?php echo $totalPrice; ?></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="shopping-checkout">
                                                                <a href="/" class="btn btn-default pull-left">Continue Shopping</a>
                                                                <button name="send" class="btn btn-primary pull-right">Send</button>
                                                            </div>
                                              
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Start Shipping -->
                                        </div>
                                    </div>
                                    <!-- Accordion end -->

                                </div>
                            </div>
                        </div>
                        <!-- End Shopping-Cart -->
                    </div>
                </div>
            </div>
            <!-- START BRAND-LOGO-AREA -->
            <div class="brand-logo-area carosel-navigation">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="area-title">
                                <h3 class="title-group border-red gfont-1">Brand Logo</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="active-brand-logo">
                            <div class="col-md-2">
                                <div class="single-brand-logo">
                                    <a href="#"><img src="/views/img/brand/1.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="single-brand-logo">
                                    <a href="#"><img src="/views/img/brand/2.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="single-brand-logo">
                                    <a href="#"><img src="/views/img/brand/3.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="single-brand-logo">
                                    <a href="#"><img src="/views/img/brand/4.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="single-brand-logo">
                                    <a href="#"><img src="img/brand/5.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="single-brand-logo">
                                    <a href="#"><img src="/views/img/brand/6.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="single-brand-logo">
                                    <a href="#"><img src="img/brand/1.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="single-brand-logo">
                                    <a href="#"><img src="/views/img/brand/2.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="single-brand-logo">
                                    <a href="#"><img src="/views/img/brand/3.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END BRAND-LOGO-AREA -->
            <!-- START SUBSCRIBE-AREA -->
            <div class="subscribe-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-7 col-xs-12">
                            <label class="hidden-sm hidden-xs">Sign Up for Our Newsletter:</label>
                            <div class="subscribe">
                                <form action="#">
                                    <input type="text" placeholder="Enter Your E-mail">
                                    <button type="submit">Subscribe</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-5 col-xs-12">
                            <div class="social-media">
                                <a href="#"><i class="fa fa-facebook fb"></i></a>
                                <a href="#"><i class="fa fa-google-plus gp"></i></a>
                                <a href="#"><i class="fa fa-twitter tt"></i></a>
                                <a href="#"><i class="fa fa-youtube yt"></i></a>
                                <a href="#"><i class="fa fa-linkedin li"></i></a>
                                <a href="#"><i class="fa fa-rss rs"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>	
            <!-- END SUBSCRIBE-AREA -->
        </section>
        <!-- END PAGE-CONTENT -->
        <!-- FOOTER-AREA START -->
        <?php include ROOT . '/views/layouts/footer.php'; ?>
        <!-- FOOTER-AREA END -->


