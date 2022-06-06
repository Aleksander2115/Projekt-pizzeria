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
Utils::addRoute('addPizza', 'OrderCtrl');
Utils::addRoute('addAddition', 'OrderCtrl');
Utils::addRoute('showOrders', 'OrderCtrl');
Utils::addRoute('deletePizza', 'OrderCtrl');
Utils::addRoute('deleteAddition', 'OrderCtrl');
Utils::addRoute('newOrder', 'OrderCtrl');
Utils::addRoute('orderList', 'ModCtrl', ["Mod"]);
Utils::addRoute('deleteOrderMod', 'ModCtrl', ["Mod"]);
Utils::addRoute('buyPizza', 'OrderCtrl');
