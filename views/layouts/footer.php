<footer class="footer-area">
    <!-- Footer Start -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="footer-title">
                        <h5>My Account</h5>
                    </div>
                    <nav>
                        <ul class="footer-content">
                            <li><a href="my-account.html">My Account</a></li>
                            <li><a href="#">Order History</a></li>
                            <li><a href="wishlist">Wish List</a></li>
                            <li><a href="#">Search Terms</a></li>
                            <li><a href="#">Returns</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="footer-title">
                        <h5>Customer Service</h5>
                    </div>
                    <nav>
                        <ul class="footer-content">
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="#">Delivery Information</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-xs-12 hidden-sm col-md-3">
                    <div class="footer-title">
                        <h5>Payment & Shipping</h5>
                    </div>
                    <nav>
                        <ul class="footer-content">
                            <li><a href="#">Brands</a></li>
                            <li><a href="#">Gift Vouchers</a></li>
                            <li><a href="#">Affiliates</a></li>
                            <li><a href="shop-list.html">Specials</a></li>
                            <li><a href="#">Search Terms</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="footer-title">
                        <h5>Payment & Shipping</h5>
                    </div>
                    <nav>
                        <ul class="footer-content box-information">
                            <li>
                                <i class="fa fa-home"></i><span>Towerthemes, 1234 Stret Lorem, LPA States, Libero</span>
                            </li>
                            <li>
                                <i class="fa fa-envelope-o"></i><p><a href="contact.html">admin@bootexperts.com</a></p>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                <span>01234-56789</span> <br> <span> 01234-56789</span>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>				
    </div>
    <!-- Footer End -->
    <!-- Copyright-area Start -->
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright &copy; Взято с <a href="http://bayguzin.ru" target="_blank"> bayguzin.ru</a> All rights reserved.</p>
                        <div class="payment">
                            <a href="#"><img src="/views/img/payment.png" alt="Payment"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright-area End -->
</footer>

<!-- jquery
     ============================================ -->		
<script src="/views/js/jquery-1.11.3.min.js"></script>
<!-- bootstrap JS
--> <!--
        ============================================ -->		
<script src="/views/js/bootstrap.min.js"></script>
<!-- wow JS
============================================ -->		
<script src="/views/js/wow.min.js"></script>
<!-- meanmenu JS
============================================ -->		
<script src="/views/js/jquery.meanmenu.js"></script>
<!-- owl.carousel JS
============================================ -->		
<script src="/views/js/owl.carousel.min.js"></script>
<!-- scrollUp JS
============================================ -->		
<script src="/views/js/jquery.scrollUp.min.js"></script>
<!-- countdon.min JS
        ============================================ -->		
<script src="/views/js/countdon.min.js"></script>
<!-- jquery-price-slider js
        ============================================ --> 
<script src="/views/js/jquery-price-slider.js"></script>
<!-- Nivo slider js
        ============================================ --> 		
<script src="/views/js/jquery.nivo.slider.js" type="text/javascript"></script>
<!-- plugins JS
============================================ -->		
<script src="/views/js/plugins.js"></script>
<!-- main JS
============================================ -->		
<script src="/views/js/main.js"></script>
<script>
    $(document).ready(function () {
        $(".viewPopup").click(function () {
            var id = $(this).attr("data-id");
            $.post("/product/view/" + id, {}, function (data) {
//                    $("#result").html(data);
                var obj = JSON.parse(data);
                $('.pName').html(obj.product_name);
                $('.new-price').html(obj.price);
                if (obj.old_price != 0) {
                    $('.old-price').html(obj.old_price);
                } else {
                    $('.old-price').html('');
                }
                $('.pic').attr("src", obj.product_photo);
                $('.pic').attr("alt", obj.product_name);
            });
            return;
        });
    });
</script>

<script>
    $(document).ready(function () {
        $(".addProduct").click(function () {
            var id_2 = $(this).attr("data-id");
            $.post("/cart/add/" + id_2, {}, function (data) {
                $('.cart-item-number').html(data);
            });
            return false;
        });
    });
</script>

<script>
    $(document).ready(function () {
        $(".addProduct").click(function () {
            var id_2 = $(this).attr("data-id");
            $.post("/cart/price/" + id_2, {}, function (data) {
                $('.total_price').html(data);
            });
            return false;
        });
    });
</script>

<script>
    $(document).ready(function () {
        $(".remove").click(function () {
            var id_3 = $(this).attr("data-id");
            $.post("/cart/remove/" + id_3, {}, function (data) {
                $('.count' + id_3).html(data);
            });
            return false;
        });
    });
</script>   

<script>
    $(document).ready(function () {
        $(".update").click(function () {
            location.reload();
            return false;
        });
    });
</script> 
        <!-- QUICKVIEW PRODUCT -->
        <div id="quickview-wrapper">
            <!-- Modal -->
        <?php require_once ROOT.'/views/modal.php';  ?>
            <!-- END Modal -->
        </div>
        <!-- END QUICKVIEW PRODUCT -->
</body>
</html>





