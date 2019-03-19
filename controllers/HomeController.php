<?php

class HomeController {

    public function actionIndex() {
        $category=array();
        $category=Home::getProductCategory();
        $Products=Catalog::getProduct();
        $totalPrice=Cart::totalPrice();
        require_once ROOT.'../views/index.php';
        return true;
    }
    

}
