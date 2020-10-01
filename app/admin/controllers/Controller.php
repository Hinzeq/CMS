<?php

class Controller {

    function check_login($page) {

        session_start();

        if(isset($_SESSION['login']) && $_SESSION['login'] == true) {

            if($_SERVER ['REQUEST_URI'] == '/admin/login') {
                header("HTTP/1.1 301 Moved Permanently");
                header("Location: http://localhost:8888/admin");
            } 
            
            else {
                return $page;
            } 

        }

        else if(isset($_POST['login']) && isset($_POST['password'])) {

            if($_POST['login'] == 'admin' && $_POST['password'] == 'admin') {
                $_SESSION['login'] = true;
                header("HTTP/1.1 301 Moved Permanently");
                header("Location: http://localhost:8888/admin");
            }

            else {
                header("HTTP/1.1 301 Moved Permanently");
                header("Location: http://localhost:8888/admin/login");
            }
            
        }

        if(!isset($_SESSION['login']) || $_SESSION['login'] == false) {

            if($_SERVER ['REQUEST_URI'] == '/admin/login') {
                return 'app/admin/views/login.php';
            } 

            else {
                header("HTTP/1.1 301 Moved Permanently");
                header("Location: http://localhost:8888/admin/login");
            }
            
        }

    }

}