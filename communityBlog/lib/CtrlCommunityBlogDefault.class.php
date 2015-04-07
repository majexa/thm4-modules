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
    $this->d['layout'] = 'cols2';
    $this->d['blocksTpl'] = 'empty';
    $this->d['tpl'] = 'bookmarkContent';
    if (!empty($this->req->params[0])) {
       $this->item($this->req->params[0]);
    } else {
       $this->lst();
    }
  }

  function lst() {
    $this->d['contentTpl'] = 'list';
    //$this->d['tpl'] = 'list';
    $this->d['bookmarks'] = [[
      'title' => 'Последние посты',
    ]];
    $ddo = new DdoFour($this->getStrName(), 'siteItems');
    //$ddo->gridMode = 'tile';
    $this->d['html'] = $ddo->setItems($this->items()->getItems())->els();
  }

  function item($id) {
    $item = $this->items()->getItem($id);
    $this->d['bookmarks'] = [
      [
        'title' => 'Назад',
        'link' => $this->d['basePath']
      ],
      [
        'title' => $item['title'],
      ]
    ];
    $this->d['contentTpl'] = 'item';
    $this->d['html'] = $item['text'];
  }

}