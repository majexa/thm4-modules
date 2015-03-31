<?php

class CtrlCommunityBlogDefault extends CtrlThemeFour {

  protected function themeFourModule() {
    return 'communityBlog';
  }

  function action_default() {
    $this->d['layout'] = 'cols2';
    $this->d['blocksTpl'] = 'user/user';
    $this->d['tpl'] = 'bookmarkContent';
    $this->d['bookmarks'][] = [
      'title' => 'Профиль',
      'link'  => '/user/'.$this->curUser['id']
    ];
    $this->d['bookmarks'][] = [
      'title' => 'Посты',
      'link'  => '/user/'.$this->curUser['id'].'/portfolio'
    ];
    $this->d['info'] = Arr::first((new DdItems('info'))->addF('userId', $this->curUser['id'])->getItems_nocache());
  }

}