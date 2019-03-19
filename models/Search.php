<?php

class Search {

    public static function search_query() {
        if (isset($_POST['search_btn']) && !empty($_POST['search_query'])) {
            $search_query = $_POST['search_query'];
            $search_query_2 = "~$search_query[0]$search_query[1]$search_query[2]~i";
//            echo $search_query_2;
            $products = array();
            $products = Catalog::getProduct();
            $res = array();
            foreach ($products as $key) {
                if ($search_query == $key['product_name']) {
                    array_push($res,$key);
                    break;
                } 
                elseif (preg_match($search_query_2, $key['product_name'])) {
                    array_push($res,$key);
                }
//                else{
//                    $res= 'No results matching your search were found!';
//                }
            }
        }
        return $res;
    }

}
