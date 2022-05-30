<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;
use core\RoleUtils;
use core\SessionUtils;
use app\forms\RegistrationForm;

class LoginCtrl {
    private $form;

    public function __construct() {
      $this->form = new RegistrationForm();
    }

    public function getParams(){
      $this->form->Login = ParamUtils::getFromRequest("Login", true, 'logBłędne wywołanie aplikacji');
      $this->form->Haslo = ParamUtils::getFromRequest("Haslo", true, 'haslBłędne wywołanie aplikacji');
      $this->form->ID_Uzytkownik = App::getDB()->select("uzytkownik" , "ID_Uzytkownik" , ["Login" => $this->form->Login]);
    }

    public function validate(){

      $this->getParams();

      if (empty(trim($this->form->Login))) {
        Utils::addErrorMessage('Wprowadź login');
      }
      if (empty(trim($this->form->Haslo))) {
        Utils::addErrorMessage('Wprowadź hasło');
      }

      if (App::getMessages()->isError())
        return false;

      if($this->form->Login && $this->form->Haslo == "Admin"){
        RoleUtils::addRole("Admin");
        App::getRouter()->redirectTo("adminRoleList");
        return !App::getMessages()->isError();
      } else if ($this->form->Login && $this->form->Haslo == "Mod"){
        RoleUtils::addRole("Mod");
        return !App::getMessages()->isError();
      }

      if (!App::getDB()->has("uzytkownik", [
        "Login" => $this->form->Login,
        "Haslo" => $this->form->Haslo
      ])){
        Utils::addErrorMessage('Użytkownik nie istnieje, wymagana rejestracja');
      } else {
        RoleUtils::addRole("User");
      }

      if (App::getMessages()->isError())
        return false;

      if(!App::getDB()->has("uzytkownik_rola" , [
        "ID_Uzytkownik" => $this->form->ID_Uzytkownik
      ])){
            Utils::addErrorMessage('Użytkownik nie posiada żadnej roli, administrator musi ją dodać');
      }


      if (App::getMessages()->isError())
        return false;


      // $v = new Validator();
      //
      // $this->form->Login = $v -> validateFromRequest("Login", [
      //   'trim' => true,
      //   'required' => true,
      //   'required_message' => 'Login jest wymagany'
      // ]);
      //
      // $this->form->Haslo = $v -> validateFromRequest("Haslo", [
      //   'trim' => true,
      //   'required' => true,
      //   'required_message' => 'Hasło jest wymagane',
      // ]);

      return !App::getMessages()->isError();
    }


    public function action_login(){

      if ($this->validate()){
        SessionUtils::store("ID_Uzytkownik", $this->form->ID_Uzytkownik);
        Utils::addInfoMessage('Poprawnie zalogowano do systemu');
        App::getRouter()->redirectTo("Main_page");
      } else {
        Utils::addErrorMessage('vali Błąd logowania');
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('LoginView.tpl');
      }
    }

    public function action_logout(){
      SessionUtils::remove("ID_Uzytkownik");
      session_destroy();
      App::getRouter()->redirectTo("Main_page");
    }

    public function action_showLogin(){
      App::getSmarty()->assign('form', $this->form);
      App::getSmarty()->display('LoginView.tpl');

    }
}
