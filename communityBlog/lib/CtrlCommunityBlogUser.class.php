<?php

class CtrlCommunityBlogDefault extends CtrlThemeFourDefault {
  use DdCrudParamFilterCtrl;

  protected function init() {
    parent::init();
    $this->d['sectionTitle'] = 'Блоги';
  }

  protected function themeFourModule() {
    return 'communityBlog';
  }

  function action_default() {
    $this->curUser = DbModelCore::get('users', $this->req->param(1));
    $this->d['layout'] = 'cols2';
    $this->d['blocksTpl'] = 'profile/block';
    $this->d['profile'] = Arr::first((new DdItems('profile'))->addF('userId', $this->curUser['id'])->getItems_nocache());
    $this->d['tpl'] = 'bookmarkContent';
    $this->d['contentTpl'] = 'communityBlog/list';
    $this->setPageTitle('Блог');
    $ddo = new DdoFour('communityBlog', 'siteItems');
    $this->items()->cond->setOrder('dateCreate DESC');
    $this->items()->addF('userId', $this->curUser['id']);
    $this->d['html'] = $ddo->setItems($this->items()->getItems())->els();
    $this->d['pNums'] = $this->items()->pNums;
  }

}