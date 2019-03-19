<?php

class Catalog{
    public static function getProduct(){
        $db=Db::getConnection();
        $products=array();
        $result=$db->query("SELECT * FROM `products` WHERE `publication`=1");
        $i=0;
        while($row=$result->fetch()){
            $products[$i]['id_product']=$row['id_product'];
            $products[$i]['id_category']=$row['id_category'];
            $products[$i]['product_name']=$row['product_name'];
            $products[$i]['product_photo']=$row['product_photo'];
            $products[$i]['second_photo']=$row['second_photo'];
            $products[$i]['price']=$row['price'];
            $products[$i]['old_price']=$row['old_price'];
            $products[$i]['publication']=$row['publication'];
            $products[$i]['is_new']=$row['is_new'];
            $products[$i]['discount']=$row['discount'];
            $i++;   
        }
        return $products;
    }
    
    public static function getProductById($id){
        $id = intval($id);
        $db=Db::getConnection();
        $result=$db->query("SELECT * FROM `products` WHERE `id_product`=$id");
        $row=$result->fetch();
        return $row;
    }
}


