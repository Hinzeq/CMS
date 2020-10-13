<?php

class EditController extends Controller {

    public function render() {

        require 'app/admin/models/EditModel.php';

        $edit = EditModel::get($_GET['url']);

        if(EditModel::checkIsSet()) {
            EditModel::update();
        }

        require $this->check_login('app/admin/views/edit_page.php');

    }

}