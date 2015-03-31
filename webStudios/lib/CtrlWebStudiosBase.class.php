<?php

class CtrlWebStudiosBase extends CtrlThemeFour {

  protected function themeFourModule() {
    return 'webStudios';
  }

  protected function init() {
    parent::init();
    $this->d['menu'][] = [
      'title' => 'Студии',
      'link'  => '/portfolio'
    ];
  }

}