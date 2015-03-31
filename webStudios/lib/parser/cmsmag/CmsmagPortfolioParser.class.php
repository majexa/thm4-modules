<?php

class CmsmagPortfolioParser extends CmsmagItemsParser {

  function start() {
    foreach ($this->html->select('.wors_list tr') as $tr) {
      if (!($link = $tr->select('.name a', 0))) continue;
      $onItem = $this->onItem;
      $onItem([
        'title' => $link->getInnerText(),
        'url' => $link->href,
        'dateComplete' => Arr::last($tr->select('td'))->getInnerText()
      ]);
    }
  }

}