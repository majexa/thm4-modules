<?php

class CmsmagParser extends ArrayAccesseble {

  function __construct($pageUrl) {
    $this->pageUrl = htmlspecialchars_decode($pageUrl);
    if (!Misc::hasPrefix('http://www.cmsmagazine', $this->pageUrl)) throw new Exception('wrong');
    print CliColors::colored('URL: ', 'brown').$this->pageUrl.' '.CliColors::colored('('.get_class($this).')', 'cyan')."\n";
    $c = (new Curl())->get($this->pageUrl);
    $c = @iconv('windows-1251', 'utf-8//IGNORE', $c);
    $this->html = Ganon::strGetDom($c);
    $this->init();
  }

  protected function init() {
  }

}