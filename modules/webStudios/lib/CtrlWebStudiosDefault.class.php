<?php

class CtrlWebStudiosDefault extends CtrlWebStudiosBase {

  function action_default() {
    $this->d['layout'] = 'cols2';
    $portfolio = new DdItems('portfolio');
    $portfolio->cond->setLimit(40);
    $this->d['html'] = '
    <style>
    .screenshots {
    margin: 10px 0 0 20px;
    }
    .screenshots img {
    width: 133px;
    margin-right: 10px;
    margin-bottom: 10px;
    }
    </style>
    <div class="screenshots">
    ';
    foreach ($portfolio->getItems() as $v) {
      $f = UPLOAD_PATH.'/captures/'.$v['id'].'.png';
      if (!file_exists($f)) continue;
      if (filesize($f) < 100000) continue;
      $this->d['html'] .= '<img src="/'.UPLOAD_DIR.'/captures/'.$v['id'].'.png" alt="'.$v['title'].'">';
    }
    $this->d['html'] .= '</div>';
    $this->d['blocksTpl'] = 'empty';
    $this->d['tpl'] = 'htmlContent';
  }

}