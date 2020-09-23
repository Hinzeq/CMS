<?php

class Controller {

    function check_login($page) {

        session_start();

        if(isset($_SESSION['login']) && $_SESSION['login'] == true) {
            return $page;
        }

        else if(isset($_POST['login']) && isset($_POST['password'])) {

            if($_POST['login'] == 'admin' && $_POST['password'] == 'admin') {
                $_SESSION['login'] = true;
                return $page;
            }
            else {
                return 'app/admin/views/login.php';
            }
            
        }

        if(!isset($_SESSION['login']) || $_SESSION['login'] == false) {
            return 'app/admin/views/login.php';
        }

    }

}