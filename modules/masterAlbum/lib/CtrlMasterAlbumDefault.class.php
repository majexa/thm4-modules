<?php

class CtrlMasterAlbumDefault extends CtrlAuthorAlbumAbstract {

  function menuPathParamsN() {
    return 1;
  }

  protected function themeFourModule() {
    return 'masterAlbum';
  }

  protected function getStrName() {
    return 'masterAlbum';
  }

  function action_default() {
    parent::action_default();
    $this->setPageTitle('Работы');
    //die2($this->d['user']);
    $this->setPageHeadTitle($this->d['user']['name'].': работы');
    if ($this->d['user']['role'] != 'master') throw new Error404;
  }

}