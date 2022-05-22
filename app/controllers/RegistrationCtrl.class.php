<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\Validator;
use core\Messages;
use core\ParamUtils;
use core\RoleUtils;
use app\forms\RegistrationForm;
use PDOException;

class RegistrationCtrl {

    private $form;

    public function __construct() {
      $this->form = new RegistrationForm();
    }

    public function getParams(){
      $this->form->Id_uzytkownik = ParamUtils::getFromRequest("Id_uzytkownik", true, 'idBłędne wywołąnie aplikacji');
      $this->form->Imie = ParamUtils::getFromRequest("Imie", true, 'imBłędne wywołąnie aplikacji');
      $this->form->Nazwisko = ParamUtils::getFromRequest("Nazwisko", true, 'naBłędne wywołąnie aplikacji');
      $this->form->Nr_telefonu = ParamUtils::getFromRequest("Nr_telefonu", true, 'nrteBłędne wywołąnie aplikacji');
      $this->form->Miejscowosc = ParamUtils::getFromRequest("Miejscowosc", true, 'mieBłędne wywołąnie aplikacji');
      $this->form->Kod_pocztowy = ParamUtils::getFromRequest("Kod_pocztowy", true, 'kodBłędne wywołąnie aplikacji');
      $this->form->Ulica = ParamUtils::getFromRequest("Ulica", true, 'ulBłędne wywołąnie aplikacji');
      $this->form->Nr_domu = ParamUtils::getFromRequest("Nr_domu", true, 'nrdomBłędne wywołąnie aplikacji');
      $this->form->Login = ParamUtils::getFromRequest("Login", true, 'logBłędne wywołąnie aplikacji');
      $this->form->Haslo = ParamUtils::getFromRequest("Haslo", true, 'haslBłędne wywołąnie aplikacji');
    }




  public function validateRegistration() {

      $this->getParams();

      if ($this->form->Login && $this->form->Haslo == "Admin"){
        Utils::addErrorMessage('Nie możesz się zarejestrować używając tego loginu i hasła');
      } else if ($this->form->Login && $this->form->Haslo == "Mod"){
        Utils::addErrorMessage('Nie możesz się zarejestrować używając tego loginu i hasła');
      }

      if (App::getMessages()->isError())
        return false;

      if (empty(trim($this->form->Imie))) {
        Utils::addErrorMessage('Wprowadź imię');
      }
      if (empty(trim($this->form->Nazwisko))) {
        Utils::addErrorMessage('Wprowadź nazwisko');
      }
      if (empty(trim($this->form->Nr_telefonu))) {
        Utils::addErrorMessage('Wprowadź numer telefonu');
      }
      if (empty(trim($this->form->Miejscowosc))) {
        Utils::addErrorMessage('Wprowadź miejscowość');
      }
      if (empty(trim($this->form->Kod_pocztowy))) {
        Utils::addErrorMessage('Wprowadź kod pocztowy');
      }
      if (empty(trim($this->form->Ulica))) {
        Utils::addErrorMessage('Wprowadź ulicę');
      }
      if (empty(trim($this->form->Nr_domu))) {
        Utils::addErrorMessage('Wprowadź numer domu');
      }
      if (empty(trim($this->form->Login))) {
        Utils::addErrorMessage('Wprowadź login');
      }
      if (empty(trim($this->form->Haslo))) {
        Utils::addErrorMessage('Wprowadź hasło');
      }

      if (App::getMessages()->isError())
        return false;

      // $v = new Validator();
      //
      // $this->form->Imie = $v->validate("Imie", [
      // 'trim' => true,
      // 'required' => true,
      // 'required_message' => 'Imię jest wymagane',
      // 'min_length' => 3,
      // 'max_length' => 30,
      // 'validator_message' => 'Imię powinno mieścić się pomiędzy 3 i 30 znakami',
      // ]);

        return !App::getMessages()->isError();
  }


    public function action_registry(){

      if ($this->validateRegistration()){
        try{
          //if ($this->form->Id_uzytkownik == ''){
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

            //}
          } catch (\PDOException $e){
              Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
              if(App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
          }

          RoleUtils::addRole("User");
          App::getRouter()->redirectTo("Main_page");

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
