<?php

class IndexController extends Controller {

    public function render() {

        require 'app/admin/models/IndexModel.php';

        $pages = IndexModel::getAll();

        require $this->check_login('app/admin/views/index.php');

    }

}