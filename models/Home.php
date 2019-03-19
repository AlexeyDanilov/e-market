<?php

class Home{
    public static function getProductCategory(){
        $db=Db::getConnection();
        $category=array();
        $result=$db->query("SELECT * FROM `Product-category` WHERE `show_category` = 1");
        $i=0;
        while($row=$result->fetch()){
            $category[$i]['id_category']=$row['id_category'];
            $category[$i]['name_category']=$row['name_category'];
            $category[$i]['show_category']=$row['show_category'];
            $i++;   
        }
        return $category;
    }
}


