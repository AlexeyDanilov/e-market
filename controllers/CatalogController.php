<?php

class CatalogController {

    public function actionCategory() {
        $products = array();
        $products = Catalog::getProduct();
        $category = Home::getProductCategory();
        $totalPrice=Cart::totalPrice();
        $uri = $_SERVER['REQUEST_URI']; //получаем url страницы категории
        $pageArray = explode('/', $uri); //превращаем его в массив
        $pageCategory = array_pop($pageArray); //извлекаем из массива последний элемент, он же равен номеру категории
        require_once ROOT . '../views/shop.php';
        return true;
    }

    public function actionModal($id) {
        $product = array();
        $product = Catalog::getProductById($id);
        $product=array("product_name"=>$product['product_name'],
            "product_photo"=>$product['product_photo'],
            "price"=>$product['price'],"old_price"=>$product['old_price']);
        $product_json = json_encode($product);
        echo $product_json;
        return true;
    }
}
