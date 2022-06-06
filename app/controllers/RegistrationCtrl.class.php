<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\Validator;
use core\Messages;
use core\ParamUtils;
use core\RoleUtils;
use core\SessionUtils;
use app\forms\RegistrationForm;
use PDOException;

class RegistrationCtrl {

    private $form;

    public function __construct() {
      $this->form = new RegistrationForm();
    }

    public function getParams(){
      $this->form->ID_Uzytkownik = ParamUtils::getFromRequest("ID_Uzytkownik", true, 'id_uzBłędne wywołąnie aplikacji');
      $this->form->Imie = ParamUtils::getFromRequest("Imie", true, 'imBłędne wywołąnie aplikacji');
      $this->form->Nazwisko = ParamUtils::getFromRequest("Nazwisko", true, 'naBłędne wywołąnie aplikacji');
      $this->form->Nr_telefonu = ParamUtils::getFromRequest("Nr_telefonu", true, 'nrteBłędne wywołąnie aplikacji');
      $this->form->Miejscowosc = ParamUtils::getFromRequest("Miejscowosc", true, 'mieBłędne wywołąnie aplikacji');
      $this->form->Kod_pocztowy = ParamUtils::getFromRequest("Kod_pocztowy", true, 'kodBłędne wywołąnie aplikacji');
      $this->form->Ulica = ParamUtils::getFromRequest("Ulica", true, 'ulBłędne wywołąnie aplikacji');
      $this->form->Nr_domu = ParamUtils::getFromRequest("Nr_domu", true, 'nrdomBłędne wywołąnie aplikacji');
      $this->form->Login = ParamUtils::getFromRequest("Login", true, 'logBłędne wywołąnie aplikacji');
      $this->form->Haslo = ParamUtils::getFromRequest("Haslo", true, 'haslBłędne wywołąnie aplikacji');
      $this->form->Haslo2 = ParamUtils::getFromRequest("Haslo2", true, 'hasl2Błędne wywołąnie aplikacji');
    }




  public function validateRegistration() {

      $this->getParams();

      $v = new Validator();

      $this->form->Login = $v->validate($this->form->Login, [
      'trim' => true,
      'required' => true,
      'required_message' => 'Login jest wymagany',
      ]);

      $this->form->Haslo = $v->validate($this->form->Haslo, [
      'trim' => true,
      'required' => true,
      'required_message' => 'Hasło jest wymagane',
      ]);

      $this->form->Imie = $v->validate($this->form->Imie, [
      'trim' => true,
      'required' => true,
      'required_message' => 'Imię jest wymagane',
      'min_length' => 3,
      'max_length' => 30,
      'validator_message' => 'Imię powinno mieścić się pomiędzy 3 i 30 znakami',
      ]);

      $this->form->Nazwisko = $v->validate($this->form->Nazwisko, [
      'trim' => true,
      'required' => true,
      'required_message' => 'Nazwisko jest wymagane',
      ]);

      $this->form->Kod_pocztowy = $v->validate($this->form->Kod_pocztowy, [
      'trim' => true,
      'required' => true,
      'required_message' => 'Kod pocztowy jest wymagany',
      'int' => true,
      'validator_message' => 'Kod pocztowy powinien składać się z liczb całkowitych',
      ]);

      $this->form->Kod_pocztowy = $v->validate($this->form->Kod_pocztowy, [
      'trim' => true,
      'min_length' => 5,
      'max_length' => 5,
      'validator_message' => 'Kod pocztowy powinien składać się z pięciu liczb',
      ]);

      $this->form->Miejscowosc = $v->validate($this->form->Miejscowosc, [
      'trim' => true,
      'required' => true,
      'required_message' => 'Miejscowość jest wymagana',
      ]);

      $this->form->Ulica = $v->validate($this->form->Ulica, [
      'trim' => true,
      'required' => true,
      'required_message' => 'Ulica jest wymagana',
      ]);

      $this->form->Nr_domu = $v->validate($this->form->Nr_domu, [
      'trim' => true,
      'required' => true,
      'required_message' => 'Numer domu jest wymagany',
      ]);

      $this->form->Nr_telefonu = $v->validate($this->form->Nr_telefonu, [
      'trim' => true,
      'required' => true,
      'required_message' => 'Numer telefonu jest wymagany',
      'int' => true,
      'validator_message' => 'Numer telefonu musi się składać z liczb całkowitych',
      ]);

      if (App::getMessages()->isError())
        return false;

      if ($this->form->Login && $this->form->Haslo == "Admin"){
        Utils::addErrorMessage('Nie możesz się zarejestrować używając tego loginu i hasła');
      } else if ($this->form->Login && $this->form->Haslo == "Mod"){
        Utils::addErrorMessage('Nie możesz się zarejestrować używając tego loginu i hasła');
      }

      if (App::getMessages()->isError())
        return false;

      if($this->form->Haslo != $this->form->Haslo2){
        Utils::addErrorMessage('Hasła nie są takie same');
      }

      if (App::getMessages()->isError())
        return false;

      if (App::getDB()->has("uzytkownik", [
        "Login" => $this->form->Login,
        "Haslo" => $this->form->Haslo
      ])){
        Utils::addErrorMessage('Taki użytkownik już istnieje');
      }

        return !App::getMessages()->isError();
  }


    public function action_registry(){

      if ($this->validateRegistration()){
        try{
              App::getDB()->insert("uzytkownik", [
                "Imie" => $this->form->Imie,
                "Nazwisko" => $this->form->Nazwisko,
                "Nr_telefonu" => $this->form->Nr_telefonu,
                "Miejscowosc" => $this->form->Miejscowosc,
                "Kod_pocztowy" => $this->form->Kod_pocztowy,
                "Ulica" => $this->form->Ulica,
                "Nr_domu" => $this->form->Nr_domu,
                "Login" => $this->form->Login,
                "Haslo" => $this->form->Haslo
              ]);

              App::getDB()->insert("uzytkownik_rola", [
                "ID_Uzytkownik" => App::getDB()->id("uzytkownik"),
                "ID_Rola" => "1"
              ]);
          } catch (\PDOException $e){
              Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
              if(App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
          }
          SessionUtils::store("ID_Uzytkownik", $this->form->ID_Uzytkownik);
          //RoleUtils::addRole("User");
          App::getRouter()->redirectTo("showLogin");

        } else {
          Utils::addErrorMessage('ELSE vali BŁĄD');
          App::getSmarty()->assign('form', $this->form);
          App::getSmarty()->display("RegistrationView.tpl");
        }
    }

    public function action_NewRegistration(){
      App::getSmarty()->assign('form', $this->form);
      App::getSmarty()->display("RegistrationView.tpl");
    }
}
