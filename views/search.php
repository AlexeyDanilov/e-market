<?php include ROOT . '/views/layouts/header.php' ?>

<div class="row">
                                <div class="col-xs-12 col-md-12">
                                    <div class="product carosel-navigation">
                                        <div class="tab-content">
                                            <!-- Product = display-1-1 -->
                                            <div role="tabpanel" class="tab-pane fade in active" id="display-1-1">
                                                <div class="row">
                                                    
                                                        <!-- Start Single-Product -->
                                                        <?php if(!empty($products)):     ?>
                                                        <?php foreach ($products as $key): ?>
                                                        
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
                                                        
                                                    <?php endforeach; ?>
                                                        <?php else: ?>
                                                        <span class="thank">No results matching your search were found!</span>
                                                        <?php endif; ?>
                                                        
                         
                                                        
                                                        <!-- End Single-Product -->
                                                        <!-- Start Single-Product -->
                                                     
                                                        <!-- End Single-Product -->
                                                    
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

    <?php include ROOT . '/views/layouts/footer.php'; ?>