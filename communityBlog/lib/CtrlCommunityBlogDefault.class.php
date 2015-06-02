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

  protected function _items() {
    return new DdItems($this->getStrName(), [
      'paginationOptions' => [
        'maxPages' => 5
      ]
    ]);
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

  function action_authors() {
    $this->d['bookmarks'] = [[
      'title' => 'Авторы',
    ]];
    $this->d['layout'] = 'cols1';
    $this->d['blocksTpl'] = 'empty';
    $this->d['tpl'] = 'bookmarkContent';
    $this->d['contentTpl'] = 'communityBlog/authors';
    $pagination = new Pagination(['n' => 100]);
    list($this->d['pNums'], $offset) = $pagination->get('dd_i_profile');
    $this->d['items'] = db()->query(<<<SQL
SELECT dd_i_profile.* FROM
  dd_i_communityBlog
LEFT JOIN dd_i_profile ON dd_i_profile.userId=dd_i_communityBlog.userId
GROUP BY userId
LIMIT $offset
SQL
);
  }

}