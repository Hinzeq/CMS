<?php

class LogoutController extends Controller {

    public function render() {

        session_start();
        $_SESSION['login'] = false;
        require 'app/admin/views/login.php';

    }

}