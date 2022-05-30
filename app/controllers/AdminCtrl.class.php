<?php

namespace app\controllers;

use core\App;
use core\Messages;
use core\Utils;
use core\ParamUtils;
use app\forms\AdminForm;
use PDOException;

class AdminCtrl{

  private $form;
  private $records;
  private $admin_userList;

  public function __construct() {
    $this->form = new AdminForm();
  }

  public function getParams(){
    $this->form->ID_Uzytkownik = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
    $this->form->ID_Rola = App::getDB()->select("uzytkownik_rola" , "ID_Rola");
  }

  public function action_adminRoleList(){

    // $search_params = []; //przygotowanie pustej struktury (aby była dostępna nawet gdy nie będzie zawierała wierszy)
    // if (isset($this->form->ID_Rola) && count($this->form->ID_Rola) > 0) {
    //   $search_params['ID_Rola[~]'] = $this->form->ID_Rola . '%'; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
    // }
    //
    // $num_params = sizeof($search_params);
    // if ($num_params > 1) {
    //   $where = ["AND" => &$search_params];
    // } else {
    //   $where = &$search_params;
    // }
    //   //dodanie frazy sortującej po nazwisku
    // $where ["ORDER"] = "ID_Rola";

    try{
      $this->records = App::getDB()->select("uzytkownik_rola", [
        "ID_Uzytkownik",
        "ID_Rola",
      ]);
    } catch (\PDOException $e) {
        Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
        if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
    }

    //lista dla admina
    $userWithRole = App::getDB()->select("uzytkownik_rola" , "ID_Uzytkownik");

    try{
      $this->admin_userList = App::getDB()->select("uzytkownik", [
        "ID_Uzytkownik",
        "Login",
      ],[
        "ID_Uzytkownik[!]" => $userWithRole
      ]);
    } catch (\PDOException $e) {
        Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
        if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
    }


      App::getSmarty()->assign('form', $this->form); // dane formularza (wyszukiwania w tym wypadku)
      App::getSmarty()->assign('people', $this->records);
      App::getSmarty()->assign('admin_userList', $this->admin_userList);
      App::getSmarty()->display("AdminView.tpl");
  }

  public function action_adminChangeToAdmin(){
    $this->getParams();
    try{
      App::getDB()->update("uzytkownik_rola", [
        "ID_Rola" => "3"
      ],[
        "ID_Uzytkownik" => $this->form->ID_Uzytkownik
      ]);
    } catch (\PDOException $e) {
        Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
        if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
    }
    App::getRouter()->redirectTo("adminRoleList");
  }

  public function action_adminChangeToMod(){
    $this->getParams();
    try{
      App::getDB()->update("uzytkownik_rola", [
        "ID_Rola" => "2"
      ],[
        "ID_Uzytkownik" => $this->form->ID_Uzytkownik
      ]);
    } catch (\PDOException $e) {
        Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
        if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
    }
    App::getRouter()->redirectTo("adminRoleList");
  }

  public function action_adminChangeToUser(){
    $this->getParams();
    try{
      App::getDB()->update("uzytkownik_rola", [
        "ID_Rola" => "1"
      ],[
        "ID_Uzytkownik" => $this->form->ID_Uzytkownik
      ]);
    } catch (\PDOException $e) {
        Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
        if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
    }
    App::getRouter()->redirectTo("adminRoleList");
  }

  public function action_adminDelete(){
    $this->getParams();

    try{
      App::getDB()->delete("uzytkownik_rola", [
        "ID_Uzytkownik" => $this->form->ID_Uzytkownik,
      ]);
      Utils::addInfoMessage('Pomyślnie usunięto rekord');
    } catch (\PDOException $e) {
        Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
        if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
    }
    App::getRouter()->redirectTo('adminRoleList');
  }

  public function action_adminAdd(){
    $this->getParams();

    try{
      App::getDB()->insert("uzytkownik_rola", [
        "ID_Uzytkownik" => $this->form->ID_Uzytkownik,
        "ID_Rola" => "1"
      ]);
      Utils::addInfoMessage('Pomyślnie dodano rekord');
    } catch (\PDOException $e) {
        Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
        if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
    }
    App::getRouter()->redirectTo('adminRoleList');
  }


  public function action_showAdmin(){

    App::getSmarty()->assign('form', $this->form);
    App::getSmarty()->display("AdminView.tpl");
  }
}
