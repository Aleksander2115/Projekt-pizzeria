<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('Main_page'); #default action
App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('Main_page', 'Main_pageCtrl');
Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl');