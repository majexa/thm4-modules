<?php

class CtrlVideoDefault extends CtrlThemeFourDd {

  protected function themeFourModule() {
    return 'video';
  }

//  function action_default() {
//    $this->d['tpl'] = 'bookmarkContent';
//    $this->d['contentTpl'] = 'video/list';
//    $ddo = new DdoFour($this->getStrName(), 'siteItems');
//    $ddo->setPagePath($this->d['basePath']);
//    $this->d['html'] = count($_items) ? $ddo->setItems($_items)->els() : '<div class="noItems">событий нет</div>';
//  }

}