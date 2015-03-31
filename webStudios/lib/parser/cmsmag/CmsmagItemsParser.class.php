<?php

class CmsmagItemsParser extends CmsmagParser {

  /**
   * @var Closure
   */
  public $onItem;

  protected function init() {
    $this->onItem = function () {
    };
  }

}