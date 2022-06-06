<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;


class Main_pageCtrl {

  public function action_main_page() {
    App::getSmarty()->display("Main_pageView.tpl");
  }

}
