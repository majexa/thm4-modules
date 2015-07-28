<?php

class CtrlWebStudiosPortfolio extends CtrlWebStudiosBase {
  use DdParamFilterCtrl;

  protected function _paramFilterItems() {
    return new DdItems('info');
  }

  function action_default() {
    $this->d['layout'] = 'cols2';
    $this->initFilterByParams();
    $info = $this->paramFilterItems();
    if (!$info->cond->filterExists('available')) {
      $info->cond->addF('available', true);
    }
    $this->d['users'] = $info->addF('isStudio', true)->getItems();
    $this->d['users'] = Arr::assoc($this->d['users'], 'userId');
    foreach (db()->query('SELECT userId, COUNT(*) AS cnt FROM dd_i_portfolio GROUP BY userId') as $v) {
      if (!isset($this->d['users'][$v['userId']])) continue;
      $this->d['users'][$v['userId']]['cnt'] = $v['cnt'];
    }
    $this->d['users'] = Arr::sortByOrderKey($this->d['users'], 'cnt', SORT_DESC);
    foreach ($this->d['users'] as &$v) {
      if ($v['md_image']) {
        $s = getimagesize(WEBROOT_PATH.$v['md_image']);
        if ($s[0] == $s[1]) $v['square'] = true;
      }
    }
    $this->d['blocksTpl'] = 'filter';
    $this->d['tpl'] = 'users';
  }

}