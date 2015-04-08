<?php

class CtrlCommunityBlogDefault extends CtrlThemeFourDefault {
  use DdCrudParamFilterCtrl;

  protected function themeFourModule() {
    return 'communityBlog';
  }

  protected function init() {
    parent::init();
    $this->d['sectionTitle'] = 'Блог';
  }

  function action_default() {
    $this->curUser = DbModelCore::get('users', $this->req->param(1));
    $this->d['layout'] = 'cols2';
    $this->d['blocksTpl'] = 'profile/block';
    $this->d['profile'] = Arr::first((new DdItems('profile'))->addF('userId', $this->curUser['id'])->getItems_nocache());
    $this->d['tpl'] = 'bookmarkContent';
    $this->d['contentTpl'] = 'communityBlog/list';
    $this->d['bookmarks'][] = [
      'title' => 'Блог',
    ];

    /*
        $this->d['bookmarks'][] = [
          'title' => 'Инфо',
          'link'  => '/user/'.$this->curUser['id']
        ];
        $this->d['bookmarks'][] = [
          'title' => 'Портфолио',
          'link'  => '/user/'.$this->curUser['id'].'/portfolio'
        ];
    */
    $ddo = new DdoFour('communityBlog', 'siteItems');
    $this->items()->addF('userId', $this->curUser['id']);
    $this->d['html'] = $ddo->setItems($this->items()->getItems())->els();
  }

}