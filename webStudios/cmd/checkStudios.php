<?php

$im = DdCore::imSystem('info');
$curl = new Curl;
$curl->setopt(CURLOPT_CONNECTTIMEOUT, 1);
$a = 0;
$b = 0;
foreach ($im->items->getItems() as $v) {
  $available = (bool)$curl->get($v['url']);
  $im->updateField($v['id'], 'available', $available);
  $available ? $a++ : $b++;
}
print "available: $a, not available: $b\n";
