<?php
class SearchController{
    public function actionSearch(){
        $totalPrice = Cart::totalPrice();
        $products=Search::search_query();
        require_once ROOT . '../views/search.php';
        return true;
    }
}