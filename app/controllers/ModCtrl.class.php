<?php

namespace app\controllers;

use core\App;
use core\Messages;
use core\Utils;
use core\ParamUtils;
use PDOException;

class ModCtrl{

  private $form;
  private $users_orders;
  private $wholeOrder;

  public function action_orderList(){

    try{
      $this->wholeOrder = App::getDB()->select("zamowienie", "*");
    } catch (\PDOException $e) {
        Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
        if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
    }
	
	try{
      $this->users_orders = App::getDB()->select("uzytkownik", "*");
    } catch (\PDOException $e) {
        Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
        if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
    }

      App::getSmarty()->assign('users_orders', $this->users_orders);
      App::getSmarty()->assign('wholeOrder', $this->wholeOrder);
      App::getSmarty()->display("ModView.tpl");
  }

  public function action_deleteOrderMod(){

    try{
      App::getDB()->delete("zamowienie", [
        "ID_Zamowienie" => ParamUtils::getFromCleanURL(1, true, "id_zam Błędne wywołanie aplikacji")
      ]);
    } catch (\PDOException $e){
        Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
        if(App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
    }

    try{
      App::getDB()->delete("zamowienie_pizza", [
        "ID_Zamowienie" => ParamUtils::getFromCleanURL(1, true, "id_zam Błędne wywołanie aplikacji")
      ]);
    } catch (\PDOException $e){
        Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
        if(App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
    }

    try{
      App::getDB()->delete("zamowienie_dodatek", [
        "ID_Zamowienie" => ParamUtils::getFromCleanURL(1, true, "id_zam Błędne wywołanie aplikacji")
      ]);
    } catch (\PDOException $e){
        Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
        if(App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
    }

    App::getRouter()->redirectTo('orderList');
  }

  public function action_showMod(){

    App::getSmarty()->assign('form', $this->form);
    App::getSmarty()->assign('pizza_order', $this->pizza_order);
    App::getSmarty()->display("ModView.tpl");
  }
}
