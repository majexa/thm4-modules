<?php

class CtrlCommunityBlogDefault extends CtrlCommunityBlog {
  use DdCrudParamFilterCtrl;

  protected function themeFourModule() {
    return 'communityBlog';
  }

  protected function init() {
    parent::init();
    $this->d['submenu'] = $this->extendByBasePath([
      [
        'title' => 'Блоги',
        'link' => ''
      ],
      [
        'title' => 'Авторы',
        'link' => 'authors'
      ],
    ]);
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
    parent::action_default();
    $this->setPageTitle('Последние посты');
    $ddo = new DdoFour($this->getStrName(), 'siteItemsHome');
    $ddo->setPagePath($this->d['basePath']);
    $ddo->groupFrom('dateCreate');
    $this->d['html'] = '<div class="communityBlogHomeList">'.$ddo->setItems($this->items()->getItems())->els().'</div>';
    $this->d['pNums'] = $this->items()->pNums;
  }

  function action_authors() {
    $this->setPageTitle('Авторы');
    $this->d['layout'] = 'cols2';
    $this->d['blocksTpl'] = 'empty';
    $this->d['tpl'] = 'bookmarkContent';
    $this->d['contentTpl'] = 'authors';
    $pagination = new Pagination(['n' => 100]);
    list($this->d['pNums'], $offset) = $pagination->get('dd_i_profile');
    $this->d['items'] = db()->query(<<<SQL
SELECT dd_i_profile.* FROM
  dd_i_communityBlog
LEFT JOIN dd_i_profile ON dd_i_profile.userId=dd_i_communityBlog.userId
WHERE dd_i_profile.userId IS NOT NULL
GROUP BY userId
LIMIT $offset
SQL
);
    $this->d['postCounts'] = [];
    $this->d['postCounts']['week'] = DdUseful::userRecordCounts('communityBlog', strtotime('-1 week'));
    $this->d['postCounts']['day'] = DdUseful::userRecordCounts('communityBlog', strtotime('-1 day'));
    $this->d['postCounts']['hour'] = DdUseful::userRecordCounts('communityBlog', strtotime('-1 hour'));
    $this->d['items'] = DdUseful::sortItemsByUserRecordCounts($this->d['items'], $this->d['postCounts']['week']);
    $this->d['items'] = DdUseful::sortItemsByUserRecordCounts($this->d['items'], $this->d['postCounts']['day']);
  }

}