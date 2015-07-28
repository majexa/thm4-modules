<?php

class FormEnter extends Form {

  function __construct() {
    parent::__construct([
      [
        'title' => 'Ник',
        'name' => 'nick'
      ]
    ], [
      'title' => 'Вход в чат',
      'submitTitle' => 'Войти'
    ]);
  }

  protected function _update(array $data) {
    $_SESSION['chatAuth'] = $data;
  }

}

class CtrlWebStudiosAsd extends CtrlThemeFour {

  function action_default() {
    $this->d['tpl'] = 'map';
    $this->d['blocksTpl'] = 'filter';
    $this->d['layout'] = 'cols2';
  }

  function action_json_login() {
    return new FormEnter;
  }

  function action_logout() {
    unset($_SESSION['chatAuth']);
    die('logout success');
  }

}