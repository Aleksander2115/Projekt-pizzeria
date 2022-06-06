<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\Validator;
use core\Messages;
use core\ParamUtils;
use core\RoleUtils;
use core\SessionUtils;
use app\forms\OrderForm;
use PDOException;

class OrderCtrl {

  private $form;
  private $orders;
  private $pizza;
  private $addition;

  public function __construct() {
    $this->form = new OrderForm();
  }

  public function getParams(){
    $this->form->ID_Uzytkownik = SessionUtils::load("ID_Uzytkownik", true);
    $this->form->ID_Zamowienie = SessionUtils::load("ID_Zamowienie", true);
    $this->form->Nazwa_dodatku = ParamUtils::getFromRequest("Nazwa_dodatku");
    $this->form->Data_zamowienia = date('Y-m-d H:i:s');
    $this->form->Cena_dostawy = 5;
    $this->form->Koszt_calkowity = 5;
  }

  public function action_showOrders(){

    try{
      $this->orders = App::getDB()->select("zamowienie", [
        "ID_Zamowienie",
        "ID_Uzytkownik",
        "Data_zamowienia",
        "Cena_dostawy",
        "Koszt_calkowity",
      ],[
        "ID_Uzytkownik" => SessionUtils::load("ID_Uzytkownik", true),
        "Status[!]" => "1",
        "ID_Zamowienie" => SessionUtils::load("ID_Zamowienie", true)
      ]);
    } catch (\PDOException $e){
        Utils::addErrorMessage('zamWystąpił nieoczekiwany błąd podczas wyświetlenia rekordu');
        if(App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
    }

    try{
      $this->pizza = App::getDB()->select("pizza", [
        "[>]zamowienie_pizza" => ["ID_Pizza" => "ID_Pizza"]
      ],[
        "pizza.Nazwa",
        "pizza.Cena"
      ],[
        "zamowienie_pizza.ID_Zamowienie" => SessionUtils::load("ID_Zamowienie", true)
      ]);
    } catch (\PDOException $e){
        Utils::addErrorMessage('pizzWystąpił nieoczekiwany błąd podczas wyświetlenia rekordu');
        if(App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
    }

    try{
      $this->addition = App::getDB()->select("dodatek", [
        "[>]zamowienie_dodatek" => ["ID_Dodatek" => "ID_Dodatek"]
      ],[
        "dodatek.Nazwa"
      ],[
        "zamowienie_dodatek.ID_Zamowienie" => SessionUtils::load("ID_Zamowienie", true)
      ]);

    } catch (\PDOException $e){
        Utils::addErrorMessage('dodWystąpił nieoczekiwany błąd podczas wyświetlenia rekordu');
        if(App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
    }

    App::getSmarty()->assign('form', $this->form);
    App::getSmarty()->assign('orders', $this->orders);
    App::getSmarty()->assign('opizza', $this->pizza);
    App::getSmarty()->assign('ododatek', $this->addition);
    $pizzTab = App::getDB()->select("pizza" , "*");
    $addTab = App::getDB()->select("dodatek", "*");
    App::getSmarty()->assign("pizza", $pizzTab);
    App::getSmarty()->assign("dodatek", $addTab);
    App::getSmarty()->display("OrderView.tpl");
    $isOrder = App::getDB()->select("zamowienie", 'Data_zamowienia', ["Data_zamowienia" => NULL]);
    App::getSmarty()->assign("isOrder", $isOrder);
  }

  public function action_addPizza(){
    $this->getParams();

    try{
      App::getDB()->update("zamowienie", [
        "ID_Uzytkownik" => $this->form->ID_Uzytkownik,
        "Data_zamowienia" => $this->form->Data_zamowienia,
        "Cena_dostawy" => $this->form->Cena_dostawy,
        "Koszt_calkowity" => $this->form->Koszt_calkowity
      ],[
        "ID_Zamowienie" => SessionUtils::load("ID_Zamowienie", true)
      ]);
    } catch (\PDOException $e){
        Utils::addErrorMessage('zam Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
        if(App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
    }

    try{
      App::getDB()->insert("zamowienie_pizza", [
        "ID_Pizza" => ParamUtils::getFromRequest("ID_Pizza", true, "id_pizBłędne wywołanie aplikacji"),
        "ID_Zamowienie" => SessionUtils::load("ID_Zamowienie", true)
      ]);
    } catch (\PDOException $e){
        Utils::addErrorMessage('zam_pizz Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
        if(App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
    }

    Utils::addInfoMessage('Dodano do zamówienia');
    App::getRouter()->forwardTo("showOrders");
  }

  public function action_addAddition(){
    $this->getParams();
    $this->form->ID_Dodatek = ParamUtils::getFromRequest("ID_Dodatek", true, "id_dod Błędne wywołanie aplikacji");

    try{
      App::getDB()->update("zamowienie", [
        "ID_Uzytkownik" => $this->form->ID_Uzytkownik,
        "Data_zamowienia" => $this->form->Data_zamowienia,
        "Cena_dostawy" => $this->form->Cena_dostawy,
        "Koszt_calkowity" => $this->form->Koszt_calkowity
      ],[
        "ID_Zamowienie" => SessionUtils::load("ID_Zamowienie", true)
      ]);
    } catch (\PDOException $e){
        Utils::addErrorMessage('zam Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
        if(App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
    }

    try{
      App::getDB()->insert("zamowienie_dodatek", [
        "ID_Dodatek" => $this->form->ID_Dodatek,
        "ID_Zamowienie" => SessionUtils::load("ID_Zamowienie", true)
      ]);
    } catch (\PDOException $e){
        Utils::addErrorMessage('zam_dod Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
        if(App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
    }

    Utils::addInfoMessage('Dodano do zamówienia');
    App::getRouter()->forwardTo("showOrders");
  }


    public function action_deletePizza(){

      try{
        App::getDB()->delete("zamowienie_pizza", [
          "ID_Zamowienie" => ParamUtils::getFromCleanURL(1, true, "id_zam Błędne wywołanie aplikacji")
        ]);
      } catch (\PDOException $e){
          Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
          if(App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
      }

      App::getRouter()->redirectTo('showOrders');
    }

    public function action_deleteAddition(){

      try{
        App::getDB()->delete("zamowienie_dodatek", [
          "ID_Zamowienie" => ParamUtils::getFromCleanURL(1, true, "id_zam Błędne wywołanie aplikacji")
        ]);
      } catch (\PDOException $e){
          Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
          if(App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
      }

      App::getRouter()->redirectTo('showOrders');
    }

  public function action_buyPizza(){
    try{
      App::getDB()->update("zamowienie", [
        "Status" => "1"
    ],[
      "ID_Zamowienie" => SessionUtils::load("ID_Zamowienie", true)
    ]);
    } catch (\PDOException $e) {
        Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
        if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
    }

    try{
      App::getDB()->insert("zamowienie", [
        "ID_Uzytkownik" => SessionUtils::load("ID_Uzytkownik", true)
    ]);
    } catch (\PDOException $e) {
        Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
        if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
    }
    SessionUtils::store("ID_Zamowienie", App::getDB()->id("ID_Zamowienie"));

    App::getRouter()->redirectTo('showOrders');
  }
}
