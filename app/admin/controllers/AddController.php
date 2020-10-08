<?php

class AddController extends Controller {

    public function render() {

        require 'app/admin/models/AddModel.php';

        if(AddModel::checkIsSet()) {
            AddModel::insert();
        }

        require $this->check_login('app/admin/views/add_page.php');

    }

}