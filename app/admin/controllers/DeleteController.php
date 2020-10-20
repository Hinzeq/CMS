<?php

class DeleteController extends Controller {

    public function render() {
        
        require 'app/admin/models/DeleteModel.php';

        if($_SERVER['REQUEST_URI'] == '/admin/delete') {
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: http://localhost:8888/admin");
        }

        DeleteModel::delete();

        header("HTTP/1.1 301 Moved Permanently");
        header("Location: http://localhost:8888/admin");

    }

}