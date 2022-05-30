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
    $this->form->ID_Uzytkownik = App::getDB()->select("uzytkownik", "ID_Uzytkownik", ["ID_Uzytkownik" => ParamUtils::getFromSession("ID_Uzytkownik")]);
    $this->form->ID_Zamowienie = ParamUtils::getFromRequest("ID_Zamowienie", true, "id_zam Błędne wywołanie aplikacji");
    $this->form->ID_Dodatek = ParamUtils::getFromRequest("ID_Dodatek", true, "id_dod Błędne wywołanie aplikacji");
    $this->form->Nazwa_dodatku = ParamUtils::getFromRequest("Nazwa_dodatku");
    //$this->form->Rodzaj = ParamUtils::getFromRequest("Rodzaj");
    $this->form->ID_Pizza = ParamUtils::getFromRequest("ID_Pizza", true, "id_pizBłędne wywołanie aplikacji");
    //$this->form->Nazwa_pizzy = ParamUtils::getFromRequest("Nazwa_pizzy", true, 'naz-pizBłędne wywołanie aplikacji');
    //$this->form->Rozmiar = ParamUtils::getFromRequest("Rozmiar", true, 'rozm-pizBłędne wywołanie aplikacji');
    $this->form->Data_zamowienia = date('Y-m-d H:i:s');
    $this->form->Cena_dostawy = 5;
    $this->form->Koszt_calkowity = 5;
  }

  public function action_showOrders(){

    try{
      $orders = App::getDB()->select("zamowienie", [
        "ID_Zamowienie",
        "Data_zamowienia",
        "Cena_dostawy",
        "Koszt_calkowity",
      ],[
        "ID_Uzytkownik" => $this->form->ID_Uzytkownik
      ]);
    } catch (\PDOException $e){
        Utils::addErrorMessage('zamWystąpił nieoczekiwany błąd podczas wyświetlenia rekordu');
        if(App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
    }


    try{
      $pizza = App::getDB()->select("pizza", [
        "Nazwa",
        "Cena",
        "Rozmiar",
      ],[
        "Nazwa" => $this->form->Nazwa_pizzy,
        "Rozmiar" => $this->form->Rozmiar
      ]);
    } catch (\PDOException $e){
        Utils::addErrorMessage('pizzWystąpił nieoczekiwany błąd podczas wyświetlenia rekordu');
        if(App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
    }

    try{
      $addition = App::getDB()->select("dodatek", [
        "Nazwa",
        "Rodzaj",
      ],[
        "Nazwa" => $this->form->Nazwa_dodatku
      ]);

    } catch (\PDOException $e){
        Utils::addErrorMessage('dodWystąpił nieoczekiwany błąd podczas wyświetlenia rekordu');
        if(App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
    }

    App::getSmarty()->assign('form', $this->form);
    App::getSmarty()->assign('orders', $this->orders);
    App::getSmarty()->assign('opizza', $this->pizza);
    App::getSmarty()->assign('ododatek', $this->addition);
    $pizz = App::getDB()->select("pizza" , "*");
    $add = App::getDB()->select("dodatek", "*");
    App::getSmarty()->assign("pizza", $pizz);
    App::getSmarty()->assign("dodatek", $add);
    App::getSmarty()->display("OrderView.tpl");
  }

  public function action_addToOrder(){
    $this->getParams();

    try{
      App::getDB()->insert("zamowienie", [
        "ID_Uzytkownik" => $this->form->ID_Uzytkownik,
        "Data_zamowienia" => $this->form->Data_zamowienia,
        "Cena_dostawy" => $this->form->Cena_dostawy,
        "Koszt_calkowity" => $this->form->Koszt_calkowity
      ]);
    } catch (\PDOException $e){
      Utils::addErrorMessage('zamWystąpił nieoczekiwany błąd podczas zapisu rekordu');
      if(App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
    }

    try{
      App::getDB()->insert("zamowienie_dodatek", [
        "ID_Zamowienie" => $this->form->ID_Zamowienie,
        "ID_Dodatek" => $this->form->ID_Dodatek
      ]);
    } catch (\PDOException $e){
        Utils::addErrorMessage('zam_dodWystąpił nieoczekiwany błąd podczas zapisu rekordu');
        if(App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
    }

    try{
      App::getDB()->insert("zamowienie_pizza", [
        "ID_Zamowienie" => $this->form->ID_Zamowienie,
        "ID_Pizza" => $this->form->ID_Pizza
      ]);
    } catch (\PDOException $e){
        Utils::addErrorMessage('zam_pizzaWystąpił nieoczekiwany błąd podczas zapisu rekordu');
        if(App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
    }


      App::getRouter()->forwardTo("showOrders");
      Utils::addInfoMessage('Dodano do zamówienia');
  }


    public function action_deleteOrder(){
      try{
        App::getDB()->delete("zamowienie", [
          "ID_Zamowienie" => $this->form->ID_Zamowienie
        ]);
      } catch (\PDOException $e){
          Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
          if(App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
      }

      App::getRouter()->redirectTo('Main_page');
    }


}
