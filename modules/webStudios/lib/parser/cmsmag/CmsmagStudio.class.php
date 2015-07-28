<?php

class CmsmagStudio extends CmsmagParser {

  static function getLogin($url) {
    return preg_replace('/.*\/creators\/([^\/]+)\/.*/', '$1', $url);
  }

  protected function init() {
    $this->r['login'] = self::getLogin($this->pageUrl);
    $url = $this->html->select('.mainInset a.red', 0);
    $this->r['url'] = $url ? $url->href : '';
    $this->r['title'] = $this->html->select('h1', 0)->getInnerText();
    if (($img = $this->html->select('.cr_logo img', 0))) $this->r['image'] = $img->src;
    $content = $this->html->select('.contentInset', 0);
    $this->r['largeText'] = $content ? $content->getInnerText() : '';
  }

}