<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;
use core\RoleUtils;
use app\forms\RegistrationForm;

class UserEditCtrl {
  private $form;

  public function __construct() {
    $this->form = new RegistrationForm();
  }

}
