<?php

class AccountController {

    public function actionAuthorization() {
        $totalPrice = Cart::totalPrice();
        $regUser=Account::senduserform();
        $autorisation=Account::autorisation();
        $_SESSION['autorisation']=$autorisation;



        ///////////////

        require_once ROOT . '../views/account.php';
        return true;
    }

}

?>