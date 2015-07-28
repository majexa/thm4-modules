<?php

class CheckAvailabilityJob {

  static function items() {
    $items = new DdItems('portfolio');
    $items->cond->setOrder('dateUpdate DESC');
    $items->cond->addRangeFilter('dateUpdate', 0, Date::db(time() - 60 * 60 * 24));
    $items->cond->addF('processing', false);
    $items->cond->setLimit(100);
    return $items;
  }

  function __construct() {
    $casperScriptsRoot = THM_PATH.'/casper';
    $capturesFolder = UPLOAD_PATH.'/captures';
    $items = self::items();
    if (!($v = $items->getFirstItem())) {
      output("NOT FOUND");
      return;
    }
    $items->updateField($v['id'], 'processing', true);
    output('portfolio '.$v['id'].' ('.$v['title'].'): check availability');
    if ((new Curl)->getCode($v['url']) == 200) {
      output('portfolio '.$v['id'].': is available. capture');
      $file = "$capturesFolder/{$v['id']}.png";
      $start = getMicrotime();
      print `casperjs $casperScriptsRoot/capture.js {$v['url']} $file`;
      $latency = round((getMicrotime() - $start) * 1000);
      LogWriter::str('portfolio', $v['id'].': captured successfully. latency='.$latency);
      (new Image)->resizeAndSave($file, $file, 190, 190);
      $items->update($v['id'], [
        'available' => true,
        'latency'   => $latency
      ]);
    }
    else {
      LogWriter::str('portfolio', $v['id'].': is not available');
      $items->update($v['id'], ['available' => false]);
    }
    $items->updateField($v['id'], 'processing', false);
  }

}