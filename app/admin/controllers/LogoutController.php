<?php

class LogoutController {

    public function render() {

        session_start();
        $_SESSION['login'] = false;
        header("HTTP/1.1 301 Moved Permanently");
        header("Location: http://localhost:8888/admin/login");

    }

}