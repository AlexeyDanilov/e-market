<?php

class Account {

    public static function senduserform() {
        if (isset($_POST['submit'])) {
            if ($_POST['firstname'] != '' && $_POST['lastname'] != '' && $_POST['email'] != '' &&
                    $_POST['user_pass'] != '' && $_POST['user_pass_conf'] != '') {
                $userName = $_POST['firstname'];
                $userLastname = $_POST['lastname'];
                $userEmail = $_POST['email'];
                if ($_POST['user_pass'] == $_POST['user_pass_conf']) {
                    $userPassword = $_POST['user_pass'];
                } else {
                    $userPassword = '';
                }

                if (isset($_POST['newsletter']) && $_POST['newsletter'] == 'yes') {
                    $userNewsletter = 1;
                } else {
                    $userNewsletter = 0;
                }

                /////////////////////////////////////
                $db = Db::getConnection();

                $userInfo = $db->query("INSERT INTO user(`user_name`, `user_lastname`, `user_email`, `user_password`, `newsletter`) "
                        . "VALUES('$userName','$userLastname','$userEmail','$userPassword',$userNewsletter);");

                $registrationDate = array();  // массив для хранения логина и пароля
                array_push($registrationDate, $userEmail, $userPassword);
                $_SESSION['user'] = $registrationDate;


                return $userInfo;
            } 
            else {
                return 0;
            }
        }
    }

    public static function autorisation() {
        if (isset($_POST['control_submit'])) {
            if ($_POST['control_email'] != '' && $_POST['control_pass'] != '') {
                $control_email = $_POST['control_email'];
                $control_pass = $_POST['control_pass'];
                $db = Db::getConnection();
                $answer_login = array();
                $result = $db->query('SELECT `user_name`,`user_lastname`,`user_email`,`user_password`  FROM `user` WHERE `user_email`='
                        ."'".$control_email."'". ' AND `user_password`=' ."'".$control_pass."'");
                while ($row = $result->fetch()) {
                    array_push($answer_login, $row['user_email']);
                    array_push($answer_login, $row['user_password']);
                }
                $_SESSION['user']=$answer_login;
                if (!empty($answer_login)) {
                    return 'Welcome!';
                } 
                else {
                    return 'Incorrect email or parol!';
                }
            }
        }
    }

}
