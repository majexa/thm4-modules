<?php

class CtrlCommunityBlogDefault extends CtrlThemeFourDd {
  use DdCrudParamFilterCtrl;

  protected function init() {
    parent::init();
    $this->d['sectionTitle'] = 'Блоги';
  }

  protected function themeFourModule() {
    return 'communityBlog';
  }

  function action_default() {
    parent::action_default();
    $this->curUser = DbModelCore::get('users', $this->req->param(1));
    $this->d['blocksTpl'] = 'profile/block';
    $this->d['profile'] = Arr::first((new DdItems('profile'))->addF('userId', $this->curUser['id'])->getItems_nocache());
    $this->setPageTitle('Блог');
    $ddo = new DdoFour('communityBlog', 'siteItems');
    //die2($this->d['basePath']);
    $ddo->setPagePath($this->d['basePath']);
    $this->items()->cond->setOrder('dateCreate DESC');
    $this->items()->addF('userId', $this->curUser['id']);
    $this->d['html'] = $ddo->setItems($this->items()->getItems())->els();
    $this->d['pNums'] = $this->items()->pNums;
  }

}