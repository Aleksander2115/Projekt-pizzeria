<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('Main_page'); #default action
App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('Main_page', 'Main_pageCtrl');
Utils::addRoute('registry', 'RegistrationCtrl');
Utils::addRoute('NewRegistration', 'RegistrationCtrl');
Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl');
Utils::addRoute('showLogin', 'LoginCtrl');
Utils::addRoute('adminRoleList', 'AdminCtrl');
Utils::addRoute('adminDelete', 'AdminCtrl');
Utils::addRoute('adminAdd', 'AdminCtrl');
Utils::addRoute('adminChangeToAdmin', 'AdminCtrl');
Utils::addRoute('adminChangeToMod', 'AdminCtrl');
Utils::addRoute('adminChangeToUser', 'AdminCtrl');
Utils::addRoute('addToOrder', 'OrderCtrl');
Utils::addRoute('showOrders', 'OrderCtrl');
