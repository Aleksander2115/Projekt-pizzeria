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
Utils::addRoute('adminRoleList', 'AdminCtrl', ["Admin"]);
Utils::addRoute('adminDelete', 'AdminCtrl', ["Admin"]);
Utils::addRoute('adminAdd', 'AdminCtrl', ["Admin"]);
Utils::addRoute('adminChangeToAdmin', 'AdminCtrl', ["Admin"]);
Utils::addRoute('adminChangeToMod', 'AdminCtrl', ["Admin"]);
Utils::addRoute('adminChangeToUser', 'AdminCtrl', ["Admin"]);
Utils::addRoute('addPizza', 'OrderCtrl', ["User"]);
Utils::addRoute('addAddition', 'OrderCtrl', ["User"]);
Utils::addRoute('showOrders', 'OrderCtrl', ["User"]);
Utils::addRoute('deletePizza', 'OrderCtrl', ["User"]);
Utils::addRoute('deleteAddition', 'OrderCtrl', ["User"]);
Utils::addRoute('orderList', 'ModCtrl', ["Mod"]);
Utils::addRoute('deleteOrderMod', 'ModCtrl', ["Mod"]);
Utils::addRoute('buyPizza', 'OrderCtrl', ["User"]);
