<?php

class IndexController extends Controller {

    public function render() {

        require $this->check_login('app/admin/views/index.php');

    }

}