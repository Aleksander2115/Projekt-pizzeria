<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

/**
 * HelloWorld built in Amelia - sample controller
 *
 * @author Przemysław Kudłacik
 */
class Main_pageCtrl {

    public function action_main_page() {

        App::getSmarty()->display("Main_pageView.tpl");

    }

}
