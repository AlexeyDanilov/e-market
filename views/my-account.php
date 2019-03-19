

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
                            <li class="active"><a href="my-account.html">My Account</a></li>
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
                        <!-- entry-header-area start -->
                        <div class="entry-header-area">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="entry-header">
                                        <h2 class="entry-title">My Account</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- entry-header-area end -->
                        <!-- Start checkout-area -->
                        <div class="checkout-area">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- Accordion start -->
                                    <div class="panel-group" id="accordion">

                                        <!-- Start Order History And Details -->
                                        <div class="panel panel_default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-trigger collapsed" data-toggle="collapse" data-parent="#accordion" href="#checkout-confirm">Order History And Details <i class="fa fa-caret-down"></i> </a>
                                                </h4>
                                            </div>
                                            <div id="checkout-confirm" class="collapse">
                                                <div class="panel-body">
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
                                                                <?php $totalPriceStory=0;   ?>
                                                                <?php foreach ($productsStory as $key):     ?>
                                                                <tr>
                                                                    <td class="text-center">
                                                                        <a href="#"><img class="img-thumbnail" src="<?php echo $key['product_photo'];   ?>" alt="#" /></a>
                                                                    </td>
                                                                    <td class="text-left">
                                                                        <a href="#"><?php echo $key['product_name'];   ?></a>
                                                                    </td>
                                                                    <td class="text-left">
                                                                        <span><?php echo $key['quantity'];   ?></span>
                                                                    </td>
                                                                    <td class="text-right"><?php echo $key['price'];   ?></td>
                                                                    <td class="text-right"><?php echo $key['total_price'];   ?></td>
                                                                </tr>
                                                                <?php
                                                                $totalPriceStory+=$key['total_price'];
                                                                ?>
                                                                <?php endforeach;   ?>
                                                                
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                    <td class="text-right" colspan="5">
                                                                        <strong>Sub-Total:</strong>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <?php
                                                                            echo $totalPriceStory;
                                                                        ?>
                                                                    </td>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                    <!-- End Table -->
                                                    <div class="buttons pull-right">
                                                        <input type="button" class="btn btn-primary" value="Confirm Order" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Order History And Details -->
                                        <!-- Start My Address -->
                                        <div class="panel panel_default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-trigger collapsed" data-toggle="collapse" data-parent="#accordion" href="#shipping-address">My Address <i class="fa fa-caret-down"></i> </a>
                                                </h4>
                                            </div>
                                            <div id="shipping-address" class="collapse">
                                                <div class="panel-body">
                                                    <form action="#" method="POST" class="form-horizontal">
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label"><sup>*</sup>First Name</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" placeholder="First Name" name="firstname" value="<?php echo $regInfo['user_name'];  ?>" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label"><sup>*</sup>Last Name</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" placeholder="Last Name" name="lastname" value="<?php echo $regInfo['user_lastname'];  ?>" />
                                                            </div>
                                                        </div>
              
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label"><sup>*</sup>Address</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" placeholder="Address" name="address" />
                                                            </div>
                                                        </div>
                                      
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label"><sup>*</sup>City</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" placeholder="City" name="city" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label"><sup>*</sup>Post Code</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" placeholder="Post Code" name="postcode" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label"><sup>*</sup>Country</label>
                                                            <div class="col-sm-10">
                                                                <select class="form-control" name="country">
                                                                    <option value="0"> --- Please Select --- </option>
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
                                                                <select class="form-control" name="region">
                                                                    <option value="0"> --- Please Select --- </option>
                                                                    <option value="1"> Aberdeen </option>
                                                                    <option value="2"> Bedfordshire </option>
                                                                    <option value="3"> Caerphilly </option>
                                                                    <option value="4"> Denbighshire </option>
                                                                    <option value="5"> East Ayrshire </option>
                                                                    <option value="6"> Falkirk </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="buttons clearfix">
                                                            <div class="pull-right">
                                                                I have read and agree to the 
                                                                <a href="#"><b>Privacy Policy</b></a>
                                                                <input type="checkbox" name="agree" value="yes" />
                                                                <input type="submit" class="btn btn-primary" value="Save" name="sendform" />
                                                            </div>
                                                        </div>
                                                        <span class="thank"> <?php 
                                                        if(isset($sendForm)){
                                                            echo $sendForm;
                                                        }
                                                        ?></span>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End My Address -->

                                    </div>
                                    <!-- Accordion end -->
                                </div>
                            </div>
                        </div>
                        <!-- End Shopping-Cart -->

                        <!-- My-Account-Area start -->
                        <div class="my-account-area">
                            <div class="row">
                                <div class="col-md-6">

                                </div>
                            </div>
                        </div>
                        <!-- My-Account-Area end -->
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

        <!-- FOOTER-AREA END -->

        <?php include_once ROOT . '/views/layouts/footer.php'; ?>
        <!-- jquery
        ============================================ -->		

