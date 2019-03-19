<?php

class Cart {
    
    public static function countItems(){
        if(isset($_SESSION['products'])){
            $count=0;
            foreach ($_SESSION['products'] as $key=>$quantity){
                $count+=$quantity;
            }
            return $count;
        }
        else{
            return 0;
        }
    }
    

    public static function addToCart($id) {
        $id= intval($id);
        $productsInCart = array();
        if(isset($_SESSION['products'])){
          $productsInCart= $_SESSION['products']; 
        }
        
        if(array_key_exists($id, $productsInCart)){
            $productsInCart[$id]++;
        }
        else{
            $productsInCart[$id]=1;
        }
        $_SESSION['products']=$productsInCart;
        return self::countItems();
    }
    
    public static function getProductsFromCart($ids){ //получаем данные о том, какие товары д.б. в корзине
        $products=array();
        $db=Db::getConnection();
        $idstring= implode(',', $ids);
        if($idstring){
            $result=$db->query("SELECT * FROM `products` WHERE `publication`=1 AND `id_product` IN ($idstring);");

            $i=0;
            while($row=$result->fetch()){
                $products[$i]['id_product']=$row['id_product'];
                $products[$i]['product_name']=$row['product_name'];
                $products[$i]['product_photo']=$row['product_photo'];
                $products[$i]['price']=$row['price'];
                $i++;     
            }
        }
        return $products;
    }
    
    public static function cartListProducts() {
        $productsInCart = array();
        $productsInCartById=array();
        if (isset($_SESSION['products'])) {
            $productsInCart = $_SESSION['products'];//представление корзины id->кол-во товара этой позиции
            $productsInCartById=array_keys($productsInCart); // массив из id
            
        }
        return self::getProductsFromCart($productsInCartById);
    }
    
    public static function totalPrice(){
        $total=0;
        if (isset($_SESSION['products'])){
           $productsInCart = $_SESSION['products']; 
        }
        $products= self::cartListProducts();
        foreach ($products as $key) {
            foreach ($productsInCart as $productId=>$value){
                if($key['id_product']==$productId){
                    $total+=$key['price']*$value;
                }
            }
        }
        return $total;
    }


    public static function removeFromCart($id){
        if(isset($_SESSION['products'])){
            $productsInCart= $_SESSION['products'];            
        }
        unset($productsInCart[$id]);
        $_SESSION['products']=$productsInCart;     
    }
    

}
