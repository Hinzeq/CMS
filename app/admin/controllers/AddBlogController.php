<?php

class AddBlogController extends Controller {

    public function render() {

        require $this->check_login('app/admin/views/add_blog.php');

    }

}