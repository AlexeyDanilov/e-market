

        <!--        подключаем header-->
        <?php include ROOT . '/views/layouts/header.php'; ?>

        <!-- Category slider area start -->
        <div class="category-slider-area">
            <div class="container">
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
                    </div>
                    <div class="col-md-9">
                        <!-- slider -->
                        <div class="slider-area">
                            <div class="bend niceties preview-1">
                                <div id="ensign-nivoslider" class="slides">	
                                    <img src="/views/img/sliders/slider-1/bg1.jpg" alt="Malias" title="#slider-direction-1"/>
                                    <img src="/views/img/sliders/slider-1/bg2.jpg" alt="Malias" title="#slider-direction-2"/>
                                    <img src="/views/img/sliders/slider-1/bg3.jpg" alt="Malias" title="#slider-direction-3"/><!-- 
                                    <img src="/views/img/sliders/slider-1/bg4.jpg" alt="" title="#slider-direction-4"/>  -->     
                                </div>
                                <!-- direction 1 -->
                                <div id="slider-direction-1" class="t-lfr slider-direction">
                                    <div class="slider-progress"></div>
                                    <!-- layer 1 -->
                                    <div class="layer-1-1 ">
                                        <h1 class="title1">LUMIA 888 DESIGN</h1>
                                    </div>
                                    <!-- layer 2 -->
                                    <div class="layer-1-2">
                                        <p class="title2">Elegant design for business</p>
                                    </div>
                                    <!-- layer 3 -->
                                    <div class="layer-1-3">
                                        <h2 class="title3">$966.82</h2>
                                    </div>
                                    <!-- layer 4 -->
                                    <div class="layer-1-4">
                                        <a href="#" class="title4">shopping now</a>
                                    </div>
                                </div>
                                <!-- direction 2 -->
                                <div id="slider-direction-2" class="slider-direction">
                                    <div class="slider-progress"></div>
                                    <!-- layer 1 -->
                                    <div class="layer-2-1">
                                        <h1 class="title1">WATERPROOF SMARTPHONE</h1>
                                    </div>
                                    <!-- layer 2 -->
                                    <div class="layer-2-2">
                                        <p class="title2">RODUCTS ARE EYE-CATCHING DESIGN. YOU CAN TAKE PHOTOS EVEN WHEN Y</p>
                                    </div>
                                    <!-- layer 3 -->
                                    <div class="layer-2-3">
                                        <a href="#" class="title3">shopping now</a>
                                    </div>
                                </div>
                                <!-- direction 3 -->
                                <div id="slider-direction-3" class="slider-direction">
                                    <div class="slider-progress"></div>
                                    <!-- layer 1 -->
                                    <div class="layer-3-1">
                                        <h2 class="title1">BUY AIR LACOTE</h2>
                                    </div>
                                    <!-- layer 2 -->
                                    <div class="layer-3-2">
                                        <h1 class="title2">SUPER TABLET, SUPER GIFT</h1>
                                    </div>
                                    <!-- layer 3 -->
                                    <div class="layer-3-3">
                                        <p class="title3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                                    </div>
                                    <!-- layer 4 -->
                                    <div class="layer-3-4">
                                        <a href="#" class="title4">shopping now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- slider end-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Category slider area End -->		
        <!-- START PAGE-CONTENT -->
        <section class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <!-- START HOT-DEALS-AREA -->
                        <div class="hot-deals-area carosel-circle">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="area-title">
                                        <h3 class="title-group border-red gfont-1">Hot Deals</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="active-hot-deals">
                                    <!-- Start Single-hot-deals -->
                                    <div class="col-xs-12">
                                        <div class="single-hot-deals">
                                            <div class="hot-deals-photo">
                                                <a href="#"><img src="/views/img/hot-deals/1.jpg" alt="Product"></a>
                                            </div>
                                            <div class="count-down">
                                                <div class="timer">
                                                    <div data-countdown="2017/12/31"></div>
                                                </div> 
                                            </div>
                                            <div class="hot-deals-text">
                                                <h5><a href="#" class="name-group">Various Versions</a></h5>
                                                <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></span>
                                                <div class="price-box">
                                                    <span class="price gfont-2">$99.00</span>
                                                    <span class="old-price gfont-2">$110.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-hot-deals -->
                                    <!-- Start Single-hot-deals -->
                                    <div class="col-xs-12">
                                        <div class="single-hot-deals">
                                            <div class="hot-deals-photo">
                                                <a href="#"><img src="/views/img/hot-deals/2.jpg" alt="Product"></a>
                                            </div>
                                            <div class="count-down">
                                                <div class="timer">
                                                    <div data-countdown="2017/06/30"></div>
                                                </div> 
                                            </div>
                                            <div class="hot-deals-text">
                                                <h5><a href="#" class="name-group">Trid Palm</a></h5>
                                                <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></span>
                                                <div class="price-box">
                                                    <span class="price gfont-2">$85.00</span>
                                                    <span class="old-price gfont-2">$120.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-hot-deals -->
                                    <!-- Start Single-hot-deals -->
                                    <div class="col-xs-12">
                                        <div class="single-hot-deals">
                                            <div class="hot-deals-photo">
                                                <a href="#"><img src="/views/img/hot-deals/3.jpg" alt="Product"></a>
                                            </div>
                                            <div class="count-down">
                                                <div class="timer">
                                                    <div data-countdown="2017/08/30"></div>
                                                </div> 
                                            </div>
                                            <div class="hot-deals-text">
                                                <h5><a href="#" class="name-group">Established Fact</a></h5>
                                                <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></span>
                                                <div class="price-box">
                                                    <span class="price gfont-2">$90.00</span>
                                                    <span class="old-price gfont-2">$105.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-hot-deals -->
                                </div>
                            </div>
                        </div>
                        <!-- END HOT-DEALS-AREA -->
                        <!-- START SMALL-PRODUCT-AREA -->
                        <div class="small-product-area carosel-navigation">
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
                                                <h5><a href="#">Various Versions</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$99.00</span>
                                                    <span class="old-price">$120.00</span>
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
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$105.00</span>
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
                                                    <span class="price">$90.00</span>
                                                    <span class="old-price">$120.00</span>
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
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$105.00</span>
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
                                                <h5><a href="#">Various Versions</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$99.00</span>
                                                    <span class="old-price">$120.00</span>
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
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
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
                                                    <span class="price">$90.00</span>
                                                    <span class="old-price">$120.00</span>
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
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$105.00</span>
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
                        <!-- START SIDEBAR-BANNER -->
                        <div class="sidebar-banner">
                            <div class="active-sidebar-banner">
                                <div class="single-sidebar-banner">
                                    <a href="#"><img src="/views/img/banner/1.jpg" alt="Product Banner"></a>
                                </div>
                                <div class="single-sidebar-banner">
                                    <a href="#"><img src="/views/img/banner/2.jpg" alt="Product Banner"></a>
                                </div>
                            </div>
                        </div>
                        <!-- END SIDEBAR-BANNER -->
                        <!-- START RECENT-POSTS -->
                        <div class="shop-blog-area sidebar">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="title-group border-red gfont-1">RECENT POSTS </h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="active-recent-posts carosel-circle">
                                    <!-- Start Single-Recent-Posts -->
                                    <div class="col-xs-12">
                                        <div class="single-recent-posts">
                                            <div class="recent-posts-photo">
                                                <img src="/views/img/posts/1.jpg" alt="Recent Posts">
                                            </div>
                                            <div class="recent-posts-text">
                                                <h5><a href="#" class="recent-posts-title">swimwear for women</a></h5>
                                                <span class="recent-posts-date">23/12/2015 | BootExpert Theme</span>
                                                <p class="posts-short-brif">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                                                <a href="#" class="posts-read-more">Read more ...</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Recent-Posts -->
                                    <!-- Start Single-Recent-Posts -->
                                    <div class="col-xs-12">
                                        <div class="single-recent-posts">
                                            <div class="recent-posts-photo">
                                                <img src="/views/img/posts/2.jpg" alt="Recent Posts">
                                            </div>
                                            <div class="recent-posts-text">
                                                <h5><a href="#" class="recent-posts-title">swimwear for women</a></h5>
                                                <span class="recent-posts-date">23/12/2015 | BootExpert Theme</span>
                                                <p class="posts-short-brif">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                                                <a href="#" class="posts-read-more">Read more ...</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Recent-Posts -->
                                    <!-- Start Single-Recent-Posts -->
                                    <div class="col-xs-12">
                                        <div class="single-recent-posts">
                                            <div class="recent-posts-photo">
                                                <img src="/views/img/posts/3.jpg" alt="Recent Posts">
                                            </div>
                                            <div class="recent-posts-text">
                                                <h5><a href="#" class="recent-posts-title">swimwear for women</a></h5>
                                                <span class="recent-posts-date">23/12/2015 | BootExpert Theme</span>
                                                <p class="posts-short-brif">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                                                <a href="#" class="posts-read-more">Read more ...</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Recent-Posts -->
                                    <!-- Start Single-Recent-Posts -->
                                    <div class="col-xs-12">
                                        <div class="single-recent-posts">
                                            <div class="recent-posts-photo">
                                                <img src="/views/img/posts/4.jpg" alt="Recent Posts">
                                            </div>
                                            <div class="recent-posts-text">
                                                <h5><a href="#" class="recent-posts-title">swimwear for women</a></h5>
                                                <span class="recent-posts-date">23/12/2015 | BootExpert Theme</span>
                                                <p class="posts-short-brif">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                                                <a href="#" class="posts-read-more">Read more ...</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Recent-Posts -->
                                    <!-- Start Single-Recent-Posts -->
                                    <div class="col-xs-12">
                                        <div class="single-recent-posts">
                                            <div class="recent-posts-photo">
                                                <img src="/views/img/posts/1.jpg" alt="Recent Posts">
                                            </div>
                                            <div class="recent-posts-text">
                                                <h5><a href="#" class="recent-posts-title">swimwear for women</a></h5>
                                                <span class="recent-posts-date">23/12/2015 | BootExpert Theme</span>
                                                <p class="posts-short-brif">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                                                <a href="#" class="posts-read-more">Read more ...</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Recent-Posts -->
                                </div>
                            </div>
                        </div>
                        <!-- END RECENT-POSTS -->
                    </div>
                    <div class="col-md-9 col-sm-9">
                        <!-- START PRODUCT-BANNER -->
                        <div class="product-banner home1-banner">
                            <div class="row">
                                <div class="col-md-7 banner-box1">
                                    <div class="single-product-banner">
                                        <a href="#"><img src="/views/img/banner/3.jpg" alt="Product Banner"></a>
                                        <div class="banner-text banner-1">
                                            <h2>head phone 2015</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 banner-box2">
                                    <div class="single-product-banner">
                                        <a href="#"><img src="/views/img/banner/4.jpg" alt="Product Banner"></a>
                                        <div class="banner-text banner-2">
                                            <h2>Deals <span>50%</span></h2>
                                            <p>lumina n85</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END PRODUCT-BANNER -->
                        <!-- START PRODUCT-AREA (1) -->
                        <div class="product-area">
                            <div class="row">
                                <div class="col-xs-12 col-md-12">
                                    <!-- Start Product-Menu -->
                                    <div class="product-menu">
                                        <div class="product-title">
                                            <h3 class="title-group-2 gfont-1">New items</h3>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- End Product-Menu -->
                            <div class="clear"></div>
                            <!-- Start Product -->
                            <div class="row">
                                <div class="col-xs-12 col-md-12">
                                    <div class="product carosel-navigation">
                                        <div class="tab-content">
                                            <!-- Product = display-1-1 -->
                                            <div role="tabpanel" class="tab-pane fade in active" id="display-1-1">
                                                <div class="row">
                                                    <div class="active-product-carosel">
                                                        <!-- Start Single-Product -->
                                                        
                                                        <?php foreach ($Products as $key):  ?>
                                                        <?php if($key['is_new']):  ?>
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <div class="label_new">
                                                                    <span class="new">new</span>
                                                                </div>
                                                                <?php if($key['discount']):  ?>
                                                                <div class="sale-off">
                                                                    <span class="sale-percent">-<?php echo $key['discount'];  ?>%</span>
                                                                </div>
                                                                <?php endif;  ?>
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-img" src="<?php echo $key['product_photo'];   ?>" alt="<?php echo $key['product_name'];   ?>">
                                                                        <img class="secondary-img" src="<?php echo $key['second_photo'];   ?>" alt="<?php echo $key['product_name'];   ?>">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><a href="#"><?php echo $key['product_name'];   ?></a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price">$<?php echo $key['price'];   ?></span>
                                                                        <span class="old-price">
                                                                        <?php if ($key['old_price'] != 0): ?>
                                                                        $<?php echo $key['old_price'];   ?>
                                                                        <?php endif; ?>
                                                                        </span>
                                                                    </div>
                                                                    <span class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                </div>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button class="addProduct" data-id="<?php echo $key['id_product'];?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                        </div>
                                                                        <div class="product-button-2">

                                                                            <a href="#" class="modal-view viewPopup" data-id="<?php echo $key['id_product'];?>" data-toggle="modal" data-target="#productModal"><i class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>												
                                                            </div>
                                                        </div>
                                                        <?php endif; ?>
                                                        <?php endforeach; ?>
                                                        
                                                        
                                                        
                                                        <!-- End Single-Product -->
                                                        <!-- Start Single-Product -->
                                                     
                                                        <!-- End Single-Product -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product = display-1-1 -->
                                            <!-- Start Product = display-1-2 -->
                                            <div role="tabpanel" class="tab-pane fade" id="display-1-2">
                                                <div class="row">
                                                    <div class="active-product-carosel">
                                                        <!-- Start Single-Product -->
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <div class="label_new">
                                                                    <span class="new">new</span>
                                                                </div>
                                                                <div class="sale-off">
                                                                    <span class="sale-percent">-55%</span>
                                                                </div>
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-img" src="/views/img/product/mediam/3.jpg" alt="Product">
                                                                        <img class="secondary-img" src="/views/img/product/mediam/3bg.jpg" alt="Product">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><a href="#">Trid Palm</a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price">$90.00</span>
                                                                        <span class="old-price">$120.00</span>
                                                                    </div>
                                                                    <span class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                    <div class="product-action">
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <button class="addProduct" data-id="<?php echo $key['id_product'];?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                            </div>
                                                                            <div class="product-button-2">


                                                                                <a href="#" class="modal-view viewPopup" data-id="<?php echo $key['id_product'];?>" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single-Product -->
                                                        <!-- Start Single-Product -->
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <div class="label_new">
                                                                    <span class="new">new</span>
                                                                </div>
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-img" src="/views/img/product/mediam/2.jpg" alt="Product">
                                                                        <img class="secondary-img" src="/views/img/product/mediam/2bg.jpg" alt="Product">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><a href="#">Established Fact</a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price">$85.00</span>
                                                                        <span class="old-price">$105.00</span>
                                                                    </div>
                                                                    <span class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                    <div class="product-action">
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <button class="addProduct" data-id="<?php echo $key['id_product'];?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                            </div>
                                                                            <div class="product-button-2">


                                                                                <a href="#" class="modal-view viewPopup" data-id="<?php echo $key['id_product'];?>" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single-Product -->
                                                        <!-- Start Single-Product -->
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-img" src="/views/img/product/mediam/1.jpg" alt="Product">
                                                                        <img class="secondary-img" src="/views/img/product/mediam/1bg.jpg" alt="Product">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><a href="#">Various Versions</a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price">$99.00</span>
                                                                        <span class="old-price">$120.00</span>
                                                                    </div>
                                                                    <span class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                    <div class="product-action">
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <button class="addProduct" data-id="<?php echo $key['id_product'];?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                            </div>
                                                                            <div class="product-button-2">


                                                                                <a href="#" class="modal-view viewPopup" data-id="<?php echo $key['id_product'];?>" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single-Product -->
                                                        <!-- Start Single-Product -->
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-img" src="/views/img/product/mediam/4.jpg" alt="Product">
                                                                        <img class="secondary-img" src="/views/img/product/mediam/4bg.jpg" alt="Product">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><a href="#">Established Fact</a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price">$85.00</span>
                                                                        <span class="old-price">$110.00</span>
                                                                    </div>
                                                                    <span class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                    <div class="product-action">
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <button class="addProduct" data-id="<?php echo $key['id_product'];?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                            </div>
                                                                            <div class="product-button-2">


                                                                                <a href="#" class="modal-view viewPopup" data-id="<?php echo $key['id_product'];?>" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single-Product -->
                                                        <!-- Start Single-Product -->
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <div class="sale-off">
                                                                    <span class="sale-percent">-20%</span>
                                                                </div>
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-img" src="/views/img/product/mediam/5.jpg" alt="Product">
                                                                        <img class="secondary-img" src="/views/img/product/mediam/3bg.jpg" alt="Product">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><a href="#">Trid Palm</a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price">$90.00</span>
                                                                        <span class="old-price">$120.00</span>
                                                                    </div>
                                                                    <span class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                    <div class="product-action">
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <button class="addProduct" data-id="<?php echo $key['id_product'];?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                            </div>
                                                                            <div class="product-button-2">


                                                                                <a href="#" class="modal-view viewPopup" data-id="<?php echo $key['id_product'];?>" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single-Product -->
                                                        <!-- Start Single-Product -->
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <div class="sale-off">
                                                                    <span class="sale-percent">-25%</span>
                                                                </div>
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-img" src="/views/img/product/mediam/6.jpg" alt="Product">
                                                                        <img class="secondary-img" src="/views/img/product/mediam/4bg.jpg" alt="Product">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><a href="#">Established Fact</a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price">$85.00</span>
                                                                        <span class="old-price">$105.00</span>
                                                                    </div>
                                                                    <span class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                    <div class="product-action">
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <button class="addProduct" data-id="<?php echo $key['id_product'];?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                            </div>
                                                                            <div class="product-button-2">


                                                                                <a href="#" class="modal-view viewPopup" data-id="<?php echo $key['id_product'];?>" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single-Product -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product = display-1-2 -->
                                            <!-- Start Product = di3play-1-1 -->
                                            <div role="tabpanel" class="tab-pane fade" id="display-1-3">
                                                <div class="row">
                                                    <div class="active-product-carosel">
                                                        <!-- Start Single-Product -->
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <div class="label_new">
                                                                    <span class="new">new</span>
                                                                </div>
                                                                <div class="sale-off">
                                                                    <span class="sale-percent">-55%</span>
                                                                </div>
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-img" src="/views/img/product/mediam/1.jpg" alt="Product">
                                                                        <img class="secondary-img" src="/views/img/product/mediam/1bg.jpg" alt="Product">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><a href="#">Trid Palm</a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price">$99.00</span>
                                                                        <span class="old-price">$120.00</span>
                                                                    </div>
                                                                    <span class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                    <div class="product-action">
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <button class="addProduct" data-id="<?php echo $key['id_product'];?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                            </div>
                                                                            <div class="product-button-2">


                                                                                <a href="#" class="modal-view viewPopup" data-id="<?php echo $key['id_product'];?>" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single-Product -->
                                                        <!-- Start Single-Product -->
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <div class="label_new">
                                                                    <span class="new">new</span>
                                                                </div>
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-img" src="/views/img/product/mediam/2.jpg" alt="Product">
                                                                        <img class="secondary-img" src="/views/img/product/mediam/2bg.jpg" alt="Product">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><a href="#">Established Fact</a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price">$85.00</span>
                                                                        <span class="old-price">$110.00</span>
                                                                    </div>
                                                                    <span class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                    <div class="product-action">
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <button class="addProduct" data-id="<?php echo $key['id_product'];?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                            </div>
                                                                            <div class="product-button-2">


                                                                                <a href="#" class="modal-view viewPopup" data-id="<?php echo $key['id_product'];?>" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single-Product -->
                                                        <!-- Start Single-Product -->
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-img" src="/views/img/product/mediam/3.jpg" alt="Product">
                                                                        <img class="secondary-img" src="/views/img/product/mediam/3bg.jpg" alt="Product">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><a href="#">Various Versions</a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price">$90.00</span>
                                                                        <span class="old-price">$120.00</span>
                                                                    </div>
                                                                    <span class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                    <div class="product-action">
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <button class="addProduct" data-id="<?php echo $key['id_product'];?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                            </div>
                                                                            <div class="product-button-2">


                                                                                <a href="#" class="modal-view viewPopup" data-id="<?php echo $key['id_product'];?>" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single-Product -->
                                                        <!-- Start Single-Product -->
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-img" src="/views/img/product/mediam/4.jpg" alt="Product">
                                                                        <img class="secondary-img" src="/views/img/product/mediam/4bg.jpg" alt="Product">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><a href="#">Established Fact</a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price">$85.00</span>
                                                                        <span class="old-price">$105.00</span>
                                                                    </div>
                                                                    <span class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                    <div class="product-action">
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <button class="addProduct" data-id="<?php echo $key['id_product'];?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                            </div>
                                                                            <div class="product-button-2">


                                                                                <a href="#" class="modal-view viewPopup" data-id="<?php echo $key['id_product'];?>" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single-Product -->
                                                        <!-- Start Single-Product -->
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <div class="sale-off">
                                                                    <span class="sale-percent">-20%</span>
                                                                </div>
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-img" src="/views/img/product/mediam/5.jpg" alt="Product">
                                                                        <img class="secondary-img" src="/views/img/product/mediam/3bg.jpg" alt="Product">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><a href="#">Trid Palm</a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price">$99.00</span>
                                                                        <span class="old-price">$120.00</span>
                                                                    </div>
                                                                    <span class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                    <div class="product-action">
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <button class="addProduct" data-id="<?php echo $key['id_product'];?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                            </div>
                                                                            <div class="product-button-2">


                                                                                <a href="#" class="modal-view viewPopup" data-id="<?php echo $key['id_product'];?>" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single-Product -->
                                                        <!-- Start Single-Product -->
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <div class="sale-off">
                                                                    <span class="sale-percent">-25%</span>
                                                                </div>
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-img" src="/views/img/product/mediam/6.jpg" alt="Product">
                                                                        <img class="secondary-img" src="/views/img/product/mediam/4bg.jpg" alt="Product">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><a href="#">Established Fact</a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price">$85.00</span>
                                                                        <span class="old-price">$110.00</span>
                                                                    </div>
                                                                    <span class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                    <div class="product-action">
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <button class="addProduct" data-id="<?php echo $key['id_product'];?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                            </div>
                                                                            <div class="product-button-2">


                                                                                <a href="#" class="modal-view viewPopup" data-id="<?php echo $key['id_product'];?>" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single-Product -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product = display-1-3 -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product -->
                        </div>
                        <!-- END PRODUCT-AREA (1) -->
                        <!-- START PRODUCT-AREA (2) -->
                        <div class="product-area">
                            <!-- Start Product-Menu -->
                            <div class="row">
                                <div class="col-xs-12 col-md-12">
                                    <div class="product-menu  border-red">
                                        <div class="product-title">
                                            <h3 class="title-group-2 gfont-1">Discounts</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product-Menu -->
                            <!-- Start Product -->
                            <div class="row">
                                <div class="col-xs-12 col-md-12">
                                    <div class="product carosel-navigation">
                                        <div class="tab-content">
                                            <!-- Start Product = display-2-1 -->
                                            <div role="tabpanel" class="tab-pane fade in active" id="display-2-1">
                                                <div class="row">
                                                    <div class="active-product-carosel">
                                                        <!-- Start Single-Product -->
                                                        
                                                        
                                                        <?php foreach ($Products as $key):  ?>
                                                        <?php if($key['discount']!=0): ?>
                                                        <div class="col-xs-12">
                                                            <div class="single-product">                                           
                                                                <div class="sale-off">
                                                                    <span class="sale-percent">-<?php echo $key['discount'];   ?>%</span>
                                                                </div>
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-img" src="<?php echo $key['product_photo'];   ?>" alt="<?php echo $key['product_name'];   ?>">
                                                                        <img class="secondary-img" src="<?php echo $key['second_photo'];   ?>" alt="<?php echo $key['product_name'];   ?>">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><a href="#"><?php echo $key['product_name'];   ?></a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price">$<?php echo $key['price'];   ?></span>
                                                                        <span class="old-price">
                                                                        <?php if ($key['old_price'] != 0): ?>
                                                                        $<?php echo $key['old_price'];   ?>
                                                                        <?php endif;  ?>
                                                                        </span>
                                                                    </div>
                                                                    <span class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                    <div class="product-action">
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <button class="addProduct" data-id="<?php echo $key['id_product'];?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                            </div>
                                                                            <div class="product-button-2">


                                                                                <a href="#" class="modal-view viewPopup" data-id="<?php echo $key['id_product'];?>" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php endif; ?>
                                                        <?php endforeach;  ?>
               
                                                        <!-- End Single-Product -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product = display-2-1 -->
                                            <!-- Start Product = display-2-2 -->
                                            <div role="tabpanel" class="tab-pane fade" id="display-2-2">
                                                <div class="row">
                                                    <div class="active-product-carosel">
                                                        <!-- Start Single-Product -->
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <div class="label_new">
                                                                    <span class="new">new</span>
                                                                </div>
                                                                <div class="sale-off">
                                                                    <span class="sale-percent">-55%</span>
                                                                </div>
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-img" src="/views/img/product/mediam/10.jpg" alt="Product">
                                                                        <img class="secondary-img" src="/views/img/product/mediam/10bg.jpg" alt="Product">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><a href="#">Trid Palm</a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price">$99.00</span>
                                                                        <span class="old-price">$120.00</span>
                                                                    </div>
                                                                    <span class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                    <div class="product-action">
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <button class="addProduct" data-id="<?php echo $key['id_product'];?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                            </div>
                                                                            <div class="product-button-2">


                                                                                <a href="#" class="modal-view viewPopup" data-id="<?php echo $key['id_product'];?>" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single-Product -->
                                                        <!-- Start Single-Product -->
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <div class="label_new">
                                                                    <span class="new">new</span>
                                                                </div>
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-img" src="/views/img/product/mediam/10bg.jpg" alt="Product">
                                                                        <img class="secondary-img" src="/views/img/product/mediam/2bg.jpg" alt="Product">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><a href="#">Established Fact</a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price">$85.00</span>
                                                                        <span class="old-price">$110.00</span>
                                                                    </div>
                                                                    <span class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                    <div class="product-action">
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <button class="addProduct" data-id="<?php echo $key['id_product'];?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                            </div>
                                                                            <div class="product-button-2">


                                                                                <a href="#" class="modal-view viewPopup" data-id="<?php echo $key['id_product'];?>" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single-Product -->
                                                        <!-- Start Single-Product -->
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-img" src="/views/img/product/mediam/13.jpg" alt="Product">
                                                                        <img class="secondary-img" src="/views/img/product/mediam/3bg.jpg" alt="Product">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><a href="#">Various Versions</a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price">$90.00</span>
                                                                        <span class="old-price">$120.00</span>
                                                                    </div>
                                                                    <span class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                    <div class="product-action">
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <button class="addProduct" data-id="<?php echo $key['id_product'];?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                            </div>
                                                                            <div class="product-button-2">


                                                                                <a href="#" class="modal-view viewPopup" data-id="<?php echo $key['id_product'];?>" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single-Product -->
                                                        <!-- Start Single-Product -->
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-img" src="/views/img/product/mediam/10bg.jpg" alt="Product">
                                                                        <img class="secondary-img" src="/views/img/product/mediam/4bg.jpg" alt="Product">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><a href="#">Established Fact</a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price">$85.00</span>
                                                                        <span class="old-price">$105.00</span>
                                                                    </div>
                                                                    <span class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                    <div class="product-action">
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <button class="addProduct" data-id="<?php echo $key['id_product'];?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                            </div>
                                                                            <div class="product-button-2">


                                                                                <a href="#" class="modal-view viewPopup" data-id="<?php echo $key['id_product'];?>" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single-Product -->
                                                        <!-- Start Single-Product -->
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <div class="sale-off">
                                                                    <span class="sale-percent">-20%</span>
                                                                </div>
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-img" src="/views/img/product/mediam/5.jpg" alt="Product">
                                                                        <img class="secondary-img" src="/views/img/product/mediam/3bg.jpg" alt="Product">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><a href="#">Trid Palm</a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price">$99.00</span>
                                                                        <span class="old-price">$120.00</span>
                                                                    </div>
                                                                    <span class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                    <div class="product-action">
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <button class="addProduct" data-id="<?php echo $key['id_product'];?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                            </div>
                                                                            <div class="product-button-2">


                                                                                <a href="#" class="modal-view viewPopup" data-id="<?php echo $key['id_product'];?>" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single-Product -->
                                                        <!-- Start Single-Product -->
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <div class="sale-off">
                                                                    <span class="sale-percent">-25%</span>
                                                                </div>
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-img" src="/views/img/product/mediam/6.jpg" alt="Product">
                                                                        <img class="secondary-img" src="/views/img/product/mediam/4bg.jpg" alt="Product">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><a href="#">Established Fact</a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price">$85.00</span>
                                                                        <span class="old-price">$110.00</span>
                                                                    </div>
                                                                    <span class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                    <div class="product-action">
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <button class="addProduct" data-id="<?php echo $key['id_product'];?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                            </div>
                                                                            <div class="product-button-2">


                                                                                <a href="#" class="modal-view viewPopup" data-id="<?php echo $key['id_product'];?>" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single-Product -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product = display-2-2 -->
                                            <!-- Start Product = display-2-3 -->
                                            <div role="tabpanel" class="tab-pane fade" id="display-2-3">
                                                <div class="row">
                                                    <div class="active-product-carosel">
                                                        <!-- Start Single-Product -->
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <div class="label_new">
                                                                    <span class="new">new</span>
                                                                </div>
                                                                <div class="sale-off">
                                                                    <span class="sale-percent">-55%</span>
                                                                </div>
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-img" src="/views/img/product/mediam/13.jpg" alt="Product">
                                                                        <img class="secondary-img" src="/views/img/product/mediam/10bg.jpg" alt="Product">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><a href="#">Various Versions</a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price">$90.00</span>
                                                                        <span class="old-price">$120.00</span>
                                                                    </div>
                                                                    <span class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                    <div class="product-action">
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <button class="addProduct" data-id="<?php echo $key['id_product'];?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                            </div>
                                                                            <div class="product-button-2">


                                                                                <a href="#" class="modal-view viewPopup" data-id="<?php echo $key['id_product'];?>" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single-Product -->
                                                        <!-- Start Single-Product -->
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <div class="label_new">
                                                                    <span class="new">new</span>
                                                                </div>
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-img" src="/views/img/product/mediam/10.jpg" alt="Product">
                                                                        <img class="secondary-img" src="/views/img/product/mediam/2bg.jpg" alt="Product">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><a href="#">Established Fact</a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price">$85.00</span>
                                                                        <span class="old-price">$105.00</span>
                                                                    </div>
                                                                    <span class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                    <div class="product-action">
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <button class="addProduct" data-id="<?php echo $key['id_product'];?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                            </div>
                                                                            <div class="product-button-2">


                                                                                <a href="#" class="modal-view viewPopup" data-id="<?php echo $key['id_product'];?>" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single-Product -->
                                                        <!-- Start Single-Product -->
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-img" src="/views/img/product/mediam/10bg.jpg" alt="Product">
                                                                        <img class="secondary-img" src="/views/img/product/mediam/3bg.jpg" alt="Product">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><a href="#">Trid Palm</a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price">$99.00</span>
                                                                        <span class="old-price">$120.00</span>
                                                                    </div>
                                                                    <span class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                    <div class="product-action">
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <button class="addProduct" data-id="<?php echo $key['id_product'];?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                            </div>
                                                                            <div class="product-button-2">


                                                                                <a href="#" class="modal-view viewPopup" data-id="<?php echo $key['id_product'];?>" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single-Product -->
                                                        <!-- Start Single-Product -->
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-img" src="/views/img/product/mediam/13.jpg" alt="Product">
                                                                        <img class="secondary-img" src="/views/img/product/mediam/4bg.jpg" alt="Product">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><a href="#">Established Fact</a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price">$85.00</span>
                                                                        <span class="old-price">$110.00</span>
                                                                    </div>
                                                                    <span class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                    <div class="product-action">
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <button class="addProduct" data-id="<?php echo $key['id_product'];?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                            </div>
                                                                            <div class="product-button-2">


                                                                                <a href="#" class="modal-view viewPopup" data-id="<?php echo $key['id_product'];?>" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single-Product -->
                                                        <!-- Start Single-Product -->
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <div class="sale-off">
                                                                    <span class="sale-percent">-20%</span>
                                                                </div>
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-img" src="/views/img/product/mediam/10.jpg" alt="Product">
                                                                        <img class="secondary-img" src="/views/img/product/mediam/3bg.jpg" alt="Product">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><a href="#">Various Versions</a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price">$90.00</span>
                                                                        <span class="old-price">$120.00</span>
                                                                    </div>
                                                                    <span class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                    <div class="product-action">
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <button class="addProduct" data-id="<?php echo $key['id_product'];?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                            </div>
                                                                            <div class="product-button-2">


                                                                                <a href="#" class="modal-view viewPopup" data-id="<?php echo $key['id_product'];?>" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single-Product -->
                                                        <!-- Start Single-Product -->
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <div class="sale-off">
                                                                    <span class="sale-percent">-25%</span>
                                                                </div>
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-img" src="/views/img/product/mediam/13.jpg" alt="Product">
                                                                        <img class="secondary-img" src="/views/img/product/mediam/4bg.jpg" alt="Product">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><a href="#">Established Fact</a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price">$85.00</span>
                                                                        <span class="old-price">$105.00</span>
                                                                    </div>
                                                                    <span class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                    <div class="product-action">
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <button class="addProduct" data-id="<?php echo $key['id_product'];?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                            </div>
                                                                            <div class="product-button-2">


                                                                                <a href="#" class="modal-view viewPopup" data-id="<?php echo $key['id_product'];?>" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single-Product -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product = display-2-3 -->
                                            <!-- Start Product = display-2-4 -->
                                            <div role="tabpanel" class="tab-pane fade" id="display-2-4">
                                                <div class="row">
                                                    <div class="active-product-carosel">
                                                        <!-- Start Single-Product -->
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <div class="label_new">
                                                                    <span class="new">new</span>
                                                                </div>
                                                                <div class="sale-off">
                                                                    <span class="sale-percent">-55%</span>
                                                                </div>
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-img" src="/views/img/product/mediam/10.jpg" alt="Product">
                                                                        <img class="secondary-img" src="/views/img/product/mediam/13.jpg" alt="Product">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><a href="#">Trid Palm</a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price">$99.00</span>
                                                                        <span class="old-price">$120.00</span>
                                                                    </div>
                                                                    <span class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                    <div class="product-action">
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <button class="addProduct" data-id="<?php echo $key['id_product'];?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                            </div>
                                                                            <div class="product-button-2">


                                                                                <a href="#" class="modal-view viewPopup" data-id="<?php echo $key['id_product'];?>" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single-Product -->
                                                        <!-- Start Single-Product -->
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <div class="label_new">
                                                                    <span class="new">new</span>
                                                                </div>
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-img" src="/views/img/product/mediam/10bg.jpg" alt="Product">
                                                                        <img class="secondary-img" src="/views/img/product/mediam/2bg.jpg" alt="Product">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><a href="#">Established Fact</a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price">$85.00</span>
                                                                        <span class="old-price">$110.00</span>
                                                                    </div>
                                                                    <span class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                    <div class="product-action">
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <button class="addProduct" data-id="<?php echo $key['id_product'];?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                            </div>
                                                                            <div class="product-button-2">


                                                                                <a href="#" class="modal-view viewPopup" data-id="<?php echo $key['id_product'];?>" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single-Product -->
                                                        <!-- Start Single-Product -->
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-img" src="/views/img/product/mediam/13.jpg" alt="Product">
                                                                        <img class="secondary-img" src="/views/img/product/mediam/3bg.jpg" alt="Product">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><a href="#">Various Versions</a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price">$90.00</span>
                                                                        <span class="old-price">$120.00</span>
                                                                    </div>
                                                                    <span class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                    <div class="product-action">
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <button class="addProduct" data-id="<?php echo $key['id_product'];?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                            </div>
                                                                            <div class="product-button-2">


                                                                                <a href="#" class="modal-view viewPopup" data-id="<?php echo $key['id_product'];?>" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single-Product -->
                                                        <!-- Start Single-Product -->
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-img" src="/views/img/product/mediam/10bg.jpg" alt="Product">
                                                                        <img class="secondary-img" src="/views/img/product/mediam/4bg.jpg" alt="Product">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><a href="#">Established Fact</a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price">$85.00</span>
                                                                        <span class="old-price">$105.00</span>
                                                                    </div>
                                                                    <span class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                    <div class="product-action">
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <button class="addProduct" data-id="<?php echo $key['id_product'];?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                            </div>
                                                                            <div class="product-button-2">


                                                                                <a href="#" class="modal-view viewPopup" data-id="<?php echo $key['id_product'];?>" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single-Product -->
                                                        <!-- Start Single-Product -->
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <div class="sale-off">
                                                                    <span class="sale-percent">-20%</span>
                                                                </div>
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-img" src="/views/img/product/mediam/5.jpg" alt="Product">
                                                                        <img class="secondary-img" src="/views/img/product/mediam/3bg.jpg" alt="Product">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><a href="#">Trid Palm</a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price">$99.00</span>
                                                                        <span class="old-price">$120.00</span>
                                                                    </div>
                                                                    <span class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                    <div class="product-action">
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <button class="addProduct" data-id="<?php echo $key['id_product'];?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                            </div>
                                                                            <div class="product-button-2">


                                                                                <a href="#" class="modal-view viewPopup" data-id="<?php echo $key['id_product'];?>" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single-Product -->
                                                        <!-- Start Single-Product -->
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <div class="sale-off">
                                                                    <span class="sale-percent">-25%</span>
                                                                </div>
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-img" src="/views/img/product/mediam/6.jpg" alt="Product">
                                                                        <img class="secondary-img" src="/views/img/product/mediam/4bg.jpg" alt="Product">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><a href="#">Established Fact</a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price">$85.00</span>
                                                                        <span class="old-price">$110.00</span>
                                                                    </div>
                                                                    <span class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                    <div class="product-action">
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <button class="addProduct" data-id="<?php echo $key['id_product'];?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                            </div>
                                                                            <div class="product-button-2">


                                                                                <a href="#" class="modal-view viewPopup" data-id="<?php echo $key['id_product'];?>" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single-Product -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product = display-2-4 -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product -->
                        </div>
                        <!-- END PRODUCT-AREA (2) -->
                        <!-- START PRODUCT-AREA (3) -->
                        <div class="product-area">
                            <div class="row">
                                <div class="col-xs-12 col-md-12">
                                    <!-- Start Product-Menu -->
                                    <div class="product-menu">
                                        <div class="product-title">
                                            <h3 class="title-group-2 gfont-1">Cheap products</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product-Menu -->
                            <!-- Start Product -->
                            <div class="row">
                                <div class="col-xs-12 col-md-12">
                                    <div class="product carosel-navigation">
                                        <div class="tab-content">
                                            <!-- Start Product = display-3-1 -->
                                            <div role="tabpanel" class="tab-pane fade in active" id="display-3-1">
                                                <div class="row">
                                                    <div class="active-product-carosel">
                                                        <!-- Start Single-Product -->
                                                        
                                                        <?php foreach ($Products as $key):  ?>
                                                        <?php if($key['price']<500):  ?>
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <?php if($key['is_new']):  ?>
                                                                <div class="label_new">
                                                                    <span class="new">new</span>
                                                                </div>
                                                                <?php endif; ?>
                                                                <?php if($key['discount']!=0):  ?>
                                                                <div class="sale-off">
                                                                    <span class="sale-percent">-35%</span>
                                                                </div>
                                                                <?php endif; ?>
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-img" src="<?php echo $key['product_photo'];   ?>" alt="<?php echo $key['product_name'];   ?>">
                                                                        <img class="secondary-img" src="<?php echo $key['second_photo'];   ?>" alt="<?php echo $key['product_name'];   ?>">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><a href="#"><?php echo $key['product_name']; ?></a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price">$<?php echo $key['price'];   ?></span>
                                                                        <span class="old-price">
                                                                        <?php if ($key['old_price'] != 0): ?>
                                                                        $<?php echo $key['old_price'];   ?>
                                                                        <?php endif;  ?>
                                                                        </span>
                                                                    </div>
                                                                    <span class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                    <div class="product-action">
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <button class="addProduct" data-id="<?php echo $key['id_product'];?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                            </div>
                                                                            <div class="product-button-2">


                                                                                <a href="#" class="modal-view viewPopup" data-id="<?php echo $key['id_product'];?>" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php endif;  ?>
                                                        <?php endforeach;  ?>
                                                        
                                                        
                                                        <!-- End Single-Product -->
                                                        <!-- Start Single-Product -->
                                                       
                                                        <!-- End Single-Product -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product = display-3-1 -->
                                            <!-- Start Product = display-3-2 -->
                                            <div role="tabpanel" class="tab-pane fade" id="display-3-2">
                                                <div class="row">
                                                    <div class="active-product-carosel">
                                                        <!-- Start Single-Product -->
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <div class="label_new">
                                                                    <span class="new">new</span>
                                                                </div>
                                                                <div class="sale-off">
                                                                    <span class="sale-percent">-55%</span>
                                                                </div>
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-img" src="/views/img/product/mediam/5.jpg" alt="Product">
                                                                        <img class="secondary-img" src="/views/img/product/mediam/6.jpg" alt="Product">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><a href="#">Trid Palm</a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price">$99.00</span>
                                                                        <span class="old-price">$120.00</span>
                                                                    </div>
                                                                    <span class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                    <div class="product-action">
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <button class="addProduct" data-id="<?php echo $key['id_product'];?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                            </div>
                                                                            <div class="product-button-2">


                                                                                <a href="#" class="modal-view viewPopup" data-id="<?php echo $key['id_product'];?>" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single-Product -->
                                                        <!-- Start Single-Product -->
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <div class="label_new">
                                                                    <span class="new">new</span>
                                                                </div>
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-img" src="/views/img/product/mediam/1.jpg" alt="Product">
                                                                        <img class="secondary-img" src="/views/img/product/mediam/1bg.jpg" alt="Product">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><a href="#">Established Fact</a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price">$85.00</span>
                                                                        <span class="old-price">$110.00</span>
                                                                    </div>
                                                                    <span class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                    <div class="product-action">
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <button class="addProduct" data-id="<?php echo $key['id_product'];?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                            </div>
                                                                            <div class="product-button-2">


                                                                                <a href="#" class="modal-view viewPopup" data-id="<?php echo $key['id_product'];?>" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single-Product -->
                                                        <!-- Start Single-Product -->
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-img" src="/views/img/product/mediam/4.jpg" alt="Product">
                                                                        <img class="secondary-img" src="/views/img/product/mediam/4bg.jpg" alt="Product">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><a href="#">Various Versions</a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price">$90.00</span>
                                                                        <span class="old-price">$120.00</span>
                                                                    </div>
                                                                    <span class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                    <div class="product-action">
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <button class="addProduct" data-id="<?php echo $key['id_product'];?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                            </div>
                                                                            <div class="product-button-2">


                                                                                <a href="#" class="modal-view viewPopup" data-id="<?php echo $key['id_product'];?>" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single-Product -->
                                                        <!-- Start Single-Product -->
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-img" src="/views/img/product/mediam/3.jpg" alt="Product">
                                                                        <img class="secondary-img" src="/views/img/product/mediam/3bg.jpg" alt="Product">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><a href="#">Established Fact</a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price">$85.00</span>
                                                                        <span class="old-price">$105.00</span>
                                                                    </div>
                                                                    <span class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                    <div class="product-action">
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <button class="addProduct" data-id="<?php echo $key['id_product'];?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                            </div>
                                                                            <div class="product-button-2">


                                                                                <a href="#" class="modal-view viewPopup" data-id="<?php echo $key['id_product'];?>" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single-Product -->
                                                        <!-- Start Single-Product -->
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <div class="sale-off">
                                                                    <span class="sale-percent">-20%</span>
                                                                </div>
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-img" src="/views/img/product/mediam/5.jpg" alt="Product">
                                                                        <img class="secondary-img" src="/views/img/product/mediam/3bg.jpg" alt="Product">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><a href="#">Trid Palm</a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price">$99.00</span>
                                                                        <span class="old-price">$120.00</span>
                                                                    </div>
                                                                    <span class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                    <div class="product-action">
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <button class="addProduct" data-id="<?php echo $key['id_product'];?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                            </div>
                                                                            <div class="product-button-2">


                                                                                <a href="#" class="modal-view viewPopup" data-id="<?php echo $key['id_product'];?>" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single-Product -->
                                                        <!-- Start Single-Product -->
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <div class="sale-off">
                                                                    <span class="sale-percent">-25%</span>
                                                                </div>
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-img" src="/views/img/product/mediam/6.jpg" alt="Product">
                                                                        <img class="secondary-img" src="/views/img/product/mediam/4bg.jpg" alt="Product">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><a href="#">Established Fact</a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price">$85.00</span>
                                                                        <span class="old-price">$110.00</span>
                                                                    </div>
                                                                    <span class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                    <div class="product-action">
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <button class="addProduct" data-id="<?php echo $key['id_product'];?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                            </div>
                                                                            <div class="product-button-2">


                                                                                <a href="#" class="modal-view viewPopup" data-id="<?php echo $key['id_product'];?>" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single-Product -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product = display-3-2 -->
                                            <!-- Start Product = display-3-3 -->
                                            <div role="tabpanel" class="tab-pane fade" id="display-3-3">
                                                <div class="row">
                                                    <div class="active-product-carosel">
                                                        <!-- Start Single-Product -->
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <div class="label_new">
                                                                    <span class="new">new</span>
                                                                </div>
                                                                <div class="sale-off">
                                                                    <span class="sale-percent">-55%</span>
                                                                </div>
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-img" src="/views/img/product/mediam/1.jpg" alt="Product">
                                                                        <img class="secondary-img" src="/views/img/product/mediam/1bg.jpg" alt="Product">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><a href="#">Various Versions</a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price">$90.00</span>
                                                                        <span class="old-price">$120.00</span>
                                                                    </div>
                                                                    <span class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                    <div class="product-action">
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <button class="addProduct" data-id="<?php echo $key['id_product'];?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                            </div>
                                                                            <div class="product-button-2">


                                                                                <a href="#" class="modal-view viewPopup" data-id="<?php echo $key['id_product'];?>" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single-Product -->
                                                        <!-- Start Single-Product -->
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <div class="label_new">
                                                                    <span class="new">new</span>
                                                                </div>
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-img" src="/views/img/product/mediam/2.jpg" alt="Product">
                                                                        <img class="secondary-img" src="/views/img/product/mediam/2bg.jpg" alt="Product">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><a href="#">Established Fact</a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price">$85.00</span>
                                                                        <span class="old-price">$105.00</span>
                                                                    </div>
                                                                    <span class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                    <div class="product-action">
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <button class="addProduct" data-id="<?php echo $key['id_product'];?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                            </div>
                                                                            <div class="product-button-2">


                                                                                <a href="#" class="modal-view viewPopup" data-id="<?php echo $key['id_product'];?>" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single-Product -->
                                                        <!-- Start Single-Product -->
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-img" src="/views/img/product/mediam/3.jpg" alt="Product">
                                                                        <img class="secondary-img" src="/views/img/product/mediam/3bg.jpg" alt="Product">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><a href="#">Trid Palm</a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price">$99.00</span>
                                                                        <span class="old-price">$120.00</span>
                                                                    </div>
                                                                    <span class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                    <div class="product-action">
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <button class="addProduct" data-id="<?php echo $key['id_product'];?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                            </div>
                                                                            <div class="product-button-2">


                                                                                <a href="#" class="modal-view viewPopup" data-id="<?php echo $key['id_product'];?>" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single-Product -->
                                                        <!-- Start Single-Product -->
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-img" src="/views/img/product/mediam/4.jpg" alt="Product">
                                                                        <img class="secondary-img" src="/views/img/product/mediam/4bg.jpg" alt="Product">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><a href="#">Established Fact</a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price">$85.00</span>
                                                                        <span class="old-price">$110.00</span>
                                                                    </div>
                                                                    <span class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                    <div class="product-action">
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <button class="addProduct" data-id="<?php echo $key['id_product'];?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                            </div>
                                                                            <div class="product-button-2">


                                                                                <a href="#" class="modal-view viewPopup" data-id="<?php echo $key['id_product'];?>" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single-Product -->
                                                        <!-- Start Single-Product -->
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <div class="sale-off">
                                                                    <span class="sale-percent">-20%</span>
                                                                </div>
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-img" src="/views/img/product/mediam/5.jpg" alt="Product">
                                                                        <img class="secondary-img" src="/views/img/product/mediam/3bg.jpg" alt="Product">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><a href="#">Various Versions</a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price">$90.00</span>
                                                                        <span class="old-price">$120.00</span>
                                                                    </div>
                                                                    <span class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                    <div class="product-action">
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <button class="addProduct" data-id="<?php echo $key['id_product'];?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                            </div>
                                                                            <div class="product-button-2">


                                                                                <a href="#" class="modal-view viewPopup" data-id="<?php echo $key['id_product'];?>" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single-Product -->
                                                        <!-- Start Single-Product -->
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <div class="sale-off">
                                                                    <span class="sale-percent">-25%</span>
                                                                </div>
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-img" src="/views/img/product/mediam/6.jpg" alt="Product">
                                                                        <img class="secondary-img" src="/views/img/product/mediam/4bg.jpg" alt="Product">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><a href="#">Established Fact</a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price">$85.00</span>
                                                                        <span class="old-price">$105.00</span>
                                                                    </div>
                                                                    <span class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                    <div class="product-action">
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <button class="addProduct" data-id="<?php echo $key['id_product'];?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                            </div>
                                                                            <div class="product-button-2">


                                                                                <a href="#" class="modal-view viewPopup" data-id="<?php echo $key['id_product'];?>" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single-Product -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product = display-3-3 -->
                                            <!-- Start Product = display-3-4 -->
                                            <div role="tabpanel" class="tab-pane fade" id="display-3-4">
                                                <div class="row">
                                                    <div class="active-product-carosel">
                                                        <!-- Start Single-Product -->
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <div class="label_new">
                                                                    <span class="new">new</span>
                                                                </div>
                                                                <div class="sale-off">
                                                                    <span class="sale-percent">-55%</span>
                                                                </div>
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-img" src="/views/img/product/mediam/1.jpg" alt="Product">
                                                                        <img class="secondary-img" src="/views/img/product/mediam/1bg.jpg" alt="Product">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><a href="#">Trid Palm</a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price">$99.00</span>
                                                                        <span class="old-price">$120.00</span>
                                                                    </div>
                                                                    <span class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                    <div class="product-action">
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <button class="addProduct" data-id="<?php echo $key['id_product'];?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                            </div>
                                                                            <div class="product-button-2">


                                                                                <a href="#" class="modal-view viewPopup" data-id="<?php echo $key['id_product'];?>" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single-Product -->
                                                        <!-- Start Single-Product -->
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <div class="label_new">
                                                                    <span class="new">new</span>
                                                                </div>
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-img" src="/views/img/product/mediam/2.jpg" alt="Product">
                                                                        <img class="secondary-img" src="/views/img/product/mediam/2bg.jpg" alt="Product">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><a href="#">Established Fact</a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price">$85.00</span>
                                                                        <span class="old-price">$110.00</span>
                                                                    </div>
                                                                    <span class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                    <div class="product-action">
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <button class="addProduct" data-id="<?php echo $key['id_product'];?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                            </div>
                                                                            <div class="product-button-2">


                                                                                <a href="#" class="modal-view viewPopup" data-id="<?php echo $key['id_product'];?>" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single-Product -->
                                                        <!-- Start Single-Product -->
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-img" src="/views/img/product/mediam/3.jpg" alt="Product">
                                                                        <img class="secondary-img" src="/views/img/product/mediam/3bg.jpg" alt="Product">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><a href="#">Various Versions</a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price">$90.00</span>
                                                                        <span class="old-price">$120.00</span>
                                                                    </div>
                                                                    <span class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                    <div class="product-action">
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <button class="addProduct" data-id="<?php echo $key['id_product'];?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                            </div>
                                                                            <div class="product-button-2">


                                                                                <a href="#" class="modal-view viewPopup" data-id="<?php echo $key['id_product'];?>" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single-Product -->
                                                        <!-- Start Single-Product -->
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-img" src="/views/img/product/mediam/4.jpg" alt="Product">
                                                                        <img class="secondary-img" src="/views/img/product/mediam/4bg.jpg" alt="Product">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><a href="#">Established Fact</a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price">$85.00</span>
                                                                        <span class="old-price">$105.00</span>
                                                                    </div>
                                                                    <span class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                    <div class="product-action">
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <button class="addProduct" data-id="<?php echo $key['id_product'];?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                            </div>
                                                                            <div class="product-button-2">


                                                                                <a href="#" class="modal-view viewPopup" data-id="<?php echo $key['id_product'];?>" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single-Product -->
                                                        <!-- Start Single-Product -->
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <div class="sale-off">
                                                                    <span class="sale-percent">-20%</span>
                                                                </div>
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-img" src="/views/img/product/mediam/5.jpg" alt="Product">
                                                                        <img class="secondary-img" src="/views/img/product/mediam/3bg.jpg" alt="Product">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><a href="#">Trid Palm</a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price">$99.00</span>
                                                                        <span class="old-price">$120.00</span>
                                                                    </div>
                                                                    <span class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                    <div class="product-action">
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <button class="addProduct" data-id="<?php echo $key['id_product'];?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                            </div>
                                                                            <div class="product-button-2">


                                                                                <a href="#" class="modal-view viewPopup" data-id="<?php echo $key['id_product'];?>" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single-Product -->
                                                        <!-- Start Single-Product -->
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <div class="sale-off">
                                                                    <span class="sale-percent">-25%</span>
                                                                </div>
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-img" src="/views/img/product/mediam/6.jpg" alt="Product">
                                                                        <img class="secondary-img" src="/views/img/product/mediam/4bg.jpg" alt="Product">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><a href="#">Established Fact</a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price">$85.00</span>
                                                                        <span class="old-price">$110.00</span>
                                                                    </div>
                                                                    <span class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                    <div class="product-action">
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <button class="addProduct" data-id="<?php echo $key['id_product'];?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                            </div>
                                                                            <div class="product-button-2">


                                                                                <a href="#" class="modal-view viewPopup" data-id="<?php echo $key['id_product'];?>" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single-Product -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product = display-3-4 -->
                                        </div>
                                    </div>
                                    <!-- End Product -->
                                </div>
                            </div>
                        </div>
                        <!-- END PRODUCT-AREA (3) -->
                        <!-- START PRODUCT-BANNER -->
                        <div class="product-banner">
                            <div class="row">
                                <div class="col-md-7 banner-box1">
                                    <div class="single-product-banner">
                                        <a href="#"><img src="/views/img/banner/5.jpg" alt="Product Banner"></a>
                                        <div class="banner-text banner-1">
                                            <h2>ApBle 4s</h2>
                                            <p>Vibrant colors beautifully designed</p>
                                            <span>$888.66</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 banner-box2">
                                    <div class="single-product-banner">
                                        <a href="#"><img src="/views/img/banner/6.jpg" alt="Product Banner"></a>
                                        <div class="banner-text banner-2">
                                            <h2>Htc <span>N8.</span></h2>
                                            <p>lumina n85</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END PRODUCT-BANNER -->
                        <!-- START  -->
                        <!-- START SMALL-PRODUCT-AREA (1) -->
                        
                        <!-- END SMALL-PRODUCT-AREA (1) -->
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
        <!-- END HOME-PAGE-CONTENT -->
        <!-- FOOTER-AREA START -->

        <?php include ROOT . '/views/layouts/footer.php'; ?>

        <!-- FOOTER-AREA END -->	
<!--         QUICKVIEW PRODUCT 
        <div id="quickview-wrapper">
             Modal 
        <?php // require_once 'modal.php';  ?>
             END Modal 
        </div>
         END QUICKVIEW PRODUCT -->



