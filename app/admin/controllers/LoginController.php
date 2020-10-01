<?php

class LoginController extends Controller {

    public function render() {

        require $this->check_login('app/admin/views/login.php');

    }

}