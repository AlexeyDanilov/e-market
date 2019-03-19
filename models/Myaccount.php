<?php

class Myaccount {

    public static function sendform() {
        if (isset($_POST['sendform'])) {
            if (isset($_POST['agree']) && $_POST['agree'] == 'yes' && $_POST['firstname'] != '' && $_POST['lastname'] != '' &&
                    $_POST['address'] != '' && $_POST['city'] != '' && $_POST['postcode'] != '' && $_POST['country'] != 0 &&
                    $_POST['region'] != 0) {
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $address = $_POST['address'];
                $city = $_POST['city'];
                $postcode = $_POST['postcode'];
                $country = $_POST['country'];
                $region = $_POST['region'];

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


                $db = Db::getConnection();

                $db->query("UPDATE `user` SET `address`='$address',`city`='$city',"
                        . "`postcode`='$postcode',`country`='$country',`region`='$region' "
                        . " WHERE `user_email`=" . "'" . $_SESSION['user'][0] . "';");
                return 'Data saved';
            } else {
                return 'Error!';
            }
        }
    }

    public static function firstdate() {
        $regInfo = array();
        $db = Db::getConnection();
        $result = $db->query("SELECT `user_name`,`user_lastname`,`address`,`country`, `region`  FROM `user` WHERE `user_email`=" . "'" . $_SESSION['user'][0] . "';");

        while ($row = $result->fetch()) {
            $regInfo['user_name'] = $row['user_name'];
            $regInfo['user_lastname'] = $row['user_lastname'];
            $regInfo['address'] = $row['address'];
            $regInfo['country'] = $row['country'];
            $regInfo['region'] = $row['region'];
        }
        if ($regInfo) {
            return $regInfo; // получение имени и фамилии из БД, чтобы по умолчанию прописать в форме 
        } else {
            return;
        }
    }

    public static function passw() {
        $userId = 0;
        $db = Db::getConnection();
        $result = $db->query('SELECT `user_id` FROM `user` WHERE `user_email`='
                . "'" . $_SESSION['user'][0] . "'" . ' AND `user_password`=' . "'" . $_SESSION['user'][1] . "';");

        while ($row = $result->fetch()) {
            $userId = $row['user_id'];
        }
        return $userId;
    }

    public static function cartStoryWrite() {   // запись истории корзины
        $sendInfoProducts = array();
        $cart = Cart::cartListProducts();
        $productsNumberInCart = $_SESSION['products']; // id товаров в корзине
        $i = 0;
        foreach ($cart as $key) {
            foreach ($productsNumberInCart as $productCount => $value) {
                if ($key['id_product'] == $productCount) {
                    $sendInfoProducts[$i]['product_name'] = $key['product_name'];
                    $sendInfoProducts[$i]['price'] = $key['price'];
                    $sendInfoProducts[$i]['value'] = $value;
                    $sendInfoProducts[$i]['total_price'] = $key['price'] * $value;
                    $sendInfoProducts[$i]['product_photo'] = $key['product_photo'];
                    $i++;
                }
            }
        }

        if (isset($_SESSION['user'])) {
            $userId = 0;
            $db = Db::getConnection();
            $result = $db->query('SELECT `user_id` FROM `user` WHERE `user_email`='
                    . "'" . $_SESSION['user'][0] . "'" . ' AND `user_password`=' . "'" . $_SESSION['user'][1] . "';");

            while ($row = $result->fetch()) {
                $userId = $row['user_id'];
            }

            foreach ($sendInfoProducts as $key => $value) {
                if (isset($_POST['send'])) {
                    $db->query("INSERT INTO `cart-story`(`id_user`,`product_name`,`product_photo`,`price`,`quantity`,`total_price`) "
                            . "VALUES($userId," . "'" . $value['product_name'] . "','" . $value['product_photo'] . "'," . $value['price'] . "," . $value['value']
                            . "," . $value['total_price'] . ");");
                }
            }
        }
    }
    
    public static function cartStoryShow(){
        $userId= self::passw();
        $db = Db::getConnection();
        $result = $db->query("SELECT `product_name`,`product_photo`,`quantity`,"
                . "`price`,`total_price` FROM `cart-story` WHERE `id_user`=$userId");
        $cartStoryProducts=array();
        $i=0;
        while ($row = $result->fetch()){
          $cartStoryProducts[$i]['product_name']=$row['product_name'];
          $cartStoryProducts[$i]['product_photo']=$row['product_photo'];
          $cartStoryProducts[$i]['quantity']=$row['quantity'];
          $cartStoryProducts[$i]['price']=$row['price'];
          $cartStoryProducts[$i]['total_price']=$row['total_price'];
          $i++;
        }
        return $cartStoryProducts;
    }

}
