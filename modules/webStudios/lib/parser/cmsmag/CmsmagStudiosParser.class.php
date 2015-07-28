<?php

class CmsmagStudiosParser extends CmsmagItemsParser {

  function start() {
    $logins = db()->col("SELECT login FROM users");
    foreach ($this->html->select('.wors_list .name a') as $v) {
      if (!Misc::hasPrefix('http://www.cmsmagazine', $v->href)) continue;
      if (in_array(CmsmagStudio::getLogin($v->href), $logins)) {
        print "skipped\n";
        continue;
      }
      $onItem = $this->onItem;
      $onItem(new CmsmagStudio($v->href));
    }
  }

}
