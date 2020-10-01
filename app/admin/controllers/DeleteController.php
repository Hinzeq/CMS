<?php

class DeleteController extends Controller {

    public function render() {

        require $this->check_login('app/admin/views/delete_page.php');

    }

}