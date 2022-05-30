<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;


class Main_pageCtrl {

  public function action_main_page() {
    // $pizz = App::getDB()->select("pizza" , "*");
    // $add = App::getDB()->select("dodatek", "*");
    // App::getSmarty()->assign("pizza", $pizz);
    // App::getSmarty()->assign("dodatek", $add);

    App::getSmarty()->display("Main_pageView.tpl");
  }

}
