<?php

class CtrlWebStudiosUser extends CtrlWebStudiosBase {
  use DdCrudParamFilterCtrl;

  protected function id() {
    return $this->req['id'];
  }

  protected function getStrName() {
    return 'portfolio';
  }

  protected function getParamActionN() {
    return 2;
  }

  protected function init() {
    parent::init();
    $this->curUser = DbModelCore::get('users', $this->req->param(1));
    $this->d['layout'] = 'cols2';
    $this->items()->cond->addF('userId', $this->curUser['id']);
    $this->d['info'] = Arr::first((new DdItems('info'))->addF('userId', $this->curUser['id'])->getItems_nocache());
    $this->d['blocksTpl'] = 'user/user';
    $this->d['tpl'] = 'bookmarkContent';
    $this->d['bookmarks'][] = [
      'title' => 'Инфо',
      'link'  => '/user/'.$this->curUser['id']
    ];
    $this->d['bookmarks'][] = [
      'title' => 'Портфолио',
      'link'  => '/user/'.$this->curUser['id'].'/portfolio'
    ];

  }

  function action_default() {
    $this->d['bookmarks'][0]['sel'] = true;
    $this->d['contentTpl'] = 'user/info';
    $this->setPageTitle($this->d['info']['title'].': инфо');
  }

  function action_portfolio() {
    $this->d['bookmarks'][1]['sel'] = true;
    $this->d['contentTpl'] = 'user/portfolio';
    $ddo = new DdoFour('portfolio', 'siteItems');
    $this->items()->cond->setOrder('dateUpdate DESC');
    $ddo->setItems($this->items()->getItems());
    $ddo->groupFrom('title');
    $this->d['html'] = $ddo->els();
    $this->setPageTitle($this->d['info']['title'].': портфолио');
  }

}