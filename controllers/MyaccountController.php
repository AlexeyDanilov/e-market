<?php
class MyaccountController{
    public function actionEnter(){
        $totalPrice = Cart::totalPrice();
        $category = Home::getProductCategory();
        $sendForm=Myaccount::sendform();
        $regInfo=Myaccount::firstdate();
        $productsStory=Myaccount::cartStoryShow();

        require_once ROOT . '../views/my-account.php';   
        return true;
    }
}