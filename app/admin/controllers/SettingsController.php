<?php

class SettingsController extends Controller {

    public function render() {

        require $this->check_login('app/admin/views/settings.php');

    }

}