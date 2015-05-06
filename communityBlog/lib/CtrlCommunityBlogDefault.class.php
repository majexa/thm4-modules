<?php

class CtrlCommunityBlogDefault extends CtrlThemeFourDefault {
  use DdCrudParamFilterCtrl;

  protected function themeFourModule() {
    return 'communityBlog';
  }

  protected function init() {
    parent::init();
    $this->d['sectionTitle'] = 'Блоги';
  }

  function action_default() {
    $this->d['layout'] = 'cols2';
    $this->d['blocksTpl'] = 'empty';
    $this->d['tpl'] = 'bookmarkContent';
    $this->d['contentTpl'] = 'communityBlog/homeList';
    //$this->d['tpl'] = 'list';
    $this->d['bookmarks'] = [[
      'title' => 'Последние посты',
    ]];
    $ddo = new DdoFour($this->getStrName(), 'siteItemsHome');
    $ddo->setPagePath($this->d['basePath']);
    //$ddo->gridMode = 'tile';
    $this->d['html'] = $ddo->setItems($this->items()->getItems())->els();
    $this->d['pNums'] = $this->items()->pNums;
  }

  function action_item() {
    $this->d['layout'] = 'cols2';
    $this->d['blocksTpl'] = 'empty';
    $this->d['tpl'] = 'bookmarkContent';
    $item = $this->items()->getItem($this->req->param(1));
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