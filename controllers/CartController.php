<?php

class CartController {

    public function actionAdd($id) {
        echo Cart::addToCart($id);
        return true;
    }

    public function actionPrice() {
        echo Cart::totalPrice();
        return true;
    }
    
    public function actionView() {
        $productListInCart = Cart::cartListProducts(); // вывод товаров в корзине
        if (isset($_SESSION['products'])){
            $productsNumberInCart=$_SESSION['products']; // id товаров в корзине
        }
        $totalPrice=0;
        $totalPrice = Cart::totalPrice();
        $category = Home::getProductCategory();
        if (isset($_POST['send'])) {
            $country = $_POST['choice_country'];
            $region = $_POST['choice_region'];
            $address = $_POST['address'];
            $userName = $_POST['user_name'];
            $userPhone = $_POST['user_phone'];

            switch ($country) {
                case 1:
                    $country = 'Bangladesh';
                    break;

                case 2:
                    $country = 'United States';
                    break;

                case 3:
                    $country = 'United Kingdom';
                    break;

                case 4:
                    $country = 'Canada';
                    break;

                case 5:
                    $country = 'Malaysia';
                    break;

                case 6:
                    $country = 'United Arab Emirates';
                    break;

                default:
                    $country = 'Not country';
                    break;
            }

            switch ($region) {
                case 1:
                    $region = 'Aberdeen';
                    break;

                case 2:
                    $region = 'Caerphilly';
                    break;

                case 3:
                    $region = 'Denbighshire';
                    break;

                case 4:
                    $region = 'Denbighshire';
                    break;

                case 5:
                    $region = 'East Ayrshire';
                    break;

                case 6:
                    $region = 'Falkirk';
                    break;

                default:
                    $region = 'Not region';
                    break;
            }

            
            $sendInfoProducts = array();
            $cart=Cart::cartListProducts();
            foreach ($cart as $key){
                foreach ($productsNumberInCart as $productCount => $value){
                    if ($key['id_product'] == $productCount){
                        array_push($sendInfoProducts, $key['product_name']);
                        array_push($sendInfoProducts, $key['price']);
                        array_push($sendInfoProducts, $value);
                        array_push($sendInfoProducts, $key['price']*$value);
                    }
                }
            }
            
            
            
            $sendInfoUser = array('country' => $country, 'region' => $region, 'address' => $address,
                'user_name' => $userName, 'user_phone' => $userPhone);
            $sendInfoUser = json_encode($sendInfoUser);
            $sendInfoProducts = json_encode($sendInfoProducts);
            $mail=mail("admin@site.com", "Order from site", $sendInfoUser, $sendInfoProducts, $totalPrice);
            Myaccount::cartStoryWrite();
            unset($_SESSION['products']);
            $productListInCart=array();
            $totalPrice=0;
        } 
        
        $regInfo=array();
        $regInfo=Myaccount::firstdate();

        require_once ROOT . '../views/cart.php';

        
        
        
        return true;
}

    public function actionRemove($id) {
        Cart::removeFromCart($id);
        return true;
    }
    

}
