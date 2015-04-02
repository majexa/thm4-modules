<?php

class CtrlCommunityBlogDefault extends CtrlThemeFour {
  use DdCrudParamFilterCtrl;

  protected function themeFourModule() {
    return 'communityBlog';
  }

  protected function id() {
    return $this->req->rq('id');
  }

  protected function getStrName() {
    return 'communityBlog';
  }

  protected function getParamActionN() {
    return 0;
  }

  protected function paramFilterN() {
    return 0;
  }

  function action_default() {
    $this->d['layout'] = 'cols2';
    $this->d['blocksTpl'] = 'user/user';
    $this->d['tpl'] = 'bookmarkContent';
    $this->d['contentTpl'] = 'list';
    $this->d['bookmarks'] = [[
      'title' => 'Бложек ни головы ни ножек',
      'link'  => '#'
    ]];
    $ddo = new DdoFour($this->getStrName(), 'siteItems');
    $this->d['html'] = $ddo->setItems($this->items()->getItems())->els();
  }

}