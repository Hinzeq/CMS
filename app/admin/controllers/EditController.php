<?php

class EditController extends Controller {

    public function render() {

        require 'app/admin/models/EditModel.php';

        if($_SERVER['REQUEST_URI'] == '/admin/edit') {
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: http://localhost:8888/admin");
        }

        $edit = EditModel::get($_GET['url']);

        if(EditModel::checkIsSet()) {
            EditModel::update($_GET['url']);
        }

        require $this->check_login('app/admin/views/edit_page.php');

    }

}