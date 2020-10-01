<?php

class EditController extends Controller {

    public function render() {

        require $this->check_login('app/admin/views/edit_page.php');

    }

}