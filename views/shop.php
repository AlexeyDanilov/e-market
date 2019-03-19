

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
                            <li class="active"><a href="#">Bestseller Product</a></li>
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
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- END CATEGORY-MENU-LIST -->
                        <!-- shop-filter start -->
                       
                        <!-- shop-filter start -->
                        <!-- filter-by start -->
                     
                        <!-- filter-by end -->
                    </div>
                    <div class="col-md-9 col-xs-12">
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
                        <!-- START PRODUCT-AREA -->
                        <div class="product-area">
                            <div class="row">
                                <div class="col-xs-12">
                                    <!-- Start Product-Menu -->
                                    <div class="product-menu">
                                        <div class="product-title">
                                            <h3 class="title-group-3 gfont-1">cameras & photography</h3>
                                        </div>
                                    </div>
                                    <div class="product-filter">
                                        <ul role="tablist">
                                            <li role="presentation" class="list">
                                                <a href="#display-1-1" role="tab" data-toggle="tab"></a>
                                            </li>
                                            <li role="presentation"  class="grid active">
                                                <a href="#display-1-2" role="tab" data-toggle="tab"></a>
                                            </li>
                                        </ul>
                                        <div class="sort">
                                            <label>Sort By:</label>
                                            <select>
                                                <option value="#">Default</option>
                                                <option value="#">Name (A - Z)</option>
                                                <option value="#">Name (Z - A)</option>
                                                <option value="#">Price (Low > High)</option>
                                                <option value="#">Rating (Highest)</option>
                                                <option value="#">Rating (Lowest)</option>
                                                <option value="#">Name (A - Z)</option>
                                                <option value="#">Model (Z - A))</option>
                                                <option value="#">Model (A - Z)</option>
                                            </select>
                                        </div>
                                        <div class="limit">
                                            <label>Show:</label>
                                            <select>
                                                <option value="#">8</option>
                                                <option value="#">16)</option>
                                                <option value="#">24</option>
                                                <option value="#">40</option>
                                                <option value="#">80</option>
                                                <option value="#">100</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- End Product-Menu -->
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-md-12">		
                                    <!-- Start Product -->
                                    <div class="product">
                                        <div class="tab-content">
                                            <!-- Product -->

                                            <!-- End Product -->
                                            <!-- Start Product-->
                                            <div role="tabpanel" class="tab-pane fade in  active" id="display-1-2">
                                                <div class="row">
                                                    <!-- Start Single-Product -->
                                                    <?php foreach ($products as $key): ?>
                                                        <?php if ($key['id_category'] == $pageCategory): ?>
                                                            <div class="col-md-3 col-sm-4 col-xs-12">
                                                                <div class="single-product">
                                                                    <?php if ($key['is_new'] == 1): ?>
                                                                        <div class="label_new">
                                                                            <span class="new">new</span>
                                                                        </div>
                                                                    <?php endif; ?>
                                                                    <?php if ($key['discount'] != 0): ?>
                                                                        <div class="sale-off">
                                                                            <span class="sale-percent">-<?php echo $key['discount']; ?>%</span>
                                                                        </div>
                                                                    <?php endif; ?>
                                                                    <div class="product-img">
                                                                        <a href="#">
                                                                            <img class="primary-img" src="<?php echo $key['product_photo']; ?>" alt="<?php echo $key['product_name']; ?>">
                                                                            <?php if ($key['second_photo'] != '0'): ?>
                                                                                <img class="secondary-img" src="<?php echo $key['second_photo']; ?>" alt="<?php echo $key['product_name']; ?>">
                                                                            <?php endif; ?>
                                                                        </a>
                                                                    </div>

                                                                    <div class="col-md-9 col-sm-8 col-xs-12">	
                                                                        <div class="product-description">
                                                                            <h5 class="product-title"><a href="#"><?php echo $key['product_name']; ?></a></h5>
                                                                            <div class="price-box">
                                                                                <span class="price">$<?php echo $key['price']; ?></span>
                                                                                <?php if ($key['old_price'] != 0): ?>
                                                                                    <span class="old-price">$ <?php echo $key['old_price']; ?></span>
                                                                                <?php endif; ?>
                                                                            </div>
                                                                            <span class="rating">
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                            </span>
        <!--                                                                        <p class="description">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>-->
                                                                            <div class="product-action">
                                                                                <div class="button-group">
                                                                                    <div class="product-button">
                                                                                        <button class="addProduct" data-id="<?php echo $key['id_product'];?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                                    </div>
                                                                                    <div class="product-button-2">
                                                                                        <a href="#" class="modal-view viewPopup" data-id="<?php echo $key['id_product'];?>" data-fancybox data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                       
                                                                

                                                                <!-- End Single-Product -->
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->

                                                    <!-- End Single-Product -->
                                                </div>
<!--                                                <span id="result">ID-товара - </span>-->
                                                <!-- Start Pagination Area -->
                                                <div class="pagination-area">
                                                    <div class="row">
                                                        <div class="col-xs-5">
                                                            <div class="pagination">
                                                                <ul>
                                                                    <li class="active"><a href="#">1</a></li>
                                                                    <li><a href="#">2</a></li>
                                                                    <li><a href="#">></a></li>
                                                                    <li><a href="#">>|</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-7">
                                                            <div class="product-result">
                                                                <span>Showing 1 to 16 of 19 (2 Pages)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Pagination Area -->
                                            </div>
                                            <!-- End Product = TV -->
                                        </div>
                                    </div>
                                    <!-- End Product -->
                                </div>
                            </div>
                        </div>
                        <!-- END PRODUCT-AREA -->
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
                                    <a href="#"><img src="/views/img/brand/5.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="single-brand-logo">
                                    <a href="#"><img src="/views/img/brand/6.png" alt=""></a>
                                </div>
                            </div>
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
        <!-- QUICKVIEW PRODUCT -->
        <div id="quickview-wrapper">
            <!-- Modal -->

  <?php require_once 'modal.php';    ?>

            <!-- END Modal -->
        </div>
        <!-- END QUICKVIEW PRODUCT -->
        
